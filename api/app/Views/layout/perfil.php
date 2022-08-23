<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<style>
    div.row div ul li span {
        color: blue;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('public') ?>">Paciente</a></li>
    <li class="breadcrumb-item active" aria-current="page">Perfil - <?= $resultado->nome ?></li>
</ol>
<div class="card-box">
<div class="row">
    <div class="block col-6" style="padding: 20px;">    
        <ul class="list-group">
            <li class="col-12 list-group-item">
                <ul class="list-group list-group-horizontal row">
                    <li class="col-6" style="list-style-type: none;"><span>Nome:</span>&nbsp;<?= $resultado->nome?></li>
                    <li class="col-6" style="list-style-type: none;"><span>Sexo:</span>&nbsp;<?= $resultado->sexo ?></li>
                </ul>
            </li>    
            <li class="col-12 list-group-item">
                <ul class="list-group list-group-horizontal row">
                    <li class="col-6" style="list-style-type: none;"><span>CPF:</span>&nbsp;<?= $resultado->cpf ?></li>
                    <li class="col-6" style="list-style-type: none;"><span>RG:</span>&nbsp;<?= $resultado->rg ?></li>
                </ul>
            </li>
            <li class="list-group-item"><span>Nome da Mãe:&nbsp;</span><?= $resultado->nomeMae ?></li>
            <li class="col-12 list-group-item">
                <ul class="list-group list-group-horizontal row">
                    <li class="col-6" style="list-style-type: none;"><span>Telefone 1:</span>&nbsp;<?= $resultado->telefone1 ?></li>
                    <li class="col-6" style="list-style-type: none;"><span>Telefone 2:</span>&nbsp;<?= $resultado->telefone2 ?></li>
                </ul>
            </li>
            <li class="list-group-item"><span>Endereço:</span>&nbsp;<?= $resultado->logradouro ?>, <?= $resultado->numeroCasa?> <?= $resultado->complementoCasa ?></li>
            <li class="col-12 list-group-item">
                <ul class="list-group list-group-horizontal row">
                    <li class="col-6" style="list-style-type: none;"><span>Bairro:</span>&nbsp;<?= $resultado->bairro ?></li>
                    <li class="col-6" style="list-style-type: none;"><span>CEP:</span>&nbsp;<?= $resultado->cep ?></li>
                </ul>
            </li>            
        </ul>
        <br>

    </div>



    <div class="col-6">
        <div class="row-6">
        <span id="date"></span>
         
        </div>
        <div class="row-6">2</div>
    </div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->
<script>
    let data= new Date();
    function formatData(data){
        let newDate = new Date(data);
        return `${newDate.getDate()}/${newDate.getMonth()+1}`;
    }
    console.log(data);
    console.log(formatData(data));
   
</script>
<?= $this->endSection() ?>