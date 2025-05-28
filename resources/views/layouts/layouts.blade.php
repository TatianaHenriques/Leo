<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'LEOndjiva')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/about.png') }}" type="image/x-icon">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p><i class='bx bxs-envelope'></i> eiffelondjiva@gmail.com</p>
                    <p><i class='bx bxs-phone-call'></i> +244 265 351 020</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61575700967289" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão de NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="img/about.png" alt="LEOndjiva" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link" href="{{ url('/index') }}">Pagina Inicial</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/direccao') }}">Direcção</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/secretaria') }}">Secretaria</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/curso') }}">Curso</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/noticias') }}">Notícias</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/galeria') }}">Galeria</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('/departamento') }}">Departamento</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://redeeiffel.ao" target="_blank">Rede Eiffel</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://liceueiffel.redeeiffel.ao/viewondjiva" target="_blank">Entrar</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sobre O LEO
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/') }}#about">Localização</a></li>
                        <li><a class="dropdown-item" href="{{ asset('docs/regulamento_interno.pdf') }}" target="_blank">Regulamento Interno</a></li> <!-- Link para o PDF -->
                        
                    </ul>
                </li>
                   <a href="#" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Contato</a>
                </ul>
            </div>
        </div>
    </nav>

    <hr>

    <!-- Conteúdo dinâmico das páginas -->
    <div class="content container py-4">
        @yield('content')
    </div>

    <hr>

    
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand"> Liceu Eiffel de Ondjiva<span class="dot"> </span></h4>
                        <p> </p>
                        <div class="col-auto social-icons">
                            <a href="https://www.facebook.com/profile.php?id=61575700967289" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
                   <p class="text-center"> <a style="text-decoration:none; color:#fff;" href=""> Liceu Eiffel de
                    Ondjiva</a></p>
        </div>
    </footer>
    <footer>
        <p class="text-center">© 2025 Copyright Rede Eiffel</p>
    </footer>
    

    <!-- JS -->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- AOS JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000, 
        once: true      
    });
    
</script>

</body>
</html>