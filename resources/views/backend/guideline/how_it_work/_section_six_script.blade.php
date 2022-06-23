
<script>
    function addNewRowSectionSix(el){
      
        $('.multi_form_area').append(
            `
            <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="card single_form_four mb-3">
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
                            class="btn btn-primary rounded-circle btn-sm plus_btn_style"><i
                                class="fa fa-plus"></i></a>
                        <a  href="javascript:void(0)" onclick="removeNewRowSectionFour(this)"
                            class="btn btn-danger rounded-circle btn-sm plus_btn_style"><i
                                class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
            `
        )
        $('.dropify').dropify();
    }
    function removeNewRowSectionFour(el){
        $(el).closest('.single_form_four').remove()
    }

</script>