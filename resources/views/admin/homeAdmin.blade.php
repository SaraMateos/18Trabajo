@extends('layouts.app')

@section('content')
<link href="/css/tabla.css" rel="stylesheet">
<link href="/css/estiloVer.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card bordes fondo">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <h2>Bienvenido al panel de control</h2>
                    </div>
                    <div class="row justify-content-center">
                        <h4>¿Que quieres hacer?</h4>
                    </div><br>
                    <div class="row justify-content-center">   
                        <a href="{{ route('admin.verInciAdmin') }}" class="links"><img src="/images/lista.png" /><br>Ver incidencias</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--verde 42D292
hoja E4E6EE
amarillo FFD255
morado 63316D-->