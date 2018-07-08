@extends('layouts.app')

@section('content')
    @if($user->role == 0)
        @if($user->company)
            @include('homes.company')
        @else

            <div class= "body-separated">
                <div class="split-left-container">
                    <img src="/default/enterprise2.png" class="left-image"/>
                      <a href="{{ route('empresa') }}" class="middle">
                        <div style="border-radius: 10px;" class="text">¿Quieres inscribir una pyme? ¡Haz clic <strong>aquí</strong>!</div>
                      </a>

                </div>

                <div class="split-middle-container">
                    <img src="/default/worker2.svg" class="center-image"/>
                    <a href="{{ route('trabajador') }}" class="middle">
                        <div style="border-radius: 10px;" class="text">Inicia sesión como ejecutivo <strong>aquí</strong></div>
                    </a>
                </div>

                <div class="split-right-container">
                    <img src="/default/user2.svg" class="right-image"/>
                    <a href="{{ route('normal') }}" class="middle">
                         <div style="border-radius: 10px;" class="text">¿Redes Sociales? Inicia sesión <strong>aquí</strong></div>
                    </a>
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
@endsection
