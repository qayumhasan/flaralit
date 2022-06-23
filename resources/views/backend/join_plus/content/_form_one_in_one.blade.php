<div class="card">
    <div class="card-body">
        <h4 class="card-title">@isset($content) Edit Content @else Add New Content @endisset</h4>
        <p class="card-description">
            Content creation form.
        </p>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="image">Content Image
                        <small class="text-danger">*</small>
                    </label>
                    <input type="file" name="image" class="form-control dropify" data-height="230" id="image"
                        data-default-file="{{ isset($content) ? static_asset($content->image) : null }}"
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
                    <textarea maxlength="118" name="short_description" id="short_description" cols="2" rows="2"
                        class="form-control summernote"
                        required>{{ old('short_description', isset($content) ? $content->short_description : null) }}</textarea>
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
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Content Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Content Title"
                        value="{{ old('title', isset($content) ? $content->title : null) }}" required>
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="note">Note <span class="text-primary">(Optional)</span></label>
                    <input name="note" class="form-control" id="note"
                        value="{{ old('note', isset($content) ? $content->note : null) }}" />
                    @error('note')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="list">Content <span class="text-primary">(Optional)</span></label>
                    <input name="tags" id="tags" value="{{ old('tags', isset($content) ? $content->tags : null) }}" />
                    @error('tags')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
            </div>
        </div>
    </div>
</div>