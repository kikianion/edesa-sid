<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php
            echo config_item('login_title')
            . ' ' . ucwords(config_item('sebutan_desa'))
            . (($desa['nama_desa']) ? ' ' . unpenetration($desa['nama_desa']) : '')
            . " Lamongan";
            ?></title>
        <link rel="stylesheet" href="../_libs/AdminLTE/bootstrap/css/bootstrap.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="../_libs/AdminLTE/dist/css/AdminLTE.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="../_libs/AdminLTE/dist/css/skins/_all-skins.css" media="screen" type="text/css" />
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>SID</b>Lamongan
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan masukkan username dan password</p>
                <form action="<?php echo site_url('siteman/auth') ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="username"/>
                        <span class="glyphicon glyphicon-user form-control-feedback" ></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div><!-- /.col -->
                    </div>
                    <div>
                        <?php
                        if ($_SESSION['siteman'] == -1) {
                            ?>
                            <div id="note">
                                Login Gagal. Username atau Password yang Anda masukkan salah!
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
        <script src="../_libs/AdminLTE/bootstrap/js/bootstrap.js"/>
        <script src = "../_libs/AdminLTE/dist/js/AdminLTE.js" />

    </body>

</html>
