<div>
  <nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand"> Noble<span>UI</span> </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        @forelse(menu('dashboard_user','_json') as $menu)
        <li class="nav-item">
          <a href="{{$menu->url}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">{{$menu->title}}</span>
          </a>
        </li>
        @empty
    
        @endforelse
      </ul>
    </div>
  </nav>
</div>