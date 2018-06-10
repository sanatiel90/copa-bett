@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Partidas &nbsp; <a href="{{ route('new_game') }}" class="btn btn-sm btn-success"> Nova partida </a> </div>

                <div class="card-body">
                        
                    <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($games as $game)
                            <tr>
                                <td>{{ $game->game_date }}</td>
                                 <td>
                                    @foreach ($game->teams as $team)    
                                        {{ $team->name }}
                                    @endforeach
                                 </td>
                                 <td>
                                    @foreach ($game->teamsVisit as $team)    
                                        {{ $team->name }}
                                    @endforeach
                                 </td>
                                <td>{{ $game->goals_team_home }}</td>
                                <td>{{ $game->goals_team_visit }}</td>
                                <td>{{ $game->rodada->name }}</td>
                                <td>{{ $game->result->name }}</td>
                                <td>
                                    @foreach ($game->playersBest as $player)    
                                        {{ $player->name }}
                                    @endforeach      
                                </td>
                                <td>
                                    @foreach ($game->playersFirstScore as $player)    
                                        {{ $player->name }}
                                    @endforeach 
                                </td>
                                <td><a href="{{ url('game/edit/') }}/{{$game->id}}" class="btn btn-sm btn-primary" >Editar</a></td>
                                <td><a href="{{ url('game/delete/') }}/{{$game->id}}" class="btn btn-sm btn-danger" >Apagar</a></td>
                                <td><a href="{{ url('game/edit_best/') }}/{{$game->id}}">Adicionar Melhor Jogador e Primeiro Marcador</a></td>
                            </tr>                  
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection