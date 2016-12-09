<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />

    <base href="{{Config::get('app.url')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="&quot;koło łowieckie 11 Kniejaa&quot;, knieja kościan,pzł, &quot;polski związek łowiecki&quot;, &quot;Koło Kościan&quot;, &quot;kolo koscian&quot;,wielkopolska, koscian, łowiectwo, myślistwo, myśliwi, &quot;koła myśliwskie&quot;" />
    <meta name="description" content="Strona główna koła Knieja w Kościanie" />
    <title>Strona główna koła Knieja w Kościanie</title>
    <link rel="stylesheet" href="http://kolodiana.pl/media/com_attachments/css/attachments_hide.css" type="text/css" />
    <link rel="stylesheet" href="http://kolodiana.pl/media/com_attachments/css/attachments_list.css" type="text/css" />
    <link rel="stylesheet" href="http://kolodiana.pl/plugins/system/jcemediabox/css/jcemediabox.css?version=114" type="text/css" />
    <link rel="stylesheet" href="http://kolodiana.pl/plugins/system/jcemediabox/themes/standard/css/style.css?version=114" type="text/css" />
    <link rel="stylesheet" href="http://kolodiana.pl/modules/mod_highlighter_gk4/interface/css/style.css" type="text/css" />
    <style type="text/css">
        #gkHighlighterGK4-gkHighlight_88 .gkHighlighterInterface span.text { color: #D9E6C4; } #gkHighlighterGK4-gkHighlight_88 .gkHighlighterInterface { background-color: #5F8D3E; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; }
    </style>
    <script src="http://kolodiana.pl/media/system/js/mootools-core.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/media/system/js/core.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/media/system/js/caption.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/media/system/js/mootools-more.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/plugins/system/jquery/jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/plugins/system/jquery/jquery/no_conflict.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/media/com_attachments/js/attachments_refresh.js" type="text/javascript"></script>
    <script src="http://kolodiana.pl/plugins/system/jcemediabox/js/jcemediabox.js?version=114" type="text/javascript"></script>
    <script src="http://kolodiana.pl/modules/mod_highlighter_gk4/interface/scripts/engine.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.addEvent('load', function() {
            new JCaption('img.caption');
        });
        window.addEvent('domready', function() {
            $$('.hasTip').each(function(el) {
                var title = el.get('title');
                if (title) {
                    var parts = title.split('::', 2);
                    el.store('tip:title', parts[0]);
                    el.store('tip:text', parts[1]);
                }
            });
            var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
        });
        JCEMediaObject.init('/', {flash:"10,0,22,87",windowmedia:"5,1,52,701",quicktime:"6,0,2,0",realmedia:"7,0,0,0",shockwave:"8,5,1,0"});JCEMediaBox.init({popup:{width:"",height:"",legacy:0,lightbox:0,shadowbox:0,resize:1,icons:1,overlay:1,overlayopacity:0.8,overlaycolor:"#000000",fadespeed:500,scalespeed:500,hideobjects:0,scrolling:"fixed",close:2,labels:{'close':'Zamknij','next':'Następne','previous':'Poprzednie','cancel':'Anuluj','numbers':'{$current} z {$total}'}},tooltip:{className:"tooltip",opacity:0.8,speed:150,position:"br",offsets:{x: 16, y: 16}},base:"/",imgpath:"plugins/system/jcemediabox/img",theme:"standard",themecustom:"",themepath:"plugins/system/jcemediabox/themes"});
        function keepAlive() {	var myAjax = new Request({method: "get", url: "index.php"}).send();} window.addEvent("domready", function(){ keepAlive.periodical(3600000); });
    </script>
    <link rel="stylesheet" href="http://kolodiana.pl/modules/mod_random_image_extended/shadowbox/shadowbox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="http://kolodiana.pl/modules/mod_random_image_extended/shadowbox/shadowbox.js"></script>
    <script type="text/javascript">Shadowbox.init();</script>

    <link rel="stylesheet" href="http://kolodiana.pl/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="http://kolodiana.pl/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/css/new_main.css')}}" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="http://kolodiana.pl/templates/kolodiana9/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="http://kolodiana.pl/templates/kolodiana9/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
    <script type="text/javascript">if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script type="text/javascript" src="http://kolodiana.pl/templates/kolodiana9/jquery.js"></script>
    <script type="text/javascript">jQuery.noConflict();</script>
    <script type="text/javascript" src="http://kolodiana.pl/templates/kolodiana9/script.js"></script>
    <script type="text/javascript">if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <link rel="stylesheet" href="http://kolodiana.pl/plugins/system/aridocsviewer/aridocsviewer/assets/styles.css" type="text/css" /><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><script type="text/javascript">jQuery.noConflict();</script><script type="text/javascript" src="http://kolodiana.pl/plugins/system/aridocsviewer/aridocsviewer/assets/aridocsviewer.js"></script>
    <style>
        #art-page-background-middle-texture {
            background-image: url(http://svite-league-apps-content.s3.amazonaws.com/bgimages/grunge-paper.jpg);
            background-size: cover;
        }
    </style>

    {{-- <link href="{{asset('/css/main-styles.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('/css/main.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('/css/main-new.css')}}" rel="stylesheet">

    <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- Timeline CSS -->
    <link href="{{asset('dist/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('bower_components/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/bower_components/metisMenu/dist/metisMenu.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('/bower_components/morrisjs/morris.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/dist/js/sb-admin-2.js')}}"></script>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "1.3");
    </script>
</head>