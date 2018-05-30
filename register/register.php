<!DOCTYPE HTML>
<html>
<head>
<title>社团用户注册</title>
</head>	
<body bgcolor="#F0FFFF">
<div  style="text-align:center;">
<h1 style="margin-bottom:1;"> 用户信息填写</h1></div>
<form id="login" name="login" method="post" action="registercheck.php" onsubmit="return check()">


<table style="margin:auto;">

<tr><td>账号：</td><td><input type="text" name="username" /></td></tr>
<tr><td>密码:</td><td><input type="password" name="password" id="password" 
/></td></tr>
<tr><td>确认密码:</td><td><input type="password" name="comfirmpassword" id="password2" 
 onBlur="javascript:if(this.value!=this.form.password.value){ alert('您两次输入的密码不一致！');}" /></td>
</tr>

<tr><td>姓名:</td><td><input type="text" name="name" onBlur="javascript:if(this.from.password2.value!=this.form.password.value){ alert('您两次输入的密码不一致！');}"/></td></tr>
<tr><td>班级:</td><td><input type="text" name="class"/></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email"/></td></tr>
<tr><td>手机号:</td><td><input type="text" name="tel"/></td></tr>

</table>

<div style="text-align:center;"><input type="submit" name="注册" value="注册"></div>
</form>
  <script type="text/javascript"> 
    function check() { 
      var username=document.getElementById("username").value; 
      var password=document.getElementById("password").value; 
      var assertpassword=document.getElementById("comfirmpassword").value; 
      var regex=/^[/s]+$/; 
        
      if(regex.test(username)||username.length==0){ 
        alert("用户名格式不对"); 
        return false; 
      } 
      if(regex.test(password)||password.length==0){ 
        alert("密码格式不对"); 
        return false;     
      } 
        alert("两次密码不一致"); 
        return false; 
      } 
    } 
  </script> 
</body>
</html>