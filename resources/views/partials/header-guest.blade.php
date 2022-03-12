<!--Cabecera de la pagina-->
<header id="home">
    <!--Barra navegadora-->
    <nav class="navbar navbar-expand-lg navbar-light navbarPage fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><span class="navbarPageLogo">Vacunate</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#home"><span class="navbarContent">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#motivos"><span class="navbarContent">Motivos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#recomendaciones"><span
                                class="navbarContent">Recomendaciones</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}#contacto"><span class="navbarContent">Contacto</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-vaccination-2" href="{{route('hoax-buster')}}">Cazamitos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Cabecera principal-->
    <section class="hero">
        <div class="hero-content container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="hero-info">
                        <div class="figura">
                            <div class="trianguloHeader1"></div>
                        </div>
                        <h1 class="titlePrimary">Lucha contra el virus<br>Con las vacunas</h1>
                        <p class="pr-5">Detengamos esta pandemia matando el virus con una vacuna, no permita que usted y
                            su familia se infecten.</p>
                        <div class="row pr-5">
                            <div class="col-12 col-sm-6">
                                <p><span class="icon-hero-info"><i class="fas fa-shield-alt"></i></span> <span
                                        class="titleSecondary">Mejor protección</span></p>
                            </div>
                            <div class="col-12 col-sm-6">
                                <p><span class="icon-hero-info"><i class="fas fa-star"></i></span> <span
                                        class="titleSecondary">Vacunas aprobadas</span></p>
                            </div>
                        </div>
                        <div class="figura">
                            <div class="trianguloHeader2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
