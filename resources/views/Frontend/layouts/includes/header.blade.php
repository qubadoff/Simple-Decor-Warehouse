<header class="main-header navbar-light header-sticky header-sticky-smart position-absolute fixed-top">
    <div class="sticky-area">
        <div class="container container-xxl">
            <div class="d-none d-xl-block">
                <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 row no-gutters">
                    <div class="col-xl-3"><a class="navbar-brand mr-0" href="{{ route("index") }}"><img src="{{ url("/") }}/storage/{{ setting()->header_logo }}" alt="{{ setting()->name }}"></a></div>
                    <div class="col-xl-6 d-flex justify-content-center position-static">
                        <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                            <li aria-haspopup="true" aria-expanded="false"
                                class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link" href="{{ route("index") }}"> Ana səhifə </a>
                            </li>
                            <li aria-haspopup="true" aria-expanded="false"
                                class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link" href="{{ route("about") }}"> Şirkət haqqında </a>
                            </li>
                            <li aria-haspopup="true" aria-expanded="false"
                                class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link" href="{{ route("contact") }}"> Bizimlə əlaqə </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="d-block d-xl-none">
                <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 w-100 align-items-center">
                    <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button"
                            data-canvas="true"
                            data-canvas-options='{"width":"250px","container":".sidenav"}'>
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                    <a class="navbar-brand d-inline-block mx-auto" href="{{ route("index") }}">
                        <img src="{{ url("/") }}/storage/{{ setting()->header_logo }}" alt="{{ setting()->name }}">
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
