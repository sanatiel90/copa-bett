@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Área do Admin</div>

                <div class="card-body">
                    
                  
                    <a href="{{ url('/team/new') }}" class="btn btn-primary">Cadastrar seleção</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar Resultado</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar Rodada</a>

                    <a href="{{ url('/player/new') }}" class="btn btn-primary">Cadastrar jogador</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar partida</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection