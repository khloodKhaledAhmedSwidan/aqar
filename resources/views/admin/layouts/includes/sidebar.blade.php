<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('public/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AQAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('public/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth('web')->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                       Users

                        </p>
                    </a>
                    <a href="{{route('role.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                         Roles

                        </p>
                    </a>
                    <a href="{{route('client.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Clients

                        </p>
                    </a>
                    <a href="{{route('advertisement.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Advertisements

                        </p>
                    </a>
                    <a href="{{route('question.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Questions

                        </p>
                    </a>
                    <a href="{{route('message.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Messages

                        </p>
                    </a>
                    <a href="{{route('realty-type.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Realty Type

                        </p>
                    </a>
                    <a href="{{route('city.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Cities

                        </p>
                    </a>
                    <a href="{{route('rent-period.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Rent Period

                        </p>
                    </a>
                    <a href="{{route('contact.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          Contacts

                        </p>
                    </a>
                    <a href="{{route('pass.form')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          Change password

                        </p>
                    </a>
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Setting

                        </p>
                    </a>


                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>