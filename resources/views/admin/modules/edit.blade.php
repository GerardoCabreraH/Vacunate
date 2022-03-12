@extends('layouts.app')

@section('title', 'Vacunate | Modificación del modulo de vacunación')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Modificación del modulo de vacunación {{$modulo->name}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <form role="form" action="{{ route('modules.update', $modulo) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('admin.modules.form')
                                <div class="form-group">
                                    <a class="btn btn-primary btn-block" href="{{route('modules.show', $modulo)}}">Regresar</a>
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
