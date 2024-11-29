<div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
        <div>
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="../main/index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('/assets/images/logos/logo.png') }}" class="dark-logo" alt="Logo-Dark" height="58" />
                    <img src="{{ asset('/assets/images/logos/logo.png') }}" class="light-logo" alt="Logo-light" height="58" />
                </a>
                <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                    <i class="ti ti-x"></i>
                </a>
            </div>

            @include('frontend.layouts.dashboard.admin.sidebar')

            <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
                <div class="hstack gap-3">
                    <div class="john-img">
                        <img src="{{ asset('assets/images/profile/user-3.jpg') }}" class="rounded-circle" width="40"
                            height="40" alt="modernize-img" />
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                        <span class="fs-2">Designer</span>
                    </div>
                    {{-- <form method="POST" action="{{ route('logout') }}"> --}}
                    @csrf

                    <button :href="route('logout')" class="border-0 bg-transparent text-primary ms-auto"
                        onclick="event.preventDefault(); this.closest('form').submit();" aria-label="logout"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>

            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
        </div>
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">
        <!--  Header Start -->
        <header class="topbar">
            <div class="with-vertical">
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Header -->
                <!-- ---------------------------------- -->
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="d-block d-lg-none py-4">
                        <a href="#" class="text-nowrap logo-img">
                            <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" class="dark-logo"
                                alt="Logo-Dark" />
                            <img src="{{ asset('assets/images/logos/light-logo.svg') }}" class="light-logo"
                                alt="Logo-light" />
                        </a>
                    </div>
                    <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0"
                        href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-dots fs-7"></i>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0)"
                                class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                aria-controls="offcanvasWithBothOptions">
                                <i class="ti ti-align-justified fs-7"></i>
                            </a>
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <x-dark-mode-dashboard-admin />

                                <!-- ------------------------------- -->
                                <!-- start profile Dropdown -->
                                <!-- ------------------------------- -->
                                <x-profile-dashboard-admin image="{{ asset('assets/images/profile/user-3.jpg') }}"
                                    username="Dimas" jabatan="pejabar" email="dimas@gmail.com" />
                                <!-- ------------------------------- -->
                                <!-- end profile Dropdown -->
                                <!-- ------------------------------- -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- ---------------------------------- -->
                <!-- End Vertical Layout Header -->
                <!-- ---------------------------------- -->

                <!-- ------------------------------- -->
                <!-- apps Dropdown in Small screen -->
                <!-- ------------------------------- -->
                <!--  Mobilenavbar -->
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <nav class="sidebar-nav scroll-sidebar">
                        <div class="offcanvas-header justify-content-between">
                            <img src="../assets/images/logos/favicon.ico" alt="modernize-img" class="img-fluid" />
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
                            <ul id="sidebarnav">
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <span>
                                            <i class="ti ti-apps"></i>
                                        </span>
                                        <span class="hide-menu">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level my-3">
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-chat.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                    <span class="fs-2 d-block text-muted">New messages arrived</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-invoice.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                    <span class="fs-2 d-block text-muted">Get latest invoice</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-cotact.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                    <span class="fs-2 d-block text-muted">2 Unsaved Contacts</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-email.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                    <span class="fs-2 d-block text-muted">Get new emails</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/page-user-profile.html"
                                                class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                    <span class="fs-2 d-block text-muted">learn more
                                                        information</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-calendar.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-date.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                    <span class="fs-2 d-block text-muted">Get dates</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-contact2.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                    <span class="fs-2 d-block text-muted">Add new contact</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-notes.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-application.svg"
                                                        alt="modernize-img" class="img-fluid" width="24"
                                                        height="24" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                    <span class="fs-2 d-block text-muted">To-do and Daily tasks</span>
                                                </div>
                                            </a>
                                        </li>
                                        <ul class="px-8 mt-7 mb-4">
                                            <li class="sidebar-item mb-3">
                                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/authentication-login.html">Authentication
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/authentication-register.html">Register Now</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/authentication-error.html">404 Error Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="../main/app-notes.html">Notes
                                                    App</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/page-user-profile.html">User Application</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark"
                                                    href="../main/page-account-settings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../main/app-chat.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-message-dots"></i>
                                        </span>
                                        <span class="hide-menu">Chat</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../main/app-calendar.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                        <span class="hide-menu">Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="../main/app-email.html" aria-expanded="false">
                                        <span>
                                            <i class="ti ti-mail"></i>
                                        </span>
                                        <span class="hide-menu">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--  Header End -->
        <div class="body-wrapper">
            <div class="container-fluid">
                @yield('contents')
            </div>
        </div>
    </div>
</div>
