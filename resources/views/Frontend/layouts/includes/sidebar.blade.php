<div class="sidenav canvas-sidebar bg-white">
    <div class="canvas-overlay">
    </div>
    <div class="pt-5 pb-7 card border-0 h-100">
        <div class="d-flex align-items-center card-header border-0 py-0 pl-8 pr-7 mb-9 bg-transparent">
            <a href="{{ route("index") }}" class="d-block w-52px">
                <img src="{{ url('/') }}/storage/{{ setting()->header_logo }}" alt="{{ setting()->name }}">
            </a>
            <span class="canvas-close d-inline-block text-right fs-24 ml-auto lh-1 text-primary"><i
                    class="fal fa-times"></i></span>
        </div>
        <div class="overflow-y-auto pb-6 pl-8 pr-7 card-body pt-0">
            <ul class="navbar-nav main-menu px-0">
                <li class="nav-item">
                    <a class="nav-link p-0" href="{{ route('index') }}">Ana səhifə</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="{{ route('about') }}">Şirkət Haqqında</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="{{ route('contact') }}">Bizimlə Əlaqə</a>
                </li>
            </ul>
        </div>

        <div class="card-footer bg-transparent border-0 mt-auto pl-8 pr-7 pb-0 pt-4">
            <ul class="list-inline d-flex align-items-center mb-3">
                <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-pinterest-p"></i></a></li>
            </ul>
            <p class="mb-0 text-gray">
                Developed by : <a href="https://burncode.org" target="_blank">Burncode LLC</a>
            </p>
        </div>
    </div>
</div>
