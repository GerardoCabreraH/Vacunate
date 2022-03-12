@extends('layouts.app')

@section('title', 'Vacunate | Campaña de vacunación')

@section('content')
@include('partials.header-index')
@include('partials.status-guest')
<!--Contenido de la pagina-->
<main>
    @include('partials.brands')
    <section id="motivos" class="background">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="titlePrimary">Por que es importante la vacuna</h2>
                    <p>Como se ha visto en el último año, gracias a que distintos laboratorios estuvieron realizando
                        estudios
                        científicos,
                        se logró desarrollar algunas vacunas que han sido de mucha utilidad para toda la población a
                        nivel mundial,
                        brindándole al cuerpo humano cierto nivel de protección frente al virus del SARS-CoV-2.</p>
                </div>
                <div class="col-12 col-sm-6 figura">
                    <div class="bloque-señal">
                        <div class="triangulo"></div>
                        <div class="linea"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p><span class="icon-vaccination"><i class="fas fa-microscope"></i></span></p>
                            <p>Las vacunas se han sometido a un proceso de estudios científicos, como toda vacuna, para
                                poder lograr desarrollarse y llegar a ser aceptada para el uso en la población a nivel
                                mundial. Se han sometido a ensayos clínicos, no se están usando como un proyecto
                                experimental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p><span class="icon-vaccination"><i class="fas fa-shield-alt"></i></span></p>
                            <p>Se mantendrán en constante monitoreo para revisar su seguridad en todo momento. Las
                                vacunas tienen efectividad al momento del contagio del virus, ya que nos ayudan a
                                reducir el riesgo de desarrollar síntomas graves, hospitalizaciones e incluso la muerte.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p><span class="icon-vaccination"><i class="fas fa-users"></i></span></p>
                            <p>Vacunarse no solo ayuda a protegerte a ti mismo, sino también a los que nos rodean. Una
                                vez que ya la mayoría de la población se encuentre con el esquema de vacunación
                                completo, se podrá volver poco a poco a la vida que estábamos acostumbrados a tener
                                antes de que iniciara esta pandemia; esto no quiere decir que una vez vacunados ya
                                podremos olvidarnos de las medidas de seguridad que usamos hoy en día, sólo significa
                                que entre más pronto nos vacunemos, más pronto podremos salir de esta situación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p><span class="icon-vaccination"><i class="fas fa-syringe"></i></span></p>
                            <p>Si ya presentaste la infección del COVID-19, puedes vacunarte. Los anticuerpos que
                                desarrollas al contagiarte solo duran cierto tiempo, por lo tanto solo serás inmune por
                                un tiempo definido, la vacuna te dará una inmunidad más segura y eficaz. Ninguna vacuna
                                tiene el virus del SARS-Cov2 vivo por lo tanto, al vacunarte, no existe el riesgo de
                                contagiarte con la vacuna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recomendaciones" class="background">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-12 col-sm-6 figura">
                        <div class="triangulo2"></div>
                        <div class="linea2"></div>
                        <div class="fondoAzul shadow"></div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h2 class="titlePrimary">Recomendaciones para recibir la vacuna</h2>
                        <p>Millones de personas de todo el mundo han recibido ya su vacuna contra la COVID-19 de forma
                            segura y, gracias a ello,
                            todos estamos un poco más cerca de poder volver a disfrutar de lo que nos gusta junto a
                            nuestros seres queridos.
                            Muchas
                            personas están deseando vacunarse contra la COVID-19, pero otras, comprensiblemente, tienen
                            preguntas acerca del
                            proceso
                            de vacunación y de lo que deben esperar cuando les llegue su turno.</p>
                        <div class="accordion" id="recomendacionesVacuna">
                            <div class="card shadow mt-3">
                                <div class="card-header" id="headingRecomendacionUno">
                                    <h2 class="titleSecondary" class="mb-0">
                                        <button class="btn btn-link btn-block text-center" type="button"
                                            data-toggle="collapse" data-target="#collapseRecomendacionUno"
                                            aria-expanded="true" aria-controls="collapseRecomendacionUno">
                                            <span class="icon-vaccination"><i class="fas fa-check"></i></span> Antes de
                                            vacunarte
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseRecomendacionUno" class="collapse show"
                                    aria-labelledby="headingRecomendacionUno" data-parent="#recomendacionesVacuna">
                                    <div class="card-body">
                                        <ul>
                                            <li><span class="titleSecondary">Investiga.</span> En internet hay un sinfín
                                                de información errónea
                                                sobre las
                                                vacunas, así que es importante consultar fuentes fidedignas como UNICEF
                                                y la
                                                Organización Mundial de la Salud (OMS).</li>
                                            <li><span class="titleSecondary">Habla con tu médico.</span> Si alguna vez
                                                has tenido una reacción
                                                alérgica grave
                                                a una vacuna o si tienes preguntas sobre algún medicamento que estés
                                                tomando en
                                                la actualidad, consulta con tu profesional sanitario antes de tu cita.
                                            </li>
                                            <li><span class="titleSecondary">Cuídate.</span> Duerme bien y mantente
                                                hidratado antes de vacunarte
                                                con el fin
                                                de encontrarte lo mejor posible ese día.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mt-3">
                                <div class="card-header" id="headingRecomendacionDos">
                                    <h2 class="titleSecondary" class="mb-0">
                                        <button class="btn btn-link btn-block text-center collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseRecomendacionDos"
                                            aria-expanded="false" aria-controls="collapseRecomendacionDos">
                                            <span class="icon-vaccination"><i class="fas fa-check"></i></span> Durante
                                            la cita
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseRecomendacionDos" class="collapse"
                                    aria-labelledby="headingRecomendacionDos" data-parent="#recomendacionesVacuna">
                                    <div class="card-body">
                                        <ul>
                                            <li><span class="titleSecondary">Protégete.</span> No olvides tomar las
                                                precauciones de seguridad en
                                                el centro en
                                                el que te vacunes, como mantener la distancia física mientras esperas y
                                                llevar
                                                puesta la mascarilla.</li>
                                            <li><span class="titleSecondary">Comunícate.</span> Informa al profesional
                                                sanitario de cualquier
                                                enfermedad o
                                                condición que pueda requerir precauciones adicionales; por ejemplo, si
                                                estás
                                                embarazada o tienes un sistema inmunológico debilitado.</li>
                                            <li><span class="titleSecondary">Conserva tu registro de vacunación.</span>
                                                Deberías recibir una
                                                tarjeta en la
                                                que se indique la vacuna contra la COVID-19 que te han administrado, la
                                                fecha en
                                                la que la recibiste y el lugar donde te vacunaron. Guarda bien esta
                                                tarjeta por
                                                si la necesitas en el futuro.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mt-3">
                                <div class="card-header " id="headingRecomendacionTres">
                                    <h2 class="titleSecondary" class="mb-0">
                                        <button class="btn btn-link btn-block text-center collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseRecomendacionTres"
                                            aria-expanded="false" aria-controls="collapseRecomendacionTres">
                                            <span class="icon-vaccination"><i class="fas fa-check"></i></span>Después de
                                            recibir la vacuna
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseRecomendacionTres" class="collapse"
                                    aria-labelledby="headingRecomendacionTres" data-parent="#recomendacionesVacuna">
                                    <div class="card-body">
                                        <ul>
                                            <li><span class="titleSecondary">Quédate un tiempo para verificar que estás
                                                    bien.</span> El
                                                profesional sanitario
                                                debería observarte durante unos 15 minutos después de administrarte la
                                                vacuna
                                                por si sufres alguna reacción inmediata. Sin embargo, es muy poco
                                                frecuente que
                                                se produzcan reacciones graves relacionadas con la salud.</li>
                                            <li><span class="titleSecondary">Prepárate para posibles efectos
                                                    secundarios.</span> Las vacunas
                                                están diseñadas
                                                para proporcionarte inmunidad sin exponerte al peligro de contraer la
                                                enfermedad. Si bien es habitual generar inmunidad sin que se produzca
                                                una
                                                reacción, también es frecuente que se produzcan efectos secundarios
                                                leves o
                                                moderados que desaparecen por sí solos en unos días.</li>
                                            <li><span class="titleSecondary">Ten paciencia.</span> Crear inmunidad
                                                requiere tiempo. Se
                                                considerará que estás
                                                completamente vacunado una vez que hayan transcurrido dos semanas de la
                                                segunda
                                                dosis de la vacuna de Pfizer-BioNtech o la de Moderna; 15 días desde la
                                                segunda
                                                dosis de la vacuna de AstraZeneca; o dos semanas desde la única dosis de
                                                la
                                                vacuna de J&J/Janssen contra la COVID-19.</li>
                                            <li><span class="titleSecondary">Protégete y protege a los demás.</span>
                                                Aunque estas vacunas están
                                                demostrando ser muy efectivas para proteger a las personas contra una
                                                enfermedad grave
                                                provocada por la COVID-19, todavía estamos investigando la posibilidad
                                                de que una persona
                                                vacunada pueda transmitir el
                                                virus aunque no presente síntomas. Por tanto, es importante seguir
                                                respetando las medidas de
                                                seguridad con el fin de
                                                protegerte y proteger a los demás: evitar espacios muy concurridos,
                                                mantener la distancia
                                                física, lavarte las manos y
                                                llevar mascarilla.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class="background">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="titlePrimary">Contacto de emergencia</h2>
                    <p>Ponte en contacto con uno de los contactos que aparecen a continuación si tú o tu familia se
                        sienten mal y si tienen
                        síntomas similares a los de COVID-19, asegúrate también de cuidarte antes de informarnos y con
                        gusto te atenderemos:
                    </p>
                    <div class="row">
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <h3 class="titleSecondary"><span class="icon-vaccination"><i
                                                class="fas fa-phone"></i></span> Telefono
                                    </h3>
                                    <button class="btn btn-vaccination">Llamanos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <h3 class="titleSecondary"><span class="icon-vaccination"><i
                                                class="fas fa-comment-dots"></i></span>
                                        Chat</h3>
                                    <button class="btn btn-vaccination">Llamanos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <h3 class="titleSecondary"><span class="icon-vaccination"><i
                                                class="fas fa-video"></i></span> VideoChat
                                    </h3>
                                    <button class="btn btn-vaccination">Llamanos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <h3 class="titleSecondary"><span class="icon-vaccination"><i
                                                class="fas fa-envelope"></i></span> Mensaje
                                    </h3>
                                    <button class="btn btn-vaccination">Llamanos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 figura">
                    <div class="triangulo3"></div>
                    <div class="linea3"></div>
                    <div class="fondoAzul2"></div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer-guest')
@endsection
