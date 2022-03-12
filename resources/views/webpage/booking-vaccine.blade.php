@extends('layouts.app')

@section('title', 'Vacunate | Reserva tu lugar para vacunarte')

@section('content')
@include('partials.header-guest')
<!--Contenido de la pagina-->
<main>
    @include('partials.brands')
    <section id="formulario" class="background">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="titlePrimary">Reserva tu lugar para vacunarte</h2>
                    <p>En este formulario ahora puedes reservar tu lugar para que seas vacunado, la ubicación debe de ser
                        igual a la de tu credencial de elector.</p>
                    <div class="form-group">
                        <p><strong>Ubicación del modulo:</strong> {{$modulo->city}}, {{$modulo->state}}</p>
                    </div>
                    <div class="form-group">
                        <p><strong>Marca de la vacuna:</strong> {{$modulo->brand}}</p>
                    </div>
                    <div class="form-group">
                        <p><strong>Fecha de vacunación:</strong> {{$diassemana[date('w', strtotime($modulo->date_module))]." ".date('d', strtotime($modulo->date_module))." de
                        ".$meses[date('n', strtotime($modulo->date_module))-1]. " del ".date('Y', strtotime($modulo->date_module))}}</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 mt-4">
                    <form role="form" action="{{ route('appointments.store') }}" method="POST">
                        @csrf
                        @include('admin.appointments.form')
                        <div class="form-group">
                            <button type="submit" class="btn btn-vaccination-2 btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer-guest')
@endsection
