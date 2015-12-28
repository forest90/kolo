@if(count($posts)>0)
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Posty
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                            	<?php $i=0; ?>
                            	@foreach($posts as $post)
                            		@if($i%2 == 1)
	                                	<li class="timeline-inverted">
	                                @else
	                                	<li>
	                                @endif
	                                    <div class="timeline-badge">
                                        @if($post->user and isset($post->user->avatar))

                                            <img class="post-avatar avatar" 
                                                src="{{asset($post->user->avatar->path)}}">

                                        @else
                                                <img class="post-avatar avatar" 
                                                src="{{asset('assets/img/blank.png')}}">
                                        
                                        @endif
                                        {{-- <i class="fa fa-check"></i> --}}
	                                    </div>
	                                    <div class="timeline-panel">
                                        @if($post->user)
                                            <div class="pull-right" 
                                                style="font-weight: 800; font-size: 10px;">
                                                {{$post->user->nick}}
                                            </div>
                                        @endif
	                                        <div class="timeline-heading">
	                                            <h4 class="timeline-title">{{$post->name}}</h4>
	                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> {{$post->created_at}}</small>
	                                            </p>
	                                        </div>
	                                        <div class="timeline-body">
	                                            <p>{{$post->body}}</p>
                                                @if(isset($post->photos) && !empty($post->photos))
                                                    <img src="{{asset($post->photos['path'])}}" class="image-post">
                                                @endif
                                            </div>
	                                    </div>
	                                </li>
                            		<?php $i++; ?>
                                @endforeach
                                <!-- <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
@endif