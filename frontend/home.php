<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.2/bootstrap-footer-16/all.css">
    <link rel="stylesheet" href="home.css">
    <script src="./jquery.js"></script>

    <title>Welcome To Fiture</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php" id="news">News</a>
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
        <h1 id="sliderheading">
            Every decision you make in business <br> has financial consequence</h1>
        <button id="sliderbtn" onclick="location.href='about.php'">Who we are</button>
    </div>


    <div id="about">
        <h1>Overview</h1>
        <hr id="abouthr">
        <p>
            We are Fiture, an award-winning corporate culture agency, focused on helping distributed companies get
            better performance and better handling of their financial operations through a dedicated web application
            design with their success at hand.
            <br>
            <br>
            Our mission? To create a future where finance isn't just a matter of rows and columns but an institution
            operated to create unforgettable experiences and memories for our clients. We plan on developing a future
            that will enable all Fiture users an utopian experience whenever their finance is mentioned in a
            transparent, and collaborative way.
        </p>
    </div>




    <!-- <div style=" height:400px; display: flex;margin: 0 auto;">
        <div style="height: 100%;background-color: aqua; width: 400px;"></div>
        <div style="height: 100%;background-color: blue; width: 400px;"></div>
    </div> -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <h1>What Clients say about us</h1>

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
                            <h2 class="footer-heading"><a href="#" class="logo">Finance</a></h2>
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
                            <h2 class="footer-heading">Application</h2>
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
    <div class="botIcon">
        <div class="botIconContainer">
            <div class="iconInner">
                <i class="fa fa-commenting" aria-hidden="true"></i>
            </div>
        </div>
        <div class="Layout Layout-open Layout-expand Layout-right">
            <div class="Messenger_messenger">
                <div class="Messenger_header">
                    <h4 class="Messenger_prompt">How may I help you today?</h4> <span class="chat_close_icon"><i
                            class="fa fa-window-close" aria-hidden="true"></i></span>
                </div>
                <div class="Messenger_content">
                    <div class="Messages">
                        <div class="Messages_list"></div>
                    </div>
                    <form id="messenger">
                        <div class="Input Input-blank">
                            <!-- 							<textarea name="msg" class="Input_field" placeholder="Send a message..."></textarea> -->
                            <input name="msg" class="Input_field" placeholder="Send a message...">
                            <button type="submit" class="Input_button Input_button-send">
                                < class="Icon">
                                    <svg viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd"
                                            transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
                                            <path
                                                d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C5.08414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z"
                                                id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <link href="sty.css" rel='stylesheet' type='text/css' />
    <script src="./weather.js"></script>

</body>

</html>