@extends('layouts.app')

@section('content')
<div class="container">
    @if($user->role == 0)
        @if($user->company)
            @include('homes.company')
        @else
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('normal') }}" class="btn btn-primary">Usuario normal</a>
                    <a href="{{ route('trabajador') }}" class="btn btn-primary">Trabajador de BCI</a>
                    <a href="{{ route('empresa') }}" class="btn btn-primary">Empresa independiente</a>
                    <a href="{{ route('administrador') }}" class="btn btn-primary">Administrador</a>
                </div>
            </div>
        @endif
    @elseif($user->worker)
        @include('homes.worker')
    @else
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                HOME
            </div>
        </div>    
    @endif
</div>
@endsection
