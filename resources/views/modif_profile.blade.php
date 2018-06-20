@extends('layouts.app')
@section('content')
<form method="post">
	 {{ csrf_field() }}
	<div class="container row mt-3">
		<div class="form-group col-6">
			<label for="InputLastame">Nom</label>
			<input type="text" class="form-control" id="InputLastname" aria-describedby="Lastname" placeholder="" name="nom" value="{{$nom}}" >
		</div>
		<div class="form-group col-6">
			<label for="InputName">Prénom</label>
			<input type="text" class="form-control" id="InputName" aria-describedby="Name" placeholder="" name="prenom" value="{{$prenom}}">
		</div>
	</div>
	<div class="container row">
		<div class="form-group col-6">
			<label for="Birthdate">Date de naissance</label>
			<input type="date" class="form-control" id="Birthdate" aria-describedby="Name" name="birthday" value="{{$birthday}}">
		</div>
		<div class="form-group col-6">
			<label for="Birthdate">Portable</label>
			<input type="number" class="form-control" id="Phonenum" aria-describedby="Phonenum" name='telephone' value="{{$telephone}}">
		</div>
	</div>
	<div class="container row">
		<div class="form-group col-6">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
			<small id="emailHelp" class="form-text text-muted">Majuscules, chiffres unqiuement.</small>
		</div>	
		<div class="form-group col-6">
			<label for="exampleInputPassword1">Confirm Password</label>
			<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
		</div>  
	</div>
	<div class="container row">		  		  		  		  		  
		<div class="form-group col-6">
			<label for="Email1">Adresse Email</label>
			<input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="email" value="{{$email}}">
		</div>
	</div>	
	<div class="container justify-content-center row">
		<button type="submit" class="btn btn-primary">Confirmer</button>
	</div>
</form>				
@endsection
