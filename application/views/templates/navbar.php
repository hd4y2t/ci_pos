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
                    <li class="ml-lg-2"><a href="<?= base_url('auth/logout') ?>" class="nav-link btn btn-primary btn-icon icon-left"><i class="fab fa-twitter"></i> Logout</a></li>
                </ul>
            </nav>