<?php
	include('conn.php');
	session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Teamfivebank</title>
<link rel="stylesheet" type="text/css" href="F_CSS_doimk.css">
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<div class="center">
    	<div class="img"><img src="images/bg4.png" style="width:300px; height:120px"></div>
        <div class="input">
        <input type="text" name="pw" class="text-input" placeholder="Mật khẩu" required><br>
        <input type="password" name="pwm" class="text-input" placeholder="Mật khẩu mới" required ><br>
        <input type="password" name="pwm" class="text-input" placeholder="Nhập lại mật khẩu" required ><br>
        <input type="submit" name="ok" class="submit" value="Đổi mật khẩu">      
        </div>
    </div>
</form>
<?php
	if(isset($_POST['ok']))
	{
		$pwc=$_POST['pw'];
		$pwm=$_POST['pwm'];
		
		$sql="SELECT * FROM dangnhap WHERE email='".$_SESSION['email']."'";
			$run=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($run);
			
			if($row['pass'] == $pwc)
				{
				$sql_pass="UPDATE dangnhap SET pass=$pwm WHERE email='".$_SESSION['email']."'";
				$run_pass=mysqli_query($conn,$sql_pass);
				
				if($run_pass)
					{
					header('location:F_dangnhap.php');
					}
				else
					{
					echo '<script type="text/javascript">
								alert("Đổi mật khẩu thất bại");
				 			</script>';
					}
	}
	}
 ?>
</body>
</html>
