<?php
require_once(dirname(__FILE__) . '/include/init.php');

$talk=array(
	"Chris"=>array(
		"avatar"=>"static/img/1.jpg",
		"content"=>"已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！"
	),		
	"CarRoy"=>array(
		"avatar"=>"static/img/2.jpg",
		"content"=>"后半场逆转战局，壮哉我大绿城！"
	),
	"NicoKeine"=>array(
		"avatar"=>"static/img/3.jpg",
		"content"=>"哈哈！丽江山好水好人也好，真是惬意！"
	)
);

$head_bg = "static/img/road.jpg"; //顶部背景图
$user=array(
	"avatar"=>"static/img/me.jpg",
	"name"=>"爱车控",   
	"signature"=>"因为我们都是爱车控，就想给你最好的！"
	);

$smarty->assign("head_bg", $head_bg);
$smarty->assign("user", $user);

$smarty->assign("talk", $talk);
$smarty->assign("img", $img);
$smarty->display("page.tpl");

?>