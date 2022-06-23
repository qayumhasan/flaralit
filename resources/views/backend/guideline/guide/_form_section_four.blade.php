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
                        <label for="section_four_title">Section Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_four_title" class="form-control" id="section_four_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_four_title', isset($data) ? $data->section_four_title : null) }}"
                            required>
                        @error('section_four_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section_four_title">Section Pre Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_four_pre_title" class="form-control" id="section_four_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_four_title', isset($data) ? $data->section_four_title : null) }}"
                            required>
                        @error('section_four_title')
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
    <hr>

    <div class="multi_form_area">
        @if (isset($data->section_four_content) && $data->section_four_content != null)
        @php
        $data = decrypt(json_decode($data->section_four_content));
        // dd($data);
        @endphp
        @foreach ($data as $item)

        <div class="card single_form_four">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_title">Item Title <span class="text-danger">*</span></label>
                            <textarea class="form-control summernote2" id="section_four_item_title" name="section_four_item_title[]" id="" cols="30"
                                rows="10">{{ old('section_four_item_title', isset($item['section_four_item_title']) ? $item['section_four_item_title'] : null) }}</textarea>
                            @error('section_four_item_title.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionFour(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="card single_form_four">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_title">Item Title <span class="text-danger">*</span></label>
                            <textarea class="form-control summernote2" id="section_four_item_title"
                                name="section_four_item_title[]" id="" cols="30"
                                rows="10">{{ old('section_four_item_title', isset($item['section_four_item_title']) ? $item['section_four_item_title'] : null) }}</textarea>
                            @error('section_four_item_title.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionFour(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>
