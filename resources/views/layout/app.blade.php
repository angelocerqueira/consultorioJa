
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>ConsultórioJá</title>
</head>
<body>
    <div class="grid-container">
        <header id="header">
            <div class="container">
                <div class="topo">
                    <div class="logo"><a href="/"><img src="{{ asset('assets/img/logoConsultorio.jpg')}}" alt="Consultoria" > </a></div>
                    <div class="actions">

                        <ul class="rs">
                            <li><a href="https://facebook.com" target="_blank"><img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="" srcset=""></a></li>
                            <li><a href="https://instagram.com"target="_blank"><img src="{{ asset('assets/img/icons/instagram.svg') }}" alt="" srcset=""></a></li>
                            <li><a href="https://linkedin.com"target="_blank"><img src="{{ asset('assets/img/icons/linkedin.svg') }}" alt="" srcset=""></a></li>
                            <li><a href="https://twitter.com"target="_blank"><img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="" srcset=""></a></li>
                            <li>
                                <button data-modal="abrir">
                                    <img src="{{ asset('assets/img/icons/login.svg') }}" alt="" srcset="">
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="menu">
                    <ul>
                        <li @if ($current == 'home') class=" active" @else class=" " @endif><a href="/">home</a></li>
                        <li @if ($current == 'quemsomos') class=" active" @else class=" " @endif><a href="/quemsomos">quem somos</a></li>
                        <li @if (($current == 'cadastro'  ) && ($current == 'cadastroconsultorio' )) class=" active" @else class=" " @endif><a href="/cadastro">cadastre seu espaço</a></li>
                        <li @if ($current == 'faleconosco') class=" active" @else class=" " @endif><a href="/faleconosco">fale conosco</a></li>
                    </ul>

                    <div class="busca">
                        <form action="/search" method="GET">
                            <input type="search" name="search" id="" placeholder="Busque pela sua localizacao">
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </header>

    <div class="menu-clean">
        <div class="logo">  <a href="/"> <img src="{{ asset('assets/img/logoConsultorio.jpg') }}" alt="Consultoria" ></a></div>

        <div class="menu" data-menuClean="menu"><button ><i class="fas fa-bars"></i></button></div>

    </div>


    @hasSection ('body')
        @yield('body')
    @endif

    <footer>
        <div class="container-footer">
            <div class="content-footer">
                <ul>
                    <h2> menu</h2>
                    <li><a href="/">home</a></li>
                    <li><a href="/quemsomos">quem somos</a></li>
                    <li><a href="/cadastro">cadastre seu espaço</a></li>
                    <li><a href="/faleconosco">fale conosco</a></li>
                </ul>
                <div class="imagem">
                    <img src="{{asset('assets/img/logo-footer.jpg')}}" alt="">
                </div>
                <div class="contato">
                    <h3>Quer saber mais? Envio-nos uma mensagem</h3>
                    <form action="">
                        <div class="campos">
                            <div class="icon" style="padding:  0 1px;">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" placeholder="Insira seu nome">
                        </div>

                        <div class="campos">
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                            <input type="text" placeholder="Insira seu email">
                        </div>

                        <div class="campos">
                            <div class="icon" >
                                <i class="fas fa-envelope"></i>
                            </div>
                            <input type="text" placeholder="Assunto">
                        </div>

                        <div class="campos">
                            <div class="icon">
                                <i class="fas fa-file-alt" style="padding:  10px 12px;"></i>
                            </div>
                            <textarea name="" id="" cols="30" rows="5"></textarea>
                        </div>

                        <div class="button">
                            <button type="submit">Enviar ensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        <div class="download">
            <ul>
                <li><a href=""><img src="{{asset('assets/img/playstore.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('assets/img/appstore.png')}}" alt=""></a></li>
            </ul>
        </div>

        </div>
    </footer>

    @component('components.modal')
    @endcomponent

    <div class="wpp">
        <div>
            <a href="https://api.whatsapp.com/send?phone=5571996760918&text=Ol%C3%A1,%20tenho%20interesse%20no%20servi%C3%A7o%20de%20consultoria." target="_blank"><img src="{{ asset('assets/img/icons/wpp.svg')}}" alt="Whatsapp" srcset=""> </a>
        </div>


    <script src="{{ asset('js/all.js') }}"></script>
    <script type="module" src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/scrollReaveal.js') }}"></script>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/tabMenuTwo.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>


</body>
</html>
