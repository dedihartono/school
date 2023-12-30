<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="active" href="index.html">{{ __('custom.navbar_home') }}</a></li>
        <li class="dropdown"><a href="#"><span>{{ __('custom.navbar_profile') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">{{ __('custom.navbar_history') }}</a></li>
                <li><a href="#">{{ __('custom.navbar_visi_mission') }}</a></li>
                <li><a href="#">{{ __('custom.navbar_organization') }}</a></li>
                <li><a href="#">{{ __('custom.navbar_teacher') }}</a></li>
            </ul>
        </li>
        <li><a href="courses.html">{{ __('custom.navbar_major') }}</a></li>
        <li><a href="events.html">{{ __('custom.navbar_events') }}</a></li>
        <li><a href="contact.html">{{ __('custom.navbar_contact') }}</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<a href="#" class="get-started-btn">{{ __('custom.navbar_ppdb_info') }}</a>
