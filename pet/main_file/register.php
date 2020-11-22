<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

</head>
<header>
	<script>
		function MySuccessFn(){
			swal({
				title: "Registration successful",
				text: "",
				type: "success",
				timer: 3200,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='../index.php';
			});
		}

		function MyWarningFn(){
			swal({
				title: "Sorry User !! ",
				text: "Something went wrong, Please try again later.",
				type: "danger",
				timer: 2000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='../index.php';
			});
		}

		function MyEmailWarningFn(){
			swal({
				title: "Same Email Already Exist! Please try with another email.",
				text: "",
				type: "warning",
				timer: 3000,
				showConfirmButton: false,
			},
			window.load = function(){
				window.location='../index.php';
			});
		}
	</script>

</header>

<?php 
				                  if($_POST){
				                    
				                    $email = $_POST['email'];
				                    $password = $_POST['password'];  
				                    $role = $_POST['role'];
      
			                                        include_once '../dbcon/dbCon.php'; 
					                   				$con = connect();
			                                        $check="SELECT * FROM users WHERE email = '$email'";
			                                        $rs = mysqli_query($con,$check);
			                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
			                                        if($data[0] > 1) {
														echo "<script type= 'text/javascript'>MyEmailWarningFn();</script>";	
													}else
			                                        {



					                    
					                      $sql = "INSERT INTO users(email,password,role) VALUES ('$email','$password','$role');";
					                    
					                    
					                    if ($con->query($sql) === TRUE) {
					                      echo "<script type= 'text/javascript'>MySuccessFn();</script>";
					                    } else {
					                    	// echo "Error: " . $sql . "<br>" . $con->error. "<br>";
					                    	echo "<script type= 'text/javascript'>MyWarningFn();</script>";
					                    }
					                  }
				              		}
				                ?>