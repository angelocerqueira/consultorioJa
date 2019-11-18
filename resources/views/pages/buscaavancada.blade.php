@extends('layout.app', ['current' => 'buscaavancada'])
@section('body')

<section class="busca-avancada">
 <div class="cadastro-info">
    <div>
       <i class="fas fa-store-alt"></i>
   </div>
   <div class="texto">
       <h2>Busca Avançada </h2>
       <p>Selecione as opções abaixo conforme sua necessidade para uma busca mais refinada.</p>
   </div>
</div>


<div class="content-form">
    <form action="/searchAdvanced" method="GET">
        <div class="formgroup">
            <div class="localizacao">
                <h3 for="localizacao">Localização</h3>
                <div class="selects-loc">
                    <select name="estado" id="estado">
                        <option value="">Selecione a cidade</option>
                        <option value="São Paulo">São Paulo</option>
                    </select>
                    <select name="cidade" id="cidade">
                        <option value="">cidade</option>
                        <option value="">Santo André</option>
                        <option value="">Santos</option>
                        <option value="">São Paulo</option>
                    </select>
                </div>
            </div>

            <div class="atendimento">
                <div class="periodo-aten">
                    <h3 for="periodo">Periodo de Atendimento</h3>
                    <div class="input-group">
                        <div class="check-group">
                            <input type="checkbox" name="period_atend[]" id="" value="MANHÃ">
                            <label for="">Manhã</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="period_atend[]" id="" value="~TARDE">
                            <label for="">Tarde</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="period_atend[]" id="" value="NOITE">
                            <label for="">Noite</label>
                        </div>
                    </div>
                </div>
                <div class="dias-aten">
                    <h3>Dias de atendimento</h3>

                    <div class="input-group">
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" id="" value="SEG">
                            <label for="">Segunda-feira</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" value="TER"id="">
                            <label for="">Terça-feira</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" value="QUA" id="">
                            <label for="">Quarta-feira</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" value="QUI"id="">
                            <label for="">Quinta-feira</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" value="SEX" id="">
                            <label for="">Sexta-feira</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]" Svalue="SAB"id="">
                            <label for="">Sábado</label>
                        </div>
                        <div class="check-group">
                            <input type="checkbox" name="days_atend[]"  value="DOM" id="">
                            <label for="">Domingo</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="especialidades">
                <h3 for="">Especialdiades</h3>
                <div class="especialidades-group">
                    <div class="check-group">
                        <input type="checkbox" name="specialties[]" id="">
                        <label for="">Medicina</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="specialties[]" value="PSICOLOGIA" id="">
                        <label for="">Psicologia</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="specialties[]"  value="NUTRIÇÃO" id="">
                        <label for="">Nutrição</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="specialties[]" value="FISIOTERAPIA" id="">
                        <label for="">Fsioterapia</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="FONOAUDIOLOGIA" id="">
                        <label for="">Fonoaudiologia</label>
                    </div>
                </div>
            </div>
            <div class="equipamentos">
                <h3 for="">Equipamentos</h3>
                <div class="equipamentos-group">
                    <div class="check-group">
                        <input type="checkbox" name="equipaments[]" id="">
                        <label for="">Ecocardiograma</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="equipaments[]" value="ELETROCARDIOGRAMA" id="">
                        <label for="">Eletrocardiograma</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="equipaments[]" value="ULTRASSON"id="">
                        <label for="">Ultrassom</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="equipaments[]" value="APLICAÇÕES" id="">
                        <label for="">Aplicações</label>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="equipaments[]"  value="MEDIDOR DE PRESSÃO" id="">
                        <label for="">Medidor de Pressão</label>
                    </div>
                </div>
            </div>

            <div class="button">
                <button type="submit">Realizar Busca</button>
            </div>
        </div>
    </form>
</div>
</section>


@endsection
