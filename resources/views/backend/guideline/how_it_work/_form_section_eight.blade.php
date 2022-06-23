<form action="{{ route('admin.guideline.how_it_work.store') }}" class="forms-sample needs-validation" method="POST"
    enctype="multipart/form-data" novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Section</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="section_eight_title">Section Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_eight_title" class="form-control" id="section_eight_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_title', isset($data) ? $data->section_eight_title : null) }}"
                            required>
                        @error('section_eight_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="section_eight_subtitle">Section Subtitle <span class="text-danger">*</span></label>
                        <input type="text" name="section_eight_subtitle" class="form-control" id="section_eight_subtitle"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_eight_subtitle', isset($data) ? $data->section_eight_subtitle : null) }}"
                            required>
                        @error('section_eight_subtitle')
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