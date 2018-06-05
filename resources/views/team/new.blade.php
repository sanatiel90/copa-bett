@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova seleção</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save_team') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="abrev" class="col-md-4 col-form-label text-md-right">Nome Abreviado</label>

                            <div class="col-md-6">
                                <input id="abrev" type="text" class="form-control{{ $errors->has('short_name') ? ' is-invalid' : '' }}" name="short_name" value="{{ old('short_name') }}" required>

                                @if ($errors->has('short_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('short_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">Nome Imagem</label>

                            <div class="col-md-6">
                                <input id="img" type="text" class="form-control{{ $errors->has('img_name') ? ' is-invalid' : '' }}" name="img_name" value="{{ old('img_name') }}" required>

                                @if ($errors->has('img_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('img_name') }}</strong>
                                    </span>
                                @endif
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