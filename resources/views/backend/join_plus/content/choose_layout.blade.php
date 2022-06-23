@php
use App\Models\PlusContent;
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
        padding: 50px;
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
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem;
    }

    .card-input-element:checked+.card::after {
        content: '';
    }

    .custom-jumbotron .col-md-5 {
        padding: 0px;
    }
</style>
@endpush
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Join Plus - Content Section</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.plus.content_section.index') }}" class="btn btn-md btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="custom-jumbotron">
                                <h3 class="mb-3">Choose your Layout:</h3>
                                <form action="{{ route('admin.plus.content_section.create') }}" method="POST">
                                    @csrf
                                    <label>
                                        <input type="radio" name="layout" class="card-input-element d-none" id="demo1"
                                            value="{{ PlusContent::LAYOUT_ONE_IN_ONE }}">
                                        <div
                                            class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                            <div class="col-md-5">
                                                <div class="feel-left">
                                                    <img src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/618073e12b12ad77dfe72dce_Earning.svg"
                                                        data-w-id="6c69a8fb-9b03-4174-8286-2d5f01a67f6f" alt="Image">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <h3>One In One Layout</h3>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="mt-3">
                                        <input type="radio" name="layout" class="card-input-element d-none"
                                            value="{{ PlusContent::LAYOUT_THREE_IN_ONE }}">
                                        <div class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center"
                                            style="height: 180px!important;">
                                            <div class="col-md-4 d-flex">
                                                <div class="fomo-lft">
                                                    <img src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/6180772b0903450142c66e14_Vacation.svg"
                                                        alt="Image">
                                                </div>
                                                <h4>Three In One Layout</h4>
                                            </div>
                                            <div class="col-md-4 d-flex">
                                                <div class="fomo-lft">
                                                    <img src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/6180772b0903450142c66e14_Vacation.svg"
                                                        alt="Image">
                                                </div>
                                                <h4>Three In One Layout</h4>
                                            </div>
                                            <div class="col-md-4 d-flex">
                                                <div class="fomo-lft">
                                                    <img src="https://assets.website-files.com/615b54e9eebdbb6f52457d5b/6180772b0903450142c66e14_Vacation.svg"
                                                        alt="Image">
                                                </div>
                                                <h4>Three In One Layout</h4>
                                            </div>
                                        </div>
                                    </label>
                                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
