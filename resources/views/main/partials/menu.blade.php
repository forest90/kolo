<div class="art-content-layout-row">
    <div class="art-layout-cell art-sidebar1">
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">

                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">

                        <ul class="menu">
                            <li class="item-101 current active">
                                <a href="/">Strona główna
                                </a>
                            </li>
                            @foreach($menu as $m)
                                <li class="item-138">
                                    <a href="/{{$m['uri']}}">{{$m['name']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="cleared"></div>
                    </div>
                </div>
                <div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>