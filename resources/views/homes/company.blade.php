<div>
	@if(!$user->company->verified)
		<label style="width: 100%; display: flex; justify-content: center;" class="alert alert-danger" role="alert"><strong>No estas verificado</strong></label>
		<hr>
	@endif
	<div class="card">
		<div class="card-body" >
			<div style="display: flex; flex-direction: row;">
				<div class="col-md-4">
					<img style="border-radius: 10px;" src="{{ Storage::url($user->company->companyform->logo) }}" height="150px" width="150px">
				</div>
				<div class="col-md-8">
					<h3>{{ $user->company->companyName }}</h3>
					<hr>
					<strong>Productos</strong>		
					<div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
						<img style="border-radius: 10px;" src="{{ Storage::url($user->company->companyform->product_1) }}" height="100px" width="100px">
						<img style="border-radius: 10px;" src="{{ Storage::url($user->company->companyform->product_2) }}" height="100px" width="100px">
						<img style="border-radius: 10px;" src="{{ Storage::url($user->company->companyform->product_3) }}" height="100px" width="100px">
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
						{{ $user->company->companyform->web }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Facebook : </strong>
					</div>
					<div class="col-md-6">
						{{ $user->company->companyform->facebook }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Instagram : </strong>
					</div>
					<div class="col-md-6">
						{{ $user->company->companyform->instagram }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>twitter : </strong>
					</div>
					<div class="col-md-6">
						{{ $user->company->companyform->twitter }}
					</div>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row;">
					<div class="col-md-6">
						<strong>Descripcion : </strong>
					</div>
					<div class="col-md-6">
						{{ $user->company->companyform->description }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>