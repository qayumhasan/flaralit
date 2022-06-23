<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_title">Meta Title <span class="text-primary">(Optional)</span></label>
            <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Meta Title"
                   value="{{ old('meta_title', isset($blog) ? $blog->meta_title : null) }}">
            @error('meta_title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_keyword">Meta Keyword <span class="text-primary">(Optional)</span></label>
            <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword"
                   value="{{ old('meta_keyword', isset($blog) ? $blog->meta_keyword : null) }}">
            @error('meta_keyword')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="meta_description">Meta Description <span class="text-primary">(Optional)</span></label>
            <textarea name="meta_description" cols="2" rows="2" class="form-control summernote">
                {{ old('meta_description', isset($blog) ? $blog->meta_description : null) }}
            </textarea>
            @error('meta_description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>



