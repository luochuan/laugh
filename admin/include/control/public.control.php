<?php
/**
 * 公共模块
 * by laucen 2012-8-7
 */
class PublicControl extends CommonControl
{
    static protected $_control = 'Public';

	public function __construct()
    {
        parent::__construct();

        //$this->_system_model = N('System');
    }

    /**
     * 主入口
     */
    public function index()
    {

    }

    private function _getGroupid()
    {
        $groupid = isset($_REQUEST['groupid']) ? $_REQUEST['groupid'] : 0;

        return $groupid;
    }

    /**
     * head页
     */
    public function head()
    {
        $this->display('public/head.html');
    }

    /**
     * 菜单
     */
    public function menu()
    {
        $groupid = $this->_getGroupid();
        $this->assign("groupid", $groupid);

        $menu = $this->getGroup($groupid);
        if (is_array($menu) && !empty($menu)) {
            $this->assign('menu',$menu['cnode']);
            $html = $this->fetch('public/menu.html');
        } else {
            $html = $this->fetch('public/menu_index.html');
        }

        $this->ajaxReturn(0,'OK',$html);
    }

    /**
     * 欢迎页
     */
    public function welcome()
    {
    	$this->display('public/welcome.html');
    }

    //获取组信息
    private function getGroup($groupid=null)
    {
        foreach ($this->userAccess as $v) {
            if ($v['id'] == $groupid) return $v;
        }
    }
}