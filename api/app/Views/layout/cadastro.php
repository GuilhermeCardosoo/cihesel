<?= $this->extend('layout/principal') ?>

<?= $this->section('css') ?>
<style>
    #response {

        display: none;
        align-content: center;
        justify-content: center;
        align-items: center;
        height: 50px;
        width: auto; 
    }

    .show {

        display: flex !important;
        text-align: center;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('public') ?>">Paciente</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
    </ol>
</nav>

<?= $this->include('formularios/cadastroForm.php') ?>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Script CEP -->
<script>
        const cep = document.querySelector("#cep")

    const mostraDados = (resultado) => {
        for (const campo in resultado) {
            if (document.querySelector("#" + campo)) {
                document.querySelector("#" + campo).value = resultado[campo]
            }
        }
    }




    cep.addEventListener("blur", (e) => {
        let search = cep.value.replace("-", "")
        const options = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }

        fetch(`https://viacep.com.br/ws/${search}/json/`, options)
            .then(response => {
                response.json()
                    .then(dados => mostraDados(dados))
            })
            .catch(e => console.log('Deu Erro: ' + e, message))
    })

    function mascaraCPF(cpf) {
        cpf = cpf.replace(/\D/g, "").slice(0, 11);
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/^(\d{3}\.\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/(.{11})(\d)/, "$1-$2");
        return cpf;
    } // 12345678910 -> 123.456.789-10

    function mascaraPhone(cel, max = 11) { // max = 10 para telefone fixo
        cel = cel.replace(/\D/g, "").slice(0, max);
        cel = cel.replace(/^(\d{2})(\d+)/, "($1) $2");
        cel = cel.replace(/(\b\d+)(\d{4})$/, "$1-$2");
        return cel;
    } // 12345678910 -> (12) 34567-8910

    /* EXEMPLO  DE USO */
    let cpfInput = document.querySelector('#cpf');
    let tel1Input = document.querySelector('#tel1');
    let tel2Input = document.querySelector('#tel2');
    let cepInput = document.querySelector('#cep');

    cpfInput.addEventListener('keyup', function() {
        cpfInput.value = mascaraCPF(cpfInput.value);
    });

    tel1Input.addEventListener('keyup', function() {
        tel1Input.value = mascaraPhone(tel1Input.value)
    });
    tel2Input.addEventListener('keyup', function() {
        tel2Input.value = mascaraPhone(tel2Input.value)
    });

    cepInput.addEventListener('keyup', function() {
        cepInput.value = mascaraCEP(cepInput.value);
    });

    //Previne "Enter" de enviar o formulário

    document.addEventListener("keydown", function(e) {
        if (e.keyCode === 13) {

            e.preventDefault();

        }
    });
    // Confirmação de envio
</script>

<?= $this->endSection() ?>