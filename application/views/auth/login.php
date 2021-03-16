<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="text-center">Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="post" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <?= $this->session->flashdata('message'); ?>
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                        <?= form_error('email', '<small class="text-danger-pl-3">', '</small'); ?>

                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div> -->
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <?= form_error('password', '<small class="text-danger-pl-3">', '</small'); ?>

                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">
                                        Belum punya akun? <a href="<?= base_url(''); ?>auth/register">Register</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="simple-footer text-center text-muted">
                            Copyright &copy; CI POS 2021
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>