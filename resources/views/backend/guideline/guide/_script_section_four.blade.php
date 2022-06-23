<script>
    function addNewRowSectionFour(el){
      
        $('.multi_form_area').append(
            `
            <div class="card single_form_four mt-3">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="section_four_item_title">Item Title <span class="text-danger">*</span></label>
                            <textarea class="form-control summernote" id="section_four_item_title" name="section_four_item_title[]" id="" cols="30"
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
   
      
            $('.summernote').summernote({
                height: 60,
            });
    
  
    }
    function removeNewRowSectionFour(el){
        $(el).closest('.single_form_four').remove()
    }

</script>
