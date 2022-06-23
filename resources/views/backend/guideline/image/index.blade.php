@php
    use App\Models\ImageGuideline;
@endphp
@extends('backend.layouts.master')
@push('style')
    <style>
        label {
            width: 100%;
            font-size: 1rem;
        }

        .card-input-element + .card {
            height: auto;
            color: var(--primary);
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 2px solid transparent;
            border-radius: 4px;
        }

        .card-input-element + .card:hover {
            cursor: pointer;
        }

        .card-input-element:checked + .card {
            border: 2px solid var(--primary);
            -webkit-transition: border .3s;
            -o-transition: border .3s;
            transition: border .3s;
        }

        .card-input-element:checked + .card::after {
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

        .card-input-element:checked + .card::after {
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
            height: 100px;
        }
    </style>
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Guideline - Copy guidelines</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ session('link') }}" class="btn btn-md btn-secondary">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="container">
                        <form action="{{ route('admin.guideline.image.create') }}">
                            @csrf
                            <div class="custom-jumbotron mt-4">
                                <div class="row copy_row">
                                    <div class="banner_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ ImageGuideline::SECTION_BANNER }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M18.555,15.354V4.592c0-0.248-0.202-0.451-0.45-0.451H1.888c-0.248,0-0.451,0.203-0.451,0.451v10.808c0,0.559,0.751,0.451,0.451,0.451h16.217h0.005C18.793,15.851,18.478,14.814,18.555,15.354 M2.8,14.949l4.944-6.464l4.144,5.419c0.003,0.003,0.003,0.003,0.003,0.005l0.797,1.04H2.8z M13.822,14.949l-1.006-1.317l1.689-2.218l2.688,3.535H13.822z M17.654,14.064l-2.791-3.666c-0.181-0.237-0.535-0.237-0.716,0l-1.899,2.493l-4.146-5.42c-0.18-0.237-0.536-0.237-0.716,0l-5.047,6.598V5.042h15.316V14.064z M12.474,6.393c-0.869,0-1.577,0.707-1.577,1.576s0.708,1.576,1.577,1.576s1.577-0.707,1.577-1.576S13.343,6.393,12.474,6.393 M12.474,8.645c-0.371,0-0.676-0.304-0.676-0.676s0.305-0.676,0.676-0.676c0.372,0,0.676,0.304,0.676,0.676S12.846,8.645,12.474,8.645"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Banner Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="requirements_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ ImageGuideline::SECTION_REQUIREMENT }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M10,1.445c-4.726,0-8.555,3.829-8.555,8.555c0,4.725,3.829,8.555,8.555,8.555c4.725,0,8.555-3.83,8.555-8.555C18.555,5.274,14.725,1.445,10,1.445 M10,17.654c-4.221,0-7.654-3.434-7.654-7.654c0-4.221,3.433-7.654,7.654-7.654c4.222,0,7.654,3.433,7.654,7.654C17.654,14.221,14.222,17.654,10,17.654 M14.39,10c0,0.248-0.203,0.45-0.45,0.45H6.06c-0.248,0-0.45-0.203-0.45-0.45s0.203-0.45,0.45-0.45h7.879C14.187,9.55,14.39,9.752,14.39,10 M14.39,12.702c0,0.247-0.203,0.449-0.45,0.449H6.06c-0.248,0-0.45-0.202-0.45-0.449c0-0.248,0.203-0.451,0.45-0.451h7.879C14.187,12.251,14.39,12.454,14.39,12.702 M14.39,7.298c0,0.248-0.203,0.45-0.45,0.45H6.06c-0.248,0-0.45-0.203-0.45-0.45s0.203-0.45,0.45-0.45h7.879C14.187,6.848,14.39,7.051,14.39,7.298"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Requirements Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="row copy_row">
                                    <div class="advertisement_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ ImageGuideline::SECTION_ADVERTISEMENT }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M15.396,2.292H4.604c-0.212,0-0.385,0.174-0.385,0.386v14.646c0,0.212,0.173,0.385,0.385,0.385h10.792c0.211,0,0.385-0.173,0.385-0.385V2.677C15.781,2.465,15.607,2.292,15.396,2.292 M15.01,16.938H4.99v-2.698h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.519,1.156-1.156s-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.321-1.089,0.771H4.99v-3.083h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.518,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V6.531h1.609C6.755,6.98,7.185,7.302,7.688,7.302c0.638,0,1.156-0.519,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V3.062h10.02V16.938z M7.302,13.854c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386s-0.173,0.385-0.385,0.385S7.302,14.066,7.302,13.854 M7.302,10c0-0.212,0.173-0.385,0.385-0.385S8.073,9.788,8.073,10s-0.173,0.385-0.385,0.385S7.302,10.212,7.302,10 M7.302,6.146c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386S7.899,6.531,7.688,6.531S7.302,6.358,7.302,6.146"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Advertisement Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="dos_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ ImageGuideline::SECTION_INSTRUCTION }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Instruction Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

