<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('user.home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('user.profile')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('user.members')}}">
                <i class="bi bi-people"></i>
                <span>Members</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-heading">Operations</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav-blog" data-bs-toggle="collapse" href="#">
                <i class="bx bxl-blogger"></i><span>Blog</span><i class="bx bx-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav-blog" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('user.add')}}">
                        <i class="bi bi-plus-circle"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.listblog')}}">
                        <i class="bi bi-list"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-currency-dollar"></i><span>Offering</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav-gallery" data-bs-toggle="collapse" href="#">
                <i class="bx bx-slideshow"></i><span>Slides</span><i class="bx bx-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav-gallery" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('user.slide.add')}}">
                        <i class="bi bi-plus-circle"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-list"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav-announcements" data-bs-toggle="collapse" href="#">
                <i class="bx bx-message"></i><span>Announcements</span><i class="bx bx-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav-announcements" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-plus-circle"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-list"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav-events" data-bs-toggle="collapse" href="#">
                <i class="bx bx-calendar-event"></i><span>Events</span><i class="bx bx-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav-events" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-plus-circle"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-list"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav-shop" data-bs-toggle="collapse" href="#">
                <i class="bx bx-shopping-bag"></i><span>Shop</span><i class="bx bx-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav-shop" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-cart-plus"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-shop"></i><span>View Shop</span>
                    </a>
                </li>
            </ul>
        </li>



        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li>
        <!-- End Contact Page Nav -->

        <li class="nav-heading">Action</li>
        <li>
            <a class="nav-link collapsed" href="#" wire:click="logout">
                <i class="bx bx-lock"></i> Sign out
            </a>
        </li>
    </ul>

</aside>
