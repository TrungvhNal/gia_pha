<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @guest

            @else
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link" href="{{ route('home', ['show'=>'show-full']) }}">Hiện thị đầy đủ</a></li>
                    <li><a class="nav-link" href="{{ route('home', ['show'=>'show-ho']) }}">Hiển thị gốc</a></li>
                    <li><a class="nav-link" href="{{ route('home', ['show'=>'show-name']) }}">Hiện thị tên</a></li>
                    </a></li>
                </ul>
            @csrf
        @endguest

        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->idRoles == 1)
                                <a class="dropdown-item"  href="/admin/"><i class="fa fa-user fa-fw"></i> Vào trang quản lý</a>
                            @endif
                            <a class="dropdown-item"  href="#"><i class="fa fa-user fa-fw"></i> Thêm con</a>
                            <a class="dropdown-item"  href="#"><i class="fa fa-user fa-fw"></i> Cài đặt</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>