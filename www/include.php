<?php

	//echo md5(123123);
	header("content-type:text/html;charset=utf-8");
/*
	我们可以把 经常要引用 的文件，放在一个 文件夹中，我们取名为 include，这样 我们 就把 该文件夹 当做 默认的引用路径。
	我们可以 用 set_include_path() 来设定，多个路径 可以用 路径分隔符分开（windows 为';',linux为':'）。
	例：
		define('INCLUDE_PATH','/include/');
		set_include_path(INCLUDE);
		这样当我们引用 include 中的文件 如 conn.php ，smarty_config.php   时，我们直接可以这样写
		include_once('conn.php');
		include_once('smarty_config.php');

	如果，我们要引用的文件不再 include中时，我们可以在设多个默认路径
	（当我们要引用的文件，在多个路径中多存在是，我们默认取排在最前的路径）。如下：
		define('INCLUDE_PATH','/include/');
		define('LIB_PATH','/lib/');
		set_include_path(INCLUDE_PATH.PATH_SEPARATOR.LIB_PATH.PATH_SEPARATOR.get_include_path());
		(PATH_SEPARATOR为路径分隔符)
*/
	session_start();
	define("ROOT",dirname(__FILE__));
	$includePath = ".".PATH_SEPARATOR;
	$includePath .= ROOT."\lib".PATH_SEPARATOR;
	$includePath .= ROOT."\configs".PATH_SEPARATOR;
	$includePath .= ROOT."\core".PATH_SEPARATOR;
	//$includePath .= get_include_path();
	//echo $includePath;
	set_include_path($includePath);
	require_once 'mysql.func.php';
	require_once 'image.func.php';
	require_once 'common.func.php';
	require_once 'string.func.php';
	require_once 'page.func.php';
	require_once 'configs.php';
	require_once 'admin.inc.php';
	require_once 'category.inc.php';
	require_once 'product.inc.php';
	require_once 'upload.func.php';
	require_once 'album.inc.php';
	require_once 'user.inc.php';
	

	@connect();