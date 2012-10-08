<?php
/**
 * assign方法 注册全局变量 模板解析用
 * @param $key 全局数组 键值
 * @param $value 全局数组 数据值
 * @return null
 */
function assign($key, $value)
{
	global $data;

	$data[$key] = $value;
}

/**
 * 获取N位随机字符串
 * 字符串取值0-9 a-z之间
 * @param $n 要获取的随机字符串长度(1-100) 默认值6
 */
function getRandStrs($n = 6)
{   
    $return = '';
	$totalStr = '0123456789abcdefghijklmnopqrstuvwxyz';
    
    $n = preg_match('/^[1-9][0-9]{0,1}$/', $n)?$n:0;
    
    for ($i= 0; $i< $n; $i++) {
        $return .= $totalStr{rand(0,35)};
    }

	return $return;
}

/**
 * 获取格式化之后的时间 
 * type = d 返回日期
 * type = t 返回时间
 * @param $type string 
 * @param $time int UNIX时间戳
 * @return $datetime
 */
function getDateTime($type='s',$time=null)
{
    $return = null;

    $time = $time ? $time : TIMESTAMP;

    switch ($type) {
        case 'd':
            $return = date("Y-m-d", $time);
        break;
        case 's':
        default:
            $return = date("Y-m-d H:i:s", $time);
        break;
    }

    return $return;
}

/**
 * 分析函数返回值 ecode
 * @param $ecode model处理返回值号
 * @return true/false true:model返回错误并返回错误notice false:model正确处理
 */
function eCode($ecode)
{
    global $ecodes;

    if (is_array($ecode)) return false;

    $exp = "/^1[0-9]{3}$/";
    return preg_match($exp, $ecode)?$ecodes[$ecode]:'';
}

/**
 * 读取文件内容
 * @param 要读取的文件
 * @param 文件内容
 */
function getFile($f)
{
    return file_exists($f) ? file_get_contents($f) : false;
}

/**
 * 截取字符串 用指定编码来解决中文断字问题
 * @param $string 要截取的字符串
 * @param $start 开始截取的位置
 * @param $length 要截取的长度
 * @param $encoding 入口编码 默认值 UTF-8
 * @param $outcoding string 出口编码 默认值 GBK
 * @param $type int 截取方式 0单一字符截取 1双字符截取 
 */
function msbstr($string, $start, $length, $encoding='UTF-8', $outcoding='GBK', $type=0)
{
    $return = null;

    switch ($type) {
        case 0:
            $return = mb_substr($string, $start, $length, $encoding);
        break;
        case 1:
            $return = iconv($outcoding, $encoding, substr(iconv($encoding, $outcoding, $string), $start, $length));
        break;
        default:
        break;
    }

    return $return;
}

/**
 * 打印调试函数
 * @param $data 要输出的变量
 */
// 浏览器友好的变量输出
function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace("/\]\=\>\n(\s+)/m", '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    } else {
        return $output;
    }
}

/**
 * 获得浏览当前页面的用户的 IP 地址
 * @return ip
 */
function getIp() {
    static $ip = NULL;
    if ($ip !== NULL) return $ip;
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos =  array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip   =  trim($arr[0]);
    } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
    return $ip;
}

/**
 * 系统错误日志记录
 * @param $str 错误信息
 */
function lalog($str) {
	$log = "data/log/access.log";
	if (file_exists($log)) {
		if (filesize($log) >= 500 * 1024) {
			$log1 = str_replace(".log", "_".date("YmdHis", TIMESTAMP).".log", $log);

			@copy($log, $log1);
			file_put_contents($log, "");
		}
	}
    
	$ip = getIp();
    $access_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $referer_url = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:$access_url;
	$logstr = getDateTime()." | ".$str." <br>访问:<font color=blue>".$access_url."</font> <br>来源:<font color=green>".$referer_url."</font>(";

	file_put_contents($log, "^".substr(php_uname(), 0, 20)." | ".$logstr."<a href='http://www.ip138.com/ips.asp?ip=".$ip."&action=2' target=_blank>".$ip."</a>)\$\n", FILE_APPEND);
}

/**
 * 计算程序执行时间
 * @param $begin_time 开始时间 microtime
 * @param $end_time 结束时间 microtime
 * @return $runtime 精确到第八位小数
 */
function runtime($begin_time, $end_time)
{
	$begin_time = explode(" ",$begin_time);
	$end_time = explode(" ",$end_time);

	$runtime = $end_time[1] - $begin_time[1] + $end_time[0] - $begin_time[0];

	return number_format($runtime, 8, ".", "");
}

/**
 * session方法 存取
 */
function session($sessionname,$sessionvalue='')
{
	$return = true;

	if (!$sessionvalue) {
		$return = isset($_SESSION[$sessionname]) ? $_SESSION[$sessionname] : '';
	} else {
		$_SESSION[$sessionname] = $sessionvalue;
	}

	return $return;
}

//-----------------------数据库操作方法-----------------------//

/**
 * 初始化ADUS操作
 */
function T($table)
{
    global $dbadus;
    
    DBADUS::$_table = $table ? $table : '';
    
    return $dbadus;
}

//-----------------------单字符名方法-----------------------//

/**
 * 获取变量GET
 * @param $param 变量名
 */
function g($param)
{
    $return = isset($_REQUEST[$param])?$_REQUEST[$param]:'';
    
    return htmlentities(trim($return));
}

/**
 * 获取变量POST
 * @param $param 变量名
 */
function p($param)
{
    $return = isset($_REQUEST[$param])?$_REQUEST[$param]:'';
    
    return htmlentities(trim($return));
}

/**
 * 获取变量(GET/POST通用)
 * @param $param 变量名
 */
function q($param)
{
    $return = isset($_REQUEST[$param])?$_REQUEST[$param]:'';
    
    return htmlentities(trim($return));
}

/**
 * 实例化某个类
 */
function N($class)
{
    $obj = null;

    if (!$obj) $obj = new $class();

    return $obj;
}

function D($name='') {
    if(empty($name)) return false;

    static $_model = array();
    if(isset($_model[$name])) return $_model[$name];

    $model = new $class();
    $_model[$name] = $model;

    return $model;
}

//-----------------------分页方法-----------------------//

/**
 * 分页
 * @param $page 页面名称包括访问路径
 * @param $pn 当前页面的页码
 * @param $pc 总的页面数
 */
function flipage($page, $pn, $pc)
{
    //当前页左右两边要显示的页数 前/后各3页
    $spn = 3;
    $search = array('{page}', '{pn}', '{pc}');
    $replace = array($page, $pn, $pc);
    
    //载入分页模板页
    $flipage = getFile(STYLE_PUBLIC."/flipage.html");

    $flipage = str_replace($search, $replace, $flipage);

    $flip .= $pn == 1?"[1]":"<a href=\"".$page."&pn=1\">[1]</a>";
    $flip .= (($pn-$spn) > 2 && ($pc - 2*$spn - 1) > 2)?'......':'';

    if ($pn < ($spn + 2)) {
        for ($i= 2; $i<= (1 + 2*$spn + 1); $i++) {
            if ($i < $pc) {
                $flip .= ($i == $pn)?"[".$i."]":("<a href=\"".$page."&pn=".$i."\">[".$i."]</a>");
            }
        }
    } else if ($pn > ($pc - $spn - 1)) {
        for ($i= ($pc - 2*$spn - 1); $i<= $pc; $i++) {
            if ($i > 1 && $i < $pc) {
                $flip .= ($i > 1 && $i < $pc)?"[".$i."]":("<a href=\"".$page."&pn=".$i."\">[".$i."]</a>");
            }
        }
    } else {
        for ($i= ($pn-$spn); $i<= ($pn+$spn); $i++) {
            if ($i > 0 && $i <= $pc) {
                $flip .= ($i == $pn)?"[".$i."]":("<a href=\"".$page."&pn=".$i."\">[".$i."]</a>");
            }
        }
    }
    
    $flip .= (($pn+$spn) < ($pc-1) && (1 + 2*$spn + 1) < ($pc-1))?"......":"";
    
    if($pagecount > 1) {
        $flip .= ($pn == $pc)?"[".$pagecount."]":("<a href=\"".$pagename."&pn=".$pagecount."\">[".$pagecount."]</a>");
    }
    
    return str_replace("{flip}", $flip, $flipage);
}


