@extends('layouts.index')
    @section('additionals')
        {{ Form::open(array('url' => 'uploadGalleryFiles', 'method' => 'post', 'files' => true)) }}
    
            <div class="pull-right col-lg-12 row" style="margin-bottom: 15px;">
                <button class="btn btn-primary pull-right" type="submmit">Dodaj do galerii</button>
                <span class="btn btn-default btn-file photo-button" 
                    style="float: right; margin-top: 0px; margin-right: 15px;">
                    <i class="fa fa-camera"></i><input name="photos[]" type="file" multiple>
                </span>
                <input type="hidden" value="{{$id}}" name="id"/>
            </div>

        {{ Form::close() }}
    @stop
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
