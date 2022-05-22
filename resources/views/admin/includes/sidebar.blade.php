
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->


            <li class="nav-item">
                <a href="{{route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-house-user"></i>
                    <p>
                        Головна
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Користувачі
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Статті
                        <span class="badge badge-info right">{{$posts->total()}}</span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-chess-knight"></i>
                    <p>
                        Категорії
                        <span class="badge badge-info right">{{$categories->total()}}</span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Теги
                        <span class="badge badge-info right">{{$tags->total()}}</span>
                    </p>
                </a>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>

