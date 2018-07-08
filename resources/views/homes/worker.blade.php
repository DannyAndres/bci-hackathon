
<div class="card col-md-6" style="margin-right: 5px;">
	<div class="card-header">
		Solicitudes de registro
	</div>
  <div class="card-body">
  	@if(sizeof(\App\Company::where('verified',0)->where('rejected','=',0)->get()) == 0)
  		<strong>No hay solicitudes por el momento</strong>
  		<hr>
  	@else
	  	@foreach(\App\Company::where('verified',0)->where('rejected','=',0)->get() as $company)
	  		<div style="display: flex; flex-direction: row; justify-content: space-around;">
          <img style="border-radius: 10px;" src="{{ Storage::url($company->companyform->logo) }}" height="50px" width="50px">
          <span><strong>Empresa:</strong> {{ $company->companyName }}</span>
          <a class="btn btn-primary" href="/empresa/{{ $company->companySlug }}">Ver</a>
          <form method="POST" action="{{ route('trabajador-aceptar') }}">
            @csrf
            <input style="display: none;" type="text" name="company" value="{{ $company->companySlug }}" required>
            <button type="submit" class="btn btn-success">Aceptar</button>
          </form>
          <form method="POST" action="{{ route('trabajador-rechazar') }}">
            @csrf
            <input style="display: none;" type="text" name="company" value="{{ $company->companySlug }}" required>
            <button type="submit" class="btn btn-danger">Rechazar</button>
          </form>
        </div>
	  		<hr>
	  	@endforeach
	  @endif
  </div>
</div>
<div class="card col-md-6" style="margin-left: 5px;">
	<div class="card-header">
		Estadisticas
	</div>
  <div class="card-body">
  	<div class="alert alert-primary" role="alert" style="display: flex; flex-direction: row; justify-content: space-around;">
  		<strong>Solicitudes totales : </strong>
  		<span>{{ sizeof(\App\Company::where('verified',0)->get()) }}</span>
  	</div>
   	<div class="alert alert-secondary" role="alert" style="display: flex; flex-direction: row; justify-content: space-around;">
  		<strong>Solicitudes revisadas : </strong>
  		<span>{{ sizeof(\App\Solicitud::where('worker_id',Auth::user()->id)->get()) }}</span>
  	</div>
   	<div class="alert alert-success" role="alert" style="display: flex; flex-direction: row; justify-content: space-around;">
  		<strong>Solicitudes aceptadas : </strong>
  		<span>{{ sizeof(\App\Solicitud::where('worker_id',Auth::user()->id)->where('acepted','=',1)->get()) }}</span>
  	</div>
   	<div  class="alert alert-danger" role="alert" style="display: flex; flex-direction: row; justify-content: space-around;">
  		<strong>Solicitudes rechazadas : </strong>
  		<span>{{ sizeof(\App\Solicitud::where('worker_id',Auth::user()->id)->where('acepted','=',0)->get()) }}</span>
  	</div>
  </div>
</div>