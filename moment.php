<?php
require_once(dirname(__FILE__) . '/include/init.php');
$smarty->caching = false;

$head_bg = "static/img/road.jpg"; //顶部背景图
$user=array(
	"avatar"=>"static/img/me.jpg",
	"name"=>"CarRoy",   
	"signature"=>"因为我们都是爱车控，就想给你最好的！"
	);

$_SESSION['username']=$user['name'];

//同品牌
if(!isset($_REQUEST['moment_type']) || ((isset($_REQUEST['moment_type'])) && ( $_POST['moment_type']=='' || $_POST['moment_type'] == '同品牌')))	{
	/*
	* 从数据库中查询“和当前用户的车品牌相同用户的moment”
	*/
	define(DB_HOST, 'localhost');  
	define(DB_USER, 'root');  
	define(DB_PASS, '123456');  
	define(DB_DATABASENAME, 'test');  
	define(DB_TABLENAME, 'moment_thought');  
	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
	mysql_select_db(DB_DATABASENAME, $conn);  
	$sql = "select * from moment_thought";
	$result = mysql_query($sql);
	
	
	$talk = array();
	$prefix = "upload/moment/";
	while($row = mysql_fetch_array($result)){
		$pictures = array();
		$moment_picture_path = $prefix.$row['username']."/".$row['moment_id'];
		//echo "moment_picture_path:".$moment_picture_path."<br/>";
		$dh = opendir($moment_picture_path);
		while(false!==($file=readdir($dh))){
			if($file != "." && $file!=".."){
				$pictures[] = $moment_picture_path."/".$file;
			}
		}


		if($row['username']==$_SESSION['username']){
			$talk[$row['moment_id']] = array(
				"username"=>$row['username'],
				"avatar"=>"upload/avatar/".$row['username'].".jpg", //头像路径
				"content"=>$row['thought'],  //moment内容
				"pictures"=>$pictures
			);
		}
	}
	mysql_close($conn);
	$talk = array_reverse($talk, true); //反序，让新发表的结果显示在前面
	$moment_type="same_brand";
}else if($_POST["moment_type"]=='看全部'){
	/*
	* 从数据库中查询“所有用户的moment”
	*/
	define(DB_HOST, 'localhost');  
	define(DB_USER, 'root');  
	define(DB_PASS, '123456');  
	define(DB_DATABASENAME, 'test');  
	define(DB_TABLENAME, 'moment_thought');  
	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
	mysql_select_db(DB_DATABASENAME, $conn);  
	$sql = "select * from moment_thought";
	$result = mysql_query($sql);
	
	$talk = array();
	$prefix = "upload/moment/";
	while($row = mysql_fetch_array($result)){
		$pictures = array();
		$moment_picture_path = $prefix.$row['username']."/".$row['moment_id'];
		//echo "moment_picture_path:".$moment_picture_path."<br/>";
		$dh = opendir($moment_picture_path);
		while(false!==($file=readdir($dh))){
			if($file != "." && $file!=".."){
				$pictures[] = $moment_picture_path."/".$file;
			}
		}


		$talk[$row['moment_id']] = array(
			"username"=>$row['username'],
			"avatar"=>"upload/avatar/".$row['username'].".jpg", //头像路径
			"content"=>$row['thought'],  //moment内容
			"pictures"=>$pictures
		);
	}
	mysql_close($conn);
	$talk = array_reverse($talk, true); //反序，让新发表的结果显示在前面
	$moment_type="all_brand";
}

$smarty->assign("head_bg", $head_bg);
$smarty->assign("user", $user);
$smarty->assign("talk", $talk);
$smarty->assign("moment_type", $moment_type);

//////////////////////////////////////////////////////////
/*
$test_img = array();
$prefix = "upload/moment/";
$moment_picture_path = $prefix.$_SESSION['username'];

$dh = opendir($moment_picture_path);
while(($file=readdir($dh))!==false){
	if($file != "." && $file!=".."){
		$test_img[] = $moment_picture_path."/".$file;
	}
}
*/
//////////////////////////////////////////////////////////


$smarty->assign('test_img', $test_img);



$smarty->display("moment.tpl");

$smarty->caching = true;
?>