@php
    use App\Models\Product;
@endphp
@extends('backend.layouts.master')
@push('style')
    <style>
        body{
            background:#eee;
        }
        .chat-list {
            padding: 0;
            font-size: .8rem;
        }

        .chat-list li {
            margin-bottom: 10px;
            overflow: auto;
            color: #ffffff;
        }

        .chat-list .chat-img {
            float: left;
            width: 48px;
        }

        .chat-list .chat-img img {
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            width: 100%;
        }

        .chat-list .chat-message {
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 13px;
            background: #5a99ee;
            display: inline-block;
            padding: 10px 20px;
            position: relative;
        }

        /*.chat-list .chat-message:before {*/
            /*content: "";*/
            /*position: absolute;*/
            /*top: 15px;*/
            /*width: 0;*/
            /*height: 0;*/
        /*}*/

        .chat-list .chat-message h5 {
            margin: 0 0 5px 0;
            font-weight: 600;
            line-height: 100%;
            font-size: .9rem;
        }

        .chat-list .chat-message p {
            line-height: 18px;
            margin: 0;
            padding: 0;
        }

        .chat-list .chat-body {
            margin-left: 20px;
            float: left;
            width: 70%;
        }

        /*.chat-list .in .chat-message:before {*/
            /*left: -12px;*/
            /*border-bottom: 20px solid transparent;*/
            /*border-right: 20px solid #5a99ee;*/
        /*}*/

        .chat-list .out .chat-img {
            float: right;
        }

        .chat-list .out .chat-body {
            float: right;
            margin-right: 20px;
        }

        .chat-list .out .chat-message {
            float: right;
            background: #fc6d4c;
        }

        /*.chat-list .out .chat-message:before {*/
            /*right: -12px;*/
            /*border-bottom: 20px solid transparent;*/
            /*border-left: 20px solid #fc6d4c;*/
        /*}*/

        .card .card-header:first-child {
            -webkit-border-radius: 0.3rem 0.3rem 0 0;
            -moz-border-radius: 0.3rem 0.3rem 0 0;
            border-radius: 0.3rem 0.3rem 0 0;
        }
        .card .card-header {
            background: #17202b;
            border: 0;
            font-size: 1rem;
            padding: .65rem 1rem;
            position: relative;
            font-weight: 600;
            color: #ffffff;
        }

        .content{
            margin-top:40px;
        }

        .height3{
            height: 415px!important;
            overflow-y: scroll;
            display: flex;
            flex-direction: column-reverse;
        }
    </style>
@endpush
@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">{{ $question->product->title }}</div>
                    <div class="card-body height3">
                        <ul class="chat-list">
                            <li class="{{ ($question->user_id == auth()->user()->id) ? 'out' : 'in' }}">
                                <div class="chat-img">
                                    <img alt="Avtar" src="{{ static_asset($question->user->image) }}">
                                </div>
                                <div class="chat-body">
                                    <div class="chat-message">
                                        <h5 class="name">{{ $question->user->name }}</h5>
                                        <p>{!! $question->question !!}</p>
                                    </div>
                                </div>
                            </li>
                            @foreach($answers as $answer)
                                <li class="{{ ($answer->user_id == auth()->user()->id) ? 'out' : 'in' }}">
                                    <div class="chat-img">
                                        <img alt="Avtar" src="{{ static_asset($answer->user->image) }}">
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-message">
                                            <h5>{{ $answer->user->name }}</h5>
                                            <p>{!! $answer->question !!}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('admin.product.question.send_answer') }}" method="POST">
                            @csrf
                            <input type="hidden" name="question_id" value="{{ $question->question_id }}">
                            <input type="hidden" name="product_id" value="{{ $question->product->product_id }}">
                            <div class="form-group">
                                <textarea name="answer" cols="2" rows="2"
                                          class="form-control summernote"
                                          required>{{ old('answer') }}</textarea>
                                @error('answer')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2 mt-2">Reply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
