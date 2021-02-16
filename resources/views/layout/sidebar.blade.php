<div id="left-sidebar" class="sidebar ">
    <h5 class="brand-name">Zelyx Creative</h5>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="{{ Request::segment(2) === 'index' ? 'active' : null }}"><a href="{{route('hrms.index')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('project.list')}}"><i class="icon-cup"></i><span>Projets</span></a></li>
        </ul>
    </nav>        
</div>