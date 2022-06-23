<div class="row">
    <div class="col-lg-6 grid-margin grid-margin-lg-0">
        <div class="form-group mt-1 image_container">
            <label>Meta Image <small class="text-primary">(Optional)</small></label>
            <input type="file" name="meta_image" class="form-control dropify" data-height="125"
                   data-allowed-file-extensions="jpg png jpeg svg"
                   id="image"
                   data-default-file="{{isset($product) && $product->meta->meta_image != null ? static_asset($product->meta->meta_image) : null}}">
            @error('meta_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-lg-6 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="meta_keyword">Meta Keyword <small class="text-primary">(Optional)</small></label>
            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword"
                   placeholder="Course Meta Keyword"
                   value="{{ old('meta_keyword', isset($product) ? $product->meta->meta_keyword : null) }}">
            @error('meta_keyword')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="meta_title">Meta Title <small class="text-primary">(Optional)</small></label>
            <input type="text" class="form-control" name="meta_title" id="meta_title"
                   placeholder="Course Meta Title"
                   value="{{ old('meta_title', isset($product) ? $product->meta->meta_title : null) }}">
            @error('meta_title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="meta_description">Meta Description <span class="text-primary">(Optional)</span></label>
            <textarea name="meta_description" cols="2" rows="3"
                      class="form-control">{{ old('meta_description', isset($product) ? $product->meta->meta_description : null) }}</textarea>
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
            @error('meta_description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
