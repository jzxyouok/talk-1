<?php
header("Content-Type: text/html;charset=utf-8"); 

$APP_NAME = "talk";//因为用类似smarty的模版，也可以用$APP_ROOT替代
$upload_path = $_SERVER['DOCUMENT_ROOT']."/".$APP_NAME."/upload/";

//basename():返回路径中的文件名部分
$dest_file = $upload_path.basename($_FILES['myfile']['name']);

if(move_uploaded_file($_FILES['myfile']['tmp_name'], $dest_file)){
	echo "文件已经上传至服务器根目录的".$APP_NAME."/upload目录下";
}else{
	echo "文件上传中发生了一个错误，错误代码：".$_FILES['myfile']['error']."<br/><br/>";

	//var_dump($_FILES);
	//测试发现：如果upload路径不存在，则上传肯定失败，但是$_FILES['myfile']['error']返回值为0，看不出错误。
	//也就是说，分成“上传”和“移动”两部分，$_FILES['myfile']['error']只负责“上传”，而是否移动成功则需要根据move_uploaded_file()返回值来判断。

	echo "错误分析：";
	$err_num = $_FILES['myfile']['error'];
	//参考：http://php.net/manual/zh/features.file-upload.errors.php
	switch($err_num){
		case 0:
			$err_msg = "服务器上传文件存放目录出错";
			break;
		case 1:
			$err_msg = "上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值";
			break;
		case 2:
			$err_msg = "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
			break;
		case 3:
			$err_msg = "文件只有部分被上传";
			break;
		case 4:
			$err_msg = "没有文件被上传";
			break;
		case 6:
			$err_msg = "找不到临时文件夹";
			break;
		case 7:
			$err_msg = "文件写入失败";
			break;
		default:
			$err_msg = "其他错误！！";
	}
	echo $err_msg;
}
?>