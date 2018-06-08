@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Apostas feitas por {{ Auth::user()->name }} &nbsp; <a href="{{ route('new_bet') }}" class="btn btn-sm btn-success"> Fazer nova aposta </a> </div>

                <div class="card-body">
                        
                    <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($bets as $bet)
                            <tr>
                                <td>{{ $bet->points_gained }}</td>
                                <td>{{ $bet->goals_team_home }}</td>
                                <td>{{ $bet->goals_team_visit }}</td>
                                <td>{{ $bet->result_id }}</td>
                                <td>{{ $bet->finalizada }}</td>
                                <td>{{ $bet->id_best_player }}</td>
                                <td>{{ $bet->id_first_score }}</td>
                                <td>{{ $bet->game_id }}</td>
                                <td>{{ $bet->user_id }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection