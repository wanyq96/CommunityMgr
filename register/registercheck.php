<?php


$link = mysqli_connect('localhost:3306','root','123456');
if(!$link){
    exit('连接数据库失败');
}
mysqli_set_charset($link,'utf8');
mysqli_select_db($link,'engine');
$username=$_POST['username'];
$password=md5($_POST['password']);
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];

$res=mysqli_query($link,"INSERT INTO user VALUES ('$username','$password','$name','$class','$tel','$email','1')");
if (!$res) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
while($res)
{

    header("Location: http://localhost:8080/www/login/login.php");
    exit();
}
echo"<script>alert('注册失败')</script>";

mysqli_close($link);?>