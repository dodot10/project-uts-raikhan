<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <div class="menu-divider"></div>
            <div class="menu-header">Components</div>
            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-heart"></i></span>
                    <span class="menu-text">UI Kits</span> 
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item {{ request()->routeIs('admin.modalNotification') ? 'active' : '' }}">
                        <a href="{{ route('admin.modalNotification') }}" class="menu-link">
                            <span class="menu-text">Modal & Notification</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-file-alt"></i></span>
                    <span class="menu-text">Forms</span> 
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item {{ request()->routeIs('admin.formElements') ? 'active' : '' }}">
                        <a href="{{ route('admin.formElements') }}" class="menu-link">
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-table"></i></span>
                    <span class="menu-text">Tables</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item {{ request()->routeIs('admin.tablePlugins') ? 'active' : '' }}">
                        <a href="{{ route('admin.tablePlugins') }}" class="menu-link">
                            <span class="menu-text">Table Plugins</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-divider"></div>
            <div class="menu-header">Users</div>
            <div class="menu-item {{ request()->routeIs('admin.calendar') ? 'active' : '' }}">
                <a href="{{ route('admin.calendar') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-calendar"></i></span>
                    <span class="menu-text">Calendar</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('admin.login') ? 'active' : '' }}">
                <a href="{{ route('admin.login') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-sign-in-alt"></i></span>
                    <span class="menu-text">Login</span>
                </a>
            </div>
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->
