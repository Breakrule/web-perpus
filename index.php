<!DOCTYPE html>

<html>

<head>
    <title>FAKE LIBRARY LOGIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="icon" href="assets/image/logook.png">
    <style>
        body{
            background-color: darkgoldenrod;
        }
    </style>
</head>

<body>

<!--Cek Session-->

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="#">FAKE LIBRARY</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- menu login -->
                        <li><a href="login.php" data-toggle="modal" data-target="#"><b>Login</b></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- body text-->
        <div class="container">
            <h1 class="text-center">
                Selamat Datang di FAKE LIBRARY
            </h1>
        </div>
        <!-- Modal -->
        <!--
        <div id="modallogout" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <!-- form login
                        <form action="logout.php" method="post">
                            <div class="form-group">
                                <label for="nama_pengguna">Username</label>
                                <input type="text" name="nama_pengguna" placeholder="Username" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="kata_kunci">Password</label>
                                <input type="text" name="kata_kunci" placeholder="Password" class="form-control" />
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </div>
                        </form>
                        <!-- end form login
                    </div>
                </div>
                <!-- /.modal-content
            </div>
            <!-- /.modal-dialog
        </div>
        <!-- /.modal -->
        <script src="assets/js/jquery-3.2.1.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>