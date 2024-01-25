
<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])){

		if(!empty($_POST['na']) &&
		 !empty($_POST['em']) &&
		 !empty($_POST['vi']) &&
		 !empty($_POST['cre']) 

		){

		$na = $_POST['na'];
        $em = $_POST['em'];
        $vi = $_POST['vi'];
        $cre = $_POST['cre'];

        $email = filter_var($em, FILTER_SANITIZE_EMAIL); 

        $ex = "INSERT INTO pay_online (name,email,vias,credit)
         VALUES ('$na','$email','$vi','$cre');";

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
