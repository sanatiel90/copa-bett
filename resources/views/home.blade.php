@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Página Inicial</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  {{ Auth::user()->name }}, Você está logado

                  @if (Auth::user()->profile == 'admin')
                    <a href="{{ url('/admin') }}" class="btn btn-primary">Opções do admin</a>

                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
