$(document).ready(function() {
    /**
     * 更新顶部菜单样式(背景、选中)
     * 更新顶部链接地址说明(navlink)内容
     */
    $("#header .nav ul.hmenu li").click(function() {
        $("#header .nav ul.hmenu li").removeClass('navon');
        $(this).addClass("navon");
    });
    
    /**
     * 更改左侧菜单选中背景样式
     * 更新顶部链接地址说明(navlink)内容
     */
    $(".menu ul li a").live('click', function() {
        var thisa = $(this);
        $(this).parent().parent().find(".menusub").slideToggle(100,function(){
            if ($(this).css("display") == "block")
                thisa.removeClass("plus").addClass("mius");
            else
                thisa.removeClass("mius").addClass("plus");
        });
    });
    $(".menu .menusub li a").live('click', function() {
        $(".menu .menusub li a").removeClass('tabon');
        $(this).addClass('tabon');
    });

    /*添加的FORM ajax提交方法*/
    $('#addajaxform').submit(function(){
        // $("#addajaxform input:[type=submit]").attr('disabled','disabled');
        if($('#addajaxform').length>0){
            var data = $("#addajaxform").serialize();
            var url = $('#addajaxform').attr('action');
            $.post(url,data,function(data){
                alert(data.info);
                if (!data.status) {
                    location.href = location.href;
                    // $("#addajaxform input:[type=submit]").removeAttr('disabled');
                }
            }, 'json');
            return false;
        } else {
            alert('表单为空');
        }
    });
    /*添加的FORM ajax提交方法*/

    //修改资料
    if($('#modify_div').length>0){
        var delfunction = true;
        var m_d = new Div_window('modify_div');
        if ($(".upblock1").length > 0) {
            classhtml1 = $(".upblock1").html();
        }
        if ($(".upblock2").length > 0) {
            classhtml2 = $(".upblock2").html();
        }
        
        $('a[name="modify"]').click(function(event){
            var e = event;
            var that = $(this);
            var thattd = $(this).parent().parent().find('li');
            var param_array = [
            {targetname:'id', val:that.attr('id'), type:'text'},
            {targetname:'title', val:that.attr('title'), type:'text'},
            {targetname:'remark', val:that.attr('remark'), type:'text'},
            {targetname:'control', val:that.attr('control'), type:'text'},
            {targetname:'action', val:that.attr('action'), type:'text'},
            {targetname:'groupid', val:that.attr('groupid'), type:'select'},
            {targetname:'pid', val:that.attr('pid'), type:'select'},
            {targetname:'isshow', val:that.attr('isshow'), type:'radio'}
            ];
            if (that.attr('type')) {
                var upblockval = that.attr('upblock');
                $("input[name=upblock]").each(function (){
                    if ($(this).val() == upblockval) $(this).attr("checked","checked");
                });
                if (upblockval == 1 && $(".upblock2").length > 0) {
                    $(".upblock1").html(classhtml1).css('display','block');
                    $(".upblock2").html('').css('display','none');
                }
                if (upblockval == 2 && $(".upblock1").length > 0) {
                    $(".upblock2").html(classhtml2).css('display','block');
                    $(".upblock1").html('').css('display','none');
                }
            }
            m_d.insertvalue(param_array).open(e);
        });
        
        $('#modify_div_close').click(function(){
            m_d.close();
        });
        
        $('a[name="del"]').click(function(){
            m_d.close();
            ullilist.delajax($(this));
        });
        
        $('#modify_div_form').submit(function(){
            m_d.formsubmit($(this).attr('action'), function(data){
                //var data = $.parseJSON(data);
                alert(data.info);
                if (!data.status) {
                    m_d.close();
                    var locat = $("a[name=modify]").attr('location');
                    if (locat) location.href = locat;
                    else location.href = location.href;
                    
                };
            });
            return false;
        });

        $('a[name=reset]').click(function (){
            $.post($(this).attr('reseturl'), {userid:$(this).attr('mcid'),action:'reset'},function (data){
                alert(data.errormsg);
            },'json');
        });
    }
    //修改资料

    ullilist={};
    //数据表格操作
    /*删除按钮绑定*/
    ullilist.alertres = function(data){
        alert(data.info);
        if(!data.status){
            location.href = location.href;
        }
    }

    ullilist.delajax = function(that){
        if (that.attr('channel_use')){
            var d = {
                delid: that.attr('delid')
            };
            $.post(that.attr('delurl'), d, function(data){
                if (data.status){
                    alert(data.info);
                    return false;
                } else {
                    ullilist.opertefunction(that);
                };
            }, 'json');
        } else {
            ullilist.opertefunction(that);
        }
        
                    
    }
    /*删除按钮绑定*/
    
    /*删除按钮方法*/
    ullilist.opertefunction = function(that){
        if (that.attr('isdel')){
            var msg = "确定恢复吗？";
        } else if (that.attr('ischeck')){
            var msg = "确定通过吗？";
        } else {
            var msg = "确定删除吗？";
        }
        if (that.attr('msg')) var msg = that.attr('msg');
        if(confirm(msg)){
            var d = {delid:that.attr('delid'), action:'del',delname:that.attr('delname')};
            if(that.attr('a')) d.a = that.attr('a');
            if(that.attr('m')) d.m = that.attr('m');
            $.post(that.attr('delurl'), d, function(data){
                if(ullilist.alertres(data)){
                    that.parent().parent().hide();
                };          
            }, 'json'); 
        };      
    }
    /*删除按钮方法*/
    
    if (!delfunction) {
        $('a[name="del"]').click(function(){
            ullilist.delajax($(this));
        });
    }
});