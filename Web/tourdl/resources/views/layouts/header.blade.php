<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <form class="search-form">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i data-feather="search"></i>
                    </div>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-vn mt-1" title="vn"></i> <span
                        class="font-weight-medium ml-1 mr-1">VietNam</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us"
                            id="us"></i> <span class="ml-1"> English </span></a>
                    <a href="#" class="dropdown-item py-2"><i class="flag-icon flag-icon-vn" title="vn"
                            id="vn"></i> <span class="ml-1"> VietNam </span></a>
                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr"
                            id="fr"></i> <span class="ml-1"> French </span></a>
                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es"
                            id="es"></i> <span class="ml-1"> Spanish </span></a>
                </div>
            </li>
            <li class="nav-item dropdown nav-apps">
                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="grid"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="appsDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">Web Apps</p>
                        <a href="javascript:;" class="text-muted">Edit</a>
                    </div>
                    <div class="dropdown-body">
                        <div class="d-flex align-items-center apps">
                            <a href="{{ url('/posts/tour') }}"><i data-feather="collapse" class="link-icon"></i>
                                <p>Bài viết</p>
                            </a>
                            <a href="{{ url('/category') }}"><i data-feather="align-left" class="link-icon"></i>
                                <p>Danh mục</p>
                            </a>
                            <a href="{{ url('/user') }}"><i data-feather="users" class="link-icon"></i>
                                <p>Người dùng</p>
                            </a>
                            <a href="{{ url('/profile') }}"><i data-feather="instagram" class="link-icon"></i>
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item dropdown nav-messages">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="messageDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">9 New Messages</p>
                        <a href="javascript:;" class="text-muted">Clear all</a>
                    </div>
                    <div class="dropdown-body">
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Leonardo Payne</p>
                                    <p class="sub-text text-muted">2 min ago</p>
                                </div>
                                <p class="sub-text text-muted">Project status</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Carl Henson</p>
                                    <p class="sub-text text-muted">30 min ago</p>
                                </div>
                                <p class="sub-text text-muted">Client meeting</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Jensen Combs</p>
                                    <p class="sub-text text-muted">1 hrs ago</p>
                                </div>
                                <p class="sub-text text-muted">Project updates</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Amiah Burton</p>
                                    <p class="sub-text text-muted">2 hrs ago</p>
                                </div>
                                <p class="sub-text text-muted">Project deadline</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="{{ url('https://via.placeholder.com/30x30') }}" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Yaretzi Mayo</p>
                                    <p class="sub-text text-muted">5 hr ago</p>
                                </div>
                                <p class="sub-text text-muted">New record</p>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li> --}}
            {{-- notifications --}}
            {{-- <li class="nav-item dropdown nav-notifications">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i>
                    <div class="indicator">
                        <div class="circle"></div>
                    </div>
                </a>
                <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">6 New Notifications</p>
                        <a href="javascript:;" class="text-muted">Clear all</a>
                    </div>
                    <div class="dropdown-body">
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="user-plus"></i>
                            </div>
                            <div class="content">
                                <p>New customer registered</p>
                                <p class="sub-text text-muted">2 sec ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="gift"></i>
                            </div>
                            <div class="content">
                                <p>New Order Recieved</p>
                                <p class="sub-text text-muted">30 min ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="alert-circle"></i>
                            </div>
                            <div class="content">
                                <p>Server Limit Reached!</p>
                                <p class="sub-text text-muted">1 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="layers"></i>
                            </div>
                            <div class="content">
                                <p>Apps are ready for update</p>
                                <p class="sub-text text-muted">5 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="download"></i>
                            </div>
                            <div class="content">
                                <p>Download completed</p>
                                <p class="sub-text text-muted">6 hrs ago</p>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li> --}}
            {{-- profile --}}
            <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('2.ico') }}" alt="profile">
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <img src="{{ url('2.ico') }}" alt="">
                        </div>
                        <div class="info text-center">
                            <p class="name font-weight-bold mb-0">Admin</p>
                            <p class="email text-muted mb-3">admin123@gmail.com</p>
                        </div>
                    </div>
                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="{{ url('/profile/edit') }}" class="nav-link">
                                    <i data-feather="user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link">
                                    <i data-feather="repeat"></i>
                                    <span>Switch User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ url('logout') }}" class="nav-link"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i data-feather="log-out"></i>
                                        <span>Log Out</span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>