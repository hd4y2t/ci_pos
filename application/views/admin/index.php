<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- Header Nav -->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="#" class="nav-link sidebar-gone-show h-auto" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <a href="#" class="navbar-brand text-center">
                    Docs
                </a>
                <div class="nav-collapse mr-lg-auto mr-0 ml-auto m-lg-0">
                    <a class="sidebar-gone-show nav-collapse-toggle sidebar-gone-show nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" class="nav-link">Home</a></li>
                        <li><a href="#" class="nav-link">About</a></li>
                        <li><a href="#" class="nav-link">Contact</a></li>
                        <li><a href="#" class="nav-link">Blog</a></li>
                        <li><a href="#" class="nav-link">Support</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav d-lg-flex align-items-center justify-content-end w-25 d-none">
                    <li class="ml-lg-2"><a href="#" class="nav-link btn btn-primary btn-icon icon-left"><i class="fab fa-twitter"></i> Logout</a></li>
                </ul>
            </nav>

            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#"></a>
                    </div>
                    <!-- Menu -->
                    <ul>
                        <li>Welcome
                            <ul>
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Ubah Password</a>
                                </li>
                                <li>
                                    <i class="fas fa-columns"></i>
                                    <a href="#">Setting</a>
                                </li>
                            </ul>
                        </li>
                        <li>Transaksi
                            <ul>
                                <li>
                                    <a href="#">Buat Order</a>
                                </li>
                                <li>
                                    <a href="#">Sedang Diproses</a>
                                </li>
                                <li>
                                    <a href="#">Selesai</a>
                                </li>
                            </ul>
                        </li>
                        <li>Data
                            <ul>
                                <li>
                                    <a href="#">Makanan</a>
                                </li>
                                <li>
                                    <a href="#">Minuman</a>
                                </li>
                                <li>
                                    <a href="#">Paket</a>
                                </li>
                            </ul>
                        </li>
                        <li>Laporan
                            <ul>
                                <li>
                                    <a href="#">Laba</a>
                                </li>
                                <li>
                                    <a href="#">Penjualan</a>
                                </li>
                                <li>
                                    <a href="#">Keuntungan</a>
                                </li>
                            </ul>
                        </li>
                        <li>Keluar
                            <ul>
                                <li>
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="section-header">
                            <h1 id="overview">Overview</h1>
                            <div class="ml-auto"><a href="#" class="btn btn-white btn-icon icon-right btn-lg">Skip</a></div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, doloribus at libero, a delectus qui minima ipsum autem numquam, dolore ad blanditiis iste minus. Sunt ipsa voluptas incidunt quis enim.</p>
                </section>
            </div>

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <small class="bullet ml-2 mr-2"></small><a href="#">Jac</a>
                </div>
                <div class="footer-right">
                    v1.0
                </div>
            </footer>
        </div>
    </div>

</body>
</html