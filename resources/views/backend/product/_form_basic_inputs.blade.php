<div class="row">
    <div class="col-md-6 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="title">Product Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex. FlaralPOS"
                   value="{{ old('title', isset($product) ? $product->name : null) }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
        <div class="form-group">
            <label for="email">Support Email <small class="text-primary">(Optional)</small></label>
            <input type="email" class="form-control" name="email" id="email"
                   placeholder="Email"
                   value="{{ old('email', isset($product) ? $product->support_email : null) }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Support Phone <small class="text-primary">(Optional)</small></label>
            <input type="text" class="form-control" name="phone" id="phone"
                   placeholder="Phone number"
                   value="{{ old('phone', isset($product) ? $product->support_phone : null) }}">
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
        <div class="form-group">
            <label for="categories">Product Category <span class="text-danger">*</span></label>
            <select class="js-example-basic-multiple form-control select_2_with_icon" multiple="multiple"
                    name="categories[]" required>
                @foreach($categories as $category)
                    <option value="{{ $category->product_category_id }}" {{ isset($category_product_ids) ? in_array($category->product_category_id, $category_product_ids) ? 'selected' : null : null}}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categories[]')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="name">Website <span class="text-primary">(Optional)</span></label>
            <input type="url" class="form-control" name="website" id="website"
                   placeholder="Website URL"
                   value="{{ old('website', isset($product) ? $product->website : null) }}">
            @error('website')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Full name is mandatory!
            </div>
        </div>
        <div class="form-group">
            <label for="description">Product Description <span class="text-danger">*</span></label>
            <textarea name="description" cols="2" rows="2" class="form-control summernote"
                      required>{{ old('description', isset($product) ? $product->description : null) }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
</div>
