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
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Abmelden</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>



			<ul class="list-group">
				@foreach ($items as $item)
					<li class="list-group-item"><img src="{!! $item->image !!}" alt="image" width="50" /> {{ $item->name }} <span class="badge">{{ money_format('%.2n', $item->price) }} €</span></li>
				@endforeach
			</ul>

		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	</body>
</html>
