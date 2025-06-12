@extends('Frontend.layouts.app')

@section('title', setting()->name)

@section('content')
    <main id="content">
        <br/><br/>
        <section class="pt-10 pb-11 pb-lg-14" data-animated-id="2">
            <div class="container">
                <div class="row overflow-hidden">
                    <div class="col-md-3 mb-10 mb-md-0 primary-sidebar sidebar-sticky" id="sidebar">
                        <div class="primary-sidebar-inner" style="position: static; left: auto; width: 270px;">
                            <div class="card border-0 mb-7">
                                <div class="card-header bg-transparent border-0 p-0">
                                    <h3 class="card-title fs-20 mb-0">
                                        Kateqoriyalar
                                    </h3>
                                </div>
                                <div class="card-body px-0 pt-4 pb-0">
                                    <ul class="list-unstyled mb-0">
                                        @forelse($decorCategories as $cat)
                                            <li class="mb-1">
                                                <a href="{{ route("singleDecorCategory", ['id' => $cat->id]) }}" class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">{{ $cat->name }}</a>
                                            </li>
                                        @empty
                                            No Data !
                                        @endforelse
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="row">
                            @forelse($decors as $decor)
                                <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
                                    <div class="card border-0 hover-change-content product">
                                        <div class="card-img-top position-relative">
                                            <div style="background-image: url('{{ url("/") }}/storage/{{ $decor->image }}')" class="card-img ratio bg-img-cover-center ratio-1-1"></div>
                                        </div>
                                        <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                                            <div class="mr-auto">
                                                <a href="{{ route("singleDecor", ['id' => $decor->id]) }}" class="font-weight-bold mt-1 d-block">{{ $decor->name }}</a>
                                            </div>
                                            <p class="text-primary mb-0 font-weight-500">{{ $decor->price }} azn</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Data !
                            @endforelse
                        </div>

                        {{ $decors->links('vendor.pagination.custom') }}

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
