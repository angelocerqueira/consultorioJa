
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/card.css') }}">

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

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script type="module" src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/scrollReaveal.js') }}"></script>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/tabMenuTwo.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>



    <script>

    var flky = new Flickity( '.carousel', {
  // options, defaults listed

  accessibility: true,
  // enable keyboard navigation, pressing left & right keys

  adaptiveHeight: true,
  // set carousel height to the selected slide

  autoPlay: true,
  // advances to the next cell
  // if true, default is 3 seconds
  // or set time between advances in milliseconds
  // i.e. `autoPlay: 1000` will advance every 1 second

  cellAlign: 'center',
  // alignment of cells, 'center', 'left', or 'right'
  // or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)

  cellSelector: undefined,
  // specify selector for cell elements

  contain: false,
  // will contain cells to container
  // so no excess scroll at beginning or end
  // has no effect if wrapAround is enabled

  draggable: '>1',
  // enables dragging & flicking
  // if at least 2 cells

  dragThreshold: 3,
  // number of pixels a user must scroll horizontally to start dragging
  // increase to allow more room for vertical scroll for touch devices

  freeScroll: true,
  // enables content to be freely scrolled and flicked
  // without aligning cells
  fullscreen: true,
  friction: 0.2,
  // smaller number = easier to flick farther

  groupCells: false,
  // group cells together in slides

  initialIndex: 0,
  // zero-based index of the initial selected cell

  lazyLoad: true,
  // enable lazy-loading images
  // set img data-flickity-lazyload="src.jpg"
  // set to number to load images adjacent cells

  percentPosition: true,
  // sets positioning in percent values, rather than pixels
  // Enable if items have percent widths
  // Disable if items have pixel widths, like images

  prevNextButtons: true,
  // creates and enables buttons to click to previous & next cells

  pageDots: true,
  // create and enable page dots

  resize: true,
  // listens to window resize events to adjust size & positions

  rightToLeft: false,
  // enables right-to-left layout

  setGallerySize: true,
  // sets the height of gallery
  // disable if gallery already has height set with CSS

  watchCSS: false,
  // watches the content of :after of the element
  // activates if #element:after { content: 'flickity' }

  wrapAround: false
  // at end of cells, wraps-around to first for infinite scrolling

});


    </script>




<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('DatPayment.js')}}"></script>

</body>
</html>
