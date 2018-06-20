<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<header class="header">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="col-1" href="#"><img src="css/img/logo-go-and-live-group.png" alt="goandlive"></a>
					<div class="col-4 row">
						<ul class="navbar-nav ml-auto mr-auto">
							<li class="nav-item col-4"><a class="nav-link text-white" href="/">Accueil</a></li>
							@guest
							<li class="nav-item col-4"><a class="nav-link" href="/login">Connexion</a></li>
							@endguest
							@auth
							<li class="nav-item col-4"><a class="nav-link text-white" href="modif_profile">Modifier Profil</a></li>
							<li class="nav-item col-4"><a class="nav-link text-white" href="modif_pool">Gérer mes cagnottes</a></li>
							<li class="nav-item col-4"><a class="nav-link text-white" href="logout">Déconnexion</a></li>
							@endauth


						</ul>
					</div>
					<div class="col">
						<ul class="navbar-nav">
							<li class="nav-item ml-auto"><a class="nav-link" href="#">Contactez-nous</a></li>
						</ul>
					</div>
				</nav>
			</header>

