@php
use App\Models\Order;
@endphp
@extends('backend.layouts.master')
@push('style')
    <link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/dragula/dragula.min.css') }}">
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Umer</h3>
                            <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="mdi mdi-calendar"></i> Today {{date('d M, Y')}}
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                        <a class="dropdown-item" href="#">January - March</a>
                                        <a class="dropdown-item" href="#">March - June</a>
                                        <a class="dropdown-item" href="#">June - August</a>
                                        <a class="dropdown-item" href="#">August - November</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Simple Dragula</h4>
                            <p class="card-description">Drag and drop between Team A and Team B</p>
                            <div class="row">
                                <div class="col-md-6 h-100">
                                    <div class="bg-primary p-4 rounded">
                                        <h6 class="card-title text-white">Team A</h6>
                                        <div id="profile-list-left" class="py-2">
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Rebecca young</h6>
                                                            <p class="mb-0 text-muted">
                                                                Software engineer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Jacob march</h6>
                                                            <p class="mb-0 text-muted">
                                                                Designer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Catherine</h6>
                                                            <p class="mb-0 text-muted">
                                                                Tester
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Thomas Cook</h6>
                                                            <p class="mb-0 text-muted">
                                                                Developer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 h-100">
                                    <div class="bg-primary p-4 rounded">
                                        <h6 class="card-title text-white">Team B</h6>
                                        <div id="profile-list-right" class="py-2">
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Keto Philip</h6>
                                                            <p class="mb-0 text-muted">
                                                                Business Analyst
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Jacob Stephen</h6>
                                                            <p class="mb-0 text-muted">
                                                                Tester
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">March Creg</h6>
                                                            <p class="mb-0 text-muted">
                                                                Developer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded mb-2">
                                                <div class="card-body p-3">
                                                    <div class="media">
                                                        <img src="{{ static_asset(get_user_image()) }}" alt="image" class="img-sm me-3 rounded-circle">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Peter Beckham</h6>
                                                            <p class="mb-0 text-muted">
                                                                Designer
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ static_asset('assets/backend/vendors/dragula/dragula.min.js') }}"></script>
    <script src="{{ static_asset('assets/backend/js/dragula.js') }}"></script>
@endpush