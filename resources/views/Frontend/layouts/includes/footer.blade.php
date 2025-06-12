<footer class="pt-13 pb-4 footer bg-color-2">
    <div class="container container-xxl">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-6 mb-lg-0">
                <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">Səhifələr</h3>
                <ul class="list-unstyled mb-0">
                    <li class="py-0"><a href="{{ route("index") }}" class="text-gray hover-primary lh-2 font-weight-500">Ana səhifə</a> </li>
                    <li class="py-0"><a href="{{ route("about") }}" class="text-gray hover-primary lh-2 font-weight-500">Haqqımızda</a> </li>
                    <li class="py-0"><a href="{{ route("contact") }}" class="text-gray hover-primary lh-2 font-weight-500">Bizimlə əlaqə</a> </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-6 mb-lg-0">
                <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">Bizi izləyin</h3>
                <ul class="list-unstyled mb-0">
                    <li class="py-0"><a href="{{ setting()->tiktok }}" target="_blank" class="text-gray hover-primary lh-2 font-weight-500">Tiktok</a> </li>
                    <li class="py-0"><a href="{{ setting()->instagram }}" target="_blank" class="text-gray hover-primary lh-2 font-weight-500">Instagram</a> </li>
                    <li class="py-0"><a href="{{ setting()->facebook }}" target="_blank" class="text-gray hover-primary lh-2 font-weight-500">Facebook</a> </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-6 mb-lg-0">
                <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">Sürətli əlaqə</h3>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            \Illuminate\Support\Facades\Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if($errors->any())
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endif
                <form method="post" action="{{ route("fastContact") }}">
                    @csrf
                    @method("POST")
                    <div class="input-group position-relative">
                        <input type="text" name="phone" class="form-control border-top-0 border-left-0 border-right-0 px-0 border-2x bg-transparent" placeholder="Nömrənizi daxil edin">
                        <div class="input-group-append fs-14 position-absolute pos-fixed-right-center z-index-2">
                            <button type="submit" name="submit" class="bg-transparent border-0 outline-none">
                                <i class="far fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-2 mt-md-7 row align-items-center">
            <p class="col-md-auto mb-4 mb-md-0 text-gray lh-1 fs-14 font-weight-500">
                Developed by : <a href="https://burncode.org" target="_blank">Burncode LLC</a>
            </p>
            <ul class="list-inline mb-0 col-md-6 ml-auto text-md-right">
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_01.png" alt="Amex"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_02.png" alt="G-Pay"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_03.png" alt="Master Card"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_04.png" alt="Paypal"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_05.png" alt="D-Pay"></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><img src="{{ asset("") }}assets/images/card_06.png" alt="V-Card"></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
