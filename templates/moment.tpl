<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>我的爱车有话说</title>
<script src="static/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="static/js/preview.js"></script>

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

<script type="text/javascript">
    function paint(){
        //alert('{$moment_type}');
        moment_type = '{$moment_type}';
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
            fuck();
		})
	})
    function fuck(){
        
        var get = function(id){
            return document.getElementById(id);
        };
        Preview.defaults.onlegal = false;
        Preview.defaults.onillegal = true;
        var pv1 = new Preview(get('icon1'), get('pv1'), {
            onlegal: true,
            onillegal: false 
        });
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
        preview = ('<div id="pv1"></div>');
        preview1.css('width','100px').css('height','100px');
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
</script>

</head>

<body onload="paint()">

    <!-- begin 顶部 -->
    <div id="head_bg">
        <img align="right" src="static/img/camera.png" height="20%" id="photo"/>
    </div>    
        
    <div id="myself">
	    <table class="user" id="{$user['name']}">
	        <tr>
	            <td><img src="{$user["avatar"]}"></td>
	            <td><span class="signature">{$user["signature"]}</span><br/><span class="username">{$user["name"]}</span></td>
	        </tr>
	    </table>
    </div>

    <div align="center" id="switch">
        <form action="moment.php" method="post">
            <input type="submit" name="moment_type" value="同品牌" class="btn" id="same_brand" /> 
            <input type="submit" name="moment_type" value="看全部" class="btn" id="all_brand"/> 
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

    <script type="text/javascript">
        var get = function(id){
            return document.getElementById(id);
        };
        Preview.defaults.onlegal = false;
        Preview.defaults.onillegal = true;
        var pv1 = new Preview(get('icon1'), get('pv1'), {
            onlegal: true,
            onillegal: false 
        });
    </script>
</body>
</html>  