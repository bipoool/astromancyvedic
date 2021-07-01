<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AstromancyVedic</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="/astromancyvedic/"><img src="/astromancyvedic/assets/img/logo.png" alt="Logo" id = "logo">AstromancyVedic</a>
                <a class="btn btn-warning" href="">Donate Us!</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            
        <div class="container position-relative row justify-content-center">
            <h2 class="text-center">Enter Details</h2>

            <form class = "col-lg-4 col-sm-6 col-xs-8 col-lg-offset-4 col-sm-offset-3 col-xs-offset-2" action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method = "POST">
                <br>
                <div class="mb-3">
    
                    <div class= "alert-danger"><?php echo $nameError ?></div>
                    <input type="text" class="form-control gray-bg gray-text" placeholder="Enter Name.." name = "Name">

                </div>

                <div class="mb-3">

                    <div class= "alert-danger"><?php echo $EmailError ?></div>
                    <input type="email" class="form-control gray-bg gray-text" placeholder="Enter Email.." name = "Email">

                </div>

                <div class="mb-3">

                    <input type="password" class="form-control gray-bg gray-text" placeholder="Enter BirthPlace.." name = "Password">

                </div>

                <div class="mb-3">
                
                    <div class= "alert-danger"><?php echo $AgeError ?></div>
                    <label for="exampleInputEmail1" class="form-label text-white">Time Of Birth</label>
                    <input type="time" class="form-control gray-bg gray-text" name = "Age">

                </div>

                <div class="mb-3">
                
                    <div class= "alert-danger"><?php echo $AgeError ?></div>
                    <label for="exampleInputEmail1" class="form-label text-white">Date Of Birth</label>
                    <input type="date" class="form-control gray-bg gray-text" placeholder="Booking Date" name = "Age">

                </div>

                <div class="mb-3">
                
                    <div class= "alert-danger"><?php echo $AgeError ?></div>
                    <label for="exampleInputEmail1" class="form-label text-white">Booking Date</label>
                    <input type="date" class="form-control gray-bg gray-text" placeholder="Booking Date" name = "Age">

                </div>

                <input type="submit" class="btn btn-info btn-lg center-content" value="Book Now" name = "Submit">

            </form>
        </div>
                        
        </header>
        
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href=""><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href=""><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/astromancyvedic/?r=nametag"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
