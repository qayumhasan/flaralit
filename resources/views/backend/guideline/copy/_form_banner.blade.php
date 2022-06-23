<form action="{{ route('admin.guideline.copy.update_banner_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="header_image">Header Image <small>(Resolution: 300×22)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="header_image" class="form-control dropify" data-height="150" id="header_image"
                       data-default-file="{{ isset($data) ? static_asset($data->header_image) : null }}"
                       data-max-width="301" data-max-height="23" data-allowed-file-extensions="jpg jpeg png svg">
                @error('header_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Section Image
                    <small>(Resolution: 560×385)</small>
                    <span style="color:red">*</span>
                </label>
                <input type="file" name="section_image" class="form-control dropify" data-height="300"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="561" data-max-height="386"
                       id="section_image"
                       data-default-file="{{ isset($data) ? static_asset(isset($data) ? $data->section_image : null):null }}">
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
                <label for="name">Main Header <span class="text-danger">*</span></label>
                <input type="text" name="main_header" class="form-control" id="main_header"
                       placeholder="Ex. How to write copy for your"
                       value="{{ old('main_header', isset($data) ? $data->main_header : null) }}" required>
                @error('main_header')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Main Header is mandatory!
                </div>
            </div>
            <div class="form-group">
                <label for="title">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Ex. Grandfatheredly listing"
                       value="{{ old('title', isset($data) ? $data->title : null) }}" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Title is mandatory!
                </div>
            </div>
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
            <div class="form-group">
                <label for="note">Note <span class="text-primary">(Optional)</span></label>
                <input type="text" class="form-control" name="note" id="note"
                       placeholder="Ex. Get paid. No upfront fees."
                       value="{{ old('note', isset($data) ? $data->section_note : null) }}">
                @error('note')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Note field cannot be empty!
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Update</button>
</form>
