<form action="{{ route('admin.guideline.guide.store') }}" class="forms-sample needs-validation" method="POST"
    enctype="multipart/form-data" novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Section</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="section_sixteen_title">Section Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_sixteen_title" class="form-control" id="section_sixteen_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_sixteen_title', isset($data) ? $data->section_sixteen_title : null) }}"
                            required>
                        @error('section_sixteen_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="section_sixteen_subtitle">Section Subtitle <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_sixteen_subtitle" class="form-control"
                            id="section_sixteen_subtitle" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_sixteen_subtitle', isset($data) ? $data->section_sixteen_subtitle : null) }}"
                            required>
                        @error('section_sixteen_subtitle')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>