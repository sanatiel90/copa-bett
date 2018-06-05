@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seleções &nbsp; <a href="{{ route('new_team') }}" class="btn btn-sm btn-success"> Nova seleção </a> </div>

                <div class="card-body">
                        <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($teams as $team)
                            <tr>
                                <td> <img src="img/flags/{{ $team->img_name }}.png" class="img-fluid" width="50px" height="35px">   </td>
                                <td>{{ $team->short_name }}</td>
                                <td>{{ $team->name }}</td>
                            </tr>                  
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection