<script>
    function addNewRowSectionSeven(el){
      
        $('.multi_form_area').append(
            `
            <div class="card single_form_four mt-3">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_image">Item Image <small>(Resolution: 460×440)</small> <small
                                    class="text-danger">*</small></label>
                            <input type="file" name="section_seven_image[]" class="form-control dropify"
                                data-height="150" id="section_seven_image"
                                data-default-file="{{ isset($item['section_seven_image']) ? static_asset($item['section_seven_image']) : null }}"
                                data-max-width="461" data-max-height="441"
                                data-allowed-file-extensions="jpg jpeg png svg">
                            @error('section_four_item_image.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_seven_name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="section_seven_name[]" class="form-control"
                                id="section_seven_name" placeholder="Ex. How to write copy for your"
                                value="{{ old('section_seven_name', isset($item['section_seven_name']) ? $item['section_seven_name'] : null) }}"
                                required>
                            @error('section_seven_name.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Main Header is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_seven_designation">Designation<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="section_seven_designation[]"
                                id="section_seven_designation" placeholder="Ex. Grandfatheredly listing"
                                value="{{ old('section_seven_designation', isset($item['section_seven_designation']) ? $item['section_seven_designation'] : null) }}"
                                required>
                            @error('section_seven_designation.*')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="section_seven_description">Short Description <span class="text-danger">*</span></label>
                            <textarea name="section_seven_description[]" cols="2" rows="2"
                                      class="form-control summernote"
                                      required>
                                     {{ old('section_seven_description', isset($data) ? $data->section_seven_description : null) }} 
                                    </textarea>
                            @error('section_seven_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <a href="javascript:void(0)" onclick="addNewRowSectionSeven(this)"
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i
                                class="fa fa-plus"></i></a>
                        <a  href="javascript:void(0)" onclick="removeNewRowSectionSeven(this)"
                            class="btn btn-danger rounded-circle btn-sm plus_btn_style"><i
                                class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
            `
        )
        $('.dropify').dropify();
        $('.summernote').summernote({
            height: 150,
        });
    }
    function removeNewRowSectionSeven(el){
        $(el).closest('.single_form_four').remove()
    }

</script>