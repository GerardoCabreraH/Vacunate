@extends('layouts.app')

@section('title', 'Vacunate | Modificación de la cita')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Modificación de la cita {{$cita->code}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('appointments.update', $cita) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('admin.appointments.form')
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{URL::previous()}}">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
