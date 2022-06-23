@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Join Plus</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-md btn-success">Go Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.plus.faq.update') }}" class="forms-sample needs-validation" method="POST"
                    novalidate>
                    @csrf
                    @include('backend.join_plus.faqs._form')
                    <button type="submit" class="btn btn-primary mr-2 mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function addMoreFaq(el){
       
    $('.add_new_faqs').append(`
    <div class="card mt-3 single_faqs">
        <div class="card-body">
            <div class="row faqs_row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>FAQ Question <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="question[]" placeholder="Ex. FAQ Question"
                            required>
                        @error('question.*')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            This Should not be Empty!
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="first_title">Faq Answer <span class="text-danger">*</span></label>
                        <textarea required name="answer[]" class="form-control summernote" cols="5" rows="3"></textarea>
                        @error('answer.*')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            This Should not be Empty!
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-info" onclick="addMoreFaq(this)">
                        <div class="fa fa-plus"></div>
                    </a>
                    <a class="btn btn-danger" onclick="removefaq(this)">
                        <div class="fa fa-trash"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    `)
    $('.summernote').summernote({
            height: 150,
        });
}

function removefaq(el){
    $(el).closest('.single_faqs').remove();
}
</script>
@endpush