<form action="{{ route('admin.guideline.copy.update_get_started_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="section_image">Section Image One<small>(Resolution: 250×150)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="section_image" class="form-control dropify" data-height="150"
                       id="section_image"
                       data-default-file="{{ isset($data) && $data->section_image ? static_asset($data->section_image) : null }}"
                       data-max-width="251" data-max-height="151" data-allowed-file-extensions="jpg jpeg png svg" required>
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image One is mandatory!
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="section_image_2">Section Image Two<small>(Resolution: 250×150)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="section_image_2" class="form-control dropify" data-height="150"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="561" data-max-height="386"
                       id="section_image_2"
                       data-default-file="{{ isset($data) && $data->section_image_2 ? static_asset($data->section_image_2) : null }}" required>
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image_2')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image Two is mandatory!
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="section_image_2">Section Image Three<small>(Resolution: 250×150)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="section_image_3" class="form-control dropify" data-height="150"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="251" data-max-height="151"
                       id="section_image_3"
                       data-default-file="{{ isset($data) && $data->section_image_3 != null ? static_asset($data->section_image_3):null }}" required>
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image_3')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image Three is mandatory!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="section_image_2">Section Image Four<small>(Resolution: 250×150)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="section_image_4" class="form-control dropify" data-height="200"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="251" data-max-height="151"
                       id="section_image_4"
                       data-default-file="{{ isset($data) && $data->section_image_4 != null ? static_asset($data->section_image_4) : null }}" required>
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image_4')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image Four is mandatory!
                </div>
            </div>
        </div>
        <div class="col-lg-8 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="short_description">Short Description <span class="text-danger">*</span></label>
                <textarea name="short_description" cols="2" rows="2"
                          class="form-control summernote"
                          required>{{ old('short_description', isset($data) ? $data->short_description : null) }}</textarea>
                @error('short_description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Short description is mandatory!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="title">Section Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex. This is title"
                   value="{{ old('title', isset($data) ? $data->title : null) }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Name field cannot be empty!
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Update</button>
</form>
