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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Community Section</h4>
                        <form action="{{ route('admin.plus.section.update') }}" class="forms-sample needs-validation"
                            method="POST" enctype="multipart/form-data" novalidate>
                            <input type="hidden" name="section_id"
                                value="{{ \App\Models\PlusSection::SECTION_JOIN_COMMUNITY }}">
                            @csrf
                            @include('backend.join_plus.community_section._form')
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function appendContent() {
            var content_type = $('#content_type').val();
            let url = '{{ route('admin.plus.banner_section.get_content') }}';

            $.ajax({
                url: url,
                cache: false,
                type: 'GET',
                data: {content_type: content_type},
                success: function (data) {
                    let appendArray = `<option value="" class="selected">Select Content</option>`;

                    $.each(data.contents, function (index, value) {
                        appendArray += `<option value="${value.id}" class="selected">${value.title}</option>`;
                    })

                    $('#content_id').empty().append(appendArray);
                },
                error: function () {
                    swal({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Something went wrong!',
                        timer: 1500
                    })
                }
            })
        }
</script>
@endpush