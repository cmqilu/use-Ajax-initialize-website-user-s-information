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
	
	//1.�������ݿ�������ݶ�ȡ
	
	//2.�����ݿ��ѯ���صĶ���ת����json��ʽ��Ȼ�󷵻ظ��ͻ���
	
	