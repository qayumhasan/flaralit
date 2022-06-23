@php
    use App\Models\CopyGuideline;
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
                        <form action="{{ route('admin.guideline.copy.create') }}" method="GET">
                            @csrf
                            <div class="custom-jumbotron mt-4">
                                <div class="row copy_row">
                                    <div class="banner_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ CopyGuideline::SECTION_BANNER }}">
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
                                    <div class="get_started_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ CopyGuideline::SECTION_GET_STARTED }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M5.114,5.726c0.169,0.168,0.442,0.168,0.611,0c0.168-0.169,0.168-0.442,0-0.61L3.893,3.282c-0.168-0.168-0.442-0.168-0.61,0c-0.169,0.169-0.169,0.442,0,0.611L5.114,5.726z M3.955,10c0-0.239-0.193-0.432-0.432-0.432H0.932C0.693,9.568,0.5,9.761,0.5,10s0.193,0.432,0.432,0.432h2.591C3.761,10.432,3.955,10.239,3.955,10 M10,3.955c0.238,0,0.432-0.193,0.432-0.432v-2.59C10.432,0.693,10.238,0.5,10,0.5S9.568,0.693,9.568,0.932v2.59C9.568,3.762,9.762,3.955,10,3.955 M14.886,5.726l1.832-1.833c0.169-0.168,0.169-0.442,0-0.611c-0.169-0.168-0.442-0.168-0.61,0l-1.833,1.833c-0.169,0.168-0.169,0.441,0,0.61C14.443,5.894,14.717,5.894,14.886,5.726 M5.114,14.274l-1.832,1.833c-0.169,0.168-0.169,0.441,0,0.61c0.168,0.169,0.442,0.169,0.61,0l1.833-1.832c0.168-0.169,0.168-0.442,0-0.611C5.557,14.106,5.283,14.106,5.114,14.274 M19.068,9.568h-2.591c-0.238,0-0.433,0.193-0.433,0.432s0.194,0.432,0.433,0.432h2.591c0.238,0,0.432-0.193,0.432-0.432S19.307,9.568,19.068,9.568 M14.886,14.274c-0.169-0.168-0.442-0.168-0.611,0c-0.169,0.169-0.169,0.442,0,0.611l1.833,1.832c0.168,0.169,0.441,0.169,0.61,0s0.169-0.442,0-0.61L14.886,14.274z M10,4.818c-2.861,0-5.182,2.32-5.182,5.182c0,2.862,2.321,5.182,5.182,5.182s5.182-2.319,5.182-5.182C15.182,7.139,12.861,4.818,10,4.818M10,14.318c-2.385,0-4.318-1.934-4.318-4.318c0-2.385,1.933-4.318,4.318-4.318c2.386,0,4.318,1.933,4.318,4.318C14.318,12.385,12.386,14.318,10,14.318 M10,16.045c-0.238,0-0.432,0.193-0.432,0.433v2.591c0,0.238,0.194,0.432,0.432,0.432s0.432-0.193,0.432-0.432v-2.591C10.432,16.238,10.238,16.045,10,16.045"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Get Started Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="row copy_row">
                                    <div class="basic_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ CopyGuideline::SECTION_BASIC }}">
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
                                                    <h3>Basic Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="content_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ CopyGuideline::SECTION_CONTENT }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M10,1.529c-4.679,0-8.471,3.792-8.471,8.471c0,4.68,3.792,8.471,8.471,8.471c4.68,0,8.471-3.791,8.471-8.471C18.471,5.321,14.68,1.529,10,1.529 M10,17.579c-4.18,0-7.579-3.399-7.579-7.579S5.82,2.421,10,2.421S17.579,5.82,17.579,10S14.18,17.579,10,17.579 M14.348,10c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.446,0.446-0.446h5C14.146,9.554,14.348,9.755,14.348,10 M14.348,12.675c0,0.245-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.201-0.446-0.446s0.2-0.445,0.446-0.445h5C14.146,12.229,14.348,12.43,14.348,12.675 M7.394,10c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.446,0.446-0.446h0.849C7.194,9.554,7.394,9.755,7.394,10 M7.394,12.675c0,0.245-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.201-0.446-0.446s0.201-0.445,0.446-0.445h0.849C7.194,12.229,7.394,12.43,7.394,12.675 M14.348,7.325c0,0.246-0.201,0.446-0.446,0.446h-5c-0.246,0-0.446-0.2-0.446-0.446c0-0.245,0.2-0.446,0.446-0.446h5C14.146,6.879,14.348,7.08,14.348,7.325 M7.394,7.325c0,0.246-0.2,0.446-0.446,0.446H6.099c-0.245,0-0.446-0.2-0.446-0.446c0-0.245,0.201-0.446,0.446-0.446h0.849C7.194,6.879,7.394,7.08,7.394,7.325"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Content Section</h3>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="row copy_row">
                                    <div class="example_section">
                                        <label>
                                            <input type="radio" name="section_id" class="card-input-element d-none"
                                                   id="demo1"
                                                   value="{{ CopyGuideline::SECTION_EXAMPLE }}">
                                            <div
                                                class="row card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                                <div class="col-md-5">
                                                    <div class="feel-left">
                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                            <path d="M8.749,9.934c0,0.247-0.202,0.449-0.449,0.449H4.257c-0.247,0-0.449-0.202-0.449-0.449S4.01,9.484,4.257,9.484H8.3C8.547,9.484,8.749,9.687,8.749,9.934 M7.402,12.627H4.257c-0.247,0-0.449,0.202-0.449,0.449s0.202,0.449,0.449,0.449h3.145c0.247,0,0.449-0.202,0.449-0.449S7.648,12.627,7.402,12.627 M8.3,6.339H4.257c-0.247,0-0.449,0.202-0.449,0.449c0,0.247,0.202,0.449,0.449,0.449H8.3c0.247,0,0.449-0.202,0.449-0.449C8.749,6.541,8.547,6.339,8.3,6.339 M18.631,4.543v10.78c0,0.248-0.202,0.45-0.449,0.45H2.011c-0.247,0-0.449-0.202-0.449-0.45V4.543c0-0.247,0.202-0.449,0.449-0.449h16.17C18.429,4.094,18.631,4.296,18.631,4.543 M17.732,4.993H2.46v9.882h15.272V4.993z M16.371,13.078c0,0.247-0.202,0.449-0.449,0.449H9.646c-0.247,0-0.449-0.202-0.449-0.449c0-1.479,0.883-2.747,2.162-3.299c-0.434-0.418-0.714-1.008-0.714-1.642c0-1.197,0.997-2.246,2.133-2.246s2.134,1.049,2.134,2.246c0,0.634-0.28,1.224-0.714,1.642C15.475,10.331,16.371,11.6,16.371,13.078M11.542,8.137c0,0.622,0.539,1.348,1.235,1.348s1.235-0.726,1.235-1.348c0-0.622-0.539-1.348-1.235-1.348S11.542,7.515,11.542,8.137 M15.435,12.629c-0.214-1.273-1.323-2.246-2.657-2.246s-2.431,0.973-2.644,2.246H15.435z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h3>Example Section</h3>
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
