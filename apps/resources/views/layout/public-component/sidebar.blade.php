<div class="nk-sidebar nk-sidebar-fixed {{ Session::get('theme.sidebar_style') }}" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img logo-img-lg" src="{{ url('images/logo.png') }}" srcset="{{ url('images/logo2x.png') }} 2x" alt="logo">
                <img class="logo-dark logo-img logo-img-lg" src="{{ url('images/logo-dark.png') }}" srcset="{{ url('images/logo-dark2x.png') }} 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">DASHBOARDS</h6>
                    </li>

                    <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('dashboard') }}">
                        <a href="{{ url('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-growth-fill"></em>
                            </span>
                            <span class="nk-menu-text letter-space-1 ff-mono">
                                Dashboard
                            </span>
                        </a>
                    </div>


                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">MASTER DATA</h6>
                    </li>

                    @can('feature_category')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('category') }}">
                            <a href="{{ url('category') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-archived-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    Category
                                </span>
                            </a>
                        </div>
                    @endcan

                    @can('feature_course')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('course') }}">
                            <a href="{{ url('course') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-book-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    Course
                                </span>
                            </a>
                        </div>
                    @endcan


                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">TRANSACTION</h6>
                    </li>

                    @can('feature_enrollment')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('enrollment') }}">
                            <a href="{{ url('enrollment') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-todo-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    Enrollment
                                </span>
                            </a>
                        </div>
                    @endcan

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">PREVILLEGE</h6>
                    </li>

                    @can('feature_user')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('user') }}">
                            <a href="{{ url('user') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-user-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    User
                                </span>
                            </a>
                        </div>
                    @endcan

                    @can('feature_role')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('role') }}">
                            <a href="{{ url('role') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-shield-check-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    Role
                                </span>
                            </a>
                        </div>
                    @endcan

                    @can('feature_permission')
                        <div class="nk-menu-item list-menu {{ App\Helpers\MenuHelper::checkActive('permission') }}">
                            <a href="{{ url('permission') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-lock-alt-fill"></em>
                                </span>
                                <span class="nk-menu-text letter-space-1 ff-mono">
                                    Permission
                                </span>
                            </a>
                        </div>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
</div>
