<header class="header">
    <div class="logo">
        <img src="{{ asset('template/images/onlineshopping_118072.png') }}" alt="" />
        <a href="{{ url('/') }}" class="logo"> shopTec </a>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Search product..." />
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="acceso-btn" class="fas fa-user"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="{{ url('/cart') }}" class="fas fa-shopping-cart"></a>
    </div>

    <div class="acceso-form-container">
        <div id="close-acceso-btn" class="fas fa-times"></div>
        <form action="">
            <h3>Sign In</h3>
            <span>Username</span>
            <input type="email" class="box" placeholder="Enter your email" />
            <span>Password</span>
            <input type="password" class="box" placeholder="Enter your password" />
            <div class="checkbox">
                <input type="checkbox" id="recordar" />
                <label for="recordar"> Remember me</label>
            </div>
            <input type="submit" value="Login" class="btn" />
            <p>Forgot your password? <a href="#">Click here</a></p>
            <p>Don't have an account?</p>
            <a href="{{ url('/register') }}" class="btn link">Register now</a>
        </form>
    </div>
</header>

<div class="side-bar">
    <div id="close-side-bar" class="fas fa-times"></div>
    <div class="user">
        <img src="{{ asset('template/images/user-img.png') }}" alt="" />
        <h3>Guest</h3>
        <a href="#">Log out</a>
    </div>

    <nav class="navbar">
        <a href="{{ url('/') }}"> <i class="fas fa-angle-right"></i> Home </a>
        <a href="{{ url('/about') }}"> <i class="fas fa-angle-right"></i> About Us </a>
        <a href="{{ url('/products') }}"> <i class="fas fa-angle-right"></i> Products </a>
        <a href="{{ url('/contact') }}"> <i class="fas fa-angle-right"></i> Contact </a>
        <a href="{{ url('/register') }}"> <i class="fas fa-angle-right"></i> Register </a>
        <a href="{{ url('/cart') }}"> <i class="fas fa-angle-right"></i> Cart </a>
    </nav>
</div>
