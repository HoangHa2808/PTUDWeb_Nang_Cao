<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Tour<span> du lịch</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            {{-- <li class="nav-item nav-category">Main</li> --}}
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['posts/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#posts" role="button"
                    aria-expanded="{{ is_active_route(['posts/*']) }}" aria-controls="posts">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Bài viết</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['posts/*']) }}" id="posts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/posts/tours') }}" class="nav-link {{ active_class(['posts/tours']) }}">Du
                                lịch</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/posts/hotel') }}"
                                class="nav-link {{ active_class(['posts/hotel']) }}">Khách sạn</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/posts/news') }}" class="nav-link {{ active_class(['posts/news']) }}">Tin
                                tức</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['category']) }}">
                <a href="{{ url('/category') }}" class="nav-link">
                    <i class="link-icon" data-feather="align-left"></i>
                    <span class="link-title">Danh mục</span>
                </a>
            </li>
            {{-- <li class="nav-item {{ active_class(['service/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#service" role="button"
                    aria-expanded="{{ is_active_route(['service/*']) }}" aria-controls="service">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Dịch vụ</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['service/*']) }}" id="service">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/service/drive') }}"
                                class="nav-link {{ active_class(['service/drive']) }}">Thuê xe</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/service/orders') }}"
                                class="nav-link {{ active_class(['service/orders']) }}">Đặt tour</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="nav-item {{ active_class(['feedback']) }}">
                <a href="{{ url('/feedback') }}" class="nav-link">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Phản hồi</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['role']) }}">
                <a href="{{ url('/role') }}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Vai trò</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['user']) }}">
                <a href="{{ url('/user') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Người dùng</span>
                </a>
            </li>
            <li class="nav-item nav-category">Tài khoản</li>
            <li class="nav-item {{ active_class(['profile']) }}">
                <a href="{{ url('/profile') }}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Hồ sơ cá nhân</span>
                </a>
            </li>
            {{-- <li class="nav-item {{ active_class(['error/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#error" role="button"
                    aria-expanded="{{ is_active_route(['error/*']) }}" aria-controls="error">
                    <i class="link-icon" data-feather="cloud-off"></i>
                    <span class="link-title">Error</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['error/*']) }}" id="error">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/error/404') }}"
                                class="nav-link {{ active_class(['error/404']) }}">404</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/error/500') }}"
                                class="nav-link {{ active_class(['error/500']) }}">500</a>
                        </li>
                    </ul>
                </div>
            </li> --}}

        </ul>
    </div>
</nav>
