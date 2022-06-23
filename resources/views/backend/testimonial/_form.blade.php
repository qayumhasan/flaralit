<div class="row">
    <div class="col-lg-4 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="image">Image
                <small>(Resolution: 165x165)</small>
                <span class="text-primary">(Optional)</span> </label>
            <input type="file" name="image" class="form-control dropify" data-height="236" id="image"
                data-default-file="{{ isset($testimonial) ? static_asset($testimonial->image) : null }}"
                data-max-width="166" data-max-height="166" data-allowed-file-extensions="jpg jpeg png svg">
            <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-lg-8 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="name">Reviewer Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required id="name" placeholder="Name"
                value="{{ old('name', isset($testimonial) ? $testimonial->name : null) }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Name Should not Be Nullale!
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="designation">Organization <span class="text-danger">*</span></label>
                    <input type="text" name="organization" class="form-control" id="organization" required
                        placeholder="Ex. Teacher Online"
                        value="{{ old('organization', isset($testimonial) ? $testimonial->organization : null) }}">
                    @error('organization')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Name Should not Be Nullale!
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="form-group">
    <label for="link">Review <span class="text-danger">*</span></label>
    <textarea name="comment" id="comment" cols="2" rows="4" required
        class="form-control summernote">{{ old('comment', isset($testimonial) ? $testimonial->comment : null) }}</textarea>
    @error('comment')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="invalid-feedback">
        Name Should not Be Nullale!
    </div>
</div>
@if (isset($testimonial))
<div class="col-lg-12 grid-margin grid-margin-lg-0">
    <div class="form-check form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" {{ isset($testimonial) ? $testimonial->status == 1 ? 'checked' : '' :
            '' }} class="form-check-input"
            name="status" id="is_active">
            Active <i class="input-helper"></i>
        </label>

    </div>
</div>
@endif