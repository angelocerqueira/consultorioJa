
<section class="modal-container" data-modal="container" data-modalMoblie="container" id='login'>
    <div class="modal ativo" data-modal="modal">
        <div class="imagem-modal">
            <img src="{{asset('assets/img/logoConsultorio.jpg')}}" alt="" srcset="">
        </div>
        <button class="fechar" data-modal="fechar" data-modalMobile="fechar">X</button>
        <form action="api/auth/login" method="POST">
            @csrf
            <label for=""> Usuário</label>
            <input type="email" name="email" placeholder="Digite seu email" id="campo_usuario" required>
            <label for=""> Senha</label>
            <input type="password" name="password" id="campo_senha" placeholder="Digite sua senha" required>
            <p class="recuperar-psswd"> Esqueceu sua senha? <a href="/" >Clique aqui</a></p>
            <div class="button">
                <button type="submit" id="btn_login">Confirmar</button>
            </div>

            <p class="cadastrar">Ainda não é  cadastrado? <br> <a href="" data-modal="abrirCadastro">Clique aqui</a> e faça seu cadastro.</p>
        </form>
    </div>

    <div class="modal-cadastro" data-modal="modalCadastro">
        <div class="imagem-modal-cadastro">
            <img src="{{asset('assets/img/logoConsultorio.jpg')}}" alt="" srcset="">
        </div>
    <button class="fechar" data-modal="fecharCadastro">X</button>
    <form action="api/auth/register" method="POST">
        @csrf
        <div class="sexo" style="padding: 10px 0;">
            <div >
                <input
                    type="radio"
                    name="tipo"
                    value="Anunciante" checked>
                    <label for="">Anunciante</label>
            </div>
            <div>
                <input
                    type="radio"
                    name="tipo"
                    value="Locatário">
                    <label for="">Locatário</label>
            </div>
        </div>

        <div class="sexo">

            <div>
                <input
                    type="radio"
                    name="sexo"
                    value="Masculino" checked>

                    <label for="">Masculino</label>
            </div>
            <div>

                <input
                    type="radio"
                    name="sexo"
                    value="Feminino">
                <label for="">Feminino</label>
            </div>
        </div>

        <div class="dados">
            <label for="">Nome</label>
            <input type="text" name="name" id="" required>
            <label for="">Email</label>
            <input type="email" name="email" id="" required>
            <label for="">Senha</label>
            <input type="password" name="password" id="" required>
            <label for="">Confirme sua Senha</label>
            <input type="password" name="password_confirmation" id="" required>
        </div>
        <div class="button-cadastro">
            <button type="submit">Cadastrar</button>
        </div>
    </form>

</div>


</section>


<div class="menu-mobile" data-menu="container">
        <header >
          <div class="container" >

            <div class="mobile">
              <div class="logo"><a href="/"><img src="{{asset('assets/img/logoConsultorio.jpg')}}" alt="Consultoria" > </a></div>
              <button class="fechar" data-menu="fechar">X</button>
              <div class="busca">
                <form action="/search">
                  <input type="search" name="search" id="" placeholder="Busque pela sua localizacao">
                  <input type="submit">
                </form>
              </div>

              <div class="menu">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/quemsomos">quem somos</a></li>
                    <li><a href="/cadastro">cadastre seu espaço</a></li>
                    <li><a href="/faleconosco">fale conosco</a></li>
                </ul>
                <div class="login">
                  <p>Fazer Login: </p>
                  <div>
                    <button data-modalMobile="abrir">
                      <img src="{{('assets/img/icons/login.svg')}}" alt="" srcset="">
                    </button>
                  </div>

                </div>

                <div class="actions">
                 <p> Nos acompanhe:</p>

                 <ul class="rs">
                    <li><a href="https://facebook.com" target="_blank"><img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" srcset=""></a></li>
                    <li><a href="https://instagram.com"target="_blank"><img src="{{ asset('assets/img/icons/instagram.svg') }}" alt="" srcset=""></a></li>
                    <li><a href="https://linkedin.com"target="_blank"><img src="{{ asset('assets/img/icons/linkedin.svg') }}" alt="" srcset=""></a></li>
                    <li><a href="https://twitter.com"target="_blank"><img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="" srcset=""></a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
