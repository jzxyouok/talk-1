<?php /* Smarty version 3.1.27, created on 2015-08-30 02:47:33
         compiled from "D:\soft\xampp\htdocs\talk\templates\gg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2534355e26ec5c66307_31343442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e47925c52a34e8ec6ee79c15937cd7ed5eb86a2' => 
    array (
      0 => 'D:\\soft\\xampp\\htdocs\\talk\\templates\\gg.tpl',
      1 => 1440902851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2534355e26ec5c66307_31343442',
  'variables' => 
  array (
    'gg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e26ec5cb45e3_85271142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e26ec5cb45e3_85271142')) {
function content_55e26ec5cb45e3_85271142 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2534355e26ec5c66307_31343442';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>我的爱车有话说</title>
	<style>
		img{
			width:10%;
		}
	</style>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['gg']->value;?>

</body>
</html><?php }
}
?>