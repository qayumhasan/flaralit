@php
use App\Models\PlusSection;
@endphp
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="heading">Section Heading <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="heading" id="heading" placeholder="Ex. Section Heading"
                value="{{ old('heading', isset($banner_section) ? $banner_section->heading : null) }}" required>
            @error('heading')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="title">Section Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex. This is title"
                value="{{ old('title', isset($banner_section) ? $banner_section->title : null) }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="short_description">Short description <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="short_description" id="short_description"
        placeholder="Short Description"
        value="{{ old('short_description', isset($banner_section) ? $banner_section->short_description : null) }}"
        required>
    @error('short_description')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="invalid-feedback">
        This Should not be Empty!
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="content_type">Select Content Type <span class="text-danger">*</span></label>
            <select id="content_type" class="select_2 form-control" name="content_type" onchange="appendContent()"
                required>
                <option value="" class="selected">Select Content Type</option>
                <option value="{{ PlusSection::CONTENT_TYPE_BLOG }}" {{ isset($banner_section) ? $banner_section->
                    content_type == PlusSection::CONTENT_TYPE_BLOG ? 'selected' : null : null }}>{{
                    PlusSection::CONTENT_TYPE_LIST[PlusSection::CONTENT_TYPE_BLOG] }}</option>
                <option value="{{ PlusSection::CONTENT_TYPE_PRODUCT }}" {{ isset($banner_section) ? $banner_section->
                    content_type == PlusSection::CONTENT_TYPE_PRODUCT ? 'selected' : null : null }}>{{
                    PlusSection::CONTENT_TYPE_LIST[PlusSection::CONTENT_TYPE_PRODUCT] }}</option>
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
                <option value="{{ $content->id }}" {{ $banner_section->content_id == $content->id ? 'selected' : null
                    }}>{{ $content->title }}</option>
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
<div class="form-group">
    <label for="video_link">Video Link <span class="text-primary">(Youtube embedded code)</span> <span
            class="text-danger">*</span></label>
    <input type="text" class="form-control" name="video_link" id="video_link" placeholder="Video Link"
        value="{{ old('video_link', isset($banner_section) ? $banner_section->media_link : null) }}" required>
    @error('video_link')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="invalid-feedback">
        This Should not be Empty!
    </div>
</div>