
            <div class="row align-items-center" style="height:80vh">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="card-title">Formulário de cadastro</h4>
                        <h4 class="card-title">Informações Pessoais</h4>
                        <form action="<?= base_url('public/atendimento/cadastro')?>" method="POST" name="datesCadastro" id='form'>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nomeCompleto" class="col-md-3 col-form-label">Nome Completo</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required minlength="3">
                                        </div>          
                                    </div>
                                    <div class="form-group row">           
                                        <label for="cpf" class="col-md-3 col-form-label">CPF</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sexo" class="col-md-3 col-form-label">Sexo</label>
                                        <div class="col-md-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexo" id="sexoMasculino" value="MASCULINO" required>
                                                <label class="form-check-label" for="sexoMasculino">
                                                Masculino
                                                </label>
                                               
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexo" id="sexoFeminino" value="FEMININO">
                                                <label class="form-check-label" for="sexoFeminino">
                                                Feminino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dtNasc" class="col-md-3 col-form-label">Data de Nascimento</label>
                                        <div class="col-md-4">
                                            <input required type="date" class="form-control" id="dtNasc" name="dtNasc">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nomeDaMae" class="col-md-3 col-form-label">Nome da Mãe</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="nomeDaMae" name="nomeDaMae">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rg" class="col-md-3 col-form-label">RG</label>
                                        <div class="col-md-9">
                                            <input required type="text" class="form-control" id="rg" name="rg">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tel1" class="col-md-3 col-form-label">Telefone 1</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="tel1" name ="tel1" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tel2" class="col-md-3 col-form-label">Telefone 2</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="tel2" name="tel2" maxlength="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title">Endereço</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="cep" class="col-md-3 col-form-label">CEP</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="cep" name="cep" maxlength="9">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="logradouro" class="col-md-3 col-form-label">Logradouro</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="numero" class="col-md-3 col-form-label">Número</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="numero" name="numero">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="complemento" class="col-md-3 col-form-label">Complemento</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="complemento" name="complemento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="localidade" class="col-md-3 col-form-label">Cidade</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="localidade" name="localidade">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bairro" class="col-md-3 col-form-label">Bairro</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" id="cadastrar">Seguinte</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>