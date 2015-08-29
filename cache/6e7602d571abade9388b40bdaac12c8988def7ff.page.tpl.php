<?php
/*%%SmartyHeaderCode:2508655e1af4598f8d8_68801683%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7602d571abade9388b40bdaac12c8988def7ff' => 
    array (
      0 => 'D:\\soft\\xampp\\htdocs\\talk\\templates\\page.tpl',
      1 => 1440853828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2508655e1af4598f8d8_68801683',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'head_bg' => 0,
    'user' => 0,
    'talk' => 0,
    'k' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1af45a6d8f0_81699959',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1af45a6d8f0_81699959')) {
function content_55e1af45a6d8f0_81699959 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>我的爱车有话说</title>
<script src="static/js/jquery-1.11.3.js"></script>

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
.head_bg{
    display: block;/*一定要有*/
    background-image:url(static/img/road.jpg);
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


button{
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

</style>

    <script>
        var flag = 1;
        function change(){
            moment = document.getElementById("moment").childNodes;
            if(flag == 1){
                for(i=0; i<moment.length; i++){
                    if(moment[i].id !== undefined && moment[i].id!="CarRoy"){
                        moment[i].style.visibility="hidden";
                    }
                }
            }else{
                for(i=0; i<moment.length; i++){
                    if(moment[i].id !== undefined && moment[i].id!="CarRoy"){
                        moment[i].style.visibility="";
                    }
                }
            }
        }

        function same_brand(){
            flag = 1;
            change();
            flag = 0;
        }

        function all_brand(){
            flag = 0;
            change();
            flag = 1;
        }
    </script>

</head>

<body>

    <!-- begin 顶部 -->
    <div class="head_bg">
        <label class="btn-file" data-role="add">
            <img align="right" src="static/img/camera.png" height="20%"></p>
            <input type="file" class="input-file" data-role="uploader" accept="image/*" style="display:none">
        </label>
    </div>
    <table class="user" id="CarRoy">
        <tr>
            <td><img src="static/img/me.jpg"></td>
            <td><span class="signature">因为我们都是爱车控，就想给你最好的！</span><br/><span class="username">CarRoy</span></td>
        </tr>
    </table>
    
    <div align="center">
        <button onclick="same_brand()">同品牌</button><button onclick="all_brand()">看全部</button>
    </div>
    <!-- end 顶部 -->

    <!-- begin 用户发表的状态 -->
    <div id="moment">
                <div id="爱车控">
            <table class="talk">
                <tr>
                    <td><img src="static/img/1.jpg" class="avatar"></td>
                    <td><span class="name">爱车控</span><br/><span>已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="CarRoy">
            <table class="talk">
                <tr>
                    <td><img src="static/img/2.jpg" class="avatar"></td>
                    <td><span class="name">CarRoy</span><br/><span>后半场逆转战局，壮哉我大绿城！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="NicoKeine">
            <table class="talk">
                <tr>
                    <td><img src="static/img/3.jpg" class="avatar"></td>
                    <td><span class="name">NicoKeine</span><br/><span>哈哈！丽江山好水好人也好，真是惬意！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="Gary">
            <table class="talk">
                <tr>
                    <td><img src="static/img/1.jpg" class="avatar"></td>
                    <td><span class="name">Gary</span><br/><span>已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="Sally">
            <table class="talk">
                <tr>
                    <td><img src="static/img/2.jpg" class="avatar"></td>
                    <td><span class="name">Sally</span><br/><span>后半场逆转战局，壮哉我大绿城！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="Allen">
            <table class="talk">
                <tr>
                    <td><img src="static/img/3.jpg" class="avatar"></td>
                    <td><span class="name">Allen</span><br/><span>哈哈！丽江山好水好人也好，真是惬意！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="Scott">
            <table class="talk">
                <tr>
                    <td><img src="static/img/1.jpg" class="avatar"></td>
                    <td><span class="name">Scott</span><br/><span>已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！已准点下班，网上准点开黑！战友们加油！！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="TedYin">
            <table class="talk">
                <tr>
                    <td><img src="static/img/2.jpg" class="avatar"></td>
                    <td><span class="name">TedYin</span><br/><span>后半场逆转战局，壮哉我大绿城！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
                <div id="Lanlan">
            <table class="talk">
                <tr>
                    <td><img src="static/img/3.jpg" class="avatar"></td>
                    <td><span class="name">Lanlan</span><br/><span>哈哈！丽江山好水好人也好，真是惬意！</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
            </div>
    <!-- end 用户发表的状态 -->
</body>
</html>  
<?php }
}
?>