@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Definir melhor jogador e primeiro marcador da partida</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update_game') }}">
                        @csrf

                        
                         <div class="form-group row">
                            <label for="team-home" class="col-md-4 col-form-label text-md-right">Seleção Casa</label>

                            <div class="col-md-6">
                                <label for="team-home" class="col-md-4 col-form-label text-md-right">
                                    @foreach ($game->teams as $team)    
                                        {{ $team->name }}
                                    @endforeach
                                </label>
                            </div>                            
                        </div>



                        <div class="form-group row">
                            <label for="goals-home" class="col-md-4 col-form-label text-md-right">Gols Casa</label>
                                
                            <div class="col-md-6">
                                <label for="goals-home" class="col-md-4 col-form-label text-md-right">
                                    {{ $game->goals_team_home }}
                                </label>
                            </div>                            
                        </div>


                        <div class="form-group row">
                            <label for="team-visit" class="col-md-4 col-form-label text-md-right">Seleção Fora</label>

                            <div class="col-md-6">
                                <label for="team-home" class="col-md-4 col-form-label text-md-right">
                                    @foreach ($game->teamsVisit as $team)    
                                        {{ $team->name }}
                                    @endforeach
                                </label>
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="goals-visit" class="col-md-4 col-form-label text-md-right">Gols Fora</label>
                            <input type="hidden" name="id" value="{{ $game->id }}">
                            <div class="col-md-6">
                                <label for="goals-home" class="col-md-4 col-form-label text-md-right">
                                    {{ $game->goals_team_visit }}
                                </label>
                            </div>                              
                        </div>
                        

                        <div class="form-group row">
                            <label for="rodada" class="col-md-4 col-form-label text-md-right">Rodada</label>

                            <div class="col-md-6">
                                <label for="team-home" class="col-md-4 col-form-label text-md-right">
                                   {{ $game->rodada->name }}
                                </label>  
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="result" class="col-md-4 col-form-label text-md-right">Resultado</label>

                            <div class="col-md-6">
                                <label for="team-home" class="col-md-4 col-form-label text-md-right">
                                   {{ $game->result->name }}
                                </label> 
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">Data</label>

                            <div class="col-md-6">
                                <label for="data" class="col-md-4 col-form-label text-md-right">
                                   {{ $game->game_date }}
                                </label> 
                            </div>                            
                        </div>


                        <div class="form-group row">
                            <label for="team-visit" class="col-md-4 col-form-label text-md-right">Melhor Jogador</label>

                            <div class="col-md-6">
                                <select name="id_best_player" class="form-control">
                                     @foreach($players as $player)
                                            @if ($game->id_best_player == $player->id )
                                                <option value="{{ $player->id }}" selected> {{ $player->name }} </option> 
                                            @else    
                                                <option value="{{ $player->id }}"> {{ $player->name }} </option> 
                                            @endif 
                                     @endforeach   
                                </select>  
                            </div>                            
                        </div>


                        <div class="form-group row">
                            <label for="team-visit" class="col-md-4 col-form-label text-md-right">Primeiro jogador a marcar</label>

                            <div class="col-md-6">
                                <select name="id_first_score" class="form-control">
                                     @foreach($players as $player)
                                            @if ($game->id_first_score == $player->id )
                                                <option value="{{ $player->id }}" selected> {{ $player->name }} </option> 
                                            @else
                                                <option value="{{ $player->id }}"> {{ $player->name }} </option>
                                            @endif    
                                     @endforeach   
                                </select>   
                            </div>                            
                        </div>

                                                

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Atualizar
                                </button>
                                <button type="reset" class="btn btn-default">
                                    Cancelar
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