<?php
/**
 * 后台配置文件
 */
$config_dir = str_replace('/admin/include/config', '', str_replace('\\', '/', dirname(__FILE__))).'/include/config';

require_once($config_dir.'/config.php');

$admin_config = array(
    'STYLE_PUBLIC'         => ADMIN_DIR.'/themes/public',
    'STYLE_DEFAULT'        => ADMIN_DIR.'/themes/default',

    'INCLUDE_DIR'          => ADMIN_DIR.'/include',
    'CACHE_DIR'            => ADMIN_DIR.'/cache',
    'LOG_DIR'              => ROOT_DIR.'/data/log',
    'VENDOR'			   => ROOT_DIR.'/include/vendor',

    'COMPILE_LIFE_TIME'    => 10,

    'TEMPLATE_TYPE'    => 'Smarty',   //模版引擎类型 Laugh/Smarty
    //模版选项 Smarty模版起作用
    'TEMPLATE_OPTIONS' => array(
        'debug'            => false,
        'caching'          => false,
        'cache_lifetime'   => 120,
        'template'         => ADMIN_DIR.'/themes/default',
        'template_compile' => ADMIN_DIR.'/cache/compile',
        'template_cache'   => ADMIN_DIR.'/cache/cache',
        'plugin_dir'       => ROOT_DIR.'/include/vendor/Smarty/plugins',
    ),
);

$config = array_merge($config,$admin_config);