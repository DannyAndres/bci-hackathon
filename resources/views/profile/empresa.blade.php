@extends('layouts.app')

@section('content')
<div class="container col-md-8">
<div>
	<div class="card">
		<div class="card-body" >
			<div style="display: flex; flex-direction: row;">
				<div class="col-md-4">
					<img style="border-radius: 10px;" src="{{ Storage::url($company->companyform->logo) }}" height="150px" width="150px">
				</div>
				<div class="col-md-8">
					<h3>{{ $company->companyName }}</h3>
					<hr>
					<strong>Productos</strong>		
					<div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
						<img style="border-radius: 10px;" src="{{ Storage::url($company->companyform->product_1) }}" height="100px" width="100px">
						<img style="border-radius: 10px;" src="{{ Storage::url($company->companyform->product_2) }}" height="100px" width="100px">
						<img style="border-radius: 10px;" src="{{ Storage::url($company->companyform->product_3) }}" height="100px" width="100px">
					</div>
				</div>
			</div>
			<div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Página web : </strong>
					</div>
					<div class="col-md-6">
						{{ $company->companyform->web }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Facebook : </strong>
					</div>
					<div class="col-md-6">
						{{ $company->companyform->facebook }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Instagram : </strong>
					</div>
					<div class="col-md-6">
						{{ $company->companyform->instagram }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>twitter : </strong>
					</div>
					<div class="col-md-6">
						{{ $company->companyform->twitter }}
					</div>
				</div>
				<hr>
				@if(Auth::user()->worker)
					<div style="display: flex; flex-direction: row;">
						<div class="col-md-6">
							<strong>Rut empresa : </strong>
						</div>
						<div class="col-md-6">
							{{ $company->companyform->rut }}
						</div>
					</div>
					<hr>
				@endif
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Descripcion : </strong>
					</div>
					<div class="col-md-6">
						{{ $company->companyform->description }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
