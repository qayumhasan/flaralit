<div class="card">
    <div class="card-body">
        <h4 class="card-title">Update Section</h4>
        <form action="{{ route('admin.guideline.guide.store') }}" class="forms-sample needs-validation"
            method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="hidden" name="section_id" value="{{ $section_id }}">
            <div class="row">
                <div class="col-lg-6 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="header_image">Header Top Image <small>(Resolution: 200×14)</small> <small
                                class="text-danger">*</small></label>
                        <input type="file" name="section_one_top_img" class="form-control dropify" data-height="150"
                            id="section_one_top_img"
                            data-default-file="{{ isset($data) ? static_asset($data->section_one_top_img) : '' }}"
                            data-max-width="201" data-max-height="15" data-allowed-file-extensions="jpg jpeg png svg">
                        @error('section_one_top_img')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label>Section Image
                            <small>(Resolution: 540×368)</small>
                            <span style="color:red">*</span>
                        </label>
                        <input type="file" name="section_one_image" class="form-control dropify" data-height="150"
                            data-allowed-file-extensions="jpg png jpeg svg" id="section_one_image"
                            data-default-file="{{ isset($data) ? static_asset($data->section_one_image) : '' }}">
                        <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                        @error('section_one_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Section Image is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="name">Section Main Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_one_title" class="form-control" id="section_one_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_one_title', isset($data) ? $data->section_one_title : null) }}"
                            required>
                        @error('section_one_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label for="title">Section Subtitle <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="section_one_subtitle" id="section_one_subtitle"
                            placeholder="Ex. Grandfatheredly listing"
                            value="{{ old('section_one_subtitle', isset($data) ? $data->section_one_subtitle : null) }}"
                            required>
                        @error('section_one_subtitle')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Title is mandatory!
                        </div>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
        </form>
    </div>
</div>