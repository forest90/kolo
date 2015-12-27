@extends('layouts.index')
@section('content')
	@include('layouts.partials.slider')
	<div class="row m-t-md">
	<div class="col-lg-12">
	  
	    <div class="panel panel-default">
	        @include('layouts.partials.announcement')
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-8 -->
@stop