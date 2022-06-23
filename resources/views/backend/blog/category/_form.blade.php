<div class="row">
    <div class="col-md-12 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="name">Category Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Ex. Marketing"
                   value="{{ old('name', isset($category) ? $category->name : null) }}"
                   required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Name field cannot be empty!
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin grid-margin-lg-0">
        <div class="form-check form-check-primary">
            <label class="form-check-label" for="is_active">
                <input type="checkbox"
                       {{  isset($category) ? $category->status == 1 ? 'checked' : null : null }} class="form-check-input"
                       name="status" id="is_active">
                Active <i class="input-helper"></i>
            </label>
        </div>
    </div>
</div>

