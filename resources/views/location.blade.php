@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3 style="text-align: center;">Error de Localización</h3></div>
                    <div class="panel-body" style="text-align: center;">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Hola {{ Auth::user()->name }}</h1>
                            <div class="panel panel-danger">
                                <h4 class="bg" style="font-weight: bold;">Te encuentras fuera de la zona permitida</h4>
                            </div>
                            <ul>
                                <ol><h4>País: {{ $ip->countryCode }}</h4></ol>
                                <ol><h4>Region: {{ $ip->regionName}}</h4></ol>
                            </ul>
                            <img width="300" height="200" src="https://maxcdn.icons8.com/app/uploads/2016/10/globe-map-icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
