<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Cihesel</title>
    <link rel="icon" href="<?= base_url('public/resources/img/logoPequeno.png') ?>" sizes="32x32" style="border-radius:10px;">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('public/resources') ?>/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="    https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/resources') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/resources') ?>/css/style.css">
    <?= $this->renderSection("css"); ?>

    <style>
        a {
            text-decoration: none;
        }

        a.btn.btn-secondary.dropdown-toggle {
            background: white;
            color: black;
            border: none;
        }
    </style>

</head>

<body>
    <div class="main-wrappe">
        <div class="header">
            <div class="header-left">
                <a href="<?= base_url('public/atendimento') ?>" class="logo">
                    <img src="<?= base_url('public/resources/img/logoGrande.png') ?>" id='logoGrande' class="logoPrincipal show" alt="logo cihecel">
                    <img src="<?= base_url('public/resources/img/logoGrandeCortada.png') ?>" id='logoPequeno' class="logoPrincipal" alt="logo cihecel">
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <div class="dropdown float-end m-3">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span style="font-size: 15px; padding:3px; text-transform: capitalize;"> <?= $_SESSION['usuario']['user']->nome;?></span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('public/login/settings') ?>">Configurações<i class="fa fa-cog float-end" aria-hidden="true"></i></a> </li>
                    <li><a class="dropdown-item" href="<?= base_url('public/login/logout') ?>">Logout<i class="fa fa-sign-out float-end" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="<?= base_url('public') ?>"><i class="fa fa-user"></i> <span>Pacientes</span></a>
                        </li>
                        <li class="active">
                            <a href="<?= base_url('public/atendimento/listagem') ?>"><i class="fa fa-address-book" aria-hidden="true"></i><span>Listagem</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="top: 10px; right: 10px; z-index: 9999;">
            <div id="basicToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
                <div class="alert" style="margin-bottom: 0;" id="alerta">
                    <span id="msgInfo" style="text-transform: capitalize;"></span>
                    <button type="button" class="btn-close btn-close-black float-end" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <div class="page-wrapper" style="padding: 100px 50px;">
            <!-- Conteudo -->
            <?= $this->renderSection("conteudo"); ?>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <!-- <footer style="background-color:black;height:31px;margin-top: 77px;">teste</footer> -->
    <script src="<?= base_url('public') ?>/resources/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('public') ?>/resources/js/popper.min.js"></script>
    <!-- <script src="<?= base_url('public') ?>/resources/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('public') ?>/resources/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url('public') ?>/resources/js/Chart.bundle.js"></script>
    <script src="<?= base_url('public') ?>/resources/js/chart.js"></script>
    <script src="<?= base_url('public') ?>/resources/js/app.js"></script>
    <!-- Script -->
    <?= $this->renderSection("script"); ?>
</body>



</html>