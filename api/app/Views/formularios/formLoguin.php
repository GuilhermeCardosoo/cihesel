<?= $this->extend('layout/templateLogin') ?>
<?= $this->section('conteudo') ?>
<form action="<?= base_url('public/login')?>" method="POST" name="formLogin" id='formLogin'>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Usuário</label>
        <div class="col-md-9">
            <input type="text" name="user" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Senha</label>
        <div class="col-md-9">
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    <div class="text-right">
        <a class="btn btn-secondary float-start" href="<?= base_url('public/login/recuperarSenha')?>">Esqueci a senha</a>
        <button type="submit" class="btn btn-primary float-end">Entrar</button>
        <p><br></p>
    </div>
  

</form>
<div class="toast-container position-fixed bottom-0 end-0 p-3" style="top: 10px; right: 10px; z-index: 9999;">
    <div id="basicToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
        <div class="alert" style="margin-bottom: 0;" id="alerta">
            <span id="msgInfo"></span>
            <button type="button" class="btn-close btn-close-black float-end" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section("js") ?>

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