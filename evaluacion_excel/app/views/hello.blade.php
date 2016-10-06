@extends('layouts.main')

@section('content')
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Excel Consultores</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span> 
							<strong>{{Auth::user()->name}}</strong>
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li>{{link_to('logout', 'Cerrar sesión', ['class' => 'icon-off'])}}</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	@stop
