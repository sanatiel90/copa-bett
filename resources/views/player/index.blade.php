@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jogadores &nbsp; <a href="{{ route('new_player') }}" class="btn btn-sm btn-success"> Novo jogador </a> </div>

                <div class="card-body">
                        
                    <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($players as $player)
                            <tr>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->team->short_name }}</td>
                                <td><img src="img/flags/{{ $player->team->img_name }}.png" class="img-fluid" width="40px" height="28px"></td>
                            </tr>                  
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection