<div style="background-color: #F4F5F7;">

    <div class="sidebar sidebar-offcanvas">
        <ul class="nav" style="position: fixed; z-index: 1000; left: 0;">
        @forelse(menu('dashboard_user','_json') as $menu)
        <li class="nav-item">
            <a class="nav-link" href="{{$menu->url}}">
            <i class="{{$menu->icon_class}} menu-icon"></i>
            <span class="menu-title">{{$menu->title}}</span>
            </a>
        </li>
        @empty
    
        @endforelse
        </ul>
    </div>

</div>