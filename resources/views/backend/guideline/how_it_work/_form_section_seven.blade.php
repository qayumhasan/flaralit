<form action="{{ route('admin.guideline.how_it_work.store') }}" class="forms-sample needs-validation" method="POST"
    enctype="multipart/form-data" novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Section</h4>
        </div>
    </div>
<br>

    <div class="multi_form_area">
        @if (isset($data->section_seven_content) && $data->section_seven_content != null)
        @php
        $data = decrypt(json_decode($data->section_seven_content));
       
        @endphp
        @foreach ($data as $item)
        <div class="card single_form_four mb-3">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_image">Item Image <small>(Resolution: 460×440)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_seven_image[]" class="form-control dropify"
                                data-height="150" id="section_seven_image"
                                data-default-file="{{ isset($item['section_seven_image']) ? static_asset($item['section_seven_image']) : null }}"
                                data-max-width="461" data-max-height="441"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_seven_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="section_seven_name[]" class="form-control"
                                id="section_seven_name" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_seven_name', isset($item['section_seven_name']) ? $item['section_seven_name'] : null) }}"
                                required>
                            @error('section_seven_name.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_seven_designation">Designation<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_seven_designation[]"
                                id="section_seven_designation" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_seven_designation', isset($item['section_seven_designation']) ? $item['section_seven_designation'] : null) }}"
                                required>
                            @error('section_seven_designation.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="section_seven_description">Short Description <span class="text-danger">*</span></label>
                            <textarea name="section_seven_description[]" cols="2" rows="2"
                                      class="form-control summernote"
                                      required>
                                      {{ old('section_seven_description', isset($item) ? $item['section_seven_description'] : null) }}
                                    </textarea>
                            @error('section_five_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionSeven(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>
                            @if (!$loop->first)
                                    <a  href="javascript:void(0)" onclick="removeNewRowSectionSeven(this)"
                                    class="btn btn-danger rounded-circle btn-sm plus_btn_style"><i
                                    class="fa fa-trash"></i></a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="card single_form_four">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_image">Item Image <small>(Resolution: 460×440)</small> <small
                                class="text-danger">*</small></label>
                        <input type="file" name="section_seven_image[]" class="form-control dropify"
                            data-height="150" id="section_seven_image"
                            data-default-file="{{ isset($item['section_seven_image']) ? static_asset($item['section_seven_image']) : null }}"
                            data-max-width="461" data-max-height="441"
                            data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_seven_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_name">Item Title <span class="text-danger">*</span></label>
                            <input type="text" name="section_seven_name[]" class="form-control"
                                id="section_seven_name" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_seven_name', isset($data->section_seven_name) ? $data->section_seven_name : null) }}"
                                required>
                            @error('section_seven_name.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_seven_designation">Details <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_seven_designation[]"
                                id="section_seven_designation" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_seven_designation', isset($data->section_seven_designation) ? $data->section_seven_designation : null) }}"
                                required>
                            @error('section_seven_designation.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="section_seven_description">Short Description <span class="text-danger">*</span></label>
                            <textarea name="section_seven_description[]" cols="2" rows="2"
                                      class="form-control summernote"
                                      required>
                                      {{ old('section_seven_description')}}
                                    </textarea>
                            @error('section_seven_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionSeven(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>