<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="col-md-4 col-md-offset-4 form-login">

        <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                <strong>Warning!</strong>
                <?=base64_decode($_GET['error']);?>
            </div>
            <?php endif;?>
            <div class="outter-form-login">
                <div class="logo-login">
                    <em class="glyphicon glyphicon-user"></em>
                </div>
                <form action="check-login.php" class="inner-login" method="post">
                    <h3 class="text-center title-login">Login Member</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_pengguna" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="kata_kunci" placeholder="Password">
                    </div>

                    <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                </form>
            </div>
    </div>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>