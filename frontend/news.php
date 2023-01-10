<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-4.6.2/bootstrap-footer-16/all.css">
        <link rel="stylesheet" href="news.css">
        <script src="./news.js" defer></script>
        <title>News</title>
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
                        <a class="nav-link" href="home.php">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="news">News<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stocks.php">Stocks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
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
            <img src="images/news1.jpg" alt="">
            <h1>Search for news and articles <br> relating to companies you are interested in!</h1>
            <hr>
            <p>
                Below, you can type in a companies ticker (ex: AAPL) to view their current stock <br>
                value, opening value, closing value, and several other statistics.
            </p>
        </div>

        <div class="search">
            <input type="text" class="search-bar" placeholder="Search">
            <button onclick="search()">Go!</button>
        </div>
        <h1 id="topstories">Top Stories</h1>

        <div class="container" id="main1">
            <div class="row">
                <div class="col-sm">
                    <img src="images/news2.avif" alt="" class="linkImg">
                </div>
                <div class="col-sm">
                    <hr>
                    <h3 class="title">LVMH shrugs off global economic worries amid solid luxury demand</h3>
                    <i class="author">Leila Abboud in Paris</i>
                    <p class="description">
                        <br>
                        <br>
                        LVMH, the world’s biggest luxury group, showed little sign of
                        weakening demand for its high-end handbags and champagne in the
                        third quarter despite growing fears over the global economy....
                    </p>
                    <a href="" class="url">Click to Read More!</a>

                </div>

            </div>
        </div>

        <div class="container" id="main2">
            <div class="row">
                <div class="col-sm">
                    <h4 class="smallTitle1">BoE has no intention of extending intervention past Friday, governor says</h4>
                    <i class="smallAuthor1">Chris Giles in London</i>
                    <br>
                    <a href="" class="smallUrl1">Click to Read More!</a>
                    <hr>
                </div>
                <div class="col-sm"> 
                    <h4 class="smallTitle2">American Airlines boosts third-quarter revenue guidance</h4>
                    <i class="smallAuthor2">Steff Chávez in Chicago</i>
                    <br>
                    <a href="" class="smallUrl2">Click to Read More!</a>
                    <hr>
                </div>
                <div class="col-sm"> 
                    <h4 class="smallTitle3">Ruling on holding Scottish independence vote may take ‘some months’</h4>
                    <i class="smallAuthor3">Lukanyo Mnyanda in Edinburgh</i>
                    <br>
                    <a href="" class="smallUrl3">Click to Read More!</a>
                    <hr>
                </div>
                <div class="col-sm"> 
                    <h4 class="smallTitle4">UK grocery inflation hits record high in September</h4>
                    <i class="smallAuthor4">Valentina Romei in London</i>
                    <br>
                    <a href="" class="smallUrl4">Click to Read More!</a>
                    <hr>
                </div>
            </div>
        </div>  

        <div class="container" id="main3">
            <div class="row">
                    <div class="col-sm">
                        <img src="images/news8.webp" class="lastBigImg1" alt="">
                        <h3 class="lastBigTitle1">Bank of England in fresh emergency move to calm markets
                        </h3>
                        <p class="lastBigDescription1">
                            It said it would buy more government bonds 
                            to try to stabilise their price and prevent a sell-off that 
                            could put some pension funds at risk of collapse.
                        </p>
                        <i class="lastBigAuthor1">
                            By Daniel Thomas & Dharshini David
                            BBC News
                        </i>
                        <br>
                        <a href="" class="lastBigURL1">Click to Read More!</a>
                    </div>
                    <div class="col-sm">
                        <img src="images/news9.webp" class="lastBigImg2" alt="">
                        <h3 class="lastBigTitle2">
                            ‘Comprehensive’ International Crypto Rules Proposed by Influential Finance Watchdog
                        </h3>
                        <p class="lastBigDescription2">
                            Financial Stability Board plans could see stablecoins forced to centralize 
                            and crypto conglomerates broken up.
                        </p>
                        <i class="lastBigAuthor2">
                            By Jack Schickler
                        </i>
                        <br>
                        <a href="" class="lastBigURL2">Click to Read More!</a>
                    </div>
            </div>
        </div>
    









    <div id="footerdiv">
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
                                <h2 class="footer-heading"><a href="#" class="logo">Finance</a></h2>
                                <p class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="ion-ios-heart" aria-hidden="true"></i>  <a
                                        href="https://colorlib.com" target="_blank"></a>
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

    </div>


    <script src="jquery.js"></script>
    <script src="bootstrap-4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="./weather.js"></script>

    </body>

</html>
