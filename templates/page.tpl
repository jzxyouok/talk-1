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
    background-image:url({$head_bg});
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

</head>

<body>

    <!-- begin 顶部 -->
    <div class="head_bg">
        <label class="btn-file" data-role="add">
            <img align="right" src="static/img/camera.png" height="20%"></p>
            <input type="file" class="input-file" data-role="uploader" accept="image/*" style="display:none">
        </label>
    </div>
    <table class="user" id="{$user['name']}">
        <tr>
            <td><img src="{$user["avatar"]}"></td>
            <td><span class="signature">{$user["signature"]}</span><br/><span class="username">{$user["name"]}</span></td>
        </tr>
    </table>
    
    <div align="center" id="switch">
        <form action="publish.php" method="post">
            <input type="submit" name="moment_type" value="同品牌" class="btn"/> 
            <input type="submit" name="moment_type" value="看全部" class="btn"/> 
        </form>
    </div>
    <!-- end 顶部 -->

    <!-- begin 用户发表的状态 -->
    <div id="moment">
        {foreach from=$talk key=k item=value}
        <div id="{$k}">
            <table class="talk">
                <tr>
                    <td><img src="{$value["avatar"]}" class="avatar"></td>
                    <td><span class="name">{$k}</span><br/><span>{$value["content"]}</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
        {/foreach}
    </div>
    <!-- end 用户发表的状态 -->
</body>
</html>  
