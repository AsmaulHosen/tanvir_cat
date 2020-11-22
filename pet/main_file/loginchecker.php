<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

</head>
<header>
	<script>
		function MySuccessFn(){
			swal({
				title: "Login Successfully",
				text: "",
				type: "success",
				timer: 1300,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='index.php';
			});
		}
	</script>
	<script>
		function MyWarningFn(){
			swal({
				title: "Sorry User !! Something went wrong, Please try again later.",
				text: "Invalid Attempt",
				type: "warning",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='login.php';
			});
		}
	</script>

</header>
<?php 
//Login checker
session_start();
if($_POST){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
	
	include_once '../dbcon/dbCon.php'; 
	
	$con = connect();
	
	$result = $con->query($sql);
	
	if($result->num_rows > 0){
	
		$row1 = $result->fetch_array(MYSQLI_ASSOC);
	
		$_SESSION['isLoggedIn'] = TRUE;
		foreach($result as $row){
				$_SESSION['user_id'] 	= $row['user_id'];
				$_SESSION['email'] 		= $row['email'];
			}
		
		  echo "<script type= 'text/javascript'>MySuccessFn();</script>";
		
	}else{

		session_unset(); 
		echo "<script type= 'text/javascript'>MyWarningFn();</script>";
	}
}
