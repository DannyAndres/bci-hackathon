@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($user->role == 0)
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
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
