<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- <a class="navbar-brand col-lg-4" href="index.html"> --}}
                <a class="navbar-brand col-lg-10 row" style=" padding-top: 0px;"href="{{asset('/home')}}">
                    
                    {{-- <img src="http://klubwyzlapzl.pl/wp-content/uploads/2015/03/pzl-logo2.jpg"/> --}}
                    <span class="col-lg-8" style="padding-top: 5px;"><img src="http://klubwyzlapzl.pl/wp-content/uploads/2015/03/pzl-logo2.jpg"/></span>
                    <span style="margin-top: 15px;" class="col-lg-4">Knieja</span>
                </a>
                {{-- </a> --}}
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                     @foreach($announcements as $announcement)
                            <li>
                                <a href="{{asset('notifications#'.$announcement['id'])}}">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> {{$announcement['title']}}
                                        <span class="pull-right text-muted small">
                                            {{$announcement['created_at']}}
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        @endforeach
                        
                        <li>
                            <a class="text-center" href="{{asset('notifications')}}">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li> 
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        @if(!$avatarPath)
                            <i class="fa fa-user fa-fw"></i>  
                        @else
                            <img class="avatar-profile" src="{{$avatarPath}}">
                        @endif
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{route('profile')}}"><i class="fa fa-user fa-fw"></i> Profil użytkownika</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Wyloguj</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       {{--  <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li> --}}
                        <li>
                            <a href="{{asset('/home')}}"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{url('/galleryCategories')}}"><i class="fa fa-camera-retro fa-fw"></i> Galeria</a>
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>