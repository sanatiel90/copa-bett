@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova partida</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save_game') }}">
                        @csrf

                        
                         <div class="form-group row">
                            <label for="team-home" class="col-md-4 col-form-label text-md-right">Seleção Casa</label>

                            <div class="col-md-6">
                                <select name="id_team_home" class="form-control">
                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}"> {{ $team->name }} </option>
                                    @endforeach
                                </select>   
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="goals-home" class="col-md-4 col-form-label text-md-right">Gols Casa</label>

                            <div class="col-md-6">
                                <input id="goals-home" type="number" class="form-control{{ $errors->has('goals_team_home') ? ' is-invalid' : '' }}" name="goals_team_home" value="{{ old('goals_team_home') }}" >
                            </div>                            
                        </div>


                        <div class="form-group row">
                            <label for="team-visit" class="col-md-4 col-form-label text-md-right">Seleção Fora</label>

                            <div class="col-md-6">
                                <select name="id_team_visit" class="form-control">
                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}"> {{ $team->name }} </option>
                                    @endforeach
                                </select>   
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="goals-visit" class="col-md-4 col-form-label text-md-right">Gols Fora</label>

                            <div class="col-md-6">
                                <input id="goals-visit" type="number" class="form-control{{ $errors->has('goals_team_visit') ? ' is-invalid' : '' }}" name="goals_team_visit" value="{{ old('goals_team_visit') }}" >
                            </div>                            
                        </div>
                        

                        <div class="form-group row">
                            <label for="rodada" class="col-md-4 col-form-label text-md-right">Rodada</label>

                            <div class="col-md-6">
                                <select name="rodada_id" class="form-control">
                                    @foreach($rodadas as $rodada)
                                        <option value="{{ $rodada->id }}"> {{ $rodada->name }} </option>
                                    @endforeach
                                </select>   
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="result" class="col-md-4 col-form-label text-md-right">Resultado</label>

                            <div class="col-md-6">
                                <select name="result_id" class="form-control">
                                    @foreach($results as $result)
                                        <option value="{{ $result->id }}"> {{ $result->name }} </option>
                                    @endforeach
                                </select>   
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">Data da partida</label>

                            <div class="col-md-6">
                                <input id="data" type="datetime-local" class="form-control{{ $errors->has('game_date') ? ' is-invalid' : '' }}" name="game_date" value="{{ old('game_date') }}" >
                            </div>                            
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection