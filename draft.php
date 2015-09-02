<?php
require_once(dirname(__FILE__) . '/include/init.php');
header("Content-Type: text/html;charset=utf-8");
header("Location:http://localhost/talk/moment.php");

zz_handle_thought();


/*
处理用户发表状态：
先把状态文字存储到MySQL，然后获得本条记录的moment_id
再将用户上传的图片从tmp目录移动到以moment_id为名字的目录
*/
function zz_handle_thought(){
	echo '<br/>用户的想法是：<br/>';
	echo $_POST['thought'];
	echo '<br/>';

	$username = $_SESSION['username'];
	$thought = $_POST['thought'];
	date_default_timezone_set('PRC');
	$time = time();
	$time = date('Y-m-d H:i:s',$time);
	echo "当前时间是：".$time."<br/>";
	$sql = "insert into moment_thought (username, thought, time) values ('".$username."','".$thought."','".$time."');";
	//$sql = "insert into moment_thought (username, thought) values ('CarRoy', 'I was walking...');";

	//执行SQL语句
	//mysql_connect  
	define(DB_HOST, 'localhost');  
	define(DB_USER, 'root');  
	define(DB_PASS, '123456');  
	define(DB_DATABASENAME, 'test');  
	define(DB_TABLENAME, 'moment_thought');  
	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
	mysql_select_db(DB_DATABASENAME, $conn);  
	$result = mysql_query($sql);



	$sql = "select moment_id from moment_thought where time='".$time."'";
	//$sql = "select moment_id from moment_thought";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)){
		$moment_id = (string)$row[0];
		//echo "row[0]:".$row[0]."<br/>";
		$prefix = "upload/moment/".$_SESSION['username']."/";
		$tmpDir = $prefix."tmp";
		$targetDir = $prefix.$moment_id;
		rename($tmpDir, $targetDir);
		//echo "targetDir:".$targetDir."<br/>";
		
		mkdir($tmpDir);
	}

	mysql_close($conn);
	//var_dump($result);
}