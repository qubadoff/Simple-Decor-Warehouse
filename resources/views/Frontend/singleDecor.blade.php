@extends('Frontend.layouts.app')

@section('title', $decor->name)

@section('content')
    <br/><br/>
    <main id="content">
        <section class="pt-10 pb-lg-15 pb-11" data-animated-id="2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-7 mb-6 mb-md-0 pr-md-6 pr-lg-9">
                        <div class="galleries position-relative">
                            <div class="card p-0 hover-change-image rounded-0 border-0">
                                <a href="{{ url('/') }}/storage/{{ $decor->image }}"
                                   class="card-img ratio ratio-1-1 bg-img-cover-center"
                                   data-gtf-mfp="true"
                                   data-gallery-id="01"
                                   style="background-image:url('{{ url('/') }}/storage/{{ $decor->image }}')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p class="text-muted fs-12 font-weight-500 letter-spacing-05 text-uppercase mb-3">
                            {{ $decor->category->name }}
                        </p>
                        <h2 class="fs-30 fs-lg-40 mb-2">{{ $decor->name }}</h2>
                        <p class="fs-20 text-primary mb-4">{{ $decor->price }} azn</p>
                        <p class="mb-5">{{ $decor->description }}</p>
                            <button type="button"
                                    class="btn btn-primary btn-block mb-4"
                                    data-bs-toggle="modal"
                                    data-bs-target="#orderModal"
                                    data-decor-name="{{ $decor->name }}">
                                Sifariş et
                            </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Order Modal -->
        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route("decorOrder") }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderModalLabel">Sifariş Formu</h5>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="decor_id" value="{{ $decor->id }}" id="modalDecorName">
                            <input type="hidden" name="price" value="{{ $decor->price }}" id="modalDecorName">

                            <div class="mb-3">
                                <label for="name" class="form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="text" class="form-control" name="phone" id="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Ünvan</label>
                                <input type="tel" class="form-control" name="location" id="location" required>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Tarix</label>
                                <input type="datetime-local" class="form-control" name="order_date" id="date" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Mesaj</label>
                                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bağla</button>
                            <button type="submit" name="submit" class="btn btn-primary">Göndər</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
