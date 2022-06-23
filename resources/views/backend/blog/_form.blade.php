<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Cover Image
                <span class="text-danger">*</span>
            </label>
            <input type="file" name="cover_image" class="form-control dropify" data-height="240"
                   data-allowed-file-extensions="jpg png jpeg svg"
                   id="cover_image"
                   data-default-file="{{ isset($blog) ? static_asset('storage/' . $blog->cover_image): null }}">
            @error('cover_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label for="introduction">Blog Introduction <span class="text-danger">*</span></label>
            <textarea name="introduction" cols="2" rows="2"
                      class="form-control summernote"
                      required>{{ old('introduction', isset($blog) ? $blog->introduction : null) }}</textarea>
            @error('introduction')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Blog Introduction is mandatory!
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Blog Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title of the blog"
                   value="{{ old('title', isset($blog) ? $blog->title : null) }}"
                   required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Blog Title is mandatory!
            </div>
        </div>
        <div class="form-group">
            <label for="categories">Blog Category <span class="text-danger">*</span></label>
            <select class="js-example-basic-multiple form-control select_2_with_icon" multiple="multiple"
                    name="categories[]" required>
                @isset($blog->categories)
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (in_array($category->id, $blog_category_ids)) ? 'selected' : null }}>{{ $category->name }}</option>
                    @endforeach
                @else
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endisset
            </select>
            @error('categories[]')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Blog Category is mandatory!
            </div>
        </div>
        <div class="ml-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="on" id="isActive"
                       name="status" {{ old('status', isset($blog) ? $blog->status: null) == true ? 'checked' : null }}>
                <label class="form-check-label" for="isActive">
                    Active
                </label>
            </div>
        </div>
        <div class="ml-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="on" id="isFeatured"
                       name="is_featured" {{ old('is_featured', isset($blog) ? $blog->is_featured : null) == true ? 'checked' : null }}>
                <label class="form-check-label" for="isFeatured">
                    Is Featured ?
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="author">Author <span class="text-danger">*</span></label>
            <select id="author" class="select_2 form-control" name="author">
                <option value="" class="selected">Select Author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ isset($blog) ? ($blog->user_id == $author->id) ? 'selected' : null : null }}>{{ $author->name }}</option>
                @endforeach
            </select>
            @error('author')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Author Selection is mandatory!
            </div>
        </div>
        <div class="form-group">
            <label for="publish_date">Date of Publication
                <small class="text-primary">(Optional)</small>
            </label>
            <input type="date" class="form-control" name="publish_date" id="publish_date"
                   placeholder="Date of Publication"
                   value="{{ old('publish_date', isset($blog) ? $blog->publish_date : null) }}">
            @error('publish_date')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>



