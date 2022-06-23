<div class="card">
    <div class="card-body">
        <h4 class="card-title">@isset($content) Edit @else Add @endisset First Content</h4>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="image">Content Image
                        <small class="text-danger">*</small>
                    </label>
                    <input type="file" name="image[1]" class="form-control dropify" data-height="170" id="image"
                        data-default-file="{{ isset($content) ? static_asset($content[0]->image) : null }}"
                        data-allowed-file-extensions="jpg jpeg png svg">
                    <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="short_description">Short Description <span class="text-danger">*</span></label>
                    <textarea maxlength="118" name="short_description[1]" id="short_description" cols="2" rows="2"
                        class="form-control custom_summernote"
                        required>{{ old('short_description', isset($content) ? $content[0]->short_description : null) }}</textarea>
                    @error('short_description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="name">Content Title <span class="text-danger">*</span></label>
                    <input type="text" name="title[1]" class="form-control" id="title" placeholder="Content Title"
                        value="{{ old('title', isset($content) ? $content[0]->title : null) }}" required>
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-2">
    <div class="card-body">
        <h4 class="card-title">@isset($content) Edit @else Add @endisset Second Content</h4>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="image">Content Image
                        <small class="text-danger">*</small>
                    </label>
                    <input type="file" name="image[2]" class="form-control dropify" data-height="170" id="image"
                        data-default-file="{{ isset($content) ? static_asset($content[1]->image) : null }}"
                        data-allowed-file-extensions="jpg jpeg png svg">
                    <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="short_description">Short Description <span class="text-danger">*</span></label>
                    <textarea maxlength="118" name="short_description[2]" id="short_description" cols="2" rows="2"
                        class="form-control custom_summernote"
                        required>{{ old('short_description', isset($content) ? $content[1]->short_description : null) }}</textarea>
                    @error('short_description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="name">Content Title <span class="text-danger">*</span></label>
                    <input type="text" name="title[2]" class="form-control" id="title" placeholder="Content Title"
                        value="{{ old('title', isset($content) ? $content[1]->title : null) }}" required>
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-2">
    <div class="card-body">
        <h4 class="card-title">@isset($content) Edit @else Add @endisset Third Content</h4>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="image">Content Image
                        <small class="text-danger">*</small>
                    </label>
                    <input type="file" name="image[3]" class="form-control dropify" data-height="170" id="image"
                        data-default-file="{{ isset($content) ? static_asset($content[2]->image) : null }}"
                        data-allowed-file-extensions="png">
                    <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="short_description">Short Description <span class="text-danger">*</span></label>
                    <textarea maxlength="118" name="short_description[3]" id="short_description" cols="2" rows="2"
                        class="form-control custom_summernote"
                        required>{{ old('short_description', isset($content) ? $content[2]->short_description : null) }}</textarea>
                    @error('short_description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="name">Content Title <span class="text-danger">*</span></label>
                    <input type="text" name="title[3]" class="form-control" id="title" placeholder="Content Title"
                        value="{{ old('title', isset($content) ? $content[2]->title : null) }}" required>
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>