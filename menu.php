
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
            <a href="menu.php?lang=bs"> <?php echo $lang['lang_bs']; ?> </a>
        </div>

        <div class="en">
            <a href="menu.php?lang=en"> <?php echo $lang['lang_en']; ?> </a>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="all" id="all">
        <div>
        <p id="j" class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
         <?php echo $lang['Ask while you are at home']; ?> </p> 
        <h3 class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5"> 
            <?php echo $lang['Your request is with us']; ?>
         </h3>
        </div>
    </div>

    <div class="a" style="overflow-x: hidden;">
        <p class="text-center wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s">
            <?php echo $lang['Private Dinners & Happy Hours']; ?>
        </p>
    </div>

    <div class="b" style="overflow-x: hidden;">

        <p class="text-center"> <?php echo $lang['Specialties']; ?> </p>
        <h2 class="text-center"> <?php echo $lang['Our Menu']; ?> </h2>

    </div>

    <div class="c" style="overflow-x: hidden;">
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a1 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="2s">
            
            <h3 class="text-center"> <?php echo $lang['BREAKFAST']; ?> </h3>
            <img src="images/pexels-photo-5745991.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['fish']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c1" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-2418486.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['chicken']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c2" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_2" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-4210862.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['meat']; ?> </p>

            <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c3" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_3" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a2 wow bounceInDown" style="overflow-x: hidden;" data-wow-duration="2s" data-wow-delay="2s">

            <h3 class="text-center"> <?php echo $lang['LUNCH']; ?> </h3>
            <img src="images/pexels-photo-5702776.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['rice']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c4" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_4" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-4101805.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['Potatoes']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c5" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_5" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-2983099.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['vegetables']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c6" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_6" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a3 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">

            <h3 class="text-center"> <?php echo $lang['DINNER']; ?> </h3>
            <img src="images/pexels-photo-5419342.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['eggs']; ?> </p>

            <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c7" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_7" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-5718117.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['ice cream']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c8" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_8" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/pexels-photo-3764348.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Chocolate']; ?> </p>

            <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c9" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_9" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

    </div>    

    <div class="c" style="overflow-x: hidden;">
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a1 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
            
            <h3 class="text-center"> <?php echo $lang['cold Drinks']; ?> </h3>
            <img src="images/can-443123_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['coca cola']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c10" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_10" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/orange-juice-67556_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['juice']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c11" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_11" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/beverage-1869598_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['pepsi']; ?> </p>

             <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c12" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_12" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a2 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">

            <h3 class="text-center"> <?php echo $lang['Hot Drinks']; ?> </h3>
            <img src="images/drink-156144_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['tea']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c13" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_13" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/coffee-842020_960_720.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['Coffee']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c14" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_14" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/wine-1761613_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['anise']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c15" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_15" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a3 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">

            <h3 class="text-center"> <?php echo $lang['variety drinks']; ?> </h3>
            <img src="images/coffee-3120750_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['tea with milk']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c16" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_16" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/istockphoto-1177900338-1024x1024.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Nescafe']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c17" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_17" value="<?php echo $lang['Send'] ?>">                
            </form>

            <div class="te">  </div>

            <img src="images/coffee-2714970_960_720.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Lemon']; ?> </p>

              <form method="POST" action="connect_4.php" class="comm">
                <input type="text" name="c18" placeholder="<?php echo $lang['enter your opion'] ?>" autocomplete="off" required>
                <input type="submit" name="submit_18" value="<?php echo $lang['Send'] ?>">                
            </form>

        </div>

    </div>

    <div class="pass">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="images/35102094-senior-professional-chef-man-and-group-of-people.jpg" alt="" style="width:100%">            
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
    <script src="js/plugs.js">  </script>

</body>

</html>