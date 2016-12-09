<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl-pl" lang="pl-pl" dir="ltr">
@include('main.partials.head')
<body id="art-page-background-middle-texture">
<style>
    * {
        margin: 0;
    }
    html, body {
        height: 100%;
    }
    .page-wrap {
        min-height: 100%;
        margin-bottom: -55px;
    }
    .page-wrap:after {
        content: "";
        display: block;
    }
    .site-footer, .page-wrap:after {
        height: 55px;
        position: absolute;
        width: 100%;
        bottom: 0;
    }
    .site-footer {
        background: #c5a87d;
        padding: 20px;
    }
</style>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                    <div class="art-headerobject" onclick="location.href='http://www.knieja11.pl/';"
                         style="cursor: pointer;"></div>
                    <div class="top" style="z-index: 10;">
                        <div class="title">
                        <span>
                            Koło Łowieckie Knieja w Kościanie
                        </span>
                            <img class="top-img" src="/img/oie.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-box art-block">
                        <div class="art-box-body art-block-body">
                            <div class="art-bar art-blockheader">
                                <h3 class="t">
                                    <div class="gkHighlighterGK4" id="gkHighlighterGK4-gkHighlight_88">
                                        <div class="gkHighlighterInterface">
                                            <a href="{{$isLogged ? '/' : '/login'}}">
                                                @if(isset($message))
                                                    <span class="info">
                                                        {{$message}}
                                                    </span>
                                                @endif
                                                <span class="text">
                                                    @if(!$isLogged)
                                                        Logowanie
                                                    @else
                                                        Przejdź do systemu
                                                    @endif
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </h3>
                            </div>
                            <div class="cleared"></div>
                        </div>
                    </div>
                    @include('main.partials.menu')

                    @yield('content')

                    <div class="cleared"></div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="cleared"></div>
        </div>
    </div>
</div>
@include('main.partials.footer')
</body>
</html>