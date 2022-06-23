@isset($product->images)
<div class="row">
    <div class="col-lg-12 grid-margin grid-margin-lg-0 border image_column">
        @foreach($product->images as $product_image)
        <div class="form-group mt-1 image_container">
            <div class="d-flex float-right">
                <button type="button" class="btn btn-light btn-media-type btn-rounded btn-icon"
                    onclick="add_new_image()">
                    <span class="text-primary"><i class="ti-plus"></i></span>
                </button>
                <button type="button" class="btn btn-light btn-media-type btn-rounded btn-icon ml-1"
                    onclick="delete_image(this)">
                    <span class="text-danger"><i class="ti-trash"></i></span>
                </button>
            </div>
            <label>Image <span class="text-danger">*</span></label>
            <input type="file" name="images[]" class="form-control dropify" data-height="120"
                data-allowed-file-extensions="jpg png jpeg svg" id="image"
                data-default-file="{{ static_asset($product_image->image) }}">
            @error('images.*')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @endforeach
    </div>
</div>
@else
<div class="row">
    <div class="col-lg-12 grid-margin grid-margin-lg-0 border image_column">
        <div class="form-group mt-1 image_container">
            <div class="d-flex float-right">
                <button type="button" class="btn btn-light btn-media-type btn-rounded btn-icon"
                    onclick="add_new_image()">
                    <span class="text-primary"><i class="ti-plus"></i></span>
                </button>
            </div>
            <label>Image <span class="text-danger">*</span></label>
            <input type="file" name="images[]" class="form-control dropify" data-height="120"
                data-allowed-file-extensions="jpg png jpeg svg" id="image" data-default-file="">
            @error('images.*')
            <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>
    </div>
</div>
@endisset