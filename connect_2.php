
<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])){

		if(!empty($_POST['na']) &&
		 !empty($_POST['em']) &&
		 !empty($_POST['te']) &&
		 !empty($_POST['sub']) 

		){

		$na = $_POST['na'];
        $em = $_POST['em'];
        $te = $_POST['te'];
        $sub = $_POST['sub'];

        $email = filter_var($em, FILTER_SANITIZE_EMAIL); 

        $ex = "INSERT INTO cust_problem (name,email,subject,sub_detail)
         VALUES ('$na','$email','$te','$sub');";

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
