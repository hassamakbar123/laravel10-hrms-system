<div class="topbar-one">
    <div class="container-fluid">
        <div class="topbar-one__inner">
            <ul class="list-unstyled topbar-one__info">
                <li class="topbar-one__info__item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li class="topbar-one__info__item">
                    <i class="fas fa-map-marker"></i>
                    <a href="tel:+92(8800)-6930">30 Broklyn Golden Street. New York</a>
                </li>
            </ul><!-- /.list-unstyled topbar-one__info -->
            <div class="topbar-one__right">
                <div class="topbar-one__nav">
                    <ul>
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-one__social">
                    <a href="https://twitter.com/">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://facebook.com/">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com/">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </a>
                    <a href="https://instagram.com/">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div><!-- /.topbar-one__social -->
            </div><!-- /.topbar-one__right -->
        </div><!-- /.topbar-one__inner -->
    </div>
</div>

<header class="main-header sticky-header sticky-header--normal">
    <div class="main-header__inner">
        <div class="main-header__logo">
            <a href="index-2.html">
                <img src="assets/images/logo-dark.png" alt="Hiredots HTML" width="125">
            </a>
        </div><!-- /.main-header__logo -->
        <a href="#" class="search-toggler main-header__search">
            <i class="icon-magnifying-glass" aria-hidden="true"></i>
            <span class="sr-only">Search</span>
        </a><!-- /.search-toggler -->
        <div class="main-header__menu">
            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">
                    <li class="dropdown">
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('team.detail') }}">Details</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('news') }}">Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('jobs') }}">Jobs</a>
                    </li>
                </ul>
            </nav><!-- /.main-header__nav -->
            <div class="main-header__call">
                <i class="icon-telephone"></i>
                <a href="tel:+9288006930">+ 92 (8800)-6930</a>
            </div>
        </div>
        <div class="main-header__link">
            <a class="main-header__btn" href="contact.html">Book <br> Appointment</a>
        </div>
        <div class="mobile-nav__btn mobile-nav__toggler">
            <span></span>
            <span></span>
            <span></span>
        </div><!-- /.mobile-nav__toggler -->
    </div>
</header>
