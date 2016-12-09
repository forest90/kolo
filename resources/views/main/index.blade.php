<!DOCTYPE html>
<html>
	<head>
		<title>Koło Łowieckie Knieja w Kościanie</title>
		@include('main.assets')
	</head>
	<body class="">
		<div class="col-lg-10 col-lg-offset-1 top" style="z-index: 10;">
			<div class="title">
				<span>
					Koło Łowieckie Knieja w Kościanie
				</span>
				<img class="top-img" src="/img/oie.png">
			</div>
		</div>
		<div class="background-image"></div>
		{{--@if(!$isLogged)--}}
			{{--<a href="{{url('/login')}}" class="login">--}}
				{{--<i class="fa fa-power-off fa-4" style="color: #c00;"></i>--}}
			{{--</a>--}}
		{{--@endif--}}
		{{--@if($isLogged)--}}
			{{--<a href="{{url('/home')}}" class="login">--}}
				{{--<i class="fa fa-power-off fa-4" style="color: #337ab7;"></i>--}}
			{{--</a>--}}
		{{--@endif--}}
		@if(isset($message))
			<span class="info">
				{{$message}}
			</span>
		@endif
		<div class="content">
			@include('main.topNavbar')
			@include('main.content')
		</div>
	</body>
</html>
<style type="text/css">
.info{
	position: absolute;
	top: 90px;
	left: 8px;
	color: #c00;
	z-index: 12;
}
</style>
