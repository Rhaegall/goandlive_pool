@extends('layouts.app')
@section('content')
	<form method="post">
		{{ csrf_field() }}
		<div>
			<h1 class="text-center mt-4">Modifie ta cagnotte</h1>
		</div> 
		
		<div class="form-group row justify-content-center text-right mt-4">
			<label for="titre-cag" class="col-sm-2 col-form-label">Titre</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="titre-cag" name="titre" value="{{$titre}}">
			</div>
		</div>
		<div class="form-group row justify-content-center text-right">
			<label for="dest-cag" class="col-sm-2 col-form-label">Destination</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="dest-cag" value="{{$destination}}" name="destination">
			</div>
		</div>	

		<div class="container mt-4">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group text-center">
						<label for="ControlTextarea1">Description</label>
						<textarea class="form-control" id="ControlTextarea1"  maxlength="255" rows="6" name="description">{{$description}}</textarea>
					</div>
					<div class="form-group">
						<label for="FormControlFile1">Choisi une image</label>
						<input type="file" class="form-control-file" id="FormControlFile1">
					</div>
				</div>

				<div class="col-md-6 mt-5">
					<div class="form-group row text-right">
						<label for="spend-travel" class="col-sm-4 col-form-label">Coût du voyage</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="spend-travel" value="{{$cost_travel}}" name="cost_travel">
						</div>
					</div>
					<div class="form-group row text-right">
						<label for="end-date" class="col-sm-4 col-form-label">Date du départ</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="end-date" value="{{$start_date}}" name="start_date">
						</div>
					</div>
					<div class="form-group row text-right">
						<label for="vip-code" class="col-sm-4 col-form-label">Code VIP</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="vip-code" value="{{$vip}}" name="vip">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn-lg btn-primary mt-5">Crée ta cagnotte !</button>
						</div>
					</div>	
		</form>
	<button type="button" class="btn-primary btn-sm mt-3">Dépenser ma cagnotte</button>
</div>
@endsection