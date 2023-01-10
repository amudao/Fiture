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
        <link rel="stylesheet" href="list.css">
        <script src="newStock.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>

        <title>Stocks</title>
    </head>

    <body onload="fetchDataOrig(), fetchPriceOrig()">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="list">Stocks <span class="sr-only">(current)</span></a>
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
        <div class="search">
            <input type="text" class="search-bar" placeholder="Search">
            <button onclick="search()">Go!</button>
        </div>
        <form class="amountInputSpacer" action="" method="POST">
            <div class="displayStocks">
                <div class="stock-name-spacer">
                    <input type="text" class="name" name="stock_name" id="inputFieldName" value="" readonly>
                    <br>
                    <input type="text" class="price" name="stock_price" id="inputFieldPrice" value="" readonly>
                    <br>
                    <input type="text" class="symbol" name="stock_ticker" id="inputFieldSymbol" value="" readonly>
                    <p class="currency">.</p>
                </div>
                <div class="stockTableSpacer">
                    <table class="stockTable">
                        <tr>
                            <td class="open">.</td>
                            <td class="end">.</td>
                        </tr>
                        <tr>
                            <td class="high">.</td>
                            <td class="low">.</td>
                        </tr>
                        <tr>
                            <td class="change">.</td>
                            <td class="percent_change">.</td>
                        </tr>
                    </table>
                </div>
                <input type="text" name="stock_amount" placeholder="Amount">
                <button type="submit" name="submit">Buy</button>
            </form>
            <!---
            <p class="open">.</p>
            <p class="high">.</p>
            <p class="low">.</p>
            <p class="end">.</p>
            <p class="previous_close">.</p>
            <p class="change">.</p>
            <p class="percent_change">.</p>
            -->
        </div>

    </body>

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
    
    <script src="./weather.js"></script>
    </html>

<?php
//This is the needed PHP to ADD the user input to our database
$connection = mysqli_connect("localhost", "root", "", "stockList");

if (isset($_POST['submit'])) {

    $stock_name = $_POST['stock_name'];
    $stock_ticker = $_POST['stock_ticker'];
    $stock_price = $_POST['stock_price'];
    $stock_amount = $_POST['stock_amount'];

    //echo "<h2>" . $stock_name . "</h2>";
    //echo "<h2>" . $stock_ticker . "</h2>";
    //echo "<h2>" . $stock_price . "</h2>";
    //echo "<h2>" . $stock_amount . "</h2>";

    $query = "insert into stocks(stock_name, stock_ticker, stock_price, stock_amount) values('$stock_name', '$stock_ticker', '$stock_price', '$stock_amount')";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        echo '<script> alert("Data saved"); </script>';
    } else {
        echo '<script> alert("Data not saved"); </script>';
    }

}


?>

