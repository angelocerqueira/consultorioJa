@extends('layout.app', ['current' => 'cadastroconsultorio'])
@section('body')

    <section class="cadastro-main">
        <div class="cadastro-info">
            <div>
                <i class="fas fa-store-alt"></i>
            </div>
            <div class="texto">
                <h2>Cadastre seu espaço</h2>
                <p>Efetue seu login abaixo e tenha acesso ao ambiente para publicação do seu espaço</p>
            </div>
        </div>

        <div class="cadastro-salas">

            <div class="etapas ">
                <div class="active step">
                    <i class="far fa-list-alt"></i>
                    <p> 1. Informações cadastrais</p>
                </div>

                <span class="stepspan "><i class="fas fa-angle-right "></i></span>

                <div class="step">
                    <i class="fas fa-list-alt"></i>
                    <p>2. Informações Complementares</p>
                </div>

                <span class="stepspan"><i class="fas fa-angle-right"></i></span>

                <div class="step">
                    <i class="fas fa-image"></i>
                    <p>3. Imagens</p>
                </div>

                <span class="stepspan"><i class="fas fa-angle-right"></i></span>

                <div class="step">
                    <i class="far fa-calendar-alt"></i>
                    <p>4. Agenda</p>
                </div>

            </div>

            <p>
                Preencha os campos abaixo cadastrais da sala que será disponibiliza para locação. Lembre-se de colocar as
                informações de maneira bem clara com todas informações possíveis para que seu anúncio gere retorno.
            </p>

            <form method="POST"  name="formConsultorio" action="/cadastrarconsultorio"  class=" "
            enctype="multipart/form-data" id="regForm">
            @csrf

                <div class="tab-content" data-tab="content" >
                    <section class="tab" >
                        <div class="parteUm-cadastro cadastrais ">
                            <div class="form-group lg" >
                                <label for="">Título do anúncio</label>
                                <input type="text" class="validando" placeholder="Insira um título para seu anúncio com no máximo 80 caracteres. Ex: Sala ampla e completa para atendimento no centro de São Paulo" maxlength="80" oninput="this.className = ''" name="title">
                            </div>
                            <div class="form-group lg">
                                <label for="">Descrição da Sala</label>
                                <textarea name="description" id="" class="validando" rows="7" placeholder="Descrição detalhada da sala e seus principais diferencias. Fornecer informações sobre localização, equipamentos, insumos, etc" oninput="this.className = ''"></textarea >
                            </div>
                            <span>
                                <div class="form-group pequeno">
                                    <label for="">Cep</label>
                                    <input type="number" class="validando" placeholder="Somente Números" id="cep" name="cep" maxlength="9" oninput="this.className = ''">
                                </div>
                                <div class="form-group pequeno">
                                    <label for="">Estado</label>
                                    <input type="text" id="uf" class="validando" name="uf" oninput="this.className = ''">
                                </div>
                                <div class="form-group grande">
                                    <label for="">Cidade</label>
                                    <input type="text" id="cidade" name="cidade" class="validando" oninput="this.className = ''">
                                </div>
                                <div class="form-group grande">
                                    <label for="">Rua</label>
                                    <input type="text" id="rua" class="validando" name="endereco" oninput="this.className = ''">
                                </div>
                                <div class="form-group pequeno ">
                                    <label for="">Número</label>
                                    <input type="number" id="numero" name="number" class="validando" maxlength="8" oninput="this.className = ''">
                                </div>
                                <div class="form-group pequeno">
                                    <label for="">Complemento</label>
                                    <input type="text" id="complemento" name="complement">
                                </div>
                            </span>
                        </div>
                    </section>

                    <section class="tab " >
                        <div class="complementares">
                            <div class="especialidades">
                                <h2 for="" class="sub-title">Especialidades</h2>
                                <div class="check">
                                    <div class="item-check">
                                        <input type="checkbox" name="specialties[]"  value="MEDICINA"id="">
                                        <label for=""> Medicina</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="specialties[]" value="PSICOLOGIA" id="">
                                        <label for=""> Psicologia</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="specialties[]" value="NUTRIÇÃO" id="">
                                        <label for=""> Nutrição </label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="specialties[]" value="FISIOTERAPIA" id="">
                                        <label for=""> Fisioterapia</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="specialties[]" value="FONOAUDIOLOGIA" id="">
                                        <label for=""> Fonoaudiologia</label>
                                    </div>

                                </div>
                            </div>

                            <div class="estrutura">
                                <h2 for="" class="sub-title">Estrutura do local</h2>
                                <div class="check">
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="MEDICINA" id="">
                                    <label for=""> Medicina</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="PSICOLOGIA" id="">
                                    <label for=""> Psicologia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="NUTRIÇÃO" id="">
                                    <label for=""> Nutrição </label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="PSICOLOGIA" id="">
                                    <label for=""> Psicologia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="NUTRIÇÃO" id="">
                                    <label for=""> Nutrição </label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="FISIOTERAPIA" id="">
                                    <label for=""> Fisioterapia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="FONOAUDIOLOGIA" id="">
                                    <label for=""> Fonoaudiologia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="PSICOLOGIA" id="">
                                    <label for=""> Psicologia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="NUTRIÇÃO" id="">
                                    <label for=""> Nutrição </label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="FISIOTERAPIA" id="">
                                    <label for=""> Fisioterapia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="FONOAUDIOLOGIA" id="">
                                    <label for=""> Fonoaudiologia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]" value="NUTRIÇÃO" id="">
                                    <label for=""> Nutrição </label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" name="structure[]"  value="FISIOTERAPIA"id="">
                                    <label for=""> Fisioterapia</label>
                                </div>
                                <div class="item-check">
                                    <input type="checkbox" value="FONOAUDIOLOGIA" name="structure[]"  id="">
                                    <label for=""> Fonoaudiologia</label>
                                </div>

                                </div>
                            </div>

                            <div class="especialidades">
                                <h2 for="" class="sub-title">Especialidades</h2>
                                <div class="check">
                                    <div class="item-check">
                                        <input type="checkbox" name="equipaments[]" value="MEDICINA" id="">
                                        <label for=""> Medicina</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="equipaments[]" value="PSICOLOGIA" id="">
                                        <label for=""> Psicologia</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="equipaments[]" value="NUTRIÇÃO" id="">
                                        <label for=""> Nutrição </label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="equipaments[]" value="FISIOTERAPIA"id="">
                                        <label for=""> Fisioterapia</label>
                                    </div>
                                    <div class="item-check">
                                        <input type="checkbox" name="equipaments[]"value="FONOAUDIOLOGIA" id="">
                                        <label for=""> Fonoaudiologia</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="tab">
                        <div class="imagens">
                            <h2 class="tabh2">Selecione as imagens para o campo abaixo. <span> No máximo 10 fotos.</h2>
                            <div class="imagens dropzone" id="my-awesome-dropzone" >
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="tab classSubmit" id="submitCad">
                        <div class="agenda">
                            <div class="atendimento">
                                <div class="periodo-aten">
                                    <div class="sub-title">
                                        <i class="fas fa-history"></i>
                                        <h3>Períodos de Atendimento</h3>
                                    </div>
                                    <div class="input-group">
                                        <div class="check-group">
                                        <input type="checkbox" name="period_atend[]"  value="MANHÃ" id="">
                                        <label for="">Manhã</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="period_atend[]" value="TARDE" id="">
                                            <label for="">Tarde</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="period_atend[]" value="NOITE"id="">
                                            <label for="">Noite</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="dias-aten">
                                    <div class="sub-title">
                                        <i class="far fa-calendar-minus"></i>
                                        <h3>Dias de fucionamento</h3>
                                    </div>

                                    <div class="input-group">
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]"  value="SEG" id="">
                                            <label for="">Segunda-feira</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]" value="TER" id="">
                                            <label for="">Terça-feira</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]" value="QUA" id="">
                                            <label for="">Quarta-feira</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]" value="QUI" id="">
                                            <label for="">Quinta-feira</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]" value="SEX" id="">
                                            <label for="">Sexta-feira</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]"  value="SAB" id="">
                                            <label for="">Sábado</label>
                                        </div>
                                        <div class="check-group">
                                            <input type="checkbox" name="days_atend[]" value="DOM" id="">
                                            <label for="">Domingo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="valores">
                                <div class="sub-title">
                                    <i class="fas fa-dollar-sign"></i>
                                    <h3>Valores</h3>
                                </div>
                                <div class="input-group">
                                    <div class="hora">
                                        <label for="">Valor por hora:</label>
                                        <input type="text" name="value_h" id="valorH" placeholder="R$ 00, 00">
                                    </div>
                                    <div class="mensal">
                                        <label for="">Valor Mensal (*):  </label>
                                        <input type="text" name="value_m" id="" placeholder="R$ 00, 00">
                                    </div>

                                    <div class="info">
                                        <p>* 08 horas diárias, 05 dias por semana.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="button">
                        <button type="button"   id="nextBtn" onclick="nextPrev(1)"></button>
                    </div>

                </div>
                <!-- fim tab content -->
            </form>

        </div>

    </section>

@endsection
