<?php 

	$inAjax = $_GET['inAjax'];
	$do = $_GET['do'];
	$do = $do ? $do : "default";
	if(!$inAjax)
		return false;
	
	include_once "db.class.php";

	
	switch($do){
		case "checkMember":
			$username = $_GET['username'];
			$sql = "SELECT * FROM check_member WHERE username='$username'";
			$result = $dbObj->getOne($sql);
			echo (!empty($result)) ? json_encode($result) : "null";
			break;
		
		case "default":
			die("nothing");
			break;
	}
	
	//1.连接数据库进行数据读取
	
	//2.把数据库查询返回的对象转换成json格式，然后返回给客户端
	
	