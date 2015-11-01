<!DOCTYPE html>
<html>
<head>
	<title>Koło Łowieckie Knieja w Kościanie</title>
	@include('main.assets')
</head>
<body class="backgorund-main">
	<div class="col-lg-12">
		<div class="col-lg-10 col-lg-offset-1 white">
			{{-- TOP --}}
			<div class="col-lg-12 top">
				<div class="title">
					<span>
						Koło Łowieckie Knieja w Kościanie
					</span>
					<img class="top-img" src="assets/img/oie.png">
				</div>
			</div>
			{{-- TOP END --}}
			{{-- CONTENT --}}
			@include('main.nav-top')
			@include('main.aside')
			@include('main.content')
			{{-- CONTENT END --}}
		</div>
	</div>
</body>
</html>
