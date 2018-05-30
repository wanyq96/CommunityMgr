<head>
<?php 
session_start();
if(empty($_SESSION["ID"]))
{
    header("location:login.php");
    exit;
}
$ID = $_SESSION["ID"];
?>
<title>社团管理用户端</title>
</head>	
<body bgcolor="#F0FFFF">
<fieldset>
<div  style="text-align:center;">
<h1 style="margin-bottom:1;"> 用户选择</h1></div>

<form id="login1" name="login1" method="post" action="six.php">
<div style="text-align:center;"><input type="submit" name="查询" value="查询"></div>
</form>

<form id="login1" name="login1" method="post" action="xiugai1.php">
<div style="text-align:center;"><input type="submit" name="修改" value="修改"></div>
</form>

<form id="login2" name="login2" method="post" action="shanchu.php">
<div style="text-align:center;"><input type="submit" name="删除" value="删除"></div>
</form>
</fieldset>
</body>
</html>

