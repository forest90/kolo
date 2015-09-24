@extends('layouts.index')
@section('content')
	@include('layouts.partials.slider')
	<div class="row m-t-md">
	<div class="col-lg-8">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <i class="fa fa-file-text-o fa-fw"></i> Dodaj post
	            <div class="pull-right">
	            </div>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	          <form method="post" action="addPost" enctype="multipart/form-data">
	            <article class="">
	                <input name="name" type="text" placeholder="Wpisz tytuł" 
	                class="form-control post-width" aria-describedby="helpBlock">
	                <div class="pull-right text-center">
	                    <button class="btn btn-primary pull-right" type="submmit">Zapisz</button>
	                    </br>
	                    <span class="btn btn-default btn-file photo-button">
	                        <i class="fa fa-camera"></i><input name="photo" type="file">
	                    </span>
	                </div>
					<textarea class="form-control" id="content" placeholder="Wpisz treść" rows="8" name="body"></textarea>
	            </article>
	            </form>
	            <div id="morris-area-chart"></div>
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <i class="fa fa-calendar fa-fw"></i> Terminarz polowań
	            @include('layouts.partials.months')
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="table-responsive">
	                        @include('hountingCalendar.'.$month)
	                    </div>
	                    <!-- /.table-responsive -->
	                </div>
	                <!-- /.col-lg-4 (nested) -->
	                <div class="col-lg-8">
	                    <div id="morris-bar-chart"></div>
	                </div>
	                <!-- /.col-lg-8 (nested) -->
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    @include('layouts.partials.posts')
	</div>
	<!-- /.col-lg-8 -->
@stop