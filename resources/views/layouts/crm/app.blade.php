<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page_title ?? COMPANY_FULL_NAME }}</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('crm/img/favicons/apple-touch-icon.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('crm/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('crm/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('crm/img/favicons/favicon.ico') }}">

    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('crm/vendor/js/config.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/simplebar.min.js') }}"></script>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('crm/vendor/css/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('crm/vendor/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('crm/vendor/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('crm/vendor/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('crm/vendor/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('crm/vendor/css/choices.min.css') }}" rel="stylesheet" id="user-select-default">
    <link href="{{ asset('crm/vendor/css/sweetalert2.min.cs') }}" rel="stylesheet" id="user-select-default">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet" id="user-common-style">

    <script src="{{ asset('crm/vendor/js/jquery.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/choices.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/sweetalert2.min.js') }}"></script>

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            @include('layouts.crm.nav_bar_header')

            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center">
                            <img class="me-2" src="{{ asset('theme/falcon.png') }}" alt="" width="40" />
                            <span class="font-sans-serif">falcon</span>
                        </div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input fuzzy-search" type="search"
                                        placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                        aria-label="Close"></button></div>
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Recently Browsed
                                        </h6>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                <div class="fw-normal title">Pages <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary"
                                            href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                <div class="fw-normal title">E-commerce <span
                                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                                        data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Suggested Filter
                                        </h6>
                                        <a class="dropdown-item px-card py-1 fs-0"
                                            href="app/e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                                                <div class="flex-1 fs--1 title">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0"
                                            href="app/events/event-detail.html">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                                                <div class="flex-1 fs--1 title">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0"
                                            href="app/e-commerce/product/product-grid.html">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                                                <div class="flex-1 fs--1 title">Most popular products</div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Files
                                        </h6>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img
                                                        class="border h-100 w-100 fit-cover rounded-3"
                                                        src="{{ asset('theme/3-thumb.png') }}" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">iPhone</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">Antony</span><span
                                                            class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="{{ asset('theme/zip.png') }}" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                    <p class="fs--2 mb-0 d-flex"><span
                                                            class="fw-semi-bold">John</span><span
                                                            class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="text-200 dark__text-900" />
                                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                                            Members
                                        </h6>
                                        <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online me-2">
                                                    <img class="rounded-circle" src="{{ asset('theme/1.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Anna Karinina</h6>
                                                    <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="{{ asset('theme/2.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Antony Hopkins</h6>
                                                    <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l me-2">
                                                    <img class="rounded-circle" src="{{ asset('theme/3.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Emma Watson</h6>
                                                    <p class="fs--2 mb-0 d-flex">Google</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center mt-n3">
                                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                    type="checkbox" data-theme-control="theme" value="dark" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                            </div>
                        </li>
                        <li class="nav-item d-none d-sm-block" style="display: none!important">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                    class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown" hidden>
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/1-thumb.png') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">💬</span>Just
                                                            now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status
                                                        </p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/weather-sm.jpg') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                            in California. See today's weather.
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/oxford.png') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong>
                                                            created an event : "Causal Inference Hilary 2019"
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/10.jpg') }}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                                            join the group: United Nations International Children's Fund
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🙋‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="app/social/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1" hidden>
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                                    viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                                aria-labelledby="navbarDropdownMenu">
                                <div class="card shadow-none">
                                    <div class="scrollbar-overlay nine-dots-dropdown">
                                        <div class="card-body px-3">
                                            <div class="row text-center gx-0 gy-0">
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="pages/user/profile.html" target="_blank">
                                                        <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                                src="{{ asset('theme/3.jpg') }}" alt="" />
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://themewagon.com/" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/themewagon.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Themewagon
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://mailbluster.com/" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/mailbluster.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Mailbluster
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/google.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Google
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/spotify.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Spotify
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/steam.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Steam
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/github-light.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Github
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/discord.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Discord
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/xbox.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            xbox
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/trello.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Kanban
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/hp.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="my-3 mx-n3 bg-200" />
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/linkedin.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Linkedin
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/twitter.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Twitter
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/facebook.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Facebook
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/instagram.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Instagram
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/pinterest.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Pinterest
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/slack.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Slack
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/deviantart.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Deviantart
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="app/events/event-detail.html" target="_blank">
                                                        <div class="avatar avatar-2xl">
                                                            <div
                                                                class="avatar-name rounded-circle bg-soft-primary text-primary">
                                                                <span class="fs-2">E</span>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                        href="#!">Show more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('theme/3-thumb.png') }}"
                                        alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
                    data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('theme/falcon.png') }}" alt="" width="40" /><span
                                class="font-sans-serif">falcon</span></div>
                    </a>
                    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="dashboards">Dashboard</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                    aria-labelledby="dashboards">
                                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                            class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/analytics.html">Analytics</a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/crm.html">CRM</a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/e-commerce.html">E commerce</a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/lms.html">LMS<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/project-management.html">Management</a><a
                                            class="dropdown-item link-600 fw-medium"
                                            href="dashboard/saas.html">SaaS</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="apps">App</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                    aria-labelledby="apps">
                                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                                        <div class="card-body scrollbar max-h-dropdown">
                                            <img class="img-dropdown"
                                                src="{{ asset('theme/authentication-corner.png') }}" width="130"
                                                alt="" />
                                            <div class="row">
                                                <div class="col-6 col-md-5">
                                                    <div class="nav flex-column">
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/calendar.html">Calendar</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/chat.html">Chat</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/course/course-list.html">Course
                                                            list</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Email</p>
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/email/inbox.html">Inbox</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/email/email-detail.html">Email detail</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/email/compose.html">Compose</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Events</p>
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/events/create-an-event.html">Create an
                                                            event</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/events/event-detail.html">Event detail</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/events/event-list.html">Event list</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p>
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/course/course-list.html">Course
                                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/course/course-grid.html">Course
                                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/course/course-details.html">Course
                                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/course/create-a-course.html">Create a
                                                            course</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/student-overview.html">Student
                                                            overview</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-learning/trainer-profile.html">Trainer
                                                            profile</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column">
                                                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p>
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/product/product-list.html">Product
                                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/product/product-grid.html">Product
                                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/product/product-details.html">Product
                                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/orders/order-list.html">Order
                                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/orders/order-details.html">Order
                                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/customers.html">Customers</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/customer-details.html">Customer
                                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/shopping-cart.html">Shopping
                                                            cart</a><a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/checkout.html">Checkout</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/billing.html">Billing</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/e-commerce/invoice.html">Invoice</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p>
                                                        <a class="nav-link py-1 link-600 fw-medium"
                                                            href="app/social/feed.html">Feed</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/social/activity-log.html">Activity log</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/social/notifications.html">Notifications</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="app/social/followers.html">Followers</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                    type="checkbox" data-theme-control="theme" value="dark" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                            </div>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                    class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/1-thumb.png') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">💬</span>Just
                                                            now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status
                                                        </p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/weather-sm.jpg') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                            in California. See today's weather.
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/oxford.png') }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong>
                                                            created an event : "Causal Inference Hilary 2019"
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('theme/10.jpg') }}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                                            join the group: United Nations International Children's Fund
                                                        </p>
                                                        <span class="notification-time"><span class="me-2"
                                                                role="img" aria-label="Emoji">🙋‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="app/social/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1">
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                                    viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71">
                                    </circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                                aria-labelledby="navbarDropdownMenu">
                                <div class="card shadow-none">
                                    <div class="scrollbar-overlay nine-dots-dropdown">
                                        <div class="card-body px-3">
                                            <div class="row text-center gx-0 gy-0">
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="pages/user/profile.html" target="_blank">
                                                        <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                                src="{{ asset('theme/3.jpg') }}" alt="" />
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://themewagon.com/" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/themewagon.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Themewagon
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="https://mailbluster.com/" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/mailbluster.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Mailbluster
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/google.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Google
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/spotify.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Spotify
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/steam.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Steam
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/github-light.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Github
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/discord.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Discord
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/xbox.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            xbox
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/trello.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Kanban
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/hp.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="my-3 mx-n3 bg-200" />
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/linkedin.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Linkedin
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/twitter.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Twitter
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/facebook.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Facebook
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/instagram.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Instagram
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/pinterest.png') }}" alt=""
                                                            width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Pinterest
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded" src="{{ asset('theme/slack.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Slack
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="#!" target="_blank">
                                                        <img class="rounded"
                                                            src="{{ asset('theme/deviantart.png') }}"
                                                            alt="" width="40" height="40" />
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                            Deviantart
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                        href="app/events/event-detail.html" target="_blank">
                                                        <div class="avatar avatar-2xl">
                                                            <div
                                                                class="avatar-name rounded-circle bg-soft-primary text-primary">
                                                                <span class="fs-2">E</span>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                        href="#!">Show more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('theme/3-thumb.png') }}"
                                        alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp;
                                        account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                    var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    if (localStorage.getItem('navbarPosition') === 'double-top') {
                        document.documentElement.classList.toggle('double-top-nav-layout');
                    }

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'double-top') {
                        navbarDoubleTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarDoubleTop.remove(navbarDoubleTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>

                @yield('content')

                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Thank you for creating with TechMerge <span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none" />
                                {{ date('Y') }} &copy;

                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    {{-- @include('layouts.crm.theme_setting_panel') --}}

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('crm/vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/bootstrap_5.2.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/anchor.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/is.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/echarts.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/all_Font_Awesome5_15_4.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/lodash.min.js') }}"></script>
    <script src="{{ asset('crm/vendor/js/list.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('crm/vendor/js/theme.js') }}"></script>
    <script src="{{ asset('new_look/js/common.js') }}"></script>
</body>

</html>
