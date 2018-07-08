@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario de Empresa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('empresa-post') }}" aria-label="{{ __('Datos Empresa') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">
                                Logo
                            </label>

                            <div class="col-md-6" style="display: flex; align-self: center;">
                                <input type="file" name="logo" class="form-control" accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_1" class="col-md-4 col-form-label text-md-right">
                                product 1
                            </label>

                            <div class="col-md-6" style="display: flex; align-self: center;">
                                <input type="file" name="product_1" class="form-control" accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_2" class="col-md-4 col-form-label text-md-right">
                                product 2
                            </label>

                            <div class="col-md-6" style="display: flex; align-self: center;">
                                <input type="file" name="product_2" class="form-control" accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_3" class="col-md-4 col-form-label text-md-right">
                                product 3
                            </label>

                            <div class="col-md-6" style="display: flex; align-self: center;">
                                <input type="file" name="product_3" class="form-control" accept="image/*" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">
                                Categoria
                            </label>

                            <div class="col-md-6" style="display: flex; align-self: center;">
                                <select name="category" required>
                                    <option value="">Selecciona una categoria</option>
                                    @foreach(\App\Category::all() as $category)
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="companyName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="companyName" type="text" class="form-control{{ $errors->has('companyName') ? ' is-invalid' : '' }}" name="companyName" autofocus required>

                                @if ($errors->has('companyName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('companyName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" autofocus required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" autofocus required>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rut" class="col-md-4 col-form-label text-md-right">{{ __('Rut de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control{{ $errors->has('rut') ? ' is-invalid' : '' }}" name="rut" autofocus required>

                                @if ($errors->has('rut'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="web" class="col-md-4 col-form-label text-md-right">{{ __('Pagina web') }}</label>

                            <div class="col-md-6">
                                <input id="web" type="text" class="form-control{{ $errors->has('web') ? ' is-invalid' : '' }}" name="web" autofocus required>

                                @if ($errors->has('web'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('web') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" autofocus required>

                                @if ($errors->has('facebook'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>

                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" autofocus required>

                                @if ($errors->has('instagram'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('Twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" autofocus required>

                                @if ($errors->has('twitter'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" placeholder="maximo 1000 caracteres" style="resize: none;" rows="15" cols="50" required> 
                                </textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
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
