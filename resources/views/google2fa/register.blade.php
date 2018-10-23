@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Configurar Google Authenticator</div>

                <div class="panel-body" style="text-align: center;">
                    <p>Configure su autenticación de dos factores escaneando el siguiente código de barras. Alternativamente, puedes usar el código
                        {{ $secret }}</p>
                    <div>
                        <img src="{{ $QR_Image }}">
                    </div>
                    <p>Debe configurar su aplicación Google Authenticator antes de continuar. Usted no podrá iniciar sesión de lo contrario</p>
                    <div>
                        <a href="{{url('/')}}/complete-registration"><button class="btn btn-primary">Completar Registro</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
