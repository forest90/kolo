    @foreach ($hountings as $key => $value) {
    	@foreach ($value as $k => $v) {
    	<img src="{{$v}}">
    	{{$v}}
    	}
    	@endforeach

    }
    @endforeach