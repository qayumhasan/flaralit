@php
use App\Models\Guide;
@endphp
@extends('backend.layouts.master')
@push('style')
<style>
    label {
        width: 100%;
        font-size: 1rem;
    }

    .card-input-element+.card {
        height: auto;
        color: var(--primary);
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 2px solid transparent;
        border-radius: 4px;
    }

    .card-input-element+.card:hover {
        cursor: pointer;
    }

    .card-input-element:checked+.card {
        border: 2px solid var(--primary);
        -webkit-transition: border .3s;
        -o-transition: border .3s;
        transition: border .3s;
    }

    .card-input-element:checked+.card::after {
        content: '\e5ca';
        color: #AFB8EA;
        font-family: 'Material Icons';
        font-size: 24px;
        -webkit-animation-name: fadeInCheckbox;
        animation-name: fadeInCheckbox;
        -webkit-animation-duration: .5s;
        animation-duration: .5s;
        -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hiw_section_title_style:hover {
        text-decoration: none;
    }

    @-webkit-keyframes fadeInCheckbox {
        from {
            opacity: 0;
            -webkit-transform: rotateZ(-20deg);
        }

        to {
            opacity: 1;
            -webkit-transform: rotateZ(0deg);
        }
    }

    @keyframes fadeInCheckbox {
        from {
            opacity: 0;
            transform: rotateZ(-20deg);
        }

        to {
            opacity: 1;
            transform: rotateZ(0deg);
        }
    }

    .feel-left {
        display: flex;
        width: 100%;
        height: 130px;
        padding: 0px;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        background-color: rgba(255, 138, 0, 0.05);
    }

    .fomo-lft {
        display: flex;
        width: 80px;
        min-width: 80px;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .card-body {
        padding: 0px !important;
    }

    .row {
        padding: 0px !important;
    }

    .custom-jumbotron {
        padding: 2rem 2rem;
        padding-right: 3.2rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem;
    }

    .card-input-element:checked+.card::after {
        content: '';
    }

    .copy_row {
        display: grid;
        grid-template-columns: 50% 50%;
        gap: 20px;
    }

    .custom-jumbotron .col-md-5 {
        padding: 0px;
    }

    .feel-left .svg-icon {
        height: 60px;
    }
</style>
@endpush
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Guideline -Guide</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="#" class="btn btn-md btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="container">

                    <div class="custom-jumbotron mt-4">
                        <div class="row copy_row">

                            @foreach (Guide::SECTION_LIST as $key => $section)

                            <a href="{{ route('admin.guideline.guide.create', $key) }}"
                                class="hiw_section_title_style">
                                <div class="banner_section">


                                    <div
                                        class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        <div class="col-md-5">
                                            <div class="feel-left">
                                                <svg class="svg-icon" viewBox="0 0 20 20">
                                                    <path
                                                        d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <h3>{{ $section }}</h3>
                                        </div>
                                    </div>

                                </div>

                            </a>
                            @endforeach

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection