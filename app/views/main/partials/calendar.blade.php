@extends('main.index')
    @section('content')
    	<div class="callendar-wrapper">
			<div class="col-lg-10 col-lg-offset-1 callendar m-t-md about">
				@include('main.partials.months')
				@include('hountingCalendar.'.$month)
			</div>
		</div>
    @stop
@stop
<style type="text/css">


</style>