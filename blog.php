
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
            <a href="blog.php?lang=bs"> <?php echo $lang['lang_bs']; ?> </a>
        </div>

        <div class="en">
            <a href="blog.php?lang=en"> <?php echo $lang['lang_en']; ?> </a>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="all" id="all">
        <div>
        <p id="j" class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"> 
            <?php echo $lang['All you need']; ?>
         </p> 
        <h3 class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5"> 
            <?php echo $lang['You will find it here']; ?>
         </h3>
        </div>
    </div>

    <div class="on">
        <h2 class="text-center"> <?php echo $lang['pay online'] ?> </h2>
        <form method="POST" action="connect_3.php">

            <p class="text-center">
             <input name="na" type="text" placeholder="<?php echo $lang['name'] ?>" autocomplete="off" required/>
            </p>

            <p class="text-center">
             <input name="em" type="text" placeholder="<?php echo $lang['email'] ?>" autocomplete="off" required/>
            </p>

            <p class="text-center">
             <input name="vi" type="text" placeholder="<?php echo $lang['enter numer of visa'] ?>" autocomplete="off" required/>
            </p>

            <p class="text-center">
             <input name="cre" type="text" placeholder="<?php echo $lang['enter numer of credit'] ?>" autocomplete="off" required/>
            </p>

            <p class="text-center">
             <input name="submit" type="submit" value="<?php echo $lang['Submit'] ?>"/>
            </p>

        </form>
    </div>

    <div class="ex" style="margin-top: 40px;">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/negative-spaces.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/istockphoto-516329534-612x612.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/istockphoto-944478708-612x612.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;">
                    <?php echo $lang['q']; ?>
                 </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

      </div>

      <div class="ex">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/117222989-people-taking-food.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/35102094-senior-professional-chef-man-and-group-of-people.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/pizza-3007395__340.webp" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN'] ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['read more'] ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

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

            <p>  <?php echo $lang['Subscribe to receive all new'] ?> </p>
           
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
    <script src="js/plugs.js">  </script>

</body>

</html>