<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>RES EMP</span></a> </li>
                <li class="list-divider"></li>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> RESERVATION </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('reservation emp/reservation/all') }}">All  </a></li>
                        <li><a href="{{ route('reservation emp/reservation/add') }}"> Add  </a></li>
                        <li><a href="{{ route('reservation emp/reservation/edit') }}"> EDIT </a></li>
                    </ul>
                </li>
        </div>
    </div>
</div>