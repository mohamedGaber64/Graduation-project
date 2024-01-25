
<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])){

		if(!empty($_POST['na']) &&
		 !empty($_POST['em']) &&
		 !empty($_POST['ph']) &&
		 !empty($_POST['ti']) &&
		 !empty($_POST['da']) &&
		 !empty($_POST['orn']) 

		){

		$na = $_POST['na'];
        $em = $_POST['em'];
        $ph = $_POST['ph'];
        $ti = $_POST['ti'];
       	$da = $_POST['da'];
       	$orn = $_POST['orn'];

        $email = filter_var($em, FILTER_SANITIZE_EMAIL); 

        $ex = "INSERT INTO cust_order (name,email,phone,title,d,order_name)
         VALUES ('$na','$email','$ph','$ti','$da','$orn');";

         $run = mysqli_query($conn, $ex) or die('ff');

         if($run){
         	echo "<div class='success'> successfully </div>";
         }

         else{
         	echo "<div class='fail'> error you can try again </div>";
         }

		}

		else{
         	echo "<div class='fail'> error you can try again </div>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="responsive/l.css">
</head>
<body>

</body>
</html>
