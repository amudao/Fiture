<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.2/bootstrap-footer-16/all.css">
    <link rel="stylesheet" href="about.css">
    <script src="jquery.js"></script>
    <title>About Fiture</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a id="logo" href="#">
            <i class="fa-sharp fa-solid fa-coins"></i>
            Fiture
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stocks.php">Stocks</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="about">About Us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <button onclick="location.href='login.php'">
                    <?php
                        if(!isset($_COOKIE["isSignedIn"])) {
                            echo 'Sign in';
                        } else if ($_COOKIE["isSignedIn"]!="1") {
                            echo 'Sign in';
                        } else {
                            echo 'Dashboard';
                        }
                    ?>
                    </button>
                </li>
                <li class="nav-item" id="weather">
                    <a class="nav-link" id="weather-data" onclick="switchUnit()"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="sliderdiv">
        <h1 id="sliderheading">
            The future of business<br>and financial management</h1>
    </div>

    <div class="aboutSection">
        <h1>About Us</h1>
        <hr class="abouthr">
        <p>
            We here at Shepenby are a group of young individuals who are ready to change the world.
            <br>
            Our group is made up of Benjamin Manicke, Peter Krumpholz, Oluwapamilerin Amuda, and Zhenyuan Gong.
            <br>
            <br>
            Throughout our work our team embodies the four pillars that Shepenby is built upon, integrity,
            determination, resilience, and innovation.
            <br>
            With this is mind, our goal is to make your life easier, so you can spend more time doing the things you
            enjoy.
            <br>
        </p>
    </div>

    <div class="aboutSection">
        <h1>Features</h1>
        <hr class="abouthr">
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <ul>
                    <li>User authentication with TOTP support</li>
                    <li>Users can enter their income and expense manually</li>
                    <li>Users can connect their bank accounts and transactions will be automatically synchronized</li>
                    <li>Users can view and export their financial reports in multiple formats (PDF, CSV, Excel)</li>
                    <li>Intuitive user interface with dashboard widgets which the users can manage and see all the
                        metrics in a glance</li>
                    <li>Create different goals and monitor the progress towards the goals</li>
                    <li>Track their overall expense and income across a selected number of accounts, aggregated on a
                        weekly basis, monthly basis, annual basis</li>
                    <li>Multi browser support (Chromium, Firefox)</li>
                    <li>Mobile device support</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="aboutSection">
        <h1>Team Members</h1>
        <hr class="abouthr">
        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col-sm"
                    style="background-image: url('images_group/tm_ben.jpg'); background-size: 100%; background-repeat: no-repeat; height: 300px;">
                </div>
                <div class="col-sm"
                    style=" background-image: url('images_group/tm_sheyi.jpg'); background-size: 100%; background-repeat: no-repeat; height: 300px">
                </div>
                <div class="col-sm"
                    style=" background-image: url('images_group/tm_henry.jpg'); background-size: 100%; background-repeat: no-repeat; height: 300px">
                </div>
                <div class="col-sm"
                    style=" background-image: url('images_group/tm_peter.png'); background-size: 100%; background-repeat: no-repeat; height: 300px">
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <h1>What Clients say about us</h1>
        <hr id="abouthr">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slide1.PNG" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slide2.PNG" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <footer class="footer-06">
        <div class="container">
            <div class="row align-items-center align-items-stretch mb-5">
                <div class="col-md-4 py-4 py-md-5 aside-stretch d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Subscribe to our</span>
                        <h3 class="heading-section">Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-8 py-4 py-md-5 d-flex align-items-center pl-md-5 aside-stretch-right">
                    <form action="#" class="subscribe-form w-100">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                            <button type="submit" class="form-control submit"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-3 col-lg-6 order-md-last">
                    <div class="row justify-content-end">
                        <div class="col-md-12 col-lg-9 text-md-right mb-md-0 mb-4">
                            <h2 class="footer-heading"><a href="#" class="logo">Fiture</a></h2>
                            <p class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved <i
                                    class="ion-ios-heart" aria-hidden="true"></i> <a href="https://colorlib.com"
                                    target="_blank"></a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Information</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Our Company</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Data</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Pricing</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Contact Us</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Support</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading" id="footerapplication">Application</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Download</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Bike Provider</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>How to Used</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">API</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Documentation</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Credential</a></li>
                                <li><a href="#" class="py-1 d-block"><span
                                            class="ion-ios-checkmark-circle-outline mr-2"></span>Developer info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(window).resize(function () {
            if ($(window).width() <= 722) {
                $('#opennav').css('display', 'block');
                $('#limaindiv').css('display', 'none');
            }
            else {
                $('#opennav').css('display', 'none');
                $('#limaindiv').css('display', 'flex');
                $('#closenav').css('display', 'none');
            }
        });
    
        $('#opennav').click(function () {
            $('#limaindiv').animate({
                height: 'toggle'
            });
            $('#limaindiv').css('background-color', 'white');
            $('#sliderheading').css('display', 'none');
            $('#sliderbtn').css('display', 'none');
            $(this).hide();
            $('#closenav').css('display', 'block');
        });
    
        $('#closenav').click(function () {
            $('#limaindiv').animate({
                height: 'hide'
            });
            $(this).hide();
            $('#opennav').css('display', 'block');
            $('#sliderheading').css('display', 'block');
            $('#sliderbtn').css('display', 'block');
        });
    
    </script>
    
    <script src="bootstrap-4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="./weather.js"></script>
</body>
</html>
