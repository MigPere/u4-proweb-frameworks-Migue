@extends('layouts.app')

@section('template_title')
    {{ $autor->name ?? 'Show Autor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Autor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $autor->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $autor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $autor->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $autor->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $autor->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
