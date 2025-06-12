@extends('Frontend.layouts.app')

@section('title', 'Şirkət haqqında')

@section('content')
    <main id="content">
        <section class="pt-11 pt-lg-15" data-animated-id="2">
            <div class="container">
                <div class="mxw-924 mx-auto mb-7">
                    <h2 class="fs-30 fs-md-40 lh-15 text-center mb-0">Şirkət haqqında</h2>
                </div>
                <div class="mxw-830 mx-auto mb-8">
                    <p class="fs-20 text-primary font-weight-500 mb-5">
                        {!! setting()->about_us_text !!}
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection
