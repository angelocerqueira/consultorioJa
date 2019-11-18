@extends('layout.app', ['current' => 'resultbusca'])
@section('body')

<section class="result-busca">
  <div class="cadastro-info">
    <div>
      <i class="fas fa-store-alt"></i>
    </div>
    <div class="texto">
      <h2>Busca Avançada </h2>
      <p>Clique no ícone ao lado para refinar sua busca.</p>
    </div>

    <div class="filtro">

      <a href="/resultbusca/buscaavancada"><button>  <span>Filtro</span>▼<span></span>   </button></a>
    </div>
  </div>

  <div class="content-result">
    <div class="card-group">



        @foreach ($post as $item)

    <div class="card">
            <div class="img">
                <img src="/storage/{{ $item->file }}" alt="">
            </div>
            <div class="classificacao">
                <span>4.9</span>
            </div>

        <div class="card-corpo">
            <div class="titulo">
                <h1>{{ $item->title }}</h1>
                <p>{{$item->endereco }} / {{$item->cidade }}</p>
            </div>
            <div class="periodo">
                <div class="sub-title">
                    <i class="fas fa-history"></i>
                    <h3>Períodos de Atendimento</h3>
                </div>
                <ul>
                     <?php $atend = explode(",", $item->period_atend);
                     $colors = array("52C8D6", "2882c7", "281cba");

                        for ($i=0; $i < count($atend); $i++) {
                         echo '<li style="background: #'.$colors[$i].'">'. $atend[$i] . '</li>';
                        }
                     ?>
                </ul>
            </div>
            <div class="dias">
                <div class="sub-title">
                    <i class="far fa-calendar-minus"></i>
                    <h3>Dias de fucionamento</h3>
                </div>
                <ul>
                    <?php $dias = explode(",", $item->days_atend);
                    $colors2 = array("737674", "abadac", "737674", "abadac", "737674", "ea5455", "ea5455");

                    for ($i=0; $i < count($dias); $i++) {
                        if($dias[$i] == "SAB"){
                            echo '<li style="background: #ea5455">'. $dias[$i] . '</li>';
                        }elseif ($dias[$i] == "DOM") {
                            echo '<li style="background: #ea5455">'. $dias[$i] . '</li>';
                        }else{
                        echo '<li style="background: #'.$colors2[$i].'">'. $dias[$i] . '</li>';
                        }
                    }
                     ?>

                </ul>
            </div>
            <div class="valores">
                <div class="sub-title">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Valores</h3>
                </div>
                <ul>
                    <li style="background:#52C8D6"><sub>R$</sub>{{$item->value_h}} <sub>,00</sub> / hora </li>
                    <li><sub>R$</sub>{{$item->value_m}} <sub>,00</sub> / mês </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>


</section>


@endsection
