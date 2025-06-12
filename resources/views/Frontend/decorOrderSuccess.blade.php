@extends('Frontend.layouts.app')

@section('title', 'Uğurlu sifariş !')

@section('content')
    <main id="content">
        <section class="pt-11 pt-lg-15" data-animated-id="2">
            <div class="container">
                <div class="mxw-924 mx-auto mb-7">
                    <h2 class="fs-30 fs-md-40 lh-15 text-center mb-0">Sifariş Statusu</h2>
                </div>
                <div class="mxw-830 mx-auto mb-8">
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
                </div>
            </div>
        </section>
    </main>
@endsection
