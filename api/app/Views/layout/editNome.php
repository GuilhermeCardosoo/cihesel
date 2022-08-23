<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/public') ?>"><?= $_SESSION['usuario']['user']->nome; ?></a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('public/login/settings') ?>">Configurações</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mudar Nome</li>
</ol>

<div class="card-box row">

    <div class="col-4">
        <h4 class="card-title">Mudar Nome</h4>
        <form action="<?= base_url('public/login/editNome')?>" method="POST" name="resetPassword" id='form'>
            <div class="form-group">
                <label>Senha atual :</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="form-group">
                <label>Primeiro Nome :</label>
                <input type="text" name="Pnome" class="form-control" id="Pnome" required>
            </div>
            <div class="form-group">
                <label>Sobrenome :</label>
                <input type="text" name="Snome" class="form-control" id="Snome" required>
            </div>
            <div class="text-right float-end">
                <button type="submit" id="enviar" class="btn btn-primary">Redefinir</button>
            </div>
            <div class="text-right">
               <a class="btn btn-secondary" href="<?= base_url('public/login/settings') ?>">Voltar</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->

<script>
    <?php       
     

         if (isset($_SESSION['mensagem'])) {
             echo "msg = document.querySelector('#msgInfo');
             alerta = document.querySelector('#alerta');
             alerta.classList.add('".$_SESSION['mensagem']['tipo']."');
             msg.textContent = '".$_SESSION['mensagem']['mensagem']."';
             new bootstrap.Toast(document.querySelector('#basicToast')).show();";
         }
    ?>
</script>
<?= $this->endSection() ?>