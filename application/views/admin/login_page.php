<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body  style="background-color:#c4ffcf">

    <div class="container"  >
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-2 mx-auto p-4">
                <h1 class="h2">Login Admin</h1>
                <p class="lead"><img src="<?= base_url('assets/img/logo-uinsa.png');?>" style="width:200px"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-0">
                <form action="<?= site_url('admin/login') ?>" method="POST">
                    <div class="form-group">
                        <label for="email">NIM/NIP</label>
                        <input type="text" class="form-control" name="email" placeholder="NIM/NIP" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password.." required />
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <!div class="custom-control custom-checkbox">
                                <!input type="checkbox" class="custom-control-input" name="rememberme" id="rememberme" />
                                <!--label class="custom-control-label" for="rememberme"> Ingat Saya</label-->
                            <!/div>
                            <!--a href="<!?= site_url('reset_password') ?>">Lupa Password?</a-->
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success w-100" style="background-color:#01911a"  value="Login" />
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>