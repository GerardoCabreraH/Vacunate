@extends('layouts.app')

@section('title', 'Vacunate | Terminos y condiciones')

@section('content')
@include('partials.header-guest')
<!--Contenido de la pagina-->
<main>
    @include('partials.brands')
    <section id="terminos" class="background">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="titlePrimary">Términos y Condiciones de Uso</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h2 class="titleSecondary">INFORMACIÓN RELEVANTE</h2>
                            <p>Es requisito necesario para la utilización de los servicios que se ofrecen en este sitio, que
                                lea y acepte los
                                siguientes Términos y Condiciones que a continuación se redactan. El uso de nuestros
                                servicios así como la compra de
                                nuestros productos implicará que usted ha leído y aceptado los Términos y Condiciones de Uso
                                en el presente
                                documento.
                                Todas los productos que son ofrecidos por nuestro sitio web pudieran ser creadas, cobradas,
                                enviadas o presentadas
                                por
                                una página web tercera y en tal caso estarían sujetas a sus propios Términos y Condiciones.
                                En algunos casos, para
                                adquirir un producto, será necesario el registro por parte del usuario, con ingreso de datos
                                personales fidedignos y
                                definición de una contraseña.</p>
                            <h2 class="titleSecondary">LICENCIA</h2>
                            <p>Vacunate a través de su sitio web concede una licencia para que los usuarios utilicen los
                                servicios que son
                                proporcionados en
                                este sitio web de acuerdo a los Términos y Condiciones que se describen en este documento.
                            </p>
                            <h2 class="titleSecondary">PROPIEDAD</h2>
                            <p>Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros servicios,
                                modificado o sin
                                modificar.
                                Todos los servicios son propiedad de los proveedores del contenido. En caso de que no se
                                especifique lo contrario,
                                nuestros servicios se proporcionan sin ningún tipo de garantía, expresa o implícita. En
                                ningún esta compañía será
                                responsables de ningún daño incluyendo, pero no limitado a, daños directos, indirectos,
                                especiales, fortuitos o
                                consecuentes u otras pérdidas resultantes del uso o de la imposibilidad de utilizar nuestros
                                servicios.</p>
                            <h2 class="titleSecondary">PRIVACIDAD</h2>
                            <p>Este www.vacunate.com.mx garantiza que la información personal que usted envía cuenta con la
                                seguridad necesaria. Los
                                datos ingresados por usuario o en el caso de requerir una validación de los servicios no
                                serán entregados a
                                terceros,
                                salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer-guest')
@endsection
