<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fontawesome-free/css/all.min.css">
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
                                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Menu
                                    </button>
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
                                            <tr>
                                                <th>No</th>
                                                <th width="100px">ID Menu</th>
                                                <th width="160px">Nama Menu</th>
                                                <th>Keterangan</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>

                                            <?php
                                            $no = 1;
                                            foreach ($data as $menu) : ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $menu->id_menu ?></td>
                                                    <td><?php echo $menu->nama_menu ?></td>
                                                    <td><?php echo $menu->keterangan ?></td>
                                                    <td><?php echo $menu->kategori ?></td>
                                                    <td><?php echo $menu->harga ?></td>
                                                    <td>
                                                        <div class="badge badge-success"><?php echo $menu->stok ?></div>
                                                    </td>
                                                    <td><?php echo $menu->img ?></td>
                                                    <td>
                                                        <?php echo anchor('admin/menu/h_menu/' . $menu->id_menu, '<button class="btn btn-sm btn-danger"><i class="fa fa-trash text-white-50 icon" ></i></button>') ?>

                                                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                            Edit Menu
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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
                                <div class="form-group">
                                    <label>Nama Menu</label>
                                    <input type="text" class="form-control" name="id" id="id" value="<?= $id; ?>" hidden>
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
                                <button type="submit" class="btn btn-primary">Simpan</button>
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


            <!-- Modal Edit -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function() {
                myInput.focus()
            })
        </script>

</body>

</html>