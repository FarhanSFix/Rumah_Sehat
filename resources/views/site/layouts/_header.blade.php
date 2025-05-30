<header id="header" class="header sticky-top shadow-sm">

    <!-- Topbar -->
    <div class="topbar py-2 bg-light border-bottom">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="contact-info d-flex align-items-center small">
                <i class="bi bi-envelope me-2 text-primary"></i>
                <a href="mailto:simedcheck@gmail.com" class="text-decoration-none text-dark">simedcheck@gmail.com</a>
                <i class="bi bi-phone ms-4 me-2 text-primary"></i>
                <span class="text-dark">+62 812 2548 2369</span>
            </div>
            <div class="social-links d-none d-md-flex align-items-center gap-3">
                <a href="#" class="text-dark"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- Branding & Navigation -->
    <div class="branding py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="index.html" class="logo d-flex align-items-center text-decoration-none">
                <!-- Uncomment for image logo -->
                <!-- <img src="{{ asset('medilab/img/logo.png') }}" alt="Logo" class="me-2"> -->
                <h1 class="sitename mb-0 text-primary fw-bold">{{ config('app.name') }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul class="nav gap-3">
                    <li class="nav-item"><a href="{{isUri('') ? '#hero' : '/#hero'}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{isUri('') ? '#about' : '/#about'}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{isUri('') ? '#services' : '/#services'}}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{isUri('') ? '#departments' : '/#departments'}}" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="{{isUri('') ? '#doctors' : '/#doctors'}}" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="{{isUri('') ? '#contact' : '/#contact'}}" class="nav-link">Contact</a></li>

                    @if (authAs('patient'))
                        <li class="nav-item"><a href="/appointment" class="nav-link {{uriActive('appointment')}}">Appointment</a></li>
                    @elseif (authAs('doctor'))
                        <li class="nav-item"><a href="/workspace" class="nav-link {{uriActive('workspace')}}">Workspace</a></li>
                    @elseif (authAs('pharmacist'))
                        <li class="nav-item"><a href="/pharmacy" class="nav-link {{uriActive('pharmacy')}}">Pharmacy</a></li>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            @if (authAs())
                <a class="btn btn-outline-primary d-none d-sm-block" id="userProfile" href="#!">{{ auth()->user()->name }}</a>
            @else
                <a class="btn btn-primary d-none d-sm-block" href="/login">Login</a>
            @endif
        </div>
    </div>

</header>
