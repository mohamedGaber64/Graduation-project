
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

    <link rel="stylesheet" href="upload/owl.carousel.min.css" >
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
            <a href="chef.php?lang=bs"> <?php echo $lang['lang_bs']; ?> </a>
        </div>

        <div class="en">
            <a href="chef.php?lang=en"> <?php echo $lang['lang_en']; ?> </a>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="all" id="all">
        <div>
        <p id="j" class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"> 
            <?php echo $lang['Quickly ask']; ?>
         </p> 
        <h3 class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5"> 
            <?php echo $lang['You will find what you need']; ?>
         </h3>
        </div>
    </div>

    <div>
        <h2 class="text-center"> <?php echo $lang['Our Master Chef']; ?> </h2>
    </div>

    <div class="owl-carousel owl-theme container text-center">
        <div class="item k1" style="margin-top: 30px;">
        <p>
        <img src="images/gettyimages-486860378-612x612.jpg" alt=""/>
        <h3 style="color: white;"> <?php echo $lang['John Gustavo']; ?> </h3>
        <p style="color: white;"> <?php echo $lang['CEO, Co Founder']; ?> </p>
        <p style="color: yellow;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p>
        <p style="color: white;"> <?php echo $lang['c']; ?> </p>
        </div>
    
        <div class="item k1" style="margin-top: 30px;">
        
            <img src="images/cook-196932_960_720.webp" alt=""/>
            <h3 style="color: white;"> <?php echo $lang['Michelle Fraulen']; ?> </h3>
            <p style="color: white;"> <?php echo $lang['Head Chef']; ?> </p>
            <p style="color: yellow;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p>
            <p style="color: white;"> <?php echo $lang['c']; ?> </p>
        </div>
    
        <div class="item k1" style="margin-top: 30px;">
            
            <img src="images/man-890885_960_720.webp" alt=""/>
            <h3 style="color: white;"> <?php echo $lang['Alfred Smith']; ?> </h3>
            <p style="color: white;"> <?php echo $lang['Chef Cooker']; ?> </p>
            <p style="color: yellow;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p>
            <p style="color: white;"> <?php echo $lang['c']; ?> </p>
        
        </div>
        
        <div class="item k1" style="margin-top: 30px;">
            
            <img src="images/photo-1574966740793-953ad374e8fe.webp" alt=""/>
            <h3 style="color: white;"> <?php echo $lang['Antonio Santibanez']; ?> </h3>
            <p style="color: white;"> <?php echo $lang['Chef Cooker']; ?> </p>
            <p style="color: yellow;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p>
            <p style="color: white;"> <?php echo $lang['c']; ?> </p>
        
        </div>
        <div class="item k1" style="margin-top: 30px;">
            
            <img src="images/waitress-2376728_960_720.webp" alt=""/>
            <h3 style="color: white;"> <?php echo $lang['Farnk Martin']; ?> </h3>
            <p style="color: white;"> <?php echo $lang['Chef Cooker']; ?> </p>
            <p style="color: yellow;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </p>
            <p style="color: white;"> <?php echo $lang['c']; ?> </p>
    
        </div>
    </div>

    <div class="pass">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="images/istockphoto-1177900338-1024x1024.jpg" alt="" style="width:100%">            
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 x">

            <h2> <?php echo $lang['Welcome to Taste.it']; ?> </h2>
            <p> <?php echo $lang['a']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 t"> </div>

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
        <p class="text-center"> <?php echo $lang['Copyright ©2021 All rights reserved'] ?>
          &hearts; <?php $lang['beats This template is made with  by Colorlib'] ?> </p>

        <span> <i class="fas fa-chevron-up fa-3x tt"></i> </span>

      </div>

    <script src="upload/wow.min.js">  </script>
    <script src="upload/jquery-3.5.0.min.js">  </script>
    <script src="upload/bootstrap.min.js">  </script>
    <script src="upload/fontawesome.min.js">  </script>
    <script src="upload/jquery.countTo.js">  </script>
    <script src="upload/owl.carousel.min.js">  </script>
    <script src="js/plugs.js">  </script>
    <script src="js/main.js">  </script>

</body>

</html>