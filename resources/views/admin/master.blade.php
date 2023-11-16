<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adminage - Admin Dashboard</title>

    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets') }}/img/favicon.png" sizes="16x16" type="image/png" />
    <!-- Bulma css -->
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/mystyle.css" />
</head>

<body class="t-bg-primary mx-sidenav-not-collapsed">

    <!-- Preloader  -->
    <div class="preloader-container">
        <div class="cssload-thecube m-auto">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Side Nav / Display Only Small Screen  -->
    <div class="position-relative d-xl-none">
        <div class="mx-mobile-nav-wrapper"></div>
        <div class="mx-mobile-nav">
            <div class="mx-mobile-nav__close">
                <i class="las la-times"></i>
            </div>
            <div class="mx-mobile-brand mx-mobile-nav__brand ">
                <img src="{{ asset('assets') }}/img/logo-w.png" alt="Adminage" class="img-fluid mx-mobile-brand__is">
            </div>
            <nav class="mx-mobile-nav__menu" data-simplebar>
                <ul class="t-list mx-sm-sidenav">
                    <li class="mx-sm-sidenav__list">
                        <a href="index.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <span class='bx bx-category'></span>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                dashboard mobile
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-user'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                user
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="user.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bxs-user-plus'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        user
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="user-list.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bxs-user-detail'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        user list
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__sub-title xsm-text t-text-light text-uppercase t-bg-primary">
                        forms & table
                    </li>

                    <li class="mx-sm-sidenav__list">
                        <a href="{{ route('admin.myprofile') }}" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-user-account'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                profile
                            </span>
                        </a>
                    </li>

                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-folder-open'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                project
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="create-project.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <span class='bx bx-pulse'></span>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        create project
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="project-list.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-list-ul'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        project list
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-message-detail'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                message
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="chat.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-message-dots'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        chat
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="group-chat.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bxs-message-dots'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        group chat
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="inbox.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-mail-send'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        inbox
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__sub-title xsm-text t-text-light text-uppercase t-bg-primary">
                        UI component
                    </li>
                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-detail'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                form
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="form.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-news'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        form
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="form-validation.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-task'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        form validation
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="price-table.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-receipt'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                price table
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="file-upload.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-upload'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                file upload
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-library'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                UI elements
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="button.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-mobile-alt bx-rotate-90'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        button
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="dropdown.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-upload bx-rotate-180'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        dropdown
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="table.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-table bx-rotate-180'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        table
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="alert.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">

                                        <i class='bx bxs-error'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        alert
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="popover.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">

                                        <i class='bx bx-copy'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        popover
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="tooltip.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">

                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        tooltip
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="timeline.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-slider-alt bx-rotate-90'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        timeline
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="pagination.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-collection'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        pagination
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="symbol.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        symbol
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="overlay.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-layer'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        overlay
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="callout.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-pulse'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        callout
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="ribbon.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-tag-alt'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        ribbon
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__sub-title xsm-text t-text-light text-uppercase t-bg-primary">
                        features
                    </li>
                    <li class="mx-sm-sidenav__list mx-sm-sidenav__has-sub">
                        <a href="#" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-doughnut-chart'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                chart
                            </span>
                        </a>
                        <ul class="t-list mx-sm-sidenav__sub">
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="chart.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-bar-chart-square'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        chart 1
                                    </span>
                                </a>
                            </li>
                            <li class="mx-sm-sidenav__sub-list">
                                <a href="chart-2.html" class="mx-sm-sidenav__sub-link">
                                    <span class="mx-sm-sidenav__sub-icon t-mr-8">
                                        <i class='bx bx-line-chart'></i>
                                    </span>
                                    <span class="mx-sm-sidenav__sub-text text-capitalize">
                                        chart 2
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="data-table.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bxs-grid'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                data table
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="data-search.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-category'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                data search
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="faq.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-message-error'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                FAQ
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="mega-option.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-spreadsheet'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                mega option
                            </span>
                        </a>
                    </li>
                    <li class="mx-sm-sidenav__list">
                        <a href="sticky-note.html" class="mx-sm-sidenav__link">
                            <span class="mx-sm-sidenav__icon t-mr-8">
                                <i class='bx bx-sticker'></i>
                            </span>
                            <span class="mx-sm-sidenav__text text-capitalize">
                                sticky note
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Side Nav / Display Only Small Screen  End-->

    <!-- Page Wrapper -->
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!--SideNav / Display Only Small Screen  -->
            @include('admin.mobile-sidenav')
            <!--SideNav/ Display Only Small Screen End -->

            <!--SideNav / Display Only Large Screen  -->
            @include('admin.sidenav')
            <!--SideNav / Display Only Large Screen End -->

            <div class="col-9 col-xxl-10 flex-grow-1">
                <div class="container-fluid px-2 px-xxl-0">
                    <div class="row g-2 g-xxl-0">
                        <div class="col-12">
                            <div class="mx-body">

                                <header class="header sticky-top d-none d-xl-block">
                                    <div class="primary-nav t-bg-primary">
                                        <div class="container-fluid px-0">
                                            <div class="row g-0">
                                                <div class="col-lg-12">
                                                    <div class="primary-nav-list--right-wrapper">
                                                        <ul class="t-list primary-nav-list primary-nav-list--right">
                                                            <li
                                                                class="primary-nav-list__item border-bottom-0 d-none d-lg-block t-line-1 ">
                                                                <a href="#" class="t-link mx-sidenav-toggle">
                                                                    <span class="mx-sidenav-toggle__icon"></span>
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="primary-nav-list__item border-bottom-0 d-none d-lg-block t-line-1">
                                                                <form action="#"
                                                                    class="t-pl-15 t-pr-15 t-pt-15 t-pb-15">
                                                                    <div class="mx-search-form">
                                                                        <div class="mx-search-form__icon">
                                                                            <i class='bx bx-search'></i>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="mx-search-form__input"
                                                                            placeholder="Search...">
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li class="primary-nav-list__item border-bottom-0">
                                                                <div class="dropdown">
                                                                    <a href="#" aria-expanded="false"
                                                                        data-toggle="dropdown"
                                                                        class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                                                        <span
                                                                            class="primary-nav-list__icon--lg d-lg-none">
                                                                            <i class="las la-bars"></i>
                                                                        </span>
                                                                        <span
                                                                            class="mega-menu__toggle d-none d-lg-block">
                                                                            pages
                                                                        </span>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu messages-dropdown messages-dropdown--mega-menu">
                                                                        <div class="messages messages--primary">
                                                                            <div class="messages__body" data-simplebar>
                                                                                <ul class="t-list mega-menu">
                                                                                    <li class="mega-menu__list">
                                                                                        <span
                                                                                            class="mega-menu__title text-uppercase">
                                                                                            UI
                                                                                            components
                                                                                        </span>
                                                                                        <ul
                                                                                            class="t-list mega-menu__sub">
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="button.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    button
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="dropdown.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    dropdown
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="table.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    table
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="alert.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    alert
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="popover.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    popover
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="tooltip.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    tooltip
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="timeline.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    timeline
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="mega-menu__list">
                                                                                        <span
                                                                                            class="mega-menu__title text-uppercase">
                                                                                            user details
                                                                                        </span>
                                                                                        <ul
                                                                                            class="t-list mega-menu__sub">
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="user.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    user
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="user-list.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    user list
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="{{ route('admin.myprofile') }}"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    profile
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="inbox.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    inbox
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="mega-menu__list">
                                                                                        <span
                                                                                            class="mega-menu__title text-uppercase">
                                                                                            elements
                                                                                        </span>
                                                                                        <ul
                                                                                            class="t-list mega-menu__sub">
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="chat.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    chat
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="group-chat.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    group chat
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="form.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    form
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="form-validation.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    form validation
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="price-table.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    price table
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="mega-menu__list">
                                                                                        <span
                                                                                            class="mega-menu__title text-uppercase">
                                                                                            data info
                                                                                        </span>
                                                                                        <ul
                                                                                            class="t-list mega-menu__sub">
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="chart.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    chart 1
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="chart-2.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    chart 2
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="data-table.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    data table
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="data-search.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    data search
                                                                                                </a>
                                                                                            </li>
                                                                                            <li
                                                                                                class="mega-menu__sub-list">
                                                                                                <a href="faq.html"
                                                                                                    class="mega-menu__link text-capitalize">
                                                                                                    FAQ
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="primary-nav-list__item border-bottom-0">
                                                                <div class="dropdown">
                                                                    <a href="#" aria-expanded="false"
                                                                        data-toggle="dropdown"
                                                                        class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                                                        <span
                                                                            class="primary-nav-list__icon--lg t-line-1">
                                                                            <i class='bx bx-message-detail'></i>
                                                                        </span>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu messages-dropdown messages-dropdown--lg-right">
                                                                        <div class="messages messages--primary">
                                                                            <div class="messages__top">
                                                                                <span
                                                                                    class="messages__top-text text-capitalize">recent
                                                                                    chats</span>
                                                                                <a href="#"
                                                                                    class="t-link messages__top-link text-capitalize messages__top-text">
                                                                                    <span
                                                                                        class="t-mr-5 d-inline-block">
                                                                                        <i class="las la-cog"></i>
                                                                                    </span>
                                                                                    settings
                                                                                </a>
                                                                            </div>
                                                                            <div class="messages__body" data-simplebar>
                                                                                <ul class="t-list messages__list">
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        as
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            Asaduzzaman
                                                                                                            sarker
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            Asaduzzaman,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <img src="{{ asset('assets') }}/img/user.jpg"
                                                                                                        alt="Adminage"
                                                                                                        class="img-fluid w-100" />
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            metal
                                                                                                            slug
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            8:08
                                                                                                            PM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            a
                                                                                                            gamer,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-gamma">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        tk
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            tonmoy
                                                                                                            khan
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Receive
                                                                                                            the
                                                                                                            phone
                                                                                                            ASAP
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-delta">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        gp
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            groups
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            5:07
                                                                                                            AM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            I
                                                                                                            want
                                                                                                            to
                                                                                                            buy
                                                                                                            this
                                                                                                            things
                                                                                                            anybody...
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        as
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            Asaduzzaman
                                                                                                            sarker
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            Asaduzzaman,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <img src="{{ asset('assets') }}/img/user.jpg"
                                                                                                        alt="Adminage"
                                                                                                        class="img-fluid w-100" />
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            metal
                                                                                                            slug
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            8:08
                                                                                                            PM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            a
                                                                                                            gamer,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="messages__footer text-center">
                                                                                <a href="#"
                                                                                    class="t-link messages__view-all text-capitalize t-text-light">
                                                                                    view all
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="primary-nav-list__item border-bottom-0">
                                                                <div class="dropdown">
                                                                    <a href="#" aria-expanded="false"
                                                                        data-toggle="dropdown"
                                                                        class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                                                        <span
                                                                            class="primary-nav-list__icon--lg t-line-1">
                                                                            <i class='bx bx-bell'></i>
                                                                        </span>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu messages-dropdown messages-dropdown--lg-right">
                                                                        <div class="messages messages--primary">
                                                                            <div class="messages__top">
                                                                                <span
                                                                                    class="messages__top-text text-capitalize">notifications</span>
                                                                                <a href="#"
                                                                                    class="t-link messages__top-link text-capitalize messages__top-text">
                                                                                    mark all
                                                                                    as read
                                                                                </a>
                                                                            </div>
                                                                            <div class="messages__body" data-simplebar>
                                                                                <ul class="t-list messages__list">
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        as
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            Asaduzzaman
                                                                                                            sarker
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            Asaduzzaman,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <img src="{{ asset('assets') }}/img/user.jpg"
                                                                                                        alt="Adminage"
                                                                                                        class="img-fluid w-100" />
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            metal
                                                                                                            slug
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            8:08
                                                                                                            PM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            a
                                                                                                            gamer,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-gamma">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        tk
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            tonmoy
                                                                                                            khan
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Receive
                                                                                                            the
                                                                                                            phone
                                                                                                            ASAP
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-delta">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        gp
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            groups
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            5:07
                                                                                                            AM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            I
                                                                                                            want
                                                                                                            to
                                                                                                            buy
                                                                                                            this
                                                                                                            things
                                                                                                            anybody...
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <div
                                                                                                        class="messages__avatar-replacer text-uppercase">
                                                                                                        as
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--active">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            Asaduzzaman
                                                                                                            sarker
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            now
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            Asaduzzaman,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--unseen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="messages__list-item">
                                                                                        <a href="#"
                                                                                            class="t-link w-100">
                                                                                            <div class="messages__msg">
                                                                                                <div
                                                                                                    class="messages__avatar messages__avatar-empty t-bg-alpha">
                                                                                                    <img src="{{ asset('assets') }}/img/user.jpg"
                                                                                                        alt="Adminage"
                                                                                                        class="img-fluid w-100" />
                                                                                                    <div
                                                                                                        class="messages__avatar-notification messages__avatar-notification--offline">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="messages__content messages__content--unseen">
                                                                                                    <div
                                                                                                        class="messages__title">
                                                                                                        <span
                                                                                                            class="messages__author text-capitalize">
                                                                                                            metal
                                                                                                            slug
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__time text-capitalize">
                                                                                                            8:08
                                                                                                            PM
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="messages__content-body">
                                                                                                        <span
                                                                                                            class="messages__preview">
                                                                                                            Hi,
                                                                                                            I'm
                                                                                                            a
                                                                                                            gamer,
                                                                                                            are
                                                                                                            u
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="messages__status messages__status--seen"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="messages__footer text-center">
                                                                                <a href="#"
                                                                                    class="t-link messages__view-all text-capitalize t-text-light">
                                                                                    view all
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="primary-nav-list__item border-bottom-0 d-none d-lg-block">
                                                                <div class="dropdown">
                                                                    <a href="#" aria-expanded="false"
                                                                        data-toggle="dropdown"
                                                                        class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                                                        <div class="rtl-flag">
                                                                            <img src="{{ asset('assets') }}/img/flag-1.png"
                                                                                alt="max"
                                                                                class="img-fluid w-100" />
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="t-list mx-author-menu">
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize sm-text">
                                                                                    <div
                                                                                        class="rtl-flag d-inline-block t-mr-8">
                                                                                        <img src="{{ asset('assets') }}/img/flag-2.png"
                                                                                            alt="max"
                                                                                            class="img-fluid w-100" />
                                                                                    </div>
                                                                                    french
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize sm-text">
                                                                                    <div
                                                                                        class="rtl-flag d-inline-block t-mr-8">
                                                                                        <img src="{{ asset('assets') }}/img/flag-3.png"
                                                                                            alt="max"
                                                                                            class="img-fluid w-100" />
                                                                                    </div>
                                                                                    USA
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize sm-text">
                                                                                    <div
                                                                                        class="rtl-flag d-inline-block t-mr-8">
                                                                                        <img src="{{ asset('assets') }}/img/flag-4.png"
                                                                                            alt="max"
                                                                                            class="img-fluid w-100" />
                                                                                    </div>
                                                                                    UK
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="primary-nav-list__item border-bottom-0">
                                                                <div class="dropdown">
                                                                    <a href="#" aria-expanded="false"
                                                                        data-toggle="dropdown"
                                                                        class="t-link w-100 primary-nav-list__link primary-nav-list__link-has-menu text-capitalize">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="mx-user mx-user--sm">
                                                                                <img src="{{ asset('assets') }}/img/user.jpg"
                                                                                    alt="max"
                                                                                    class="img-fluid w-100" />
                                                                            </span>
                                                                            <span
                                                                                class="d-none d-lg-inline-block t-ml-8">
                                                                                {{ auth()->user()->name ?? null }}
                                                                                <span
                                                                                    class="t-ml-5 d-inline-block xsm-text"
                                                                                    data-feather="chevron-down"></span>
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="t-list mx-author-menu">
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize sm-text">
                                                                                    <span
                                                                                        class="text-capitalize fw-bold d-block t-pt-5">
                                                                                        {{ auth()->user()->name }}
                                                                                    </span>
                                                                                    <span
                                                                                        class="text-capitalize xsm-text d-block mt-1">
                                                                                        admin
                                                                                    </span>
                                                                                </a>
                                                                                <hr class="mx-hr bg-light m-0">
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="{{ route('admin.myprofile') }}"
                                                                                    class="mx-author-menu__link text-capitalize">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                                                            <i
                                                                                                class='bx bx-user-circle'></i>
                                                                                        </span>
                                                                                        <span
                                                                                            class="d-inline-block t-line-1 sm-text">
                                                                                            profile
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                                                            <i
                                                                                                class='bx bx-wallet'></i>
                                                                                        </span>
                                                                                        <span
                                                                                            class="d-inline-block t-line-1 sm-text">
                                                                                            my wallet
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                                                            <i class='bx bx-cog'></i>
                                                                                        </span>
                                                                                        <span
                                                                                            class="d-inline-block t-line-1 sm-text">
                                                                                            settings
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="#"
                                                                                    class="mx-author-menu__link text-capitalize">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                                                            <i
                                                                                                class='bx bx-help-circle'></i>
                                                                                        </span>
                                                                                        <span
                                                                                            class="d-inline-block t-line-1 sm-text">
                                                                                            help
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mx-author-menu__list">
                                                                                <a href="logout"
                                                                                    class="mx-author-menu__link text-capitalize">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="xxlg-text t-mr-8 d-inline-block t-line-1">
                                                                                            <i
                                                                                                class='bx bx-log-out-circle'></i>
                                                                                        </span>

                                                                                        <form
                                                                                            action="{{ route('admin.logout') }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            <button
                                                                                                class="btn text-white"
                                                                                                type="submit"><span
                                                                                                    class="d-inline-block t-line-1 sm-text">logout</span></button>
                                                                                        </form>

                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination t-bg-16">
                                        <div class="container-fluid px-0">
                                            <div class="row g-0">
                                                <div class="col-12">
                                                    <ul class="pagination-bar t-list">
                                                        <li class="pagination-bar__list">
                                                            <a href="#"
                                                                class="t-link pagination-bar__link text-capitalize">
                                                                @yield('page-title')
                                                            </a>
                                                        </li>
                                                        <li class="pagination-bar__list">
                                                            <a href="#"
                                                                class="t-link pagination-bar__link text-capitalize">
                                                                home
                                                            </a>
                                                        </li>
                                                        <li class="pagination-bar__list">
                                                            <a href="#"
                                                                class="t-link pagination-bar__link text-capitalize">
                                                                @yield('page-title')
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>

                                <div class="mx-body__content" data-simplebar>

                                    {{-- main content --}}
                                    @yield('content')

                                    <footer class="t-mb-30">
                                        <div class="container-fluid px-3">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div
                                                        class="t-pt-15 t-pb-15 cards t-bg-white t-shadow text-center sm-text">
                                                        <span class="t-text-dark">&copy;</span> <a href="#"
                                                            class="t-link t-link--alpha text-capitalize">Adminage</a>
                                                        <span class="t-text-dark text-capitalize">all right reserved
                                                            2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Wrapper End -->

    <!-- jquery -->
    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>

    <!-- Date and Time  -->
    <script src="{{ asset('assets') }}/js/moment.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider  -->
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <!-- simplebar -->
    <script src="{{ asset('assets') }}/js/simplebar.js"></script>
    <!-- Prism JS  -->
    <script src="{{ asset('assets') }}/js/prism.js"></script>
    <!-- Feather Icon  -->
    <script src="{{ asset('assets') }}/js/feather.js"></script>
    <!-- Nice Select  -->
    <script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
    <!-- Dropzone  -->
    <script src="{{ asset('assets') }}/js/dropzone.js"></script>
    <!-- ION Range Slider  -->
    <script src="{{ asset('assets') }}/js/ion.rangeSlider.js"></script>
    <!-- Touchspin  -->
    <script src="{{ asset('assets') }}/js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Rating Bar -->
    <script src="{{ asset('assets') }}/js/jquery.barrating.min.js"></script>
    <!-- Calendar  -->
    <script src="{{ asset('assets') }}/js/fullcalendar.min.js"></script>
    <!-- Apexchart  -->
    <script src="{{ asset('assets') }}/js/apexcharts.js"></script>
    <script src="{{ asset('assets') }}/js/chart-dash-1.js"></script>
    <!-- Main script -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    {{-- custom js --}}
    <script src="{{ asset('assets') }}/js/custom.js"></script>
</body>

</html>
