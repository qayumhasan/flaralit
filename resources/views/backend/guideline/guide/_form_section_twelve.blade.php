<form action="{{ route('admin.guideline.guide.store') }}" class="forms-sample needs-validation" method="POST"
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

        <div class="card single_form_four mb-3">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_twelve_image">Image <small>(Resolution: 450×450)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_twelve_image" class="form-control dropify"
                                data-height="150" id="section_twelve_image"
                                data-default-file="{{ isset($data->section_twelve_image) ? static_asset($data->section_twelve_image) : null }}"
                                data-max-width="451" data-max-height="451"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_twelve_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_twelve_name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="section_twelve_name" class="form-control" id="section_twelve_name"
                                placeholder="Ex. How to write copy for your"
                                value="{{ old('section_twelve_name', isset($data) ? $data->section_twelve_name : null) }}"
                                required>
                            @error('section_twelve_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_twelve_designation">Designation<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_twelve_designation"
                                id="section_twelve_designation" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_twelve_designation', isset($data) ? $data->section_twelve_designation : null) }}"
                                required>
                            @error('section_twelve_designation.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="section_twelve_description">Short Description <span
                                    class="text-danger">*</span></label>
                            <textarea name="section_twelve_description" cols="2" rows="2"
                                class="form-control summernote" required>
                                      {{ old('section_twelve_description', isset($data) ? $data->section_twelve_description : null) }}
                                    </textarea>
                            @error('section_twelve_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>