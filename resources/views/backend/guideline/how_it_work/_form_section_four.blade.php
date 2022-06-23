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
                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_image">Item Image <small>(Resolution: 136×136)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_four_item_image[]" class="form-control dropify"
                                data-height="150" id="section_four_item_image"
                                data-default-file="{{ isset($item['section_four_item_image']) ? static_asset($item['section_four_item_image']) : null }}"
                                data-max-width="137" data-max-height="137"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_four_item_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_title">Item Title <span class="text-danger">*</span></label>
                            <input type="text" name="section_four_item_title[]" class="form-control"
                                id="section_four_item_title" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_four_item_title', isset($item['section_four_item_title']) ? $item['section_four_item_title'] : null) }}"
                                required>
                            @error('section_four_item_title.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_four_item_description">Details <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_four_item_description[]"
                                id="section_four_item_description" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_four_item_description', isset($item['section_four_item_description']) ? $item['section_four_item_description'] : null) }}"
                                required>
                            @error('section_four_item_description.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
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
                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_image">Item Image <small>(Resolution: 136×136)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_four_item_image[]" class="form-control dropify"
                                data-height="150" id="section_four_item_image"
                                data-default-file="{{ isset($data->section_four_item_image) ? static_asset($data->section_four_item_image) : null }}"
                                data-max-width="137" data-max-height="137"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_four_item_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_title">Item Title <span class="text-danger">*</span></label>
                            <input type="text" name="section_four_item_title[]" class="form-control"
                                id="section_four_item_title" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_four_item_title', isset($data->section_four_item_title) ? $data->section_four_item_title : null) }}"
                                required>
                            @error('section_four_item_title.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_four_item_description">Details <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_four_item_description[]"
                                id="section_four_item_description" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_four_item_description', isset($data->section_four_item_description) ? $data->section_four_item_description : null) }}"
                                required>
                            @error('section_four_item_description.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
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