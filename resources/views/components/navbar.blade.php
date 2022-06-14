<nav id="navbar" class="navbar ">
    <ul>
        <li><a class="nav-link {{ Request::is('') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Post</a></li>
        <li class="dropdown"><a href="#"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Live Consultation</a></li>
                <li><a href="#">Search Consultant Office</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Live Consultation</a></li>
                        <li><a href="#">Search Consultant Office</a></li>
                    </ul>
                </li> --}}
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        @auth
        <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
        @else
        <li><a class="nav-link scrollto" href="/login">Register</a></li>
        <li><a class="getstarted scrollto" href="/login">Login</a></li>
        @endauth

    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>