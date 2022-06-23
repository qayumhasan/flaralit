<form action="{{ route('admin.guideline.guide.store') }}" class="forms-sample needs-validation" method="POST"
    enctype="multipart/form-data" novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Section</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="section_eight_title">Section Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_eight_title" class="form-control" id="section_eight_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_title', isset($data) ? $data->section_eight_title : null) }}"
                            required>
                        @error('section_eight_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_eight_pre_title">Section Pre Header <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_eight_pre_title" class="form-control"
                            id="section_eight_pre_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_pre_title', isset($data) ? $data->section_eight_pre_title : null) }}"
                            required>
                        @error('section_eight_pre_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_eight_short">Section Short Description <span
                                class="text-danger">*</span></label>
                        <textarea name="section_eight_short" cols="2" rows="2" class="form-control summernote"
                            required>{{ old('section_eight_short', isset($data) ? $data->section_eight_short : null) }}</textarea>
                        @error('section_eight_short')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4>Item One</h4>
                <div class="col-lg-4 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="section_eight_items_one_image">Item Image <small>(Resolution: 80×80)</small>
                            <small class="text-danger">*</small></label>
                        <input type="file" name="section_eight_items_one_image" class="form-control dropify"
                            data-height="150" id="section_eight_items_one_image"
                            data-default-file="{{ isset($data) ? static_asset($data->section_eight_items_one_image) : null }}"
                            data-max-width="81" data-max-height="81" data-allowed-file-extensions="jpg jpeg png svg">
                        @error('section_eight_items_one_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="section_eight_items_one_title">Item Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_eight_items_one_title" class="form-control"
                            id="section_eight_items_one_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_items_one_title', isset($data) ? $data->section_eight_items_one_title : null) }}"
                            required>
                        @error('section_eight_items_one_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_eight_items_one_description">Details <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="section_eight_items_one_description"
                            id="section_eight_items_one_description" placeholder="Ex. Grandfatheredly listing"
                            value="{{ old('section_eight_items_one_description', isset($data) ? $data->section_eight_items_one_description : null) }}"
                            required>
                        @error('section_eight_items_one_description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Title is mandatory!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4>Item Two</h4>
                <div class="col-lg-4 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="section_eight_items_two_image">Item Image <small>(Resolution: 80×80)</small>
                            <small class="text-danger">*</small></label>
                        <input type="file" name="section_eight_items_two_image" class="form-control dropify"
                            data-height="150" id="section_eight_items_two_image"
                            data-default-file="{{ isset($data) ? static_asset($data->section_eight_items_two_image) : null }}"
                            data-max-width="81" data-max-height="81" data-allowed-file-extensions="jpg jpeg png svg">
                        @error('section_eight_items_two_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-8 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="section_eight_items_two_title">Item Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_eight_items_two_title" class="form-control"
                            id="section_eight_items_two_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_items_two_title', isset($data) ? $data->section_eight_items_two_title : null) }}"
                            required>
                        @error('section_eight_items_two_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_eight_items_two_description">Details <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="section_eight_items_two_description"
                            id="section_eight_items_two_description" placeholder="Ex. Grandfatheredly listing"
                            value="{{ old('section_eight_items_two_description', isset($data) ? $data->section_eight_items_two_description : null) }}"
                            required>
                        @error('section_eight_items_two_description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Title is mandatory!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>