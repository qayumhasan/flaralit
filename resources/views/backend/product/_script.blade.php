<script>
    $(function () {
        $('.dropify').dropify();
    });

    function add_new_image() {
        $('.image_column').append(`<div class="form-group mt-1 image_container">
                                        <div class="d-flex float-right">
                                            <button type="button" class="btn btn-light btn-media-type btn-rounded btn-icon" onclick="add_new_image()">
                                                <span class="text-primary"><i class="ti-plus"></i></span>
                                            </button>
                                            <button type="button" class="btn btn-light btn-media-type btn-rounded btn-icon ml-1" onclick="delete_image(this)">
                                                <span class="text-danger"><i class="ti-trash"></i></span>
                                            </button>
                                        </div>
                                        <label>Image <span class="text-danger">*</span></label>
                                        <input type="file" name="images[]" class="form-control dropify" data-height="150"
                                               data-allowed-file-extensions="jpg png jpeg svg"
                                               id="image"
                                               data-default-file="">
                                        @error('images.*')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>`);

        $('.dropify').dropify();

    };

    function delete_image(el){
        el.closest('.image_container').remove();
    }

    function add_new_row() {
        $('#content').append(`<div class="row" id="row">
            <div class="col-lg-9 grid-margin grid-margin-lg-0">
                <div class="form-group">
                    <input type="text" class="form-control" name="terms[]" placeholder="Deal Term" value="">
                    @error('terms')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 grid-margin grid-margin-lg-0 d-flex">
                <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_row()">
                    <i class="ti-plus"></i>
                </button>
                <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_row(this)">
                    <i class="ti-trash"></i>
                </button>
            </div>
        </div>`)
    };

    function delete_row(el) {
        el.closest('.row').remove();
    };

    $('#comparison').on('click', function () {
        if($(this).is(':checked')){
            $('#comparision_prise_field').css('display', 'block')
        }else{
            $('.product_details_price del').text('')
            $('#discount_price').val('0')
            $('#comparision_prise_field').css('display', 'none')
        }

    })
    $('#freebie').on('click', function () {
        if ($(this).is(':checked')) {

            $('#comparison').attr('disabled', 'disabled');
            $('#comparision_prise_field').css('display', 'none');
            $('.product_details_price del').css('display', 'none');
            $('#price').val('0');
            $('#price').attr('disabled', true);
            $('.product_details_price strong').text('Freebie');

            save_input('is_free', 'yes');
        } else {
            $('#price').attr('disabled', false);
            $('#comparison').prop('disabled', '');
            $('.product_details_price del').css('display', 'inline-block');
            $('#comparision_prise_field').css('display', 'block')
            $('#price').val('0')
            $('#discount_price').val('0')
            $('.product_details_price strong').text('$0.00')
            $('.product_details_price del').text('')

            save_input('is_free', 'no');
        }

    })

    $(document).ready(function () {
        count = $(".kf_form").children().length;
        $(".kf_count").text(count)
    })

    function add_new_kf(el) {
        var count = $(".kf_form").children().length;
        count += 1;

        $('.kf_form').append(`
            <div class="row">
                <div class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                    <div class="form-group">
                        <label>Key feature <span class="kf_n">`+ count +`</span></label>
                        <div class="form_inner">
                            <input type="text" name="key_features[]" id="kf_`+ count +`" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="deleteKf(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        `)

        $(".kf_count").text(count)
        if(count > 9 ){
            $('.new_kf_btn').attr("disabled","disabled");
        }
    }

    function deleteKf(el) {
        $(el).closest('.row').remove();
        count = $(".kf_form").children().length;
        $(".kf_count").text(count)
        if(count < 10 ){
            $('.new_kf_btn').removeAttr("disabled");
        }
    }
</script>
