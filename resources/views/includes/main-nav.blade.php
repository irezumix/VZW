        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar offset" id="navbar">
                            <ul class="nav navbar-nav menu_nav">
                                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/facilities">Faciliteiten</a></li>
                                <li class="nav-item"><a class="nav-link" href="/events">Evenementen</a>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="/calendar">Calendar</a></li>
                                @guest
                                <li class="nav-item"><a class="nav-link" href="#">|</a></li>
                                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                                @endguest
                                @auth
                                <li class="nav-item"><a class="nav-link" href="/logout">Log out</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
