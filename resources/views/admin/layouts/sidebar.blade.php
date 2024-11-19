<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""> </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }} " class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">TV APP</li>

            <li class="dropdown  ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Manage Categories</span></a>
                <ul class="dropdown-menu">
                    <li class=" "><a class="nav-link" href="{{ route('admin.category.index') }}">Category</a></li>

                </ul>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Manage Channels</span></a>
                <ul class="dropdown-menu">
                    <li class=" "><a class="nav-link" href="{{ route('admin.channel.index') }}">All Channels</a></li>
                </ul>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Users IP</span></a>
                <ul class="dropdown-menu">
                    <li class=" "><a class="nav-link" href="{{ route('admin.user.index') }}">Users IP</a></li>
                    <li class=" "><a class="nav-link" href="{{ route('admin.manage-user.index') }}">Manage user</a></li>
            
                </ul>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Blocked List</span></a>
                <ul class="dropdown-menu">
                    <li class=" "><a class="nav-link" href="{{ route('admin.blockip.index') }}">Block IP</a></li>
                </ul>
            </li>

        </ul>

    </aside>
</div>