@extends('layouts.app')

@section('title', 'Guyane : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<div class="container-fluid p-0">
		<div class="row team-box text-center">
			<div class="col-12">
				<h1 class="team-title1">Guyane</h1>
				<h1 class="team-title2 pt-2">Le Guide</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Conteu -->


	<!-- Connect -->
	<div class="container-fluid p-3">
		<div class="row connect text-center">
			<div class="col-12">
				<h2 class="connect-title">Connect</h2>
				<hr class="style2">
			</div>
			<div class="col-12 social p-3">
				<a href="https://www.facebook.com/cyrille.gayraud.0"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/cyrgrd/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCJ6nesNo0936uP7NhfiI96w?view_as=public"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
@endsection

@section('footer')
    @parent
@endsection