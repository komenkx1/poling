<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 80}">

    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">

            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Musma" width="160" height="70" src="img/logo-musma.png">

                            </a>
                        </div>
                    </div>
                </div>

                <div class="header-column justify-content-end">
                    <div class="header-row">

                        <div
                            class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle d-lg-none border-all" href="#">
                                                {{ Auth::user()->nim }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="/">
                                                        Report
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/">
                                                        Akun
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        Logout
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a data-hash class="dropdown-item active" href="#home">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68"
                                                href="#tentang">tentang</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68"
                                                href="#Polling">Poll</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" data-hash data-hash-offset="68"
                                                href="#contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>

                        </div>
                    </div>

                </div>

            </div>

            <nav class="header-nav-top p-1 d-none d-lg-inline-flex">
                <ul class="nav nav-pills">

                    <li class="nav-item dropdown nav-item-left-border">
                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->nim }}
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" style="background-color:#212529!important;">
                            <a class="dropdown-item" href="#">Report</a>
                            <a class="dropdown-item" href="#">Akun</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>


        </div>

    </div>

</header>