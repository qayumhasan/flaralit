<form action="{{ route('admin.guideline.how_it_work.store') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="header_image">Header Image <small>(Resolution: 733×406)</small> <small
                        class="text-danger">*</small></label>
                <input type="file" name="section_five_image" class="form-control dropify" data-height="280" id="header_image"
                       data-default-file="{{ isset($data) ? static_asset($data->section_five_image) : null }}"
                       data-max-width="734" data-max-height="407" data-allowed-file-extensions="jpg jpeg png svg">
                @error('section_five_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
  
        </div>
        <div class="col-lg-8 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="name">Main Header <span class="text-danger">*</span></label>
                <input type="text" name="section_five_title" class="form-control" id="main_header"
                       placeholder="Ex. How to write copy for your"
                       value="{{ old('section_five_title', isset($data) ? $data->section_five_title : null) }}" required>
                @error('section_five_title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Main Header is mandatory!
                </div>
            </div>
  
            <div class="form-group">
                <label for="short_description">Short Description <span class="text-danger">*</span></label>
                <textarea name="section_five_description" cols="2" rows="2"
                          class="form-control summernote"
                          required>{{ old('section_five_description', isset($data) ? $data->section_five_description : null) }}</textarea>
                @error('section_five_description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Short description is mandatory!
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Update</button>
</form>
