<div class="left-side-menu left-side-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">{{ Auth::user()->name }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">

        <li class="side-nav-title side-nav-item">Navigation</li>

        <li class="side-nav-item">
            <a href="{{ route('dashboard') }}" class="side-nav-link">
                <i class="mdi mdi-home"></i>
                <span> Dashboard </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ route('students.index') }}" class="side-nav-link">
                <i class="mdi mdi-account-multiple"></i>
                <span> Students </span>
            </a>
        </li>

        {{-- <li class="side-nav-title side-nav-item">Catalogue</li> --}}

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Courses Catalogue </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ route('courses.index') }}">All Courses</a>
                </li>
                <li>
                    <a href="{{ route('years.index') }}">Years</a>
                </li>
                <li>
                    <a href="{{ route('course-semesters.index') }}">Semester</a>
                </li>
                <li>
                    <a href="{{ route('units.index') }}">Units</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="{{ route('academic-years.index') }}" class="side-nav-link">
                <i class="mdi mdi-folder"></i>
                <span>Academic Years </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ route('academic-semesters.index') }}" class="side-nav-link">
                <i class="mdi mdi-folder"></i>
                <span>Academic Semesters </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ route('counties.index') }}" class="side-nav-link">
                <i class="mdi mdi-folder"></i>
                <span>Counties</span>
            </a>
        </li>

        {{-- <li class="side-nav-item">
            <a href="apps-chat.html" class="side-nav-link">
                <i class="uil-comments-alt"></i>
                <span> Chat </span>
            </a>
        </li> --}}

        {{-- <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Ecommerce </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="apps-ecommerce-products.html">Products</a>
                </li>
                <li>
                    <a href="apps-ecommerce-products-details.html">Products Details</a>
                </li>
                <li>
                    <a href="apps-ecommerce-orders.html">Orders</a>
                </li>
            </ul>
        </li> --}}
    </ul>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>