<?php
session_start();
$link = mysqli_connect('localhost:3306','root','123456');
if(!$link){
	exit('连接数据库失败');
}
mysqli_set_charset($link,'utf8');
mysqli_select_db($link,'engine');
$username=$_POST["username"];
$psw=$_POST["password"];
$password=md5($psw);
$res=mysqli_query($link,"SELECT * FROM user WHERE username='$username' and password = '$password'");
$row = mysqli_fetch_array($res);
if(empty($username)|| empty($psw))
{
	echo $username;
	echo $psw;
	echo md5($psw);
	echo $passwordd;
	echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
}

else
{
	if(!$res)
	{
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	else
	{

		if($row)
		{
			echo '登陆成功';
			echo "Welcome.$username!";
		}
		else
		{
			echo $username;
//			echo $password;
			echo "<br>";
			echo $psw;
			echo '用户名或密码不正确';
		}

	}

}


//else
//{	while(!$row)
//	{
//	echo"<script>alert('登陆失败')</script>";
//	exit();
//	}
//$_SESSION["username"] = $username;
//header("Location: http://localhost:8080/www/welcome/welcome.php");
//	//echo"<script>alert('登陆失败')</script>";
//}//header("Location: http://localhost:8080/www/login/login.php");
mysqli_close($link);
?>
