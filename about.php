
<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="description" content="hello world">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title> <?php echo $lang['ti']; ?> </title>

    <link rel="stylesheet" href="upload/animate.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="icon" href="images/pizza-2802332_960_720.webp">        
    <link rel="stylesheet" type="text/css" href="upload/all.css">    
    <link rel="stylesheet" type="text/css" href="upload/bootstrap.css">    
    <link rel="stylesheet" type="text/css" href="responsive/l.css">
    <link rel="stylesheet" type="text/css" href="responsive/medium.css">
    <link rel="stylesheet" type="text/css" href="responsive/tablet.css">
    <link rel="stylesheet" type="text/css" href="responsive/phone.css">

</head>

<body style="overflow-x: hidden;">

    <header style="overflow-x: hidden;">

        <h3> <?php echo $lang['taste'] ?> <span style="color: red;"> <?php echo $lang['.it'] ?> </span> </h3>

        <div class="test"> <i class="fas fa-list fa fa-2x"></i> </div>

        <ul>
            <li> <a href="index.php"> <?php echo $lang['home'] ?> </a> </li>
            <li> <a href="about.php"> <?php echo $lang['about'] ?> </a> </li>
            <li> <a href="chef.php"> <?php echo $lang['cheff'] ?> </a> </li>
            <li> <a href="menu.php"> <?php echo $lang['menu'] ?> </a> </li>
            <li> <a href="reservation.php"> <?php echo $lang['make order'] ?> </a> </li>
            <li> <a href="blog.php"> <?php echo $lang['pay online'] ?> </a> </li>
            <li> <a href="concat.php"> <?php echo $lang['contact'] ?> </a> </li>
            <li> <a href="index.php"> <?php echo $lang['Sign Up'] ?> </a> </li>
        </ul>
            
    </header>

    <div class="lang">

        <div class="ar">
            <a href="about.php?lang=bs"> <?php echo $lang['lang_bs']; ?> </a>
        </div>

        <div class="en">
            <a href="about.php?lang=en"> <?php echo $lang['lang_en']; ?> </a>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="all" id="all">
        <div>
        <p id="j" class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php echo $lang['choose any time']; ?> </p> 
        <h3 class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5">
          <?php echo $lang['favourite orders']; ?> </h3>
        </div>
    </div>

    <div class="again">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <h2> <?php echo $lang['Perfect Ingredients']; ?> </h2>
            <p> <?php echo $lang['ff']; ?> </p>

             <button id="one"> <?php echo $lang['learn more']; ?> </button>

        </div>

      </div>

      <div class="clearfix"></div>

      <div class="ab1">

        <p class="text-center">
        <span class="timer" data-from="0" data-to="100"></span>
        <span class="timer" data-from="0" data-to="4000"></span>
        <span class="timer" data-from="0" data-to="10"></span>
        <span class="timer" data-from="0" data-to="10000"></span>
        </p>

      </div>

      <div class="fin" style="margin-top: -20px;">

        <h2 class="text-center"><?php echo $lang['We Make Delicious & Nutritious Food']; ?> </h2>
        <p class="text-center"> <button class="two"> <?php echo $lang['Book A OrderNow']; ?> </button> </p>

      </div>

      <div id="carousel-example-generic" class="carousel slide cu" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="images/top-view-delicious-vegetable-soup-with-olive-oil-different-seasonings-dark-blue-background-ingredient-vegetable-soup-salad-oil_140725-64564.jpg" alt="..." style="height: 500px;">
          </div>

          <div class="item">
            <img src="images/group-friends-eating-together_53876-9934.jpg" alt="..." style="height: 500px;">
          </div>
          
          <div class="item">
            <img src="images/gettyimages-1171787426-2048x2048.jpg" alt="..." style="height: 500px;">              
          </div>

          <div class="item">
            <img src="images/istockphoto-664222314-170667a.jpg" alt="..." style="height: 500px;">              
          </div>

        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="clearfix"></div>

      <div class="res">

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 u">

            <h3> <?php echo $lang['TASTE.IT'] ?> </h3>
            <p> <?php echo $lang['far']; ?> </p>
            <p> 
                <i class="fab fa-twitter fa-2x"> <a href="#">  </a> </i>
                <i class="fab fa-facebook fa-2x"> <a href="#">  </a> </i>
                <i class="fab fa-instagram fa-2x"> <a href="#">  </a> </i>
            </p>

        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <h3> <?php echo $lang['OPEN HOURS'] ?> </h3>

            <div style="float: left;">
               <p> <?php echo $lang['Monday'] ?> </p>
                <p> <?php echo $lang['Tuesday'] ?> </p>
                <p> <?php echo $lang['Wednesday'] ?> </p>
                <p> <?php echo $lang['Thursday'] ?> </p>
                <p> <?php echo $lang['Friday'] ?> </p>
                <p> <?php echo $lang['Saturday'] ?> </p>
                <p> <?php echo $lang['Sunday'] ?> </p>

            </div>

            <div style="float: right;color: rgb(255, 255, 255,0.4);">
                <p> 9:00 - 24:00 </p>
                <p> 9:00 - 24:00 </p>
                <p> 9:00 - 24:00 </p>
                <p> 9:00 - 24:00 </p>
                <p> 9:00 - 02:00 </p>
                <p> 9:00 - 02:00 </p>
                <p> <?php echo $lang['Closed'] ?> </p>

                <div class="clearfix"></div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 q">

            <h3> <?php echo $lang['INSTAGRAM'] ?> </h3>

            <div>
            <img src="images/beverage-1869598_960_720.webp" alt="">
            <img src="images/brick-wall-1834784_960_720.webp" alt="">
            <img src="images/buffet-315691_960_720.webp" alt="">
            <img src="images/cafe-3537801_960_720.webp" alt="">
            <img src="images/coffee-3120750_960_720.webp" alt="">
            <img src="images/cheese-1914114_960_720.jpg" alt="">
            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 v">

            <h3> <?php echo $lang['NEWSLETTER'] ?> </h3>

            <p> <?php echo $lang['Subscribe to receive all new'] ?> </p>
           
            <p> 
                <i class="fab fa-youtube fa-4x"> <a href=""> </a> </i>
                <i class="fab fa-telegram fa-4x"> <a href=""> </a> </i>
            </p>            

        </div>

      </div>


      <div class="po">
        <p class="text-center"> 
          <?php echo $lang['Copyright ©2021 All rights reserved'] ?>
          &hearts; <?php $lang['beats This template is made with  by Colorlib'] ?>
         </p>

        <span> <i class="fas fa-chevron-up fa-3x tt"></i> </span>

      </div>

    <script src="upload/wow.min.js">  </script>
    <script src="upload/jquery-3.5.0.min.js">  </script>
    <script src="upload/bootstrap.min.js">  </script>
    <script src="upload/fontawesome.min.js">  </script>
    <script src="upload/jquery.countTo.js">  </script>
    <script src="js/plugs.js">  </script>

</body>

</html>