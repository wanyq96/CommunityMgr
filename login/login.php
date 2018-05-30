<!DOCTYPE HTML>
<html>
<head>
<title>社团管理用户端</title>


</head>	
<body bgcolor="#F0FFFF">
<fieldset>
<div  style="text-align:center;">
<h1 style="margin-bottom:1;"> 用户登陆</h1></div>
<form id="login" name="login" method="post" action="logincheck.php">

<table style="margin:auto;">

<tr><td>账号：</td><td><input type="text" name="username" /></td></tr>
<tr><td>密码：</td><td><input type="password" name="password"/></td></tr>

</table>
<div style="text-align:center;"><input type="submit" name="登陆" value="登陆"  /></div>
</form>

<br/>
<form>
<div style="left: 450px;position:absolute;top:170px;">
<a href='http://localhost:8080/www/register/register.php'>没有账号？点击注册</a></div>
<div style="left: 700px;position:absolute;top:170px;">
<a href='register.php'>忘记密码</a></div>
</form>
</fieldset>

</body>

</html>