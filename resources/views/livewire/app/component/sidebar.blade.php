<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
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
    </nav>
</div>