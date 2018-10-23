@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h3 style="text-align: center;">Login Success</h3></div>
                <div class="panel-body" style="text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Hola {{ Auth::user()->name }}</h1>
                    <ul>
                        <ol><h4>País: {{ $ip->countryCode }}</h4></ol>
                        <ol><h4>Region: {{ $ip->regionName}}</h4></ol>
                    </ul>
                        <img class="img img-circle" src="https://www.xange.fr/wp-content/uploads/sites/2/2018/05/wttj-1.png" height="100" width="100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
