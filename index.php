
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
            <li> <a href="#i"> <?php echo $lang['Sign Up'] ?> </a> </li>
        </ul>
            
    </header>

    <div class="lang">

        <div class="ar">
            <a href="index.php?lang=bs"> <?php echo $lang['lang_bs']; ?> </a>
        </div>

        <div class="en">
            <a href="index.php?lang=en"> <?php echo $lang['lang_en']; ?> </a>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="all" id="all">
        <div>
        <p id="j" class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"> 
            <?php echo $lang['taste.it restaurant']; ?>
         </p> 
        <h3 class="text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5"> 
            <?php echo $lang['best quality']; ?>
         </h3>
        </div>
    </div>

    <div class="pass">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <video width="100%" height="400px" controls autoplay loop >
                <source src="upload/a.mkv" type="video/mp4">
                <source src="upload/a.mkv" type="video/ogg">
            </video>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 x">

            <h2> <?php echo $lang['Welcome to Taste.it']; ?> </h2>
            <p> <?php echo $lang['a']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 t"> </div>

    </div>

    <div class="clearfix"></div>

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

            <div class="te">  </div>

            <img src="images/pexels-photo-2418486.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['chicken']; ?> </p>

            <div class="te">  </div>

            <img src="images/pexels-photo-4210862.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['meat']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a2 wow bounceInDown" style="overflow-x: hidden;" data-wow-duration="2s" data-wow-delay="2s">

            <h3 class="text-center"> <?php echo $lang['LUNCH']; ?> </h3>
            <img src="images/pexels-photo-5702776.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['rice']; ?> </p>

            <div class="te">  </div>

            <img src="images/pexels-photo-4101805.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['Potatoes']; ?> </p>

            <div class="te">  </div>

            <img src="images/pexels-photo-2983099.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['vegetables']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a3 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">

           <h3 class="text-center"> <?php echo $lang['DINNER']; ?> </h3>
            <img src="images/pexels-photo-5419342.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['eggs']; ?> </p>

            <div class="te">  </div>

            <img src="images/pexels-photo-5718117.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['ice cream']; ?> </p>

            <div class="te">  </div>

            <img src="images/pexels-photo-3764348.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Chocolate']; ?> </p>

        </div>

    </div>

    <div class="c" style="overflow-x: hidden;">
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a1 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
            
            <h3 class="text-center"> <?php echo $lang['cold Drinks']; ?> </h3>
            <img src="images/can-443123_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['coca cola']; ?> </p>

            <div class="te">  </div>

            <img src="images/orange-juice-67556_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['juice']; ?> </p>

            <div class="te">  </div>

            <img src="images/beverage-1869598_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $29 </p>
            <p class="text-center"> <?php echo $lang['pepsi']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a2 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">

           <h3 class="text-center"> <?php echo $lang['Hot Drinks']; ?> </h3>
            <img src="images/drink-156144_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['tea']; ?> </p>

            <div class="te">  </div>

            <img src="images/coffee-842020_960_720.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['Coffee']; ?> </p>

            <div class="te">  </div>

            <img src="images/wine-1761613_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $35 </p>
            <p class="text-center"> <?php echo $lang['anise']; ?> </p>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a3 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">

            <h3 class="text-center"> <?php echo $lang['variety drinks']; ?> </h3>
            <img src="images/coffee-3120750_960_720.webp" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['tea with milk']; ?> </p>

            <div class="te">  </div>

            <img src="images/istockphoto-1177900338-1024x1024.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Nescafe']; ?> </p>

            <div class="te">  </div>

            <img src="images/coffee-2714970_960_720.jpg" alt="" />
            <p class="text-center" style="color: red; font-size: 20px;"> $40 </p>
            <p class="text-center"> <?php echo $lang['Lemon']; ?> </p>

        </div>

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
            <img src="images/cafe-3537801_960_720.webp" alt="..." style="height: 500px;">
              
          </div>
          <div class="item">
            <img src="images/waitress-2376728_960_720.webp" alt="..." style="height: 500px;">
              
          </div>
          
          <div class="item">
            <img src="images/food-1351287_960_720.jpg" alt="..." style="height: 500px;">
              
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

      <div class="ch">
        <p class="text-center wow bounceInRight" data-wow-duration="2s" data-wow-delay="2s"> 
            <?php echo $lang['Our Master Chef']; ?>
         </p>
      </div>

      <div class="cheief">

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            
            <img src="images/gettyimages-486860378-612x612.jpg" alt="">
        
            <div>
                <h2> <?php echo $lang['John Gustavo']; ?> </h2>
                <p> <?php echo $lang['Head Chef']; ?> </p>
                <p> <?php echo $lang['c']; ?> </p>
            </div>
        
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> 

            <img src="images/gettyimages-154165628-612x612.jpg" alt="">

            <div>
                <h2> <?php echo $lang['Michelle Fraulen']; ?> </h2>
                <p> <?php echo $lang['Chef Cooker']; ?> </p>
                <p> <?php echo $lang['c']; ?> </p>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            
            <img src="images/photo-1574966740793-953ad374e8fe.webp" alt="">

            <div>
                <h2> <?php echo $lang['Alfred Smith']; ?> </h2>
                <p> <?php echo $lang['Head Chef']; ?> </p>
                <p> <?php echo $lang['c']; ?> </p>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            
            <img src="images/cook-196932_960_720.webp" alt="">

            <div>
                <h2> <?php echo $lang['Antonio Santibanez']; ?> </h2>
                <p> <?php echo $lang['Chef Cooker']; ?> </p>
                <p> <?php echo $lang['c']; ?> </p>
            </div>

        </div>

      </div>

      <div class="clearfix"></div>

      <div class="again">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <h2> <?php echo $lang['Perfect Ingredients']; ?> </h2>
            <p> <?php echo $lang['b']; ?> </p>

             <button id="one"> <?php echo $lang['learn more']; ?> </button>

        </div>

      </div>

      <div class="clearfix"></div>

      <div>
          <h2 class="text-center"> <?php echo $lang['best types']; ?> </h2>
      </div>

      <div class="ex">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/pizza-2802332_960_720.webp" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN']; ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['learn more']; ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/istockphoto-1204634641-170667a.jpg" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN']; ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['learn more']; ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="images/beverage-1869598_960_720.webp" alt="">

            <div>
                <p style="padding-top: 20px;"> <?php echo $lang['AUGUST 3, 2020 ADMIN']; ?> </p>
                <h3 style="margin-left: 10px;"> <?php echo $lang['q']; ?> </h3>
                <button class="one"> <?php echo $lang['learn more']; ?> </button>
                <span style="float: right;"> <i class="fas fa-comment fa fa-1x"></i> </span>
                <div>  </div>
            </div>

        </div>

      </div>

      <div class="clearfix"></div>

      <div class="fin">

        <h2 class="text-center"> <?php echo $lang['We Make Delicious & Nutritious Food']; ?> </h2>
        <p class="text-center"> <button class="two"> <?php echo $lang['Book now']; ?> </button> </p>

      </div>

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
           
            <form id="i">
                <input type="email" name="" placeholder="<?php echo $lang['sign up'] ?>" required autocomplete="off">
                <input type="submit" value="<?php echo $lang['Subcribe'] ?>">
            </form>
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
    <script src="js/plugs.js">  </script>

</body>

</html>