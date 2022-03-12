@extends('layouts.app')

@section('title', 'Vacunate | Cazador de mitos')

@section('content')
@include('partials.header-guest')
<!--Contenido de la pagina-->
<main>
    @include('partials.brands')
    <section id="cazamitos" class="background">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="titlePrimary">Mitos sobre la vacuna COVID-19</h2>
                    <p>Los mitos sobre el coronavirus (COVID-19) parecen propagarse tanto o más rápido que el virus mismo.
                        Es importante
                        conocer los datos, en especial cuando se trata de las diferentes vacunas y variantes.
                        La mejor forma de protegerse y proteger a los demás del virus es recibir la vacuna contra el
                        COVID-19 y, una vez que
                        tenga la vacunación completa, obtener un refuerzo.</p>
                </div>
                <div class="col-12 col-sm-12 mt-4">
                    <div class="accordion" id="cazaMitos">
                        <div class="card shadow mt-3">
                            <div class="card-header" id="headingMitoUno">
                                <h2 class="titleSecondary" class="mb-0">
                                    <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse"
                                        data-target="#collapseMitoUno" aria-expanded="true" aria-controls="collapseMitoUno">
                                        <span class="icon-vaccination"><i class="fas fa-times"></i></span> Las vacunas
                                        contra el COVID-19 pueden enfermarlo de la misma enfermedad.
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseMitoUno" class="collapse show" aria-labelledby="headingMitoUno"
                                data-parent="#cazaMitos">
                                <div class="card-body">
                                    <p>No se puede contraer COVID-19 por una vacuna.
                                        Todas las vacunas contra el COVID-19 son inactivadas, lo que significa que no
                                        contienen el virus que causa la
                                        enfermedad.
                                        En general, las vacunas ayudan a su cuerpo a desarrollar inmunidad a un germen, pero
                                        no lo enferman. Su cuerpo detecta
                                        lo que parece ser el germen y genera anticuerpos que lo protegen en el futuro.
                                        Padecer efectos secundarios es, en
                                        realidad, una señal de que la vacuna está activando su sistema inmunológico. Las
                                        vacunas les dicen a nuestras células
                                        que desarrollen una proteína que, a su vez, hace que nuestro cuerpo produzca
                                        anticuerpos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mt-3">
                            <div class="card-header" id="headingMitoDos">
                                <h2 class="titleSecondary" class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseMitoDos" aria-expanded="false"
                                        aria-controls="collapseMitoDos">
                                        <span class="icon-vaccination"><i class="fas fa-times"></i></span> Las vacunas
                                        contra el COVID-19 se prepararon en forma apresurada y no son seguras
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseMitoDos" class="collapse" aria-labelledby="headingMitoDos"
                                data-parent="#cazaMitos">
                                <div class="card-body">
                                    <p>Los estándares de seguridad no se debilitaron para acelerar las vacunas.
                                        Las vacunas contra el novedoso Coronavirus atravesaron las mismas capas de revisión
                                        y pruebas que otras. En el proceso
                                        de desarrollo de la vacuna contra el COVID-19, no se omitió ninguna etapa de prueba
                                        ni revisión de seguridad; en cambio,
                                        muchos de esos pasos se están llevando a cabo al mismo tiempo y con más rapidez y
                                        financiación adicional que en los
                                        tiempos previos a la pandemia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mt-3">
                            <div class="card-header " id="headingMitoTres">
                                <h2 class="titleSecondary" class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseMitoTres" aria-expanded="false"
                                        aria-controls="collapseMitoTres">
                                        <span class="icon-vaccination"><i class="fas fa-times"></i></span> Una vez que
                                        reciba la vacuna, ya no deberé usar una mascarilla
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseMitoTres" class="collapse" aria-labelledby="headingMitoTres"
                                data-parent="#cazaMitos">
                                <div class="card-body">
                                    <ul>
                                        <p>Los Centros para el Control y la Prevención de Enfermedades (CDC) recomiendan que
                                            las personas sigan todas las pautas
                                            federales, estatales y locales actuales sobre el uso de mascarillas,
                                            independientemente del estado de vacunación, ya que
                                            dichas pautas se implementan para mantenerlo a usted y a los demás a salvo.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mt-3">
                            <div class="card-header " id="headingMitoCuatro">
                                <h2 class="titleSecondary" class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseMitoCuatro" aria-expanded="false"
                                        aria-controls="collapseMitoCuatro">
                                        <span class="icon-vaccination"><i class="fas fa-times"></i></span> Las personas
                                        embarazadas o que amamantan no pueden recibir vacunas contra el COVID-19.
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseMitoCuatro" class="collapse" aria-labelledby="headingMitoCuatro"
                                data-parent="#cazaMitos">
                                <div class="card-body">
                                    <p>Las mujeres embarazadas o que están amamantando deben vacunarse y, una vez que tengan
                                        la vacunación completa, recibir un
                                        refuerzo.
                                        Los CDC recomiendan que las mujeres embarazadas, que amamantan o que planean
                                        embarazarse en el futuro se vacunen contra
                                        el COVID-19. También se recomienda el refuerzo para esos grupos. Las vacunas contra
                                        el COVID-19 no causan infección en
                                        nadie (incluidas futuras madres y sus bebés), y son eficaces para prevenir el virus
                                        en mujeres que amamantan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer-guest')
@endsection
