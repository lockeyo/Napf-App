<html>
	<head>

		<title>Napf App</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />

		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">

			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ url() }}">Napf App</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						@if (isset($items))
						{{ Form::open(array('url' => '', 'class' => 'navbar-form navbar-left', 'id' => 'searchform')) }}
						    {{ Form::text('query', Input::old('query'), array('placeholder' => 'Suche nach Leckereien..', 'class' => 'form-control', 'id' => 'search')) }}
						{{ Form::close() }}
						@endif
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ URL::to('') }}">Home</a></li>
									<li><a href="{{ URL::to('impressum') }}">Impressum</a></li>
									<li><a href="{{ URL::to('datenschutz') }}">Datenschutz</a></li>
									<li><a href="{{ URL::to('ueber-napf-app') }}">Über die Napf-App</a></li>

									<!-- li class="divider"></li>
									<li><a href="#">Abmelden</a></li -->
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

			@yield('content')

		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

	</body>
</html>