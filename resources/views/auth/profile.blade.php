@extends('layouts.index')
@section('content')
	@include('layouts.partials.slider')
	<div class="row m-t-md">
	<div class="col-lg-8">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <i class="fa fa-file-text-o fa-fw"></i> Uzupełnij konto
	            <div class="pull-right">
	            </div>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	          <form method="post" action="{{route('updateProfile')}}" enctype="multipart/form-data">
	            <article class="">
	               
	                <div class="text-center m-b-md">
	                    <button class="btn btn-primary pull-right" type="submmit">Zapisz</button>
	                    </br>
	                    <label for="avatar"> Wybierz zdjecie jako awatar</label>
	                    <span id="avatar" class="btn btn-default btn-file photo-button">
	                        <i class="fa fa-camera"></i><input name="avatar" type="file">
	                    </span>
	                </div>

					<div class="col-lg-10" style="padding: 0px;">
  					<input name="nick" type="text" 
  						placeholder="Wpisz swoje imię i nazwisko"
  						class="form-control post-width" 
  						aria-describedby="helpBlock">
					</div>
	            </article>
	            </form>
	            <div id="morris-area-chart"></div>
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
	<!-- /.col-lg-8 -->
@stop