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
                        <a class="nav-link" href="#home"><span class="navbarContent">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#motivos"><span
                                class="navbarContent">Motivos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recomendaciones"><span
                                class="navbarContent">Recomendaciones</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto"><span
                                class="navbarContent">Contacto</span></a>
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
                        <p class="pr-5">Detengamos esta pandemia matando el virus con una vacuna, no permita que usted y su familia se
                            infecten.</p>
                        <div class="row pr-5">
                            <div class="col-12 col-sm-6">
                                <p><span class="icon-hero-info"><i class="fas fa-shield-alt"></i></span> <span class="titleSecondary">Mejor
                                        protección</span></p>
                            </div>
                            <div class="col-12 col-sm-6">
                                <p><span class="icon-hero-info"><i class="fas fa-star"></i></span> <span class="titleSecondary">Vacunas
                                        aprobadas</span></p>
                            </div>
                        </div>
                        <div class="figura">
                            <div class="trianguloHeader2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="hero-date">
                        <p><span class="icon-vaccination"><i class="far fa-clock"></i></span> Próxima fechas de
                            vacunación Nuevo Leon</p>
                        <div id="fechaVacunacion" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($modulos as $modulo)
                                @if ($loop->first)
                                <div class="carousel-item active">
                                    <div class="card shadow cardDate">
                                        <div class="card-body d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i
                                                                class="fas fa-location-arrow"></i></span> Locación</p>
                                                    <p><span class="titleSecondary">{{$modulo->city}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i
                                                                class="fas fa-calendar"></i></span>
                                                        Fecha de vacunación</p>
                                                    <p><span class="titleSecondary">{{$diassemana[date('w', strtotime($modulo->date_module))]." ".date('d', strtotime($modulo->date_module))." de
                                                    ".$meses[date('n', strtotime($modulo->date_module))-1]. " del ".date('Y', strtotime($modulo->date_module))}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i class="fas fa-edit"></i></span>
                                                        Tipo de
                                                        vacuna</p>
                                                    <p><span class="titleSecondary">{{$modulo->brand}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3 d-flex align-items-center">
                                                    <a href="{{route('booking-vaccine', $modulo)}}"
                                                        class="btn btn-vaccination-2">Confirmar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($loop->index > 0)
                                <div class="carousel-item">
                                    <div class="card shadow cardDate">
                                        <div class="card-body d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i
                                                                class="fas fa-location-arrow"></i></span> Locación</p>
                                                    <p><span class="titleSecondary">{{$modulo->city}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i
                                                                class="fas fa-calendar"></i></span>
                                                        Fecha de vacunación</p>
                                                    <p><span class="titleSecondary">{{$diassemana[date('w', strtotime($modulo->date_module))]." ".date('d', strtotime($modulo->date_module))." de
                                                    ".$meses[date('n', strtotime($modulo->date_module))-1]. " del ".date('Y', strtotime($modulo->date_module))}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <p><span class="icon-vaccination"><i class="fas fa-edit"></i></span>
                                                        Tipo de
                                                        vacuna</p>
                                                    <p><span class="titleSecondary">{{$modulo->brand}}</span></p>
                                                </div>
                                                <div class="col-12 col-sm-3 d-flex align-items-center">
                                                    <a href="{{route('booking-vaccine', $modulo)}}"
                                                        class="btn btn-vaccination-2">Confirmar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <button class="carousel-control-prev controlCarrousel" type="button"
                                data-target="#fechaVacunacion" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next controlCarrousel" type="button"
                                data-target="#fechaVacunacion" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
