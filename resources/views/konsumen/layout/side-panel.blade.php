<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('images/logo/SHOPAN.png') }}"
                    alt="logo"><span class="logo-text fs-4">SHOPAN</span></a>

        </div><!--//app-branding-->

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link {{ $webtitle === 'Dashboard' ? 'active' : '' }}" href="index.html">
                        <span class="nav-icon">
                            <i class="ti ti-home fs-4"></i>
                        </span>
                        <span class="nav-link-text">Home</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->




            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
        <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
                <ul class="app-menu footer-menu list-unstyled">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="settings.html">
                            <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                    <path fill-rule="evenodd"
                                        d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Settings</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link"
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
                            <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Download</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link"
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
                            <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                    <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">License</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//footer-menu-->
            </nav>
        </div><!--//app-sidepanel-footer-->

    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
