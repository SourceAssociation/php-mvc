<?php
	
	header("Content-Type:text/html;charset=utf-8");
	//入口文件
	$c = $_GET['c'];

	//包含控制器
	include './controllers/'.$c.'Controller.php';

	//实例化控制器对象
	$className = $c.'Controller';
	$controller = new $className();

	//方法名
	$a = $_GET['a'];

	//调用方法
	$controller->$a();