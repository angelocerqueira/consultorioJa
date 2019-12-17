@extends('layout.app', ['current' => 'home'])
@section('body')
  <section id="introducao">
      <div class="img-slide">
        <img src="{{('assets/img/consultorio.jpg')}}" alt="">
       </div>
    <div class="intro">


      <div class="card-1">
       <h2>Consultório completo no centro de São Paulo</h2>
        <div>
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
        <div class="button-intro">
       <a href="/immobiles"> <button> Veja Mais</button></a>
      </div>
      </div>
      <div class="card-2">
        <h2>Encontre Aqui</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
        <form action="searchHome" method="get">
          <label for="">Estado</label>
          <select id="uf" name="uf">
                <option value="" > Selecione o estado</option>
                <option value="São Paulo">São Paulo</option>
            </select>
          <label for="">Cidade</label>
          <select name="cidade" id="">
            <option value="" > Selecione a cidade</option>
                <option value=""></option>
          </select>
          {{-- <label for="">Região</label>
          <select name="" id="">
            <option value=""> Selecione a Região</option>

          </select>
          <label for=""> Bairro</label>
          <select name="" id="">
            <option value="" > Selecione o Bairro</option>
          </select> --}}
          <button type="submit">Realizar Pesquisa </button>
        </form>
      </div>

    </div>
  </section>

  <section id="section-2">
    <div class="section2-cards">
      <div class="card-item um">
        <div class="item-header">
          <div class="img"><img src="{{asset("assets/img/icons/linkedin.svg")}}" alt=""></div>
          <div class="item-text">
            <h2>MEDVALE LOREM IPSUM</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
        <p class="paragrafo">O Portal Medicom foi desenvolvido especificamente para atender as solicitacoes contabeis e tributarias do medico de forma rapida e eficiente. </p>
       <div class="button"> <button>Veja mais</button></div>
      </div>

      <div class="card-item dois" style="background: #E8E4E3; color: #2C3E5A;">
        <div class="item-header">
          <div class="img"><img src="{{asset('assets/img/icons/linkedin.svg')}}" alt=""></div>
          <div class="item-text">
            <h2 style="color: #2C3E5A;">MEDVALE LOREM IPSUM</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
        <p class="paragrafo">O Portal Medicom foi desenvolvido especificamente para atender as solicitacoes contabeis e tributarias do medico de forma rapida e eficiente. </p>
       <div class="button" > <button style="background:#2C3E5A ; color: #fff;">Veja mais</button></div>
      </div>
      <div class="card-item tres" style="background: #fff; color: #2C3E5A;">
        <div class="item-header">
          <div class="img"><img src="{{asset('assets/img/icons/linkedin.svg')}}" alt=""></div>
          <div class="item-text">
            <h2 style="color: #2C3E5A;">MEDVALE LOREM IPSUM</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
        <p class="paragrafo">O Portal Medicom foi desenvolvido especificamente para atender as solicitações contábeis e tributárias do médico de forma rápida e eficiente. </p>
       <div class="button"> <button style="color: #fff;">Veja mais</button></div>
      </div>

    </div>
  </section>

  <section id="section-3">

    <div class="content-section3">
      <h1>SALAS E CONSULTÓRIO PARA LOCAÇÃO</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec justo libero, iaculis non gravida quis</p>
      <p> Sed scelerisque at justo ac rutrum. Maecenas vitae est libero. Etiam nec lacus ultrices, bibendum lorem et, mollis nunc. Praesent eu lacinia neque. Morbi sed convallis orci. Proin blandit pellentesque lectus et faucibus. Aliquam bibendum molestie justo, eget finibus sem aliquet vel.</p>
      <div class="button">
     <a href="/cadastro"> <button>Cadastre sua clinica</button></a>
    </div>
    </div>
  </section>

  <section id="section-4">
    <div><img src="{{ asset('assets/img/consultorioja.jpg') }}" alt="" srcset=""></div>
  </section>
  @endsection

