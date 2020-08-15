<?php 
	include('conn.php');
	session_start();
	
	if(isset($_SESSION['email']) && $_SESSION['email'] != NULL){
    unset($_SESSION['email']);
   	echo'<script type="text/javascript">
			alert("Bạn chắc muốn đăng xuất");
		</script>';
	header('location:F_trangchu.php');
}
?>