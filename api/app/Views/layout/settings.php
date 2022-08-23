<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('/public') ?>"><?= $_SESSION['usuario']['user']->nome; ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">Configurações</li>
    </ol>
</nav>

<div class="card-box row">
    <div class="col-4">
        <div class="block">

            <h5><?= $_SESSION['usuario']['user']->nome; ?>&nbsp;<?= $_SESSION['usuario']['user']->sobrenome; ?></h5>

            <p class="card-text">User: <?= $_SESSION['usuario']['user']->user; ?></p>
            <p class="card-text">E-mail: <?= $_SESSION['usuario']['user']->email; ?></p>
            <p class="card-text">Permissão: <?= $_SESSION['usuario']['user']->tipo; ?> </p>

            <!-- <a class="btn btn-primary" href="<?= base_url('public/login/editSenha') ?>">Editar</a> -->
            <a class="btn btn-secondary" href="<?= base_url('public/') ?>">Voltar</a>
            <div class="btn-group" style="margin-left: 45px;">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Editar
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('public/login/editSenha') ?>">Mudar Senha</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('public/login/editEmail') ?>">Mudar E-mail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('public/login/editNome') ?>">Mudar Nome</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->

<?= $this->endSection() ?>