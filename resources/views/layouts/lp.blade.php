<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Guto Leal">
        <meta name="description" content="Torne sua viagem marcante conhecendo o litoral de Porto Seguro">
        <title>Tour Porto Seguro</title>
        <!-- Icon -->
        <link href="{{ asset('storage/favicon.ico') }}" rel="shortcut icon">

        <!-- Font Awesome -->
        <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">

        <!-- Owl Stylesheets -->
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Style Css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('') }}">
                    <img src="{{ asset('storage/logo.png') }}" alt="" width="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuHamburguer" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuHamburguer">
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('sobre.nos') }}">Sobre nós</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="passeios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nossos passeios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="passeios">

                                @foreach ($passeios as $passeio)
                                    <li><a class="dropdown-item" href="{{ url("passeio/" .(new Illuminate\Support\Str)::slug($passeio->local, '-')) }}">{{ $passeio->local }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content-lp')

        <footer class="bg-primary text-light pt-5 pb-5 mt-5" id="footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h6 class="title-footer">Contato:</h6>
                        <ul class="list-footer">
                            <li>Telefone: +55 (73) 99921-9744</li>
                            <li>WhatsApp: +55 (73) 99921-9744</li>
                            <li>E-mail: mytourportoseguro@gmail.com</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6 class="title-footer">Local:</h6>
                        <ul class="list-footer">
                            <li>Porto Seguro - BA, Brasil</li>
                            <li>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61230.804491921335!2d-39.118204124691665!3d-16.428620768537954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x73696a94abc86ff%3A0x677df9529c95e80f!2sPorto%20Seguro%2C%20BA%2C%2045810-000!5e0!3m2!1spt-BR!2sbr!4v1645636527543!5m2!1spt-BR!2sbr" id="mapaPS" allowfullscreen="" loading="lazy"></iframe>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6 class="title-footer">Nossas redes sociais</h6>
                        <ul class="list-footer">
                            <li><a href="https://www.instagram.com/tour_porto_seguro/" target="_blank"><img src="{{ asset('storage/logo-insta.png') }}" alt="Instagram" loading="lazy"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="row border-top pt-3">
                    <div class="col-md-6">
                        <ul class="list-footer">
                            <li><b>My Tour Porto Seguro</b></li>
                            {{-- <li>CNPJ: 00.000.000/0000-00</li> --}}
                            <li>Rua São Pedro, S/N, Centro (Anexo Shopping Central Park)</li>
                            <li>Porto Seguro/BA - CEP: 45810‑000</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-footer links">
                            <li><a href="{{ route('politicas.de.privacidade') }}">Politicas de Privacidade</a></li>
                            <li><a href="{{ route('termos.de.uso') }}">Termos de uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div class="btn-float-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=5573999219744&text=Ol%C3%A1%2C%20quero%20agendar%20um%20passeio%20%F0%9F%98%84" target="_blank" id="btn-float-whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>

        <div class="view-image-passeio" style="display: none;">
            <div class="box-image">
                <img src="" class="img-fluid">
                <span class="close-img-max"><i class="fa fa-times"></i></span>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- jQuery JS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Owl Carousel JS -->
        <script src="{{ asset('js/owl.carousel.js') }}"></script>

        <!-- Script JS -->
        <script src="{{ asset('js/script.js') }}"></script>

    </body>

</html>
