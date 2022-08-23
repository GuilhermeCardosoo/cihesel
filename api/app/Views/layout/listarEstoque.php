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
    <li class="breadcrumb-item active" aria-current="page">Medicamento - <?= $resultado[0]->nomeMed ?></li>
</ol>
<div class="row">
    <div class="block col-6" style="padding: 20px;">    
        <ul class="list-group">
            <li class="list-group-item col-12"><span>ID:</span>&nbsp;<?= $resultado[0]->id ?></li>
            <li class="list-group-item"><span>Medicamento:</span>&nbsp;<?= $resultado[0]->nomeMed ?></li>
            <li class="list-group-item"><span>Quantidade:&nbsp;</span><?= $resultado[0]->quantidade ?></li>
            <li class="col-12 list-group-item">
                <ul class="list-group list-group-horizontal row">
                    <li class="col-6" style="list-style-type: none;"><span>Dosagem:</span>&nbsp;<?= $resultado[0]->dosagem ?></li>     
                    <li class="col-6" style="list-style-type: none;"><span>Tarja:</span>&nbsp;<?= $resultado[0]->tarja ?></li> 
                </ul>
            </li>
            <li class="list-group-item"><span>Observação:</span>&nbsp;<?= $resultado[0]->observacao ?></li>
                            
        </ul>
        
    </div>

</div>



<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->
<?= $this->endSection() ?>