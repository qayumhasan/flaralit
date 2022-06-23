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
                        <label for="section_five_title">Section Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_five_title" class="form-control" id="section_five_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_five_title', isset($data) ? $data->section_five_title : null) }}"
                            required>
                        @error('section_five_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_five_pre_title">Section Pre Header <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_five_pre_title" class="form-control"
                            id="section_five_pre_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_five_pre_title', isset($data) ? $data->section_five_pre_title : null) }}"
                            required>
                        @error('section_five_pre_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_five_youtube_id">Youtube Video ID <span class="text-danger">*</span></label>
                        <input type="text" name="section_five_youtube_id" class="form-control"
                            id="section_five_youtube_id" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_five_youtube_id', isset($data) ? $data->section_five_youtube_id : null) }}"
                            required>
                        @error('section_five_youtube_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="section_five_image">Item Image <small>(Resolution: 480×280)</small> <small
                                class="text-danger">*</small></label>
                        <input type="file" name="section_five_image" class="form-control dropify" data-height="220"
                            id="section_five_image"
                            data-default-file="{{ isset($data) ? static_asset($data->section_five_image) : null }}"
                            data-max-width="481" data-max-height="281" data-allowed-file-extensions="jpg jpeg png svg">
                        @error('section_five_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-8">


                    <div class="form-group">
                        <label for="section_five_description">Section Description <span
                                class="text-danger">*</span></label>
                        <textarea name="section_five_description" cols="2" rows="2" class="form-control summernote"
                            required>{{ old('section_five_description', isset($data) ? $data->section_five_description : null) }}</textarea>
                        @error('section_five_description')
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

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>