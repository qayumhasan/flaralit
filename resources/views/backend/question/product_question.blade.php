@php
    use App\Models\Product;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product Question</h6>
                </div>
            </div>

            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Questions for {{ $product->title }}</h4>
                            <div class="table-responsive">

                                <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Questionnaire Name</th>
                                        <th>Number of Answers</th>
                                        <th>Question Date</th>
                                        <th>Question</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($questions as $question)
                                        <tr>
                                            <td>{{$question->user->name}}</td>
                                            <td>{{ \App\Models\Question::where('parent_id', $question->question_id)->count() }}</td>
                                            <td>{{ date('d F Y, h:i:s A', strtotime($question->created_at)) }}</td>
                                            <td>{{$question->question}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.product.question.answer', $question->question_id) }}"
                                                       class="btn btn-primary btn-md">Answer</a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.product.question.destroy', $question->question_id) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger show_confirm" title="Delete">
                                                            <i class="ti-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
