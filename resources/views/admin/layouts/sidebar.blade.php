@php use Illuminate\Support\Facades\Route; @endphp
<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="{{route("admin.")}}"
                       class="nav-link {{isActive("admin.")}}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            پنل مدیریت
                        </p>
                    </a>
                </li>

                @can("show-users")
                    <li class="nav-item has-treeview {{isActive(["admin.users.index", "admin.users.create", "admin.users.edit"], "menu-open")}}">
                        <a href="#"
                           class="nav-link {{isActive(["admin.users.index", "admin.users.create", "admin.users.edit"])}}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("admin.users.index")}}"
                                   class="nav-link {{isActive(["admin.users.index", "admin.users.create", "admin.users.edit"])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a href="./index2.html" class="nav-link">--}}
                            {{--                                <i class="fa fa-circle-o nav-icon"></i>--}}
                            {{--                                <p>اجازه دسترسی</p>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}
                        </ul>
                    </li>
                @endcan
                @canany(["show-permissions", "show-roles"])
                    <li class="nav-item has-treeview {{isActive(["admin.permissions.index", "admin.roles.index"], "menu-open")}}">
                        <a href="#"
                           class="nav-link {{isActive(["admin.permissions.index", "admin.roles.index"])}}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                بخش اجازه دسترسی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        @can("show-permissions")
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route("admin.permissions.index")}}"
                                       class="nav-link {{isActive(["admin.permissions.index"])}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>همه دسترسی ها</p>
                                    </a>
                                </li>
                            </ul>
                        @endcan
                        @can("show-roles")
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route("admin.roles.index")}}"
                                       class="nav-link {{isActive(["admin.roles.index"])}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>همه مقام ها</p>
                                    </a>
                                </li>
                            </ul>
                        @endcan
                    </li>
                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>
