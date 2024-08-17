<header class="header">
    <div class="header_inner">
        <div class="header-logo">
            <input type="checkbox" id="menu">
            <label class="menu-btn" for="menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    @if( Auth::check() )
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Mypage</a></li>
                    @else
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Login</a></li>
                    @endif
                </ul>
            </nav>
            <h1>Rese</h1>
        </div>
        @yield('search')
    </div>
</header>