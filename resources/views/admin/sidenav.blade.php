<!--SideNav / Display Only Large Screen  -->
            <div class="col-3 col-xxl-2 mx-sidenav d-none d-xl-block">
                <!-- Side Nav  -->
                <div class="mx-sidenav__content t-bg-primary">
                    <!-- Side Nav Brand  -->
                    <div class="mx-sidenav__brand">
                        <a href="index.html" class="mx-sidenav__logo t-link">
                            <img src="{{ asset('assets') }}/img/logo-w.png" alt="Adminage" class="img-fluid mx-sidenav__logo-is">
                        </a>
                        <a href="index.html" class="t-link mx-sidenav__logo-sm">
                            <img src="{{ asset('assets') }}/img/logo-w-sm.png" alt="Adminage" class="img-fluid mx-sidenav__logo-sm-is">
                        </a>
                    </div>
                    <!-- Side Nav Brand  End-->
                    <div class="mx-sidenav__menu-container">
                        <nav class="mx-sidenav__menu">
                            <ul class="t-list mx-sidenav__menu-is">
                                <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.dashboard') ? 'active-page' : ''}}">
                                    <a href="{{ route('admin.dashboard') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <span class='bx bx-category'></span>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            dashboard
                                        </span>
                                    </a>
                                </li>

                                <li class="mx-sidenav__menu-item mx-sidenav__has-sub {{ url()->current() == route('admin.users') || url()->current() == route('admin.users.create') ? 'active-page' : '' }}
">
                                    <a href="#" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <span class='bx bx-user-circle'></span>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            user
                                        </span>
                                    </a>
                                    <ul class="t-list mx-sidenav__sub mx-sidenav__sub--hide">
                                        <li class="mx-sidenav__sub-item">
                                            <a href="{{ route('admin.users') }}" class="mx-sidenav__sub-link ">
                                                <span class="mx-sidenav__sub-icon t-mr-15">
                                                    <i class='bx bxs-user-detail'></i>
                                                </span>
                                                <span class="mx-sidenav__sub-text text-capitalize">
                                                    user list
                                                </span>
                                            </a>
                                        </li>
                                        <li class="mx-sidenav__sub-item">
                                            <a href="{{ route('admin.users.create') }}" class="mx-sidenav__sub-link ">
                                                <span class="mx-sidenav__sub-icon t-mr-15">
                                                    <i class='bx bxs-user-plus'></i>
                                                </span>
                                                <span class="mx-sidenav__sub-text text-capitalize">
                                                    Create User
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.myprofile') ? 'active-page' : ''}}">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bxs-user-detail' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Profile
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.employees') ? 'active-page' : ''}}">
                                    <a href="{{ route('admin.employees') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                           <i class='bx bxs-user-account'></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Employees
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item {{ url()->current() == route('admin.leaves') ? 'active-page' :'' }}">
                                    <a href="{{ route('admin.leaves') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bx-log-in' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Leaves
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bx-recycle' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Shift Roster
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bx-list-check' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Attendance
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                           <i class='bx bx-calendar-x' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Holiday
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bxs-user-badge' ></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Designation
                                        </span>
                                    </a>
                                </li>
                                <li class="mx-sidenav__menu-item">
                                    <a href="{{ route('admin.myprofile') }}" class="mx-sidenav__menu-link">
                                        <span class="mx-sidenav__menu-icon t-mr-15">
                                            <i class='bx bx-grid-alt'></i>
                                        </span>
                                        <span class="mx-sidenav__menu-text text-capitalize">
                                            Department
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Side Nav End -->
            </div>
            <!--SideNav / Display Only Large Screen End -->
