<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
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
            <div class="main-sidebar sidebar-style-2 main-sidebar-top" style="overflow: hidden; outline: none; cursor: grab; touch-action: none;">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">tES</a>
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
                        <li>Data Menu
                            <ul>
                                <li>
                                    <a href="#" class="active">Makanan</a>
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
                        <div class="section-header mb-5">
                            <h1 id="overview">Data Menu</h1>
                            <div class="ml-auto"><a href="#" class="btn btn-white btn-icon icon-right btn-lg">Skip</a></div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card card-table">
                                <div class="card-header">
                                    <h4>Menu</h4>
                                </div>
                                <div class="card-body">
                                    <!-- <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Menu
                                    </button> -->

                                    <a href="#exampleModal" data-bs-toggle="modal" class="btn btn-primary mb-3" data-bs-target="#exampleModal" onclick="submit('tambah')">Tambah Menu</a>

                                    <!-- Button trigger modal -->
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php if (validation_errors()) : ?>
                                        <div class="alert alert-warning">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Warning!</strong> <?php echo validation_errors(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <thead>
                                                <tr>
                                                    <th width="20px">ID Menu</th>
                                                    <th width="20px">Nama Menu</th>
                                                    <th>Keterangan</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th width="20px">Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="target">

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo base_url('admin/menu/t_menu') ?>" method="post">
                            <div class="modal-body">

                                <p id="pesan" class="alert-danger"></p>
                                <div class="form-group">
                                    <label>Nama Menu</label>
                                    <input type="text" class="form-control" name="id_menu" id="id_menu" value="<?= $id; ?>" hidden>
                                    <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Masukan nama menu" required>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan keterangan" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="custom-select" name="kategori">
                                        <option disabled selected>Pilih Kategori</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" class="form-control" name="stok" required>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="img">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" id="btn-tambah" onclick="tambahdata()" class="btn btn-primary">Simpan</button>
                                <button type="button" id="btn-ubah" onclick="ubahdata()" class="btn btn-primary">Ubah</button>
                            </div>

                        </form>
                    </div>
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

        <script type="text/javascript">
            ambilData();

            function ambilData() {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() . "admin/menu/ambildata" ?>',
                    dataType: 'json',
                    success: function(data) {
                        var baris = '';
                        for (var i = 0; i < data.length; i++) {
                            baris += '<tr>' +
                                '<td>' + data[i].id_menu + '</td>' +
                                '<td>' + data[i].nama_menu + '</td>' +
                                '<td>' + data[i].keterangan + '</td>' +
                                '<td>' + data[i].kategori + '</td>' +
                                '<td>' + data[i].harga + '</td>' +
                                '<td>' + data[i].stok + '</td>' +
                                '<td>' + data[i].img + '</td>' +
                                '<td><a href="#exampleModal" data-bs-toggle="modal" class="btn btn-primary mb-3" data-bs-target="#exampleModal" onclick="submit(' + data[i].id_menu + ')">Ubah</a><a onclick="hapusdata(' + data[i].id_menu + ')" class="btn btn-danger">Hapus</a></td>' +
                                '</tr>';
                        }
                        $('#target').html(baris);
                    }
                });
            }

            function tambahdata() {
                var id_menu = $("[name='id_menu']").val();
                var nama_menu = $("[name='nama_menu']").val();
                var keterangan = $("[name='keterangan']").val();
                var kategori = $("[name='kategori']").val();
                var harga = $("[name='harga']").val();
                var stok = $("[name='stok']").val();
                var img = $("[name='img']").val();

                $.ajax({
                    type: 'POST',
                    data: 'id_menu=' + id_menu + '&nama_menu=' + nama_menu + '&keterangan=' + keterangan + '&kategori=' + kategori + '&harga=' + harga + '&stok=' + stok + '&img=' + img,
                    url: '<?= base_url() . 'admin/menu/tambahdata' ?>',
                    dataType: 'json',
                    success: function(hasil) {
                        $("#pesan").html(hasil.pesan);

                        if (hasil.pesan == '') {
                            $("#exampleModal").modal('hide');
                            ambilData();

                            $("[name='id_menu']").val('');
                            $("[name='nama_menu']").val('');
                            $("[name='keterangan']").val('');
                            $("[name='kategori']").val('');
                            $("[name='harga']").val('');
                            $("[name='stok']").val('');
                            $("[name='img']").val('');
                        }

                    }
                });
            }

            function submit(x) {
                if (x == 'tambah') {
                    $('#btn-tambah').show();
                    $('#btn-ubah').hide();
                } else {
                    $('#btn-tambah').hide();
                    $('#btn-ubah').show();

                    $.ajax({
                        type: "POST",
                        data: 'id_menu=' + x,
                        url: '<?= base_url() . "admin/menu/ambilid" ?>',
                        dataType: 'json',
                        success: function(hasil) {
                            $('[name="id_menu"]').val(hasil[0].id_menu);
                            $("[name='nama_menu']").val(hasil[0].nama_menu);
                            $("[name='keterangan']").val(hasil[0].keterangan);
                            $("[name='kategori']").val(hasil[0].kategori);
                            $("[name='harga']").val(hasil[0].harga);
                            $("[name='stok']").val(hasil[0].stok);
                            $("[name='img']").val(hasil[0].img);
                        }
                    });
                }
            }

            function ubahdata() {
                var id_menu = $("[name='id_menu']").val();
                var nama_menu = $("[name='nama_menu']").val();
                var keterangan = $("[name='keterangan']").val();
                var kategori = $("[name='kategori']").val();
                var harga = $("[name='harga']").val();
                var stok = $("[name='stok']").val();
                var img = $("[name='img']").val();

                $.ajax({
                    type: 'POST',
                    data: 'id_menu=' + id_menu + '&nama_menu=' + nama_menu + '&keterangan=' + keterangan + '&kategori=' + kategori + '&harga=' + harga + '&stok=' + stok + '&img=' + img,
                    url: '<?= base_url() . 'admin/menu/ubahdata' ?>',
                    dataType: 'json',
                    success: function(hasil) {
                        $("#pesan").html(hasil.pesan);

                        if (hasil.pesan == '') {
                            $("#exampleModal").modal('hide');
                            ambilData();
                        }
                    }
                })
            }

            function hapusdata(id) {
                var tanya = confirm('apakah yakin akan menghapus data?');
                if (tanya) {
                    $.ajax({
                        type: 'POST',
                        data: 'id_menu=' + id,
                        url: '<?= base_url() . "admin/menu/hapusdata" ?>',
                        success: function() {
                            ambilData();
                        }
                    })
                }
            }
        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>