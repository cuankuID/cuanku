<div class="main-sidebar">
    <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/dashboard">
        <img src="{{ asset('assets-app/img/cuanku-text-logo.jpg') }}" alt="" style="height: 52px;">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <img src="{{ asset('assets-app/img/cuanku-logo.png') }}" alt="" style="height: 52px;">
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="/dashboard"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>
        @can('user', 'admin')
        <li class="menu-header">Service</li>
        <li class="{{ Request::is('dashboard/meet-consultant') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/meet-consultant"><i class="fas fa-user-tie"></i> <span>Janji Temu Konsultan</span></a></li>
        <li class="{{ Request::is('dashboard/live-consultation') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home.live-consultation') }}"><i class="fas fa-laptop-medical"></i> <span>Konsultasi Online</span></a></li>
        <li class="{{ Request::is('dashboard/search-office') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index.search-office') }}"><i class="fas fa-building"></i> <span>Cari Kantor Konsultan</span></a></li>
        {{-- <li class="{{ Request::is('dashboard/ask-consultant') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/ask-consultant"><i class="fas fa-comments-dollar"></i> <span>Tanya Konsultan</span></a></li> --}}
        @endcan

        @can('consultant', 'admin')
        <li class="menu-header">Consultant</li>
        {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i> <span>Order</span></a>
            <ul class="dropdown-menu">
                <li {{ Request::is('dashboard/order-meet-consultation') ? 'active' : '' }}><a class="nav-link" href="/dashboard/order-meet-consultation">Konsultasi Langsung</a></li>
            </ul>
        </li> --}}

        <li><a class="nav-link" target="_blank" href="/chat"><i class="fas fa-comments"></i> <span>Chat</span></a></li>
        <li class="{{ Request::is('dashboard/order-meet-consultation') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/order-meet-consultation"><i class="fas fa-list-alt"></i><span>Orderan Konsultasi</span></a></li>
        <li class="{{ Request::is('dashboard/create-meet-consultation-schedule') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/create-meet-consultation-schedule"><i class="fas fa-calendar-alt"></i> <span>Buat Jadwal Konsultasi</span></a></li>
        <li class="{{ Request::is('dashboard/answer-question') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/answer-question"><i class="fas fa-comment-alt"></i> <span>Jawab Pertanyaan</span></a></li>
        <li class="{{ Request::is('live-chat') ? 'active' : '' }}"><a class="nav-link" href="/live-chat"><i class="fas fa-laptop-medical"></i> <span>Live Konsultasi</span></a></li>
        @endcan
        
        @can('admin')
        <li class="menu-header">Admin</li>
        {{-- <li class="{{ Request::is('dashboard/posts') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-clipboard-check"></i> <span>Konfirmasi Pembayaran</span></a></li> --}}
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>All User</span></a>
            <ul class="dropdown-menu">
            <li class="{{ Request::is('dashboard/users') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/users">User</a></li>
            <li><a class="nav-link" href="{{ route('master.index.consultant') }}">Consultant</a></li>
            <li><a class="nav-link" href="/dashboard/teams">Team</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-check-double"></i> <span>Konfirmasi Order</span></a>
            <ul class="dropdown-menu">
            <li class="{{ Request::is('dashboard/admin/order-verification/subs') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/admin/order-verification/subs">Subscription</a></li>
            <li class="{{ Request::is('dashboard/admin/order-verification/meet-consultant') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/admin/order-verification/meet-consultant">Janji Temu Konsultan</a></li>
            </ul>
        </li>
        <li class="{{ Request::is('dashboard/subscription') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/subscription"><i class="fas fa-money-check"></i> <span>Subscription Plan</span></a></li>
        <li class="{{ Request::is('dashboard/posts') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/posts"><i class="far fa-newspaper"></i> <span>Post</span></a></li>
        <li class="{{ Request::is('dashboard/master/consultant-office') ? 'active' : '' }}"><a class="nav-link" href="{{ route('master.index.office-consultant') }}"><i class="fas fa-building"></i> <span>Kantor Konsultan</span></a></li>
        @endcan
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <form action="/logout" method="POST">    
                @csrf
                <button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </aside>
</div>