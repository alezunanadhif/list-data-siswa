<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <a href="{{ url('home') }}" class="btn btn-link text-decoration-none rounded-circle fs-4 mr-3">LDS</a>

                    <!-- Sidebar Toggle (Topbar) -->
                    <a href="{{ url('home/create') }}" class="btn btn-link d-md-none rounded-circle mr-3 fs-4">
                        <i class="fa fa-square-plus"></i>
                    </a>
                    
                    @if(!Auth::check())
                    <form style="display: none"></form>
                    @else
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div>
            @if(Auth::check())
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?background=000&color=fff&name={{ Auth::user()->name }}">
            @else
            <button class="btn btn-primary">Select</button>
            @endif
        </div>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        @if(!Auth::check())
                <a href="{{url('/login')}}" class="btn dropdown-item">Login</a>
                <a href="{{url('/register')}}" class="btn dropdown-item">Register</a>
        @else
        <a class="dropdown-item" href="{{ url('home') }}">
            <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
            Dashboard
        </a>
        <a class="dropdown-item" href="{{ url('home/create') }}">
            <i class="fas fa-circle-plus fa-sm fa-fw mr-2 text-gray-400"></i>
            Add LDS
        </a>
        <a class="dropdown-item" href="{{ url('home/profile') }}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('logout') }}">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
        @endif
    </div>
</li>


                    </ul>

                </nav>