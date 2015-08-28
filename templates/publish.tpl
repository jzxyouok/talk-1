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
<img src={$img} />
{foreach from=$talk key=k item=value}
  <b>{$k}</b><br/>
  {$value}<br />
  <hr/>
 {foreachelse}
  nothing
 {/foreach} 
</body>
</html>