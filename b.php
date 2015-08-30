<?php
header("Content-Type: text/html;charset=utf-8"); 

require_once(dirname(__FILE__) . '/include/init.php');

$gg = "ss";
$smarty->assign("gg", $gg);
$smarty->display("gg.tpl");
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";
?>