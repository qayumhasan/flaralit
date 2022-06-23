<form action="{{ route('admin.guideline.image.update_advertisement_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label>Section Image
                    <small>(Resolution: 260×220)</small>
                    <span style="color:red">*</span>
                </label>
                <input type="file" name="section_image" class="form-control dropify" data-height="180"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="261" data-max-height="221"
                       id="section_image"
                       data-default-file="{{ isset($data) && $data->section_image != null ? static_asset($data->section_image):null }}">
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image is mandatory!
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
    <div class="form-group">
        <label for="title">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Ex. AppSumo listing"
               value="{{ old('title', isset($data) ? $data->title : null) }}" required>
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            Title is mandatory!
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Update</button>
</form>

