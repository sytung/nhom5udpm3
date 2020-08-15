<?php
	include('conn.php');
	session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Teamfivebank</title>
<link rel="stylesheet" type="text/css" href="F_CSS_dangnhap.css">
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<div class="center">
    	<div class="img"><img src="images/bg4.png" style="width:300px; height:120px"></div>
        <div class="input">
        <input type="text" name="email" class="text-input" placeholder="Email đăng nhập" required><br>
        <input type="password" name="pw" class="text-input" placeholder="Mật Khẩu" required >
        <input type="submit" name="dangnhap" class="submit" value="Đăng nhập">      
        </div>  
    </div>
</form>
	<?php
		if(isset($_POST['dangnhap']))
			{
				$email=$_POST['email'];
				$pass=$_POST['pw'];
				
				$_SESSION['email']=$email;
				
				
				$sql="select * from dangnhap where email='$email'";
				$run=mysqli_query($conn,$sql);
				$num=mysqli_num_rows($run);
				$row=mysqli_fetch_array($run);
				
				$ktpass=$row['pass'];
				
				  if($num==0)
				   	{
				         echo'<script type="text/javascript">
									alert("Rất tiếc! Bạn đã sai tên đăng nhập");
							  </script>';
				  	}
					
			      else {
						if($ktpass == $pass)
						{
							echo'<script type="text/javascript">
									alert("Đăng nhập thành công");
							  </script>';	
							 header('location:F_trangchu-dangnhap.php');	
						}
							else{   
								echo'<script type="text/javascript">
									alert("Rất tiếc! Bạn đã sai mật khẩu");
							  		</script>';

								}   
				  }
			}
	 ?>
</body>
</html>
