<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title> <?= $title ?>| Sistema Acuarioo</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/images/favicon.png">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <style>
        /* Estilos para la barra de progreso */
        #progress-container {
            width: 100%;
            height: 30px;
            background-color: #f3f3f3;
            display: none;
            /* Ocultar inicialmente */
        }

        #progress-bar {
            height: 100%;
            width: 0;
            background-color: #3498db;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
</head>

<body class="vh-100">
    <div class="page-wraper">
        <div id="progress-container">
            <div id="progress-bar">0%</div> <!-- Barra de progreso -->
        </div>

        <!-- Content -->
        <div class="browse-job login-style3">
            <!-- Coming Soon -->
            <div class="bg-img-fix overflow-hidden" style="background:#fff url(assets/images/background/peces.jpg); height: 100vh;">
                <div class="row gx-0">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white " id="card_login">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                <div class="login-form style-2">
                                    <div class="card-body">
                                        <div class="logo-header">
                                            <a href="<?= base_url(); ?>" class="logo"><img src="<?= base_url(); ?>assets/images/logo/login-min.webp" alt="" class="width-130 light-logo"></a>
                                            <a href="<?= base_url(); ?>" class="logo"><img src="<?= base_url(); ?>assets/images/logo/login-min.webp" alt="" class="width-130 dark-logo"></a>
                                        </div>

                                        <nav>
                                            <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

                                                <div class="tab-content w-100" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                                        <form id="frm_login" class="dz-form pb-3">
                                                            <h3 class="form-title m-t0">SISTEMA ACUARIO</h3>
                                                            <div class="dz-separator-outer m-b5">
                                                                <div class="dz-separator bg-primary style-liner"></div>
                                                            </div>
                                                            <p>Por favor utilizar sus credenciales para iniciar sesión.</p>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="user_name" placeholder="name@example.com">
                                                                <label for="user_name">Nombre de Usuario</label>
                                                                <div class="response"></div>
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="password" class="form-control" id="user_password" placeholder="Password">
                                                                <label for="user_pass">Contraseña</label>
                                                                <div class="response_pass"></div>

                                                            </div>
                                                            <br>
                                                            <div class="form-group text-left mb-5 forget-main">
                                                                <button type="submit" id="btn_validate" class="btn btn-primary" disabled>Iniciar Sesión</button>
                                                                <span class="form-check d-inline-block">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="example1">
                                                                    <label class="form-check-label" for="check1">Mantener Conectado</label>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full Blog Page Contant -->
        </div>
        <!-- Content END-->
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/deznav-init.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/js/login/login.js"></script>
</body>

</html>