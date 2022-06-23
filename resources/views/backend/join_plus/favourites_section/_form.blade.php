@php
use App\Models\PlusSection;
@endphp
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="image">Section Image Image <small class="text-danger">*</small></label>
            <input type="file" name="image" class="form-control dropify" data-height="130" id="image"
                data-default-file="{{ isset($favourites_section) ? static_asset($favourites_section->media_link) : null }}"
                data-allowed-file-extensions="jpg jpeg png svg" required>
            <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="title">Section Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex. This is title"
                value="{{ old('title', isset($favourites_section) ? $favourites_section->title : null) }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>

        </div>
        <div class="form-group">
            <label for="short_description">Short description <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="short_description" id="short_description"
                placeholder="Short Description"
                value="{{ old('short_description', isset($favourites_section) ? $favourites_section->short_description : null) }}"
                required>
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
    <div class="col-md-6">
        <div class="form-group">
            <label for="content_type">Select Content Type <span class="text-danger">*</span></label>
            <select id="content_type" class="select_2 form-control" name="content_type" onchange="appendContent()"
                required>
                <option value="" class="selected">Select Content Type</option>
                <option value="{{ PlusSection::CONTENT_TYPE_BLOG }}" {{ isset($favourites_section) ?
                    $favourites_section->content_type == PlusSection::CONTENT_TYPE_BLOG ? 'selected' : null : null }}>{{
                    PlusSection::CONTENT_TYPE_LIST[PlusSection::CONTENT_TYPE_BLOG] }}</option>
                <option value="{{ PlusSection::CONTENT_TYPE_PRODUCT }}" {{ isset($favourites_section) ?
                    $favourites_section->content_type == PlusSection::CONTENT_TYPE_PRODUCT ? 'selected' : null : null
                    }}>{{ PlusSection::CONTENT_TYPE_LIST[PlusSection::CONTENT_TYPE_PRODUCT] }}</option>
            </select>
            @error('content_type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="content_id">Select Content <span class="text-danger">*</span></label>
            <select id="content_id" class="select_2 form-control" name="content_id" required>
                @isset($contents)
                <option value="" class="selected">Select Content</option>
                @foreach($contents as $content)
                <option value="{{ $content->id }}" {{ $favourites_section->content_id == $content->id ? 'selected' :
                    null }}>{{ $content->title }}</option>
                @endforeach
                @endisset
            </select>
            @error('content_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
</div>