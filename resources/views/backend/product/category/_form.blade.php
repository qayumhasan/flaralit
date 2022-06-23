<div class="row">
    <div class="col-md-12 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="category_name">Category Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Ex. Marketing"
                value="{{ old('category_name', isset($product_category) ? $product_category->name : null) }}" required>
            @error('category_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin grid-margin-lg-0">
        <div class="form-check form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" {{ isset($product_category) ? $product_category->status == 1 ? 'checked' : '' :
                '' }} class="form-check-input"
                name="status" id="is_active">
                Active <i class="input-helper"></i>
            </label>

        </div>
    </div>
    {{-- <div class="col-lg-12 grid-margin grid-margin-lg-0">--}}
        {{-- <div class="form-check form-check-primary">--}}
            {{-- <label class="form-check-label">--}}
                {{-- <input type="checkbox" {{ isset($product_category) ? $product_category->show_in_mega == 1 ?
                'checked' : '' : '' }} class="form-check-input" name="show_in_mega" id="show_in_mega">--}}
                {{-- Show on Mega Menu--}}
                {{-- <i class="input-helper"></i>--}}
                {{-- </label>--}}
            {{-- </div>--}}
        {{-- </div>--}}
</div>