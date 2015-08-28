<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>我的爱车有话说</title>

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
    background-repeat: no-repeat;
    background-position: -100px -400px;/*要显示的区域坐标，左上角为原点*/
    
    height: 210px;
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
</head>

<body>
<div>
    <!-- begin 顶部 -->
    <div class="head_bg">
    </div>
    <table class="user">
        <tr>
            <td><img src="{$user["avatar"]}"></td>
            <td><span class="signature">{$user["signature"]}</span><br/><span>{$user["name"]}</span></td>
        </tr>
    </table>
    
    <div align="center"><button>全部</button><button>同品牌</button><button>专家团</button></div>
    <!-- end 顶部 -->

    <!-- begin 用户发表的状态 -->
    {foreach from=$talk key=k item=value}
    <table class="talk">
        <tr>
            <td><img src="{$value["avatar"]}" class="avatar"></td>
            <td><span class="name">{$k}</span><br/><span>{$value["content"]}</span></td>
        </tr>
    </table>
    <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
    {/foreach}
    <!-- end 用户发表的状态 -->
</div>
</body>
</html>  
