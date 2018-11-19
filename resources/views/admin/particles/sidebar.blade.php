<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigasyon</li>

                <li class="has_sub">
                    <a href="{{route('admin.home')}}" class="waves-effect"><i class="ti-home"></i> <span> Ana Sayfa </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Writers </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.writer.index')}}">All Writer</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-view-list"></i> <span> Categories </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.category.index')}}">All Category</a></li>
                        <li><a href="{{route('admin.category.create')}}">Add Category</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i> <span> Posts </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.post.index') }}">All Posts</a></li>
                        <li><a href="{{ route('admin.post.create') }}">Add Post</a></li>
                        <li><a href="{{ route('admin.post.deleted') }}">Deleted Posts</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>