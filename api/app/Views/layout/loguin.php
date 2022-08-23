<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Cihesel</title>
    <link rel="icon" href="<?= base_url('public/resources/img/logoPequeno.png') ?>" sizes="32x32" style="border-radius:10px;">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/resources') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/resources') ?>/css/style.css">
</head>

<body style="background: url('http://localhost/cihecel/public/resources/img/fundoHeader.jpg'); background-size: cover;">
    <div class="container">
        <div class="row align-items-center" style="height:80vh">
            <div class="col-12 align-items-center " style="text-align: -webkit-center;">
                <div style="width: fit-content;border:1px solid black;padding: 12px;background: white;">
                    <div><img src="<?= base_url('public/resources/img/logoGrande.png') ?>" height="75px"class="mb-5" alt="logo cihecel"></div>
                    <?= $this->include('formularios/formLoguin.php') ?>               
                </div>
            </div>
        </div>
    </div>
</body>

</html>