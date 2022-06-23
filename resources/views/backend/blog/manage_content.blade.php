@extends('backend.layouts.master')
@push('style')
    <style>
        .card-add-category {
            border-radius: 0px !important;
        }

        .card-add-category a {
            text-decoration: none;
        }

        .tab-content {
            border: 0px solid !important;
        }

        .card-header-image {
            height: 70px !important;
            width: 70px !important;
        }

        .modifier-edit:hover i{
            color: #ABAAF2;
        }

        .modifier-delete:hover i{
            color: #FF9C9C;
        }

        button.mt-2.text-center.btn_add_modifier {
            background: #57b65761;
            border: 0;
            color: #0a7a0a;
            padding: 6px 25px;
            border-radius: 7px;
            font-size: 12px;
        }

    </style>
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">{{ $blog->title }}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.blog.index')}}" class="btn btn-md btn-info">Go Back</a>
                </div>
            </div>

            @if(count($blog->contents) > 0)
                <div class="row mt-3">
                    <div class="col-md-12 grid-margin stretch-card d-none d-md-flex">
                        <div class="card card-add-category">
                            <div class="card-header d-flex justify-content-between">
                                <h4>{{ $blog->title }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card card-header">
                                            <h4>Table of Contents</h4>
                                        </div>
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                             aria-orientation="vertical">
                                            @foreach($blog->contents as $key=>$content)
                                                <a class="nav-link {{ ($key == 0) ? 'active' : null }} mt-2"
                                                   id="v-pills-home-tab" data-toggle="pill"
                                                   href="#v-pills-{{ $key }}" role="tab" aria-controls="v-pills-home"
                                                   aria-selected="true">{{ $content->title }}
                                                </a>
                                            @endforeach
                                            <button class="mt-2 text-center btn_add_modifier d-flex" data-toggle="modal" data-target="#createModifierModal">
                                                <i class="fa fa-plus-circle icon-sm"></i>
                                                <div class="ms-1">
                                                    Add Table of Content
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            @foreach($blog->contents as $key=>$content)
                                                <div class="tab-pane fade {{ ($key == 0) ? 'show active' : null }}"
                                                     id="v-pills-{{ $key }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex">
                                                                <h4 class="card-title">{{ $content->title }}</h4>
                                                                <a href="javascript:void(0)" class="ml-2 modifier-edit" onclick="showModifierEditModal({{ $content->id }})">
                                                                    <span class="text-primary"><i class="fa fa-edit"></i></span>
                                                                </a>
                                                                <form action="{{ route('admin.blog.content.delete', $content->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a type="submit" class="show_confirm ml-2 modifier-delete">
                                                                        <span class="text-danger"><i class="fa fa-trash"></i></span>
                                                                    </a>
                                                                </form>
                                                            </div>
                                                            <form action="{{ route('admin.blog.content.update_content', $content->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <div class="form-group">
                                                                    <label for="main_content">Content <span class="text-danger">*</span></label>
                                                                    <textarea name="main_content" cols="2" rows="2"
                                                                              class="form-control custom_summernote"
                                                                              required>{{ old('main_content', isset($content) ? $content->content : null) }}</textarea>
                                                                    @error('main_content')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <button class="btn btn-primary" type="submit">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card align-items-center card-add-category">
                            <div class="card-body">
                                <button class="mt-2 text-center btn_add_modifier d-flex" data-toggle="modal" data-target="#createModifierModal">
                                    <i class="fa fa-plus-circle icon-sm"></i>
                                    <div class="ms-1">
                                        Add Table of Content
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- Create Modifier Modal-->
        <div class="modal fade modifier_item_style" id="createModifierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal_close_button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('admin.blog.content.store', $blog->slug) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div>
                                <div class="form-group">
                                    <label for="title">Content Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="Content Title" value="">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-right pb-3 pr-4">
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal end  --}}

        <!-- Edit Modifier Modal-->
        <div class="modal fade modifier_modal_style" id="editModifierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black" id="exampleModalLabel">Edit Modifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.blog.content.update') }}" method="POST" id="editForm">
                        @csrf
                        <input type="hidden" name="content_id" value="" id="edit_content_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="name">Content Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="editTitle"
                                           placeholder="Content Title" value="">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal end  --}}
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.custom_summernote').summernote({
                height: 450,
            });
        });
    </script>
    @include('backend.blog._script_content')
@endpush
