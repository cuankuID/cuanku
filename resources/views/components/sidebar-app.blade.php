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
        <li class="{{ Request::is('dashboard/ask-consultant') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/ask-consultant"><i class="fas fa-comments-dollar"></i> <span>Tanya Konsultan</span></a></li>
        @endcan

        @can('consultant', 'admin')
        <li class="menu-header">Consultant</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i> <span>Order</span></a>
            <ul class="dropdown-menu">
                <li {{ Request::is('dashboard/order-live-consultation') ? 'active' : '' }}><a class="nav-link" href="/dashboard/order-live-consultation">Konsultasi Online</a></li>
                <li {{ Request::is('dashboard/order-meet-consultation') ? 'active' : '' }}><a class="nav-link" href="/dashboard/order-meet-consultation">Konsultasi Langsung</a></li>
            </ul>
        </li>
        
        <li class="{{ Request::is('dashboard/create-meet-consultation-schedule') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/create-meet-consultation-schedule"><i class="fas fa-calendar-alt"></i> <span>Buat Jadwal Konsultasi</span></a></li>
        <li class="{{ Request::is('dashboard/answer-question') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/answer-question"><i class="fas fa-comment-alt"></i> <span>Jawab Pertanyaan</span></a></li>
        {{-- <li class="{{ Request::is('live-chat') ? 'active' : '' }}"><a class="nav-link" href="/live-chat"><i class="fas fa-laptop-medical"></i> <span>Live Konsultasi</span></a></li> --}}
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
        <li class="{{ Request::is('dashboard/subscription') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/subscription"><i class="fas fa-money-check"></i> <span>Subscription Plan</span></a></li>
        <li class="{{ Request::is('dashboard/posts') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/posts"><i class="far fa-newspaper"></i> <span>Post</span></a></li>
        <li class="{{ Request::is('dashboard/master/consultant-office') ? 'active' : '' }}"><a class="nav-link" href="{{ route('master.index.office-consultant') }}"><i class="fas fa-building"></i> <span>Kantor Konsultan</span></a></li>
        @endcan
        {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
            <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
            <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
            <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
            <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
            <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
            <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
            <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
            <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
            <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
            <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
            <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
            <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
            <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
            <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
            <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
            <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
            <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
            <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
            <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
            </ul>
        </li> --}}
        {{-- <li class="menu-header">Stisla</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="components-article.html">Article</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
            <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
            <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
            <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
            <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
            <li><a class="nav-link" href="components-tab.html">Tab</a></li>
            <li><a class="nav-link" href="components-table.html">Table</a></li>
            <li><a class="nav-link" href="components-user.html">User</a></li>
            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
            <ul class="dropdown-menu">
            <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
            <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
            <li><a href="gmaps-geocoding.html">Geocoding</a></li>
            <li><a href="gmaps-geolocation.html">Geolocation</a></li>
            <li><a href="gmaps-marker.html">Marker</a></li>
            <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
            <li><a href="gmaps-route.html">Route</a></li>
            <li><a href="gmaps-simple.html">Simple</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
            <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
            <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
            <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
            <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
            <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
            <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
            <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
            <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
            <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
            <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
            <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
            </ul>
        </li>
        <li class="menu-header">Pages</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
            <ul class="dropdown-menu">
            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
            <li><a href="auth-login.html">Login</a></li>
            <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-reset-password.html">Reset Password</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="errors-503.html">503</a></li>
            <li><a class="nav-link" href="errors-403.html">403</a></li>
            <li><a class="nav-link" href="errors-404.html">404</a></li>
            <li><a class="nav-link" href="errors-500.html">500</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
            <ul class="dropdown-menu">
            <li><a href="utilities-contact.html">Contact</a></li>
            <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
            <li><a href="utilities-subscribe.html">Subscribe</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> --}}
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