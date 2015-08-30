<?php /* Smarty version 3.1.27, created on 2015-08-30 11:42:47
         compiled from "D:\soft\xampp\htdocs\talk\templates\photo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:883455e2ec37d6c631_37348582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a442ee2d5ff8bb3c31f75503f6001e79ac6e92' => 
    array (
      0 => 'D:\\soft\\xampp\\htdocs\\talk\\templates\\photo.tpl',
      1 => 1440934963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883455e2ec37d6c631_37348582',
  'variables' => 
  array (
    'head_bg' => 0,
    'moment_type' => 0,
    'user' => 0,
    'talk' => 0,
    'k' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e2ec37e0d752_98382125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e2ec37e0d752_98382125')) {
function content_55e2ec37e0d752_98382125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '883455e2ec37d6c631_37348582';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>我的爱车有话说</title>
<?php echo '<script'; ?>
 src="static/js/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/js/preview.js"><?php echo '</script'; ?>
>

<style type="text/css">     
.left {     
    float:left;     
    display:inline;     
    width:15%;  
}     
.right{     
    float:right;     
    display:inline;     
    width:80%;  
}   

body{
    line-height: 1.6;
}  

.avatar{
    height:3em;
}

hr{
    border-style: inset; 
}

.talk td{
    vertical-align: top;
}

.name{
    color: #6098FE;
    font-weight: bold;
    margin-top: 0px!important;
}

/*顶部区域背景图片，只选择图片的部分作为背景*/
#head_bg{
    display: block;/*一定要有*/
    background-image:url(<?php echo $_smarty_tpl->tpl_vars['head_bg']->value;?>
);
    background-repeat: repeat-x;
    background-position: -100px -400px;/*要显示的区域坐标，左上角为原点*/
    
    height: 210px;
    margin-top: -16px;
    margin-left: -10px;
    margin-right: -10px;

}

.user{
    margin-top: -60px;
}

.user img{
    height:5em;
}

.signature{
    color: #eeeeee;
}

table{
    cellspacing: 20;
}


.btn{
    border-radius: 5px;
    font-size:14pt;
    text-align:center;
    background:#FFFFFF;
    border:1px solid #FF8700;
    -webkit-border-radius: 2px;
    outline:none;
    color:#222;
    box-shadow:0 1px #ffa033 inset, 0px 1px 3px #bebdbd;
}

/*
button{
    background-color:#ffffff;
    border-color: #FFB200;
}
*/

#switch span a{
    text-decoration: none;
}

</style>

<?php echo '<script'; ?>
 type="text/javascript">
    function paint(){
        //alert('<?php echo $_smarty_tpl->tpl_vars['moment_type']->value;?>
');
        moment_type = '<?php echo $_smarty_tpl->tpl_vars['moment_type']->value;?>
';
        g='#'+ moment_type;
        //if(moment_type=="same_brand"){
        $(g).css("background", "#ffa033");
        $(g).css("color", "#FFFFFF");
    }

	$(function() {
		$('#photo').click(function(){
			//alert('ll');
			//$(".mm-page").children('div').hide();
			$("#head_bg").hide();
			$("#myself").hide();
			$("#switch").hide();
			$("#moment").hide();
			//$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
			//$('#keywordBox').focus();

            zz_append_thought_page();
		})
	})
    function t(){
        alert('test');
    }
    function zz_append_thought_page(){


        var form = $('<form enctype="multipart/form-data" action="draft.php" method="post"></form>');

        var up = $('<div id="up"></div>');
        up.css('height','100%').css('top','0%').css('left','0').css('bottom', '0');
        textarea = $('<textarea name="thought" rows="6" placeholder="这一刻的想法..."></textarea>');
        textarea.css('width', '100%').css('font-size', '18px').css('border', '0px').css('font-size','18pt');
        up.append(textarea);

        var preview1 = $('<div id="preview1"></div>');
        input = $('<input type="file" name="picture" id="icon1" accept="image/*"/>&nbsp;<button onclick="pv1.reset()">重置</button>');
        preview = ('<div class="preview" id="pv1">');
        preview1.append(input, preview);

        var gray_region = $('<div></div>');
        gray_region.css('background-color', '#eee').css('width', '100%').css('position', 'absolute').css('top','60%').css('left','0').css('bottom', '0');

        var submit = $('<div id="submit"></div>');
        submit.css('width','100%').css('position','absolute').css('top', '75%').css('left', '0').css('bottom','0');
        input = $('<input type="submit" value="发表"/>');
        input.css('float','right').css('margin-right', '10%').css('font-size','14pt').css('text-align','center').css('background','#FFF').css('border','1px solid #FF8700').css('-webkit-border-radius','2px').css('outline','none').css('color','#222').css('box-shadow','0 1px #ffa033 inset, 0px 1px 3px #bebdbd');
        submit.append(input);
        
        form.append(up, preview1, gray_region, submit);
        $("body").append(form);
    }
<?php echo '</script'; ?>
>

</head>

<body onload="paint()">

    <!-- begin 顶部 -->
    <div id="head_bg">
        <img align="right" src="static/img/camera.png" height="20%" id="photo"/>
    </div>    
        
    <div id="myself">
	    <table class="user" id="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
	        <tr>
	            <td><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value["avatar"];?>
"></td>
	            <td><span class="signature"><?php echo $_smarty_tpl->tpl_vars['user']->value["signature"];?>
</span><br/><span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</span></td>
	        </tr>
	    </table>
    </div>

    <div align="center" id="switch">
        <form action="photo.php" method="post">
            <input type="submit" name="moment_type" value="同品牌" class="btn" id="same_brand" /> 
            <input type="submit" name="moment_type" value="看全部" class="btn" id="all_brand"/> 
        </form>
    </div>
    <!-- end 顶部 -->

    <!-- begin 用户发表的状态 -->
    <div id="moment">
        <?php
$_from = $_smarty_tpl->tpl_vars['talk']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
            <table class="talk">
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value["avatar"];?>
" class="avatar"></td>
                    <td><span class="name"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span><br/><span><?php echo $_smarty_tpl->tpl_vars['value']->value["content"];?>
</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
        <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    </div>
    <!-- end 用户发表的状态 -->
</body>
</html>  
<?php }
}
?>