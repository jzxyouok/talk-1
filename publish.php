<?php
require_once(dirname(__FILE__) . '/include/init.php');
$smarty->caching = false;


$head_bg = "static/img/road.jpg"; //顶部背景图
$user=array(
	"avatar"=>"static/img/me.jpg",
	"name"=>"CarRoy",   
	"signature"=>"因为我们都是爱车控，就想给你最好的！"
	);

if($_POST["moment_type"]=='' || $_POST["moment_type"]=='同品牌'){
	/*
	需要修改：改成从数据库中查询“和当前用户的车品牌相同用户的moment”
	*/
	$talk=array(
		"爱车控"=>array(
			"avatar"=>"static/img/1.jpg",
			"content"=>"已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！"
		)
	);
	$moment_type="same_brand";
}else if($_POST["moment_type"]=='看全部'){
	/*
	需要修改：改成从数据库中查询“所有用户的moment”
	*/
	$talk=array(
		"爱车控"=>array(
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
		),
		"Gary"=>array(
			"avatar"=>"static/img/1.jpg",
			"content"=>"已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！"
		),		
		"Sally"=>array(
			"avatar"=>"static/img/2.jpg",
			"content"=>"后半场逆转战局，壮哉我大绿城！"
		),
		"Allen"=>array(
			"avatar"=>"static/img/3.jpg",
			"content"=>"哈哈！丽江山好水好人也好，真是惬意！"
		),
		"Scott"=>array(
			"avatar"=>"static/img/1.jpg",
			"content"=>"已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！"
		),		
		"TedYin"=>array(
			"avatar"=>"static/img/2.jpg",
			"content"=>"后半场逆转战局，壮哉我大绿城！"
		),
		"Lanlan"=>array(
			"avatar"=>"static/img/3.jpg",
			"content"=>"哈哈！丽江山好水好人也好，真是惬意！"
		)

	);
	$moment_type="all_brand";
}

$smarty->assign("head_bg", $head_bg);
$smarty->assign("user", $user);
$smarty->assign("talk", $talk);
$smarty->assign("moment_type", $moment_type);
$smarty->display("page.tpl");

$smarty->caching = true;
?>