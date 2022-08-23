<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<!-- Style -->
<style>
    div.row div ul li span:hover {
        color: blue;
    }
    #ajaxTable tr td:last-child div {
        display: flex;
        align-items: center;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<style>
    tbody tr td a {
        color: black;
    }

    div.dataTables_length select {
        width: 65px !important;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<!-- Conteudo -->

<a class="btn btn-success mb-3" href="<?= base_url('public/estoque/novoMedicamento') ?>" style="float:right;top:5px"><i class="fa fa-plus" aria-hidden="true"></i></a>
<?= $this->include('tabelas/tabelaMedicamentos.php') ?>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        const DATATABLE_PTBR = {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ medicamentos",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 medicamentos",
            "sInfoFiltered": "(Filtrados de _MAX_ medicamentos)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }
        $('#ajaxTable').DataTable({
            "oLanguage": DATATABLE_PTBR,
            ajax: '',
            columns: [{
                    data: 'Medicamento'
                },
                {
                    data: 'ID'
                },
                {
                    data: 'Quantidade'
                },
                {
                    data: 'status'
                },


            ],
        });
    });

</script>
<?= $this->endSection() ?>