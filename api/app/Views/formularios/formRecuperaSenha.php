<?= $this->extend('layout/templateLogin') ?>
<?= $this->section('conteudo') ?>
<form action="<?= base_url('public/login/recuperarSenha')?>" method="POST" name="formLogin" id='formLogin'>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">E-mail</label>
        <div class="col-md-9">
            <input type="text" name="email" class="form-control">
        </div>
    </div>
    <div class="text-right">
        <a class="btn btn-secondary float-start" href="<?= base_url('public/login')?>">Voltar</a>
        <button type="submit" class="btn btn-primary float-end">Recuperar</button>
        <p><br></p>
    </div>
</form>
<?= $this->endSection() ?>