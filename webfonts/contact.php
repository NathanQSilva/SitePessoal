<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'mail@nathanqsilva.com.br';
    $mail->Password = 'S3c77$1Nfr488';
    $mail->setFrom('mail@nathanqsilva.com.br', 'Mail sender');
    $mail->addAddress('contato@nathanqsilva.com.br', 'Nathan Q Silva');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Contato via Website';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <title>Nathan Q. Silva</title>
    <meta name="description" content="Nathan Q. Silva">
    <meta name="keywords" content="infrastructure analyst">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="weexen">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/NS.ico">
    <link rel="apple-touch-icon" href="img/NS.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/NS.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/NS.png">

    <!-- All CSS Called Here -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="theme-color" content="#f12365">
</head>

<body>
    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader"></div>
    </div> <!-- Preloader end -->

    <!-- Custom Cursor -->
    <div class="pointer" id="pointer"></div>
    <!-- Custom Cursor end -->

    <!-- Sidebar -->
    <header class="sidebar">
        <div class="backgroundShape-left"></div>
        <div class="sidebar-content clearfix">
            <!-- Main Menu Button -->
            <div class="menu-icon">
                <button id="nav_btn" class="pointer-open"><i class="fas fa-bars"></i></button>
            </div> <!-- Main Menu Button End -->
            <!-- My Image -->
            <div class="author-image theme-bg-color">
                <img src="img/author/3.png" alt="author-image">
            </div> <!-- My Image End -->
            <!-- My Social Links -->
            <div class="author-social-icons text-center">
                <ul>
                    <!--<li><a href="#" class="pointer-href"><i class="fab fa-facebook-f"></i></a></li>-->
                    <!--<li><a href="#" class="pointer-href"><i class="fab fa-twitter"></i></a></li>-->
                    <!--<li><a href="#" class="pointer-href"><i class="fas fa-basketball-ball"></i></a></li>-->
                    <!--<li><a href="#" class="pointer-href"><i class="fab fa-behance"></i></a></li>-->
                    <li><a href="https://www.linkedin.com/in/nathan-quadros-2a623b181/" class="pointer-href"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div> <!-- My Social Links End -->
            <!-- Copyright -->
            <div class="text-center">
                <p><a href="#">"I have not failed. I've just found 10,000 ways that won't work."</a></p>
                <p><a>Thomas Edison</a>
            </div> <!-- Copyright End -->
        </div>
    </header> <!-- Sidebar end -->

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>contact</span></h2>
            <p class="contact-title-intro">Start your Journey Right Now! Please don’t hesitate to contact with me for your project.</p>                
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="contact-header-bg">                
            <!-- Contact Information -->
            <div class="contact-info d-flex justify-content-between">
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <div class="text-box">
                        <a href="#" class="pointer-small">+55 (42) 9 8816-8668</a>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-paper-plane"></i></span>
                    </div>
                    <div class="text-box">
                        <a href="#" class="pointer-small">contato@nathanqsilva.com.br</a>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-home"></i></span>
                    </div>
                    <div class="text-box">
                        <p>Ponta Grossa - Paraná <br>Brazil</p>
                    </div>
                </div>
            </div> <!-- Contact Information End -->
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">                      
                <!-- Contact Form -->
                <div class="contact_form">
                    <form class="contact__form" method="post">
                        <!-- Form Message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none"
                                    role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- Form Message End -->
                        <!-- Form Element -->
                        <div class="form_input_box">
                            <label for="name"></label>
                            <input class="pointer-input" name="name" type="text" placeholder="Your name" required>
                        </div>
                        <div class="form_input_box">
                            <label for="email"></label>
                            <input class="pointer-input" name="email" type="email" placeholder="Your email" required>
                        </div>
                        <div class="form_input_box">
                            <input class="pointer-input" name="subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="form_input_box">
                            <label for="message"></label>
                            <textarea class="pointer-input" name="message" rows="3" placeholder="Your message" required></textarea>
                        </div>
                        <button class="form-submit-btn pointer-href" name="submit" type="submit">Send Message</button>
                        <!-- Form Element End -->
                    </form>
                </div> <!-- Contact Form End -->
            </div>
            <div class="col-xl-6 col-lg-6">
                <div id="map"></div>
            </div>
        </div>
    </main> <!-- Single page end -->

    <!-- ======================================= -->
                    <!-- MAIN MENU -->
    <!-- ======================================= -->
    <!-- Menu Container -->
    <nav class="menu-container overlay-bg">
        <!-- Menu Close -->
        <div class="menu-close pointer-large"></div>

        <!-- Sub Menu Close -->
        <div class="submenu-close-box">
            <div class="submenu-close pointer-large">
                <button type="button"><i class="fas fa-arrow-left"></i>BACK</button>
            </div>
        </div><!-- Sub Menu Close End -->

        <!-- Main Menu -->
        <ul class="main-menu overlay-bg">
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change active">
                <a href="index.html" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="home">.home</span>
                </a>
                <div class="mouseover-image" style="background-image: url(img/nav-hover/<!--home.png-->);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="about.html" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="about">.about</span>
                </a>
                <div class="mouseover-image" style="background-image: url(img/nav-hover/<!--about.png-->);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="resume.html" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="resume">.resume</span>
                </a>
                <div class="mouseover-image" style="background-image: url(img/nav-hover/<!--resume.png-->);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="http://cafecomnoc.nathanqsilva.com.br/" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="blog">.blog</span>
                </a>
                <div class="mouseover-image" style="background-image: url(img/nav-hover/<!--blog.png-->);"></div>
            </li>
            <!-- Menu Box End -->
            <!-- Menu Box -->
            <!--<li class="nav-box mouseover-image-change submenu-open">
                <a class="pointer-large nav-link">-->
                    <!--<span class="nav-btn" data-text="portfolio">.portfolio</span>
                </a>-->
                <!-- Sub Menu -->
                <!--<ul class="submenu">-->
                    <!--<li class="nav-box">
                        <a href="portfolio.html" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio">.portfolio</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio-archives.html" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio archives">.portfolio archives</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio-details.html" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio details">.portfolio details</span>
                        </a>
                    </li>
                </ul> Sub Menu End -->
                <!--<div class="mouseover-image" style="background-image: url(img/nav-hover/portfolio.png);"></div>-->
            <!--</li>Menu Box End
            Menu Box -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="contact.php" class="pointer-large nav-link">
                    <span class="nav-btn active" data-text="contact">.contact</span>
                </a>
                <div class="mouseover-image" style="background-image: url(img/nav-hover/<!--contact.png-->);"></div>
            </li><!-- Menu Box End -->
        </ul><!-- Main Menu End -->
    </nav><!-- Menu Container End -->
    <button id="back_to_top" class="btnEntrance pointer-href"><i class="fas fa-arrow-up"></i></button>

    <!-- All JS Called Here -->
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1M-aCiXZgPLBvX_jbcUCR-7D3yx7g7eg"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/main.js"></script>
</body>


</html>