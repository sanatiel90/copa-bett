@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultados &nbsp; <a href="{{ route('new_result') }}" class="btn btn-sm btn-success"> Novo resultado </a> </div>

                <div class="card-body">
                        
                    <table class="table table-striped table-bordered table-responsive">
                        
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->name }}</td>
                                
                            </tr>                  
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection