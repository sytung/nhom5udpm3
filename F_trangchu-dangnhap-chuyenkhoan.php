<?php
	include('conn.php');
	session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="F_CSS_chuyenkhoan.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Ngân Hàng Việt Nam TeamFivebank</title>
	
</head>
<body>
	<form method="post" enctype="multipart/form-data">
    	<div class="header">
        	<div class="img"><img src="images/bg4.png" style="width:170px; height:60px;"></div>
        	<div class="search">
            	<input class="search1" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="search2" type="submit">Tìm kiếm</button>
            </div>
            
            <div class="box-tell">
            	<div class="icon">
                	<i class='fas fa-phone-alt' style='font-size:30px;color:red'> Hotline 1900 68 86</i>
                </div>
            </div>
        </div>
        
        <div class="menu-bar">
        	<ul>
            	<li ><a href="F_trangchu-dangnhap.php">HOME</a></li>
                <li ><a href="#">CÁ NHÂN</a></li>
                <li ><a href="#">KHÁCH HÀNG ƯU TIÊN</a></li>
                <li ><a href="#">NGÂN HÀNG ĐẦU TƯ</a></li>
                <li ><a href="#">NHÀ ĐẦU TƯ</a></li>
                <li ><a href="#">GIỚI THIỆU</a></li>
                <li ><a href="#">TUYỀN DỤNG</a></li>
            </ul>
        </div>
       
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Grabfood_KV grabfood.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/JCB_Banner web 1200 x 300-01.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Mo the dang cap_Banner-web1200x300.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
		
      <div class="text-dk">
      	<a href="F_trangchu-dangnhap.php">Trang chủ</a>
        <span><i class="fa fa-angle-double-right"></i></span>
        <a href="F_trangchu-dangnhap-chuyenkhoan.php">Chuyển khoản</a>
      </div>  
	

      <div class="title_box_center">
      	<h2 class="h_title">Chuyển khoản</h2>        
      </div>  
      
      <div class="box-dk1">
      
      	<div class="text1">Số tài khoản người nhận</div>
        <div class="text-input4"><input type="text" name="nguoinhan" class="otext-dk" required></div>
      
        <div class="text1">Số tiền cần chuyển</div>
        <div class="text-input"><input type="text" name="tien" class="otext-dk" required></div>
        
        <div class="text1">Ghi chú</div>
        <div class="text-input1"><input type="text" name="ghichu" class="otext-dk1" required></div>
        
        <div class="submit"><input type="submit" name="chuyenkhoan" value="Chuyển khoản"></div>
      </div>  
        
        
        
        
        
        <div class="box-dn">
    	<div id="img-1">
        	<img src="images/bg4.png" style="width:300px; height:120px">
        </div>
        
        <div class="tt-ht">
        	<?php
					if(!empty($_SESSION['email'])) 
						{				
							$sql = "select * from dangky where email='" . $_SESSION['email']."'";
							$run = mysqli_query($conn, $sql);
							$row = mysqli_fetch_array($run);
							
							echo"Xin Chào : ".$_SESSION['email']."<br>";
							echo"Số tài khoản : ".$row['stk']."<br>";
							echo"Số dư : ".$row['tien']."<br>";
						}
					else
						{
							header('location:F_dangnhap.php');
						}
 			?>
             
             
             
             
             
             
        </div>
        
        <div class="box-input">
        	<input type="button" onclick="location='F_thongtin.php'" name="thongtin" value="Thông tin" id="input-dn"><br>
            <input type="button" onClick="location='F_trangchu-dangnhap-ruttien.php'" name="ruttien" value="Rút tiền" id="input-dn"><br>
            <input type="button" onClick="location='F_trangchu-dangnhap-chuyenkhoan.php'" name="chuyenkhoan" value="Chuyển khoản" id="input-dn"><br>
            <input type="button" onClick="location='F_doimk.php'" value="Đổi mật khẩu" id="input-dn"><br>
            <input type="button" onClick="location='F_naptien.php'" value="Nạp tiền" name="naptien" id="input-dn"><br>
            <input type="button" onClick="location='F_dangxuat.php'" value="Đăng xuất" id="input-dn"><br>
        </div>
    	</div>
        
    
    
    
    <div class="button">
    	<div class="box-bottom">
            <ul>
                <li>
                    <h1 id="text-bottom">LIÊN HỆ</h1>
                    <ul>
                    	<li><i class='fas fa-phone-alt'> 1900 68 86</i></li>
                        <li><i class="fa fa-envelope"><a href="#"> Tung123456789999@gmail.com</a></i></li>
                        <li><i class="fa fa-envelope"><a href="#"> Cơ chế tố giác</a></i></li>
                        <li><i class="fa fa-motorcycle"> 92A Lê Thanh Nghị</i></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="box-bottom1">
        	<ul>
                <li>
                    <h1 id="text-bottom">THÔNG TIN CHUNG</h1>
                    <ul>
                    	<li><a href="#">Giới thiệu về TeamFivebank</a></li>
                        <li><a href="#">Liên hệ - góp ý</a></li>
                        <li><a href="#">Hướng dẫn sử dụng thẻ</a></li>
                        <li><a href="#">Hướng dẫn kích hoạt mã OTP</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="box-bottom2">
        	<ul>
                <li>
                    <h1 id="text-bottom">THÔNG TIN TIỀN TỆ</h1>
                    <ul>
                    	<li><i class="fa fa-bar-chart"><a href="#"> Biểu đồ cổ phiếu</a></i></li>
                        <li><i class="fa fa-money"><a href="#"> Tỷ giá ngoại tệ</a></i></li>
                        <li><i class="fa fa-file-word-o"><a href="#"> Biểu phí</a></i></li>
                        <li><i class="fa fa-file-word-o"><a href="#"> Biểu mẫu</a></i></li>
                        <li><i class="fa fa-institution"><a href="#"> Gửi tiết kiệm lãi xuất cao</a></i></li>
                    </ul>
                </li>
            </ul>
        </div>    
    </div>
    </form>
    
<?php   
	if(isset($_POST['chuyenkhoan']))
	{
		$tien=$_POST['tien'];
		$nguoinhan=$_POST['nguoinhan'];
		
		$query="select * from dangky where email='".$_SESSION['email']."'";
		$runq=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($runq);
		
		if($row['tien']<$tien)
		{
			echo'<script type="text/javascript">
					alert("Rất tiếc! Số dư của bạn không đủ");
				 </script>';
		}
		else
		{
			$sodu = $row['tien'] - $tien;
			$sql="update dangky set tien ='$sodu' where email='".$_SESSION['email']."'";
			$run=mysqli_query($conn,$sql);
			if($run){
			
			$querynn="select * from dangky where stk ='$nguoinhan'";
			$runnn=mysqli_query($conn,$querynn);
			$rownn=mysqli_fetch_array($runnn);
			
			$sodunn = $rownn['tien'] + $tien;
			$sqlnn="update dangky set tien = '$sodunn' where stk ='$nguoinhan'";
			$runnn=mysqli_query($conn,$sqlnn);
		
				if($runnn)
				{
					echo '<script type="text/javascript">
								alert("Chuyển khoản thành công! Vui lòng ấn phần thông tin để kiểm tra số dư");
				 			</script>' .$nguoinhan;}	
				}
				else echo'<script type="text/javascript">
					alert("Rất tiếc! Chuyển khoản không thành công");
				 </script>';
			}
		
	}
?>	
</body>
</html>