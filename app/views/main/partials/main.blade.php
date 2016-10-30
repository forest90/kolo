<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl-pl" lang="pl-pl" dir="ltr">
@include('main.partials.head')
<body>
<div id="art-page-background-middle-texture">
    <div id="art-main">
        <div class="cleared reset-box"></div>
        <div class="art-header">
            <div class="art-header-position">
                <div class="art-header-wrapper">
                    <div class="cleared reset-box"></div>
                    <div class="art-header-inner">
                        <div class="art-headerobject" onclick="location.href='http://www.knieja11.pl/';"
                             style="cursor: pointer;"></div>
                        <div class="art-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cleared reset-box"></div>
        <div class="art-box art-sheet">
            <div class="art-box-body art-sheet-body">
                <div class="art-nostyle">
                    <div class="gkHighlighterGK4" id="gkHighlighterGK4-gkHighlight_88">
                        <div class="gkHighlighterInterface">
                            <span class="text">Ważne informacje:</span>
                            <div><a href="#" class="prev"></a>
                                <a href="#" class="next"></a></div>
                        </div>
                        <div class="gkHighlighterWrapper">
                            <div class="gkHighlighterItem"><span><span>SKŁADKA DO KOŁA</span>: 600 ZŁ</span></div>
                            <div class="gkHighlighterItem"><span><span>OPŁATA NA GAJÓWKĘ</span>: 850 ZŁ DO 15 LIPCA 2016r.</span>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        try {
                            $Gavick;
                        } catch (e) {
                            $Gavick = {};
                        }
                        $Gavick["gkHighlighterGK4-gkHighlight_88"] = {
                            "animationType": 'slides',
                            "animationSpeed": 2000,
                            "animationInterval": 10000,
                            "animationFun": Fx.Transitions.linear,
                            "mouseover": true
                        };
                    </script>
                </div>
                <div class="art-layout-wrapper">
                    <div class="art-content-layout">
                        @include('main.partials.menu')
                        {{--@if(!$isLogged)--}}
                        {{--<a href="{{url('/login')}}" class="login">--}}
                        {{--<i class="fa fa-power-off fa-4" style="color: #c00;"></i>--}}
                        {{--</a>--}}
                        {{--@endif--}}
                        {{--@if($isLogged)--}}
                        {{--<a href="{{url('/home')}}" class="login">--}}
                        {{--<i class="fa fa-power-off fa-4" style="color: #337ab7;"></i>--}}
                        {{--</a>--}}
                        {{--@endif--}}
                        {{--@if(isset($message))--}}
                        {{--<span class="info">--}}
                        {{--{{$message}}--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        @yield('content')
                        @include('main.partials.footer')

                        <div class="cleared"></div>
                    </div>
                </div>
                <div class="cleared"></div>
                <div class="cleared"></div>
            </div>
        </div>
</body>
</html>