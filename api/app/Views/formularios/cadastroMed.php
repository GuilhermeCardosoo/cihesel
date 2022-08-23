
            <div class="row align-items-center" style="height:80vh">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="card-title">Formulário de cadastro de medicamento</h4>
                        <h4 class="card-title">Informações</h4>
                        <form action="<?php echo base_url('public/estoque/novoMedicamento')?>" method="POST" name="datesCadastroMed" id='form'>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="id" class="col-md-3 col-form-label">ID</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="id" name="id" required>
                                        </div>          
                                    </div>
                                    <div class="form-group row">           
                                        <label for="idMed" class="col-md-3 col-form-label">ID Medicamento</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="idMed" name="idMed" maxlength="14" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="idCont" class="col-md-3 col-form-label">ID Cont</label>
                                        <div class="col-md-4">
                                            <input required type="text" class="form-control" id="idCont" name="idCont">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="quantid" class="col-md-3 col-form-label">Quantidade</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" id="quantid" name="quantid">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="medicamento" class="col-md-3 col-form-label">Nome Medicamento</label>
                                        <div class="col-md-9">
                                            <input required type="text" class="form-control" id="medicamento" name="medicamento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="obs" class="col-md-3 col-form-label">obs</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="obs" name ="obs" maxlength="350">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dosagem" class="col-md-3 col-form-label">dosagem</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="dosagem" name="dosagem" minlength="5">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tarja" class="col-md-3 col-form-label">tarja</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="tarja" name="tarja" maxlength="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" id="cadastrar" onclick="confirm()">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>