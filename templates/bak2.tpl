<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>我的爱车有话说</title>

    <link href="static/css/style.min.css" rel="stylesheet">

    <style>
    ul li{
        list-style-type:none;
    }
    .ladybug{ list-style:none; } .ladybug:before{ content:''; display:inline-block; height:2em; width:2em; background-image:url(static/img/1.jpg); background-size:contain; background-repeat:no-repeat; }
    </style>

</head>
<body>
    {foreach from=$talk key=k item=value}
        <div style="inline">
            <img src="static/img/1.jpg" style="width:20%"/>
            
            <b>{$k}</b><br/>
            {$value}
            
        </div>
    {/foreach}

</body>
</html>