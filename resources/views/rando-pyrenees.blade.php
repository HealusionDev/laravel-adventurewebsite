@extends('layouts.app')

@section('title', 'Randonnées : Pyrénées')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
	
	@can('manage-users')
	<div class="col-12 d-flex justify-content-right pt-3">
		<a href="{{ route('create-articles') }}"><button type="button" class="btn btn-success float-left">Création d'articles</button></a>
	</div>
	@endcan
	
	<div class="container-fluid pt-5">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Pyrénées</h1>
			</div>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-justify" style="width: 65%;">
			Chaine de montagnes unique en son genre, les Pyrénées sont un lieu de repos, de découvertes et d'aventures sportives. 
		</p>
	</div>
	
	<div class="container-fluid">
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 21]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/pouchergues.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Les lacs de Pouchergues et Caillauas</h4>
				<p class="carte-text-article">Deux rafraichissants lacs d'altitudes cloturant une magnifique et longue ascension à travers un paysage pyrénéen fabuleux.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 21]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>


	<!-- Connect -->
	<div class="container-fluid pt-5">
		<div class="row connect text-center">
			<div class="col-12">
				<h2 class="connect-title">Connect</h2>
				<hr class="style2">
			</div>
			<div class="col-12 social-link p-3">
				<a href="https://www.facebook.com/Pushing-Forward-108628317526835"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/pshforward/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCJ6nesNo0936uP7NhfiI96w?view_as=public"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
@endsection

@section('footer')
    @parent
@endsection