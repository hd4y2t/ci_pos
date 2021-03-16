<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!--<link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">-->
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link href="/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="hisi">
        <div class="row">
            <div class="col-6 col-sm-8 col-md-9 col-lg-9">
                <div class="col-md-12">
                    <nav class="navbar hnav navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">JAC</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Location</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-12 hkategori mt-0">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active akategori" aria-current="page" href="#">Favorite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Sushi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Sashimi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Rolls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Rice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Ramen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Appetizer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link akategori" href="#">Beverages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div></div>
    </div>
    <!-- Main Content -->

    <footer class="main-footer">
        <div class="footer-center">
            Copyright © 2021 <a href="google.com">Jaya Abadi</a>
        </div>
        <div class="footer-right">
            v1.1
        </div>
    </footer>
</body>

</html>