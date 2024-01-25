
<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])){

		if(!empty($_POST['c1'])

		){

		$comm1 = $_POST['c1'];

        $ex = "INSERT INTO cust_comm (fish)
         VALUES ('$comm1');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_2'])){

		if(!empty($_POST['c2'])
			
		){

		$comm2 = $_POST['c2'];

        $ex = "INSERT INTO cust_comm (chicken)
         VALUES ('$comm2');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_3'])){

		if(!empty($_POST['c3'])
			
		){

		$comm3 = $_POST['c3'];

        $ex = "INSERT INTO cust_comm (meat)
         VALUES ('$comm3');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_4'])){

		if(!empty($_POST['c4'])
			
		){

		$comm4 = $_POST['c4'];

        $ex = "INSERT INTO cust_comm (rice)
         VALUES ('$comm4');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_5'])){

		if(!empty($_POST['c5'])
			
		){

		$comm5 = $_POST['c5'];

        $ex = "INSERT INTO cust_comm (Potatoes)
         VALUES ('$comm5');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_6'])){

		if(!empty($_POST['c6'])
			
		){

		$comm6 = $_POST['c6'];

        $ex = "INSERT INTO cust_comm (vegetables)
         VALUES ('$comm6');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_7'])){

		if(!empty($_POST['c7'])
			
		){

		$comm7 = $_POST['c7'];

        $ex = "INSERT INTO cust_comm (eggs)
         VALUES ('$comm7');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_8'])){

		if(!empty($_POST['c8'])
			
		){

		$comm8 = $_POST['c8'];

        $ex = "INSERT INTO cust_comm (ice_cream)
         VALUES ('$comm8');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_9'])){

		if(!empty($_POST['c9'])
			
		){

		$comm9 = $_POST['c9'];

        $ex = "INSERT INTO cust_comm (Chocolate)
         VALUES ('$comm9');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_10'])){

		if(!empty($_POST['c10'])
			
		){

		$comm10 = $_POST['c10'];

        $ex = "INSERT INTO cust_comm (coca_cola)
         VALUES ('$comm10');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_11'])){

		if(!empty($_POST['c11'])
			
		){

		$comm11 = $_POST['c11'];

        $ex = "INSERT INTO cust_comm (juice)
         VALUES ('$comm11');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_12'])){

		if(!empty($_POST['c12'])
			
		){

		$comm12 = $_POST['c12'];

        $ex = "INSERT INTO cust_comm (pepsi)
         VALUES ('$comm12');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_13'])){

		if(!empty($_POST['c13'])
			
		){

		$comm13 = $_POST['c13'];

        $ex = "INSERT INTO cust_comm (tea)
         VALUES ('$comm13');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_14'])){

		if(!empty($_POST['c14'])
			
		){

		$comm14 = $_POST['c14'];

        $ex = "INSERT INTO cust_comm (Coffee)
         VALUES ('$comm14');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_15'])){

		if(!empty($_POST['c15'])
			
		){

		$comm15 = $_POST['c15'];

        $ex = "INSERT INTO cust_comm (anise)
         VALUES ('$comm15');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_16'])){

		if(!empty($_POST['c16'])
			
		){

		$comm16 = $_POST['c16'];

        $ex = "INSERT INTO cust_comm (tea_with_milk)
         VALUES ('$comm16');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_17'])){

		if(!empty($_POST['c17'])
			
		){

		$comm17 = $_POST['c17'];

        $ex = "INSERT INTO cust_comm (Nescafe)
         VALUES ('$comm17');";

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

<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'restaurant_db';

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit_18'])){

		if(!empty($_POST['c18'])
			
		){

		$comm18 = $_POST['c18'];

        $ex = "INSERT INTO cust_comm (Lemon)
         VALUES ('$comm18');";

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
