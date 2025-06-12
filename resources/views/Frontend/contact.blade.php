@extends('Frontend.layouts.app')

@section('title','Bizimlə əlaqə')

@section('content')
    <main id="content">
        <br/><br/>
        <section class="pt-10 pb-10" data-animated-id="2">
            <div class="container">
                <h2 class="fs-sm-40 mb-10 text-center">Bizimlə Əlaqə</h2>
                <div class="ratio ratio-16x9 mb-5">
                    {!! setting()->google_map !!}
                </div>
            </div>
        </section>
        <div class="pb-14" data-animated-id="3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 mb-8 mb-md-0">
                        <h2 class="fs-24 mb-2">
                            Bizimlə əlaqə saxlamaq üçün müraciət edin
                        </h2>
                        <p class="mb-7">Sifariş, əməkdaşlıq və s. mövzularda məlumat üçün aşağıdakı məlumatları dolduraraq bizə məlumat verin. Ən qısa zamanda sizə geri dönüş ediləcək.</p>
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
                        <form method="post" action="{{ route("sendMessage") }}">
                            @csrf
                            @method("POST")
                            <div class="row mb-6">
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" placeholder="Ad və Soyadınız*" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Telefon nömrəniz*" required="">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <textarea class="form-control" name="message" rows="6">Mesaj mətni</textarea>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary text-uppercase letter-spacing-05">
                                Göndər
                            </button>
                        </form>
                    </div>
                    <div class="col-md-4 pl-xl-13 pl-md-6">
                        <p class="font-weight-bold text-primary mb-3">Əlaqə vasitələri</p>
                        <address class="mb-6">
                            Telefon : <a href="tel:{{ setting()->phone }}"> {{ setting()->phone }}</a><br/>
                            Email : <a href="mailto:{{ setting()->email }}"> {{ setting()->email }}</a>
                        </address>
                        <p class="font-weight-bold text-primary mb-2">Ünvan</p>
                        <p class="mb-0">{{ setting()->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
