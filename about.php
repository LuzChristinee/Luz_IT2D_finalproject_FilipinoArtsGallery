<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Filipino Arts Gallery - About Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Information</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="history.php">History</a></li>
                                    <li><a href="creators.php">About Creators</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Artists</a>
                                <ul>
                                    <li><a href="artist1.php">Fernando Amorsolo</a></li>
                                    <li><a href="artist2.php">Juan Luna</a></li>
                                    <li><a href="artist3.php">Guillermo Tolentino</a></li>
                                    <li><a href="artist4.php">Benedicto Cabrera</a></li>
                                    <li><a href="artist5.php">Vicente Manansala</a></li>
                                    <li><a href="artist6.php">Victorio Edades</a></li>
                                    <li><a href="artist7.php">Ang Kiukok</a></li>
                                    <li><a href="artist8.php">Napoleon Abueva</a></li>
                                    <li><a href="artist9.php">Hernando Ocampo</a></li>
                                    <li><a href="artist10.php">Pacita Abad</a></li>
                                </ul>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading1.jpg" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Filipino Arts Gallery</h2>
                        <span>Welcome to an Art Gallery where you can see various artists and their works!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/mv.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>OUR MISSION &amp; VISION</h4>
                        <span>Filipino Arts Gallery aims to educate and integrate art appreciation to the pass-on generation. Aside from that, we are also aiming to develop local artists with passion to create and innovate art to flourish their talent and passion in arts.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Find the art in your heart. It is the conversion of imagination to reality.<i class="fa fa-quote-right"></i></p>
                        </div>
                        <p>Filipino Arts Gallery seeks to promote and develop Philippine Visual Arts. We aim to be a creative ground where anyone can have an access to seeing our Filipino artists. This would help us t appreciate art, to enrich our cultural experience and strengthen nationalism.</p>
   


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->


 
    <!-- ***** Footer Start ***** -->
    <footer>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright ?? 2022 Filipino Arts Gallery. All Rights Reserved. 
                        
                        <br>Template Credits:<a href="https://templatemo.com" target="_parent" title="free css templates"> TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- ***** Footer ends ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
