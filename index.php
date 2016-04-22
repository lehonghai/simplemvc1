<?php

// This is Simple MVC for Intership of Phuong Nam Corps
// Author : KhanhND (khanh.nd A_Cong` phuongnamcorps Cham' com)
//       _   _   _    ___    _____             ___     ___              ___    _____              _    
//    _ | | | | | |  / __|  |_   _|    o O O  |   \   / _ \     o O O  |_ _|  |_   _|    o O O   | |   
//   | || | | |_| |  \__ \    | |     o       | |) | | (_) |   o        | |     | |     o        |_|   
//   _\__/   \___/   |___/   _|_|_   TS__[O]  /
error_reporting(0);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once ROOT . DS . 'includes' . DS . 'common.php';
require_once ROOT . DS . 'includes' . DS . 'db.php';
require_once ROOT . DS . 'includes' . DS . 'path.php';

$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']);
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);

$c_file = ROOT . DS . 'controllers' . DS . $controller . '.php';
$m_func = $controller . '_' . $method;

if (is_readable($c_file)) {
    include $c_file;
    call_user_func($m_func);
} else {
    die("Page not found !");
}