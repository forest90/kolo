@extends('layouts.index')
    @section('additionals')
        <form method="post" action="uploadGalleryFiles" enctype="multipart/form-data" multiple>
            <div class="pull-right col-lg-12 row" style="margin-bottom: 15px;">
                <button class="btn btn-primary pull-right" type="submmit">Dodaj do galerii</button>
                <span class="btn btn-default btn-file photo-button" 
                    style="float: right; margin-top: 0px; margin-right: 15px;">
                    <i class="fa fa-camera"></i><input name="photos[]" type="file" multiple>
                </span>
            </div>
        </form>
    @stop
    @section('content')
        @if(!count($categories))
            <div class="text-center alert alert-info" role="alert">
                W galerii nie znajduje się żadne zdjęcie.
            </div>
        @endif
        <div class="text-center">
            <div class="container col-lg-12 pull-left">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <a class="cat-thumbnail thumbnail" href="{{url('/gallery/'.$category['id'])}}">
                                <img class="thumb cat-thumb" src="{{$category['path']}}" alt="">
                            </a>
                            <p class="cat-desc">{{$category['description']}} </p>
                            <small class="cat-date">{{$category['create_date']}}</small>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @stop
@stop
