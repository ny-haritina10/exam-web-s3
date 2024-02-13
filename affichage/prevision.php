<?php
    require_once("../php/model/BaseModel.php");
    $parcelles  = BaseModel::get_all("Parcelle");
    $cueilleurs  = BaseModel::get_all("Cueilleur");
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta Tage -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Green Leaf Tea Shop is a modern and functional html Template best suitable for your Tea Company & Online Tea Shop. Green Leaf Tea Shop has an intuitive visual interface and informative layout that looks wonderful on any platform, since it’s fully responsive ">
    <meta name="keywords"
        content="	coffee, coffee shop, drink, food, gift shop, online shop, organic, organic tea, responsive, store, tea, tea company, Tea Shop, template, visual composer cv, portfolio, cv Html, Html, Html5, portfolio tamplate, personal website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Website Title Here -->
    <title>Tea Shop - Green Leaf Ecommerce HTML5 Tamplate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <!-- All Stylesheet Here -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="./front-office/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./front-office/assets/css/responsive.css">

    <style>
        input[type="text"], 
        input[type="number"],
        input[type="date"],  
        input[type="email"], 
        input[type="password"], 
        input[type="tel"], 
        input[type="submit"], 
        input[type="search"], 
        button[type="submit"],
        textarea {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        box-shadow: none;
        padding: 12px 15px;
        -webkit-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
        width: 100%;
        min-height: 45px;
        margin-bottom: 15px;
        outline: none;
        }

        .bouton-vert {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>
    <div id="home"></div>
    <!-- Start The Pageloader -->
    <div class="teashop-pageloader">
        <div class="preloader-spinner"></div>
    </div>
    <!-- Pageloader Ends Here -->

    <!-- Start The Header Here -->
    <header>
        <!-- Start Header Top Here -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar text-right">
                            <span><i class="fa fa-phone"></i>+880 123 456 789</span>
                            <span><a href="#"><i class="fa fa-cart-plus"></i>$0.00</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ends Header Top Here -->

        <!-- Start The Navigation Here -->
        <nav class="navigation-area stickyNav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="brand-logo">
                        <a class="" href="index.html"><img src="./front-office/assets/img/logo.png" alt="teashop"></a>
                    </h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav text-right">
                    <li class="active smooth-scroll"><a href="index_front_office.php">Home</a></li>
                        <li class="smooth-scroll"><a href="#product">Product </a></li>
                        <li class="smooth-scroll"><a href="index.php">Log Out </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation Ends Here -->
    </header>
    <!-- Header Ends Here -->


    <!-- Start Product Here -->
    <section class="section-padding" id="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Start Section Header Here -->
                    <div class="section-header text-center">
                        <h3>Tea is a drink of health <span>& beauty for you</span></h3>
                        <form id="prevision-form">
                            <p>Date: <input type="date" name="date-prevision"></input></p>
                            <input type="submit" value="Valider"  class="bouton-vert" >
                        </form>
                    </div>
                    <!-- Ends Section Header Here -->
                </div>
            </div>
            <div class="row" id="row-card">
                    
            </div>
        </div>
    </section>
    <!-- Ends Product Here -->
    
    <!-- Start Footer Here -->
    <footer class="section-padding" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top text-center">
                        <img src="./front-office/assets/img/logo.png" alt="">
                        <!-- Social Icons -->
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#"><i class="fa fa-linkedin"></i> Linkedin</a>
                        </div>
                        <!-- Social Icons -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                            &copy; Copyright <a href="https://themeforest.net/user/radiustheme"
                                target="_blank">RadiusTheme</a> ETU2716 - ETU2597 - ETU2632 <a
                                href="https://themeforest.net/user/themexone" target="_blank">themexone</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Ends Footer Here -->

    

    <!-- 
		All Script Here
	================================ -->
    <script src="../js/prevision.js"></script>

    <script type="text/javascript" src="./front-office/assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/bootstrap-3.3.7.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/sticky.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/easing.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/isotope-3.0.4.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/magnific-popup.min.js"></script>
    <script type="text/javascript" src="./front-office/assets/js/wow-1.3.0.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="./front-office/assets/js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcTTWvVJPW54aA5PEWrQTldVBFDhC0c-Q"></script>
    <!-- Contact Form -->
    <script type="text/javascript" src="./front-office/assets/js/contact-form.js"></script>
    <!-- Active Scripts Here -->
    <script type="text/javascript" src="./front-office/assets/js/active.js"></script>
</body>

</html>