@extends('layouts.index')
    @section('additionals')
        <form method="post" action="addCategory">
            <div class="pull-right col-lg-12 row" style="margin-bottom: 15px;">
                <button class="btn btn-primary pull-right col-lg-4" type="submmit">Dodaj kategorie</button>
                <input class="col-lg-4 form-control additionals-elem" name="description"  placeholder="Opis"/>
                <input class="col-lg-4 form-control additionals-elem" name="name"  placeholder="Nazwa"/>
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
                            <a class="cat-thumbnail thumbnail" 
                                href="{{action('HomeController@gallery', $category['id'])}}">
                                @if(!empty($category['path']))
                                    <img class="thumb cat-thumb" src="{{$category['path']}}" alt="">
                                @else
                                    <img class="thumb cat-thumb" src="https://www.appartoo.com/images/alouer.jpg" alt="">
                                @endif
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
