<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div class="hisi">
        <div class="row">
            <div class="col-6 col-sm-8 col-md-9 col-lg-9">
                <div class="col-md-12">
                    <nav class="navbar hnav navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">CI POS</a>
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
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="<?= base_url(''); ?>auth">Login</a>
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
                <div class="col-12 col-md-12 hcontent">
                    <div class="row hrow">
                        <?php foreach ($dmenu as $menu) : ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card hmenu">
                                    <img src="<?= base_url() . '/assets/img-product/' . $menu->img ?>" class="card-img-top" alt="...">
                                    <div class="card-body hititle">
                                        <h5 class="card-title htitle"><?= $menu->nama_menu; ?></h5>
                                    </div>
                                    <div class="card-body hisicard">
                                        <p class="card-text hisicarda"><?= $menu->keterangan; ?></p>
                                        <p class="card-text"><small class="text-harga">Rp. <?= $menu->harga; ?></small></p>
                                    </div>
                                    <div class="card-footer">
                                        <?= anchor('home/t_cart/' . $menu->id_menu, '<div class="btn btn-md btn-primary bpesan">Pesan</div>'); ?>
                                        <!-- <button class="btn btn-md btn-primary bpesan">Pesan</button> -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 fixed-right homekeranjang">
                <h2 class="hkeranjang">Keranjang Mu</h2>
                <h3 class="hpesanan">
                    <div class="row justify-content-start">
                        <div class="col-6 npesanan">
                            <?php $menu = 'Qty : ' . $this->cart->total_items() . ' items' ?>
                            <?php echo $menu;   ?>
                        </div>
                    </div>
                </h3>
                <h3 class="hpesanan">
                    <div class="row justify-content-start">
                        <div class="col-5 npesanan">
                            Nama Pesanan
                        </div>
                        <div class="col-1 nqty">
                            Qty
                        </div>
                        <div class="col-3 nqty">
                            Harga
                        </div>
                        <div class="col-3 nqty">
                            Sub Total
                        </div>
                    </div>
                </h3>


                <h3 class="hitem">
                    <div class="row justify-content-start mb-2">
                        <?php foreach ($this->cart->contents() as $qty) : ?>
                            <div class="col-5 mb-3">
                                <?= $qty['name']; ?>
                            </div>
                            <div class="col-1 nqty">
                                <?= $qty['qty']; ?>
                            </div>
                            <div class="col-3 nqty">
                                Rp. <?= number_format($qty['price'], 0, ',', '.') ?>
                            </div>
                            <div class="col-3 nqty">
                                Rp. <?= number_format($qty['subtotal'], 0, ',', '.') ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </h3>
                <h3 class="hsubtotal">
                    <div class="row justify-content-start">
                        <div class="col-8">
                            Total
                        </div>
                        <div class="col-4 nqty">
                            Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>
                        </div>
                    </div>
                </h3>
                <h3 class="hpotpajak">
                    <div class="row justify-content-start">
                        <div class="col-8">
                            Pajak
                        </div>
                        <div class="col-4 nqty">
                            -
                        </div>
                    </div>
                </h3>
                <h3 class="htotal">
                    <div class="row justify-content-start">
                        <div class="col-7">
                            Total
                        </div>
                        <div class="col-5 harga qhtotal">
                            Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>
                        </div>
                    </div>
                </h3>
                <form method="post" action="<?= base_url(); ?>home/p_menu">
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                    </div>
                    <button class="btn btn-md btn-primary bpesan">Check Out</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>