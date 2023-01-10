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
    <link rel="stylesheet" href="./list.css">
    <title>List</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="list">List <span class="sr-only">(current)</span></a>
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

    


    <h2>Fiture Members List</h2>

    <input class="form-control mr-sm-2" id="s1" type="search" placeholder="Search" aria-label="Search">

    <table class="table">
        <thead class="c1">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Login Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Last Login</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">  <div id="r1"></div> </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row"> <div id="r2"></div></th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row"><div id="r3"></div></th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row"><div id="r4"></div></th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row"><div id="r5"></div></th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row"><div id="r6"></div></th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
      
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
</body>
</html>

