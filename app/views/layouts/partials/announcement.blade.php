<?php if(!isset($aside)) $aside = true; if(!isset($canAdd)) $canAdd = false; ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bell fa-fw"></i> Powiadomienia zarządu
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="list-group">
            @if(!count($announcements))
                <i class="fa fa-comment fa-fw"></i> Brak komunikatów
            @endif
            @foreach($announcements as $announcement)


                <a id="{{$announcement->id}}" href="
                        {{$aside ? asset('notifications#'.$announcement->id) : '#'.$announcement->id }}
                    " class="list-group-item">
                    @if($aside)
                        <i class="fa fa-comment fa-fw"></i> 
                        {{$announcement->title}}
                    @endif

                    @if(!$aside)
                        <div class="{{$aside ? : 'announcement-title'}}">
                            {{$announcement->title}}
                        </div>
                    @endif

                    </br>
                    
                    @if(!$aside)
                        {{$announcement->content}}
                    @endif
                    <span class="pull-right text-muted small"><em>{{$announcement->human_time}}</em>
                    </span>
                </a>

            @endforeach
        </div>
        <!-- /.list-group -->
            @if($canAdd)
        <div class="announcement-form">
                <form action="{{asset('/notifications')}}" method="POST">
                    <input class="form-control" placeholder="Wpisz tytuł ogłoszenia" name="title">
                    <textarea class="form-control" placeholder="Wpisz treść ogłoszenia" rows="8" name="content"></textarea>
                    <button style="margin-bottom: 10px;" class="btn btn-primary btn-block" type="submmit">
                        Zapisz
                    </button>
                </form>
        </div>
        <div class="clearfix"></div>
            @endif
        @if(isset($aside) && $aside == true)
            <a href="{{asset('notifications')}}" class="btn btn-default btn-block">
                Pokaż wszystkie komunikaty
            </a>
        @endif
    </div>
    <!-- /.panel-body -->
</div>
<style type="text/css">
    .announcement-form textarea, input{
        width: 100%
    }
    .announcement-form textarea{
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>