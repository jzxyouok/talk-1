<?php

require './libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

//$smarty->assign("greetings", "欢迎来到Chris的魔法小屋");

?>