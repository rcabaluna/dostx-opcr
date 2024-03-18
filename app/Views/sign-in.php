<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OPCR - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>

<body class="bg-gradient-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-9">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"
                                style="background-image: url('assets/img/logo2.png');"></div>
                            <div class="col-lg-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    
                                    <form class="js-validate" action="<?=base_url('sign-in')?>" method="POST">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" name="password" placeholder="Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="togglePassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Show password script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var passwordInput = document.getElementById('exampleInputPassword');
            var togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function () {
                var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });

            document.querySelector('form').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the form from submitting

                // Check if username and password are correct
                var username = document.getElementById('username').value;
                var password = document.getElementById('exampleInputPassword').value;

                // if (username !== 'rain' || password !== '12345678') {
                //     document.getElementById('notification').classList.remove('d-none');
                // } else {
                //     // If username and password are correct, submit the form
                    this.submit();
                // }
            });
        });
    </script>
</body>

</html>
