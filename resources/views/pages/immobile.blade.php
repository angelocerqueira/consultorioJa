@extends('layout.app', ['current' => 'immobile'])
@section('body')

<section class="consulta-imovel">
    <div class="consulta-info">
        <div>
            <i class="fas fa-store-alt"></i>
        </div>
        <div class="texto">
            <h2>Consultorio para locação</h2>
            <p> <span>{{ $teste->endereco }}</span>/<span>{{  $teste->cidade  }}</span> </p>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="carousel "data-flickity='{"fullscreen": true }'>
                @foreach ($teste->photos as $item)
                <div class="carousel-cell"><img src="/storage/{{ $item->photo }}" alt=""></div>
                @endforeach
            </div>
            <div class="sobre-a-sala">
                <h1> Sobre a Sala</h1>
                <div class="">
                    <h5>{{ $teste->description }}</h5>
                </div>

                <p><strong> Estrutura: </strong><span>{{$teste->structure}}</span> </p>
                <p><strong> Especialidades: </strong><span>{{$teste->specialties}}</span> </p>
                <p><strong> Equipamentos: </strong><span>{{$teste->equipaments}}</span> </p>
            </div>

            <div class="structure">
                <div class="card-1">
                    <ul>
                        <li><i class="far fa-check-circle"></i> <p>Recepcionista</p></li>
                        <li><i class="fas fa-wifi"></i> <p>Wifi</p></li>
                        <li><i class="fas fa-wheelchair"></i>    <p>Acessibilidade </p></li>
                        <li> <i class="fas fa-coffee"></i> <p>Café e água</p></li>
                        <li> <i class="fas fa-map-marker-alt"></i> <p>Bairro República</p></li>
                    </ul>
                    <ul>
                        <li> <i class="fas fa-fan"></i><p> Ar condicionado</p></li>
                        <li><i class="fas fa-bed"></i><p> Maca e balança</p></li>
                        <li> <i class="fas fa-bookmark"></i><p>Lavatório</p> </li>
                        <li><i class="fas fa-car-alt"></i><p>Estacionamento</p></li>
                        <li><i class="fas fa-check"></i><p>Luvas</p></li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="Available">
            <div class="card">
                <div class="card-header">
                    <h1>Períodos Disponíveis</h1>
                    <h2>Valores Diários</h2>
                </div>
                <div class="card-grid-periodo">
                    <div class="dias">
                        <div>
                            <span></span>
                            </div>
                        <div><span>Seg</span></div>
                        <div><span>Ter</span></div>
                        <div><span>Qua</span></div>
                        <div><span>Qui</span></div>
                        <div><span>Sex</span></div>
                        <div><span>Sab</span></div>
                        <div><span>Dom</span></div>
                    </div>
                    <div class="manha">
                        <div>
                        <span>Manhã</span>
                        </div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                    </div>
                    <div class="tarde">
                        <div>
                        <span>tarde</span>
                        </div>

                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>

                    </div>
                    <div class="noite">
                        <div>
                        <span>noite</span>
                        </div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>
                        <div class="fields"><span class="value" data-shift="morning" data-price="{{ $teste->value_h }}" data-stime="08:00" data-etime="13:00" data-weekday="monday" data-chosen=0>{{ $teste->value_h }}</span></div>

                    </div>
                </div>
                <hr>
                <div class="periodo-value">
                    <h3>Selecione os períodos para visualizar o preço final e agendar uma visita</h3>

                    <h4>Você não precisa de fiador, seguro fiança ou depósito caução</h4>
                </div>
                <div class="button">
                    <a href="/immobiles"><button>Voltar</button></a>
                    <a href="/{{$teste->id}}/immobiles/enrollment">
                    <button>Realizar agendamento</button>
                </a>
                </div>
                <div class="help">
                    <p> Duvidas? Entre em contato: </p>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
