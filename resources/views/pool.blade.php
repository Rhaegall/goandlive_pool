@extends('layouts.app')
@section('title')
Pool
@endsection
@section('content')

@if($done == 0 or $current_money >= $cost_travel)

<div class="text-center mt-4 ">
		<h1 class="text-capitalize"></h1>
	</div>
	<div class="text-center mb-5">
		<h2 class="text-capitalize"></h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="text-center"></p>

				<div class="pictures text-center">
					<img src="css/img/londres.jpg" alt="New-York" style="width: 90%">

					<div class="smallPictures mt-2 mb-4">
						<img src="photos/44uq3Bufst0pZIxo6eNfwbfSx4au35HaYbDv10UK.jpeg" alt="Londres" style="width: 30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width:30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width: 30%">
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="text-center">
					<p>Coût du voyage: €</p>
				</div>
				<div class="row justify-content-around mt-4">
					<div class="ml-3">Collecté</div>
					<div class="ml-2">Jours Restants</div>
					<div class="">Participants</div>
				</div>

				<div class="row justify-content-around mt-2">
					<div class="dot col-3 bg-primary"><span> €</span></div>
					<div class="dot col-3 bg-primary"><span>Terminé</span></div>
					<div class="dot col-3 bg-primary"><span>Test</span></div>
				</div>

				<h3 class="mt-4">Progression</h3>
				<div class="progress mb-4" style="width: 80%">
			        <div class="progress-bar" role="progress-bar" aria-valuenow="70" aria-value-min="0" aria-value-max="100" style="width: 70%">
			        </div>
			    </div>
			    <div class="container">
			    	@if($done == 0)
			    	<p>Date dépassé</p>
			    	@elseif($current_money >= $cost_travel)
			    	<p>Collecte terminée</p>
			    	@endif
			    </div>
			</div>
		</div>
	</div>

@else

		<div class="container">

		<div class="row">
			<div class="col-md-6">
			
				<div class=" text-center mb-4 mt-4">
					<h2 class="text-capitalize">{{$destination}}</h2>
				</div>

				<p class="text-center">{{$description}}</p>

				<div class="pictures text-center">
					<img src="css/img/londres.jpg" alt="New-York" style="width: 90%">

					<div class="smallPictures mt-2 mb-4">
						<img src="photos/44uq3Bufst0pZIxo6eNfwbfSx4au35HaYbDv10UK.jpeg" alt="Londres" style="width: 30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width:30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width: 30%">
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class=" text-center mt-4 mb-4 ">
					<h2 class="text-capitalize">{{$titre}}</h2>
				</div>
				<div class="text-center">
					<p>Coût du voyage:{{$cost_travel}} €</p>
				</div>
				<div class="row justify-content-around mt-4">
					<div class="ml-3">Collecté</div>
					<div class="ml-2">Jours Restants</div>
					<div class="">Participants</div>
				</div>

				<div class="row justify-content-around mt-2">
					<div class="dot col-3 bg-primary"><span>{{$current_money}} €</span></div>
					<div class="dot col-3 bg-primary"><span>{{$done}}</span></div>
					<div class="dot col-3 bg-primary"><span>{{$participants}}</span></div>
				</div>

				<h3 class="mt-4">Progression</h3>
				<div class="progress mb-4" style="width: 80%">
			        <div class="progress-bar" role="progress-bar" aria-valuenow="70" aria-value-min="0" aria-value-max="100" style="width: 70%">
			        </div>
			    </div>

				<a href="modif_pool" class=""><button type="button" class="btn-primary btn-lg">Paramètres Cagnotte</button></a>


				<form method="post" class="row container mt-4 justify-content-between">
						{{ csrf_field() }}
					<button type="submit" class="btn-lg bg-primary col-5 text-white">Faire un don</button>
					<input type="text" class="form-control col-5" name="pay">
				</form>
			
			</div>
		</div>
	</div>
@endif	

@endsection