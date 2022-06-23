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
                        <label for="section_six_title">Section Header <span class="text-danger">*</span></label>
                        <input type="text" name="section_six_title" class="form-control" id="section_six_title"
                            placeholder="Ex. How to write copy for your"
                            value="{{ old('section_six_title', isset($data) ? $data->section_six_title : null) }}"
                            required>
                        @error('section_six_title')
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
    
    <div class="bottom_section_six_area row mt-3">
        <div class="card single_form_four">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_six_feature_title1">Feature Title One<span class="text-danger">*</span></label>
                            <input type="text" name="section_six_feature_title1" class="form-control"
                                id="section_six_feature_title1" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_six_feature_title1', isset($data) ? $data->section_six_feature_title1 : null) }}"
                                required>
                            @error('section_six_feature_title1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="section_six_feature_title2">Feature Title Two<span class="text-danger">*</span></label>
                            <input type="text" name="section_six_feature_title2" class="form-control"
                                id="section_six_feature_title2" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_six_feature_title2', isset($data) ? $data->section_six_feature_title2 : null) }}"
                                required>
                            @error('section_six_feature_title2')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
     
                        <div class="form-group">
                            <label for="section_six_feature_title3">Feature Title Three<span class="text-danger">*</span></label>
                            <input type="text" name="section_six_feature_title3" class="form-control"
                                id="section_six_feature_title3" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_six_feature_title3', isset($data) ? $data->section_six_feature_title3 : null) }}"
                                required>
                            @error('section_six_feature_title3')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                    </div>
           
                    <div class="col-lg-6 grid-margin grid-margin-lg-0">
           
                        <div class="form-group">
                            <label for="short_description">Feature Note: <span class="text-danger">*</span></label>
                            <textarea id="short_description" name="section_six_feature_note" cols="2" rows="2"
                                    class="form-control summernote"
                                    required>{{ old('section_six_feature_note', isset($data) ? $data->section_six_feature_note : null) }}</textarea>
                            @error('section_six_feature_note')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
    
                    </div>
                    </div>
                </div>
            </div>
    </div>
    
    <hr>

    <div class="multi_form_area row">
        @if (isset($data->section_six_content) && $data->section_six_content != null)
        @php
        $data = decrypt(json_decode($data->section_six_content));
        // dd($data);
        @endphp
        @foreach ($data as $item)

        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="card single_form_four">
                <div class="card-body">
                    <div class="form-group">
                        <label for="section_six_item_title">Item Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_six_item_title[]" class="form-control"
                            id="section_six_item_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_six_item_title', isset($item['section_six_item_title']) ? $item['section_six_item_title'] : null) }}"
                            required>
                        @error('section_six_item_title.*')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="section_six_item_image">Item Image <small>(Resolution: 136×136)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_six_item_image[]" class="form-control dropify"
                                data-height="150" id="section_six_item_image"
                                data-default-file="{{ isset($item['section_six_item_image']) ? static_asset($item['section_six_item_image']) : null }}"
                                data-max-width="137" data-max-height="137"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_six_item_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
             
                 
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionSix(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="card single_form_four">
                <div class="card-body">    
                    <div class="form-group">
                        <label for="section_six_item_title">Item Title <span class="text-danger">*</span></label>
                        <input type="text" name="section_six_item_title[]" class="form-control"
                            id="section_six_item_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_six_item_title', isset($data->section_six_item_title) ? $data->section_six_item_title : null) }}"
                            required>
                        @error('section_six_item_title.*')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="section_six_item_image">Item Image <small>(Resolution: 136×136)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_six_item_image[]" class="form-control dropify"
                                data-height="150" id="section_six_item_image"
                                data-default-file="{{ isset($data->section_six_item_image) ? static_asset($data->section_six_item_image) : null }}"
                                data-max-width="137" data-max-height="137"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_six_item_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
          
                      
                   
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionSix(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i class="fa fa-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>



    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>