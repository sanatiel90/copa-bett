@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rodadas &nbsp; <a href="{{ route('new_rodada') }}" class="btn btn-sm btn-success"> Nova rodada </a> </div>

                <div class="card-body">
                        
                    <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($rodadas as $rodada)
                            <tr>
                                <td>{{ $rodada->name }}</td>
                                
                            </tr>                  
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection