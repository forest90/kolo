@extends('layouts.index')
    
    @section('content')

        @if(!count($photos))
            <div class="text-center alert alert-info" role="alert">
                W galerii nie znajduje się żadne zdjęcie
            </div>
        @endif
        <div class="text-center">
            <div class="container col-lg-12 pull-left">
                <div class="row">
                    @foreach($photos as $photo)
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail">
                                <img class="img-responsive" src="{{asset($photo['path'])}}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @stop
@stop
