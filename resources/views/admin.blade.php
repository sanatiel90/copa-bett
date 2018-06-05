@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Área do Admin</div>

                <div class="card-body">
                    
                  
                    <a href="{{ route('teams') }}" class="btn btn-primary">Seleções</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar Resultado</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar Rodada</a>

                    <a href="{{ route('players') }}" class="btn btn-primary">Jogadores</a>

                    <a href="{{ url('/new_team') }}" class="btn btn-primary">Cadastrar partida</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection