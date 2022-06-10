<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    @foreach ($menu as $key => $item)
                        @if ($item['children'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{$item['link']}}" id="topnav-more" role="button">
                                <i data-feather="{{$item['icon']}}"></i><span data-key="t-extra-pages">{{$item['name']}} </span>
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                            @foreach ($item['children'] as $child)
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="{{$child['link']}}" id="topnav-auth" role="button">
                                            <span data-key="t-authentication">{{$child['name']}}</span>
                                        </a>
                                    </div>
                                    
                            @endforeach
                            </div>
                        </li>
                            
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{$item['link']}}" id="topnav-dashboard" role="button">
                                <i data-feather="{{$item['icon']}}"></i><span data-key="t-dashboards">{{$item['name']}}</span>
                            </a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>