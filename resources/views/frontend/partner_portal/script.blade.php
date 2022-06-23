<script>
    var key_feature = [];
    $(document).ready(function () {
        $("input:text[name=kf_name]").each(function () {
            if($(this).val()) {
                key_feature.push($(this).val());
            }
        });
    });

    function deleteKf(el) {
        var dkf = $(el).closest('.form-group').find('input').val()

        if (dkf) {
            var dkf_index = key_feature.indexOf(dkf);
            key_feature.splice(dkf_index, 1);

            if (key_feature.length === 0) {
                save_input('key_features', 'empty');
            } else {
                save_input('key_features', key_feature);
            }
            sync_key_feature(key_feature);
        }

        $(el).closest('.form-group').remove();
        count = $(".kf_form").children().length;
        $(".kf_count").text(count)
        if(count < 10 ){
            $('.new_kf_btn').removeAttr("disabled");
        }

    }

    function add_new_kf(el) {
        var count = $(".kf_form").children().length;
        count += 1;

        $('.kf_form').append(`
        <div class="form-group">
            <label>Key feature ` + count + `</label>
            <div class="form_inner">
                <input type="text" name="kf_name" onfocusout="key_feature_data(this)"  id="kf_` + count + `" class="form-control">
                <button type="button" onclick="deleteKf(this)" class="fk_close_btn"><i
                        class="fa fa-close"></i></button>
            </div>
        </div>
        `)

        $(".kf_count").text(count)
        if(count > 9 ){
            $('.new_kf_btn').attr("disabled","disabled");
        }
    }

    $(document).ready(function () {
        count = $(".kf_form").children().length;
        $(".kf_count").text(count)
    })

    function add_new_ri(el) {
        var count = $(".ir_form").children().length;
        count += 1;

        $('.ir_form').append(`
        <div class="form-group">
            <label>Instruction ` + count + `</label>
            <div class="form_inner">
                <input type="text" name="ir_` + count + `" onfocusout="add_instrucetion_data(this)" class="form-control">
                <button type="button" onclick="deleteIf(this)"
                    class="fk_close_btn"><i class="fa fa-close"></i></button>
            </div>
        </div>
        `)

        $(".ir_count").text(count)
        if(count > 9 ){
            $('.new_ri_btn').attr("disabled","disabled");
        }
    }

    $(document).ready(function () {
        count = $(".ir_form").children().length;
        $(".ir_count").text(count)
    })

    var instruction_array = [];

    function deleteIf(el) {

        var i_val = $(el).closest('.form-group').find('input').val()

        if (i_val) {
            var if_index = instruction_array.indexOf(i_val);
            instruction_array.splice(if_index, 1);

            if (instruction_array.length === 0) {
                save_input('redemption_instruction', 'empty');
            } else {
                save_input('redemption_instruction', instruction_array);
            }
            sync_instraction(instruction_array);
        }

        $(el).closest('.form-group').remove()
        count = $(".ir_form").children().length;
        $(".ir_count").text(count)
        if(count < 10 ){
            $('.new_ri_btn').removeAttr("disabled");
        }
    }
</script>

<script>
    $(document).ready(function () {

        $('.btn-next').click(function () {
            var current = $(this).closest('fieldset').index();

            current += 1

            var current_fs = $(this).closest('fieldset').css('display', 'none');
            var next_fs = $(this).closest('fieldset').next().css('display', 'block');

            $("#progress_bar li").eq(current).addClass("active");
        });
        $('.btn-prev').click(function () {
            var current = $(this).closest('fieldset').index();

            $(this).closest('fieldset').css('display', 'none');
            $(this).closest('fieldset').prev().css('display', 'block');

            $("#progress_bar li").eq(current).addClass("active");
        });

        // switch with progress bar
        $(document).on('click', '#progress_bar li.active', function () {
            var current = $(this).index();

            $("fieldset").css("display", "none");
            $("fieldset").eq(current).css("display", "block");

        })

    })

</script>

<script>
    $(document).ready(function () {
        $('#code_redeem').on("click", function () {
            $('.code_redeem_area').empty().append(`
         <div class="cra_section_one">
<div class="code_optionals mt-4 mb-5">
    <h3>Codes (optional)</h3>
    <p>
        If you’re not ready, you can can skip this section for now, but
        incomplete
        submissions can cause <strong>1-2 week delays</strong> in going live.
    </p>
    <div class="form-group mt-4">
        <h5>Where will buyers go to redeem their codes?
        </h5>
        <label for="">Link for code redemption (URL)</label>
        <input type="url" name="redemption" class="form-control">
    </div>
</div>
<div class="csv_upload">
    <h3>CSV Upload</h3>
    <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
        role="alert">
        <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}"
            alt="" class="mr-3" data-v-1e2c57b6="">
        <div>
            Add the normal retail price of your product. We'll put a slash
            through
            this
            comparison price so buyers see the deal you're offering.
        </div>
    </div>
    <div class="csv_upload_list">
        <ul>
            <li>No duplicates. Please randomize.</li>
            <li>Format your CSV file in plain text</li>
            <li>Codes must be between 3-200 characters long</li>
            <li>File should contain only one column and no header</li>
            <li>All codes should be in a single column</li>
        </ul>
    </div>
    <div class="csv_uplod_area">
        <form id="csv_upload_form">
            <div class="form-group" enctype="multipart/form-data">
                <input type="file" name="csv" class="form-control dropify"
                    data-height="140" data-allowed-file-extensions="csv"
                    id="csv_upload">
            </div>
        </form>
    </div>
</div>

<div class="redemption_instracton mt-5">
    <h3>Redemption instructions
    </h3>
    <p>
        After purchase, buyers get a code and your redemption URL above. If
        needed,
        add more instructions for your buyers.
    </p>
    <div class="ir_form">
        <div class="form-group">
            <label>Instruction <span class="ir_n">1</span></label>
            <div class="form_inner">
                <input type="text" name="if_1" class="form-control">
                <button type="button" onclick="deleteIf(this)"
                    class="fk_close_btn"><i class="fa fa-close"></i></button>
            </div>
        </div>
    </div>
    <div class="add_new_kf mb-5 mt-4">
        <button onclick="add_new_ri(this)"><i class="fa fa-plus"></i> Add
            instruction (
            <span class="ir_count">0</span>/10)</button>
    </div>
    <br>
</div>
</div>
         `)

            $('.dropify').dropify();

        });

        $('#direct_download').on("click", function () {
            $('.code_redeem_area').empty().append(`
         <div class="cra_section_two">
            <div class="csv_uplod_area">
                <h3>Downloadable file</h3>
                <p>
                    You can upload a single PDF or compressed ZIP file, maximum 500MB.
                </p>
                <form id="downloadable_file_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="downloadable_file" class="form-control dropify"
                            data-height="140" id="downloadable_file">
                        @error('downloadable_file')
            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </form>
    </div>
</div>
`)

            $('.dropify').dropify();

        });
    })
</script>

<script>
    window.onscroll = function () {
        myFunction()
    };

    var product_preview = document.getElementById("listing_preview");
    var sticky = product_preview.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky + 100) {
            product_preview.classList.add("sticky");
        } else {
            product_preview.classList.remove("sticky");
        }
    }

    var originalBottom = 30; // get this depending on your circumstances
    var footerHeight = $('.footer').height() // get this depending on your circumstances

    $(window).scroll(function () { // start to scroll
        // calculating the distance from bottom
        var distanceToBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        if (distanceToBottom <= footerHeight) // when reaching the footer
            $("#listing_preview").css('top', '-' + (footerHeight - distanceToBottom) + 'px');
        else // when distancing from the footer
            $("#listing_preview").css('top', originalBottom + 'px'); // only need to specify 'px' (or other unit) if the number is not 0
    });

</script>

<script>
    // form input to preview data
    $('#name').focusout(function () {
        $('.product_title h3').text($(this).val());
        save_input('name', $(this).val());
        next_button_active()
    });
    // save website
    $('#website').focusout(function () {
        save_input('website', $(this).val());
    });

    // save email
    $('#email').focusout(function () {
        save_input('email', $(this).val());
    });

    // save phone
    $('#phone').focusout(function () {
        save_input('phone', $(this).val());
    });

    // description preview
    $('#description').focusout(function () {
        $('.product_details_preview').text($(this).val());
        save_input('description', $(this).val());
    });

    // price preview
    $('#price').focusout(function () {
        $('.product_details_price strong').text('$' + $(this).val() + '.00')
        if($(this).val()) {
            save_input('price', $(this).val());
        }
    });

    // discount_price preview
    $('#discount_price').focusout(function () {
        save_input('discount_price', $(this).val());
        $('.product_details_price del').text('$' + $(this).val() + '.00')

    });

    // update redeem link
    $('#redemption_link').focusout(function () {
        if (isValidWebUrl($(this).val())) {
            save_input('redemption_link', $(this).val());
        } else {
            toastr.error('Please insert a valid URL!');
        }
    });

    function isValidWebUrl(url) {
        let regEx = /^https?:\/\/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)$/gm;
        return regEx.test(url);
    }

    function update_term_type() {
        var term_type = $("input:radio[name=term_type]:checked").val();

        save_input('term_type', term_type);
    }

    function update_redemption_type() {
        var redemption_type = $("input:radio[name=redemption_type]:checked").val();

        save_input('redemption_type', redemption_type);
    }

    function save_input(index, value) {
        var url = '{{ route('front.product.store') }}';
        var product_unique_id = $('#product_unique_id').val();

        var data = {};
        data['unique_id'] = product_unique_id;
        data[index] = value;

        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data.code == 200) {
                    toastr.success(data.msg);
                }
                if (data.code == 400) {
                    toastr.error(data.msg);
                }
            },
            error: function () {
                if (data.code == 400) {
                    toastr.error(data.msg);
                }
            }
        });
    }
</script>

<script>
    $(function () {
        var category = [];
        var category_name = []

        $("input:checkbox[name=category]:checked").each(function () {
                category.push($(this).val());
                category_name.push($(this).attr('cat_name'));
        });

        // limit checkbox select
        $('input[name=category]').on('change', function (e) {
            console.log($('input[name=category]:checked').length);
            if ($('input[name=category]:checked').length > 3) {
                $(this).prop('checked', false);
                $('.section_checkbox_alert').empty().append(
                    `<div class="alert alert-danger check_box_alert" >You Can't select more than 3 Category.</div>`
                );
                setInterval(() => {
                    $('.section_checkbox_alert').empty()
                }, 3000);
                return;
            }

            if (category.length <= 3) {
                if ($(this).prop('checked') === true) {
                    category.push($(this).val())
                    category_name.push($(this).attr('cat_name'))

                }
                console.log(category);
             if ($(this).prop('checked') === false ) {

                    if (category.length < 2) {
                        $(this).prop('checked', true);
                        $('.section_checkbox_alert').empty().append(`<div class="alert alert-danger check_box_alert" >Select at least one category.</div>`);
                        setInterval(() => {
                            $('.section_checkbox_alert').empty()
                        }, 3000);

                        return;
                    }else{
                        var indexs = category.indexOf($(this).val())
                        console.log(indexs);
                        category.splice(indexs, 1)
                        category_name.splice(indexs, 1)
                    }
                }

                $('#category_preview').empty();
                $.each(category_name, function (index, value) {

                    $('#category_preview').append(`<span class="badge badge-gray">` + value + `</span>`)
                });

                save_input('categories', category);
            }
        });
    });

</script>

{{-- file uploader --}}
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 5,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            timeout: 60000,
            removedfile: function (file) {
                var unique_id = $('#product_unique_id').val();
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route('front.product.delete_image_dropzone') }}',
                    data: {filename: name, unique_id: unique_id},
                    success: function (data) {
                        if (data.code == 200) {
                            toastr.success(data.msg);
                        } else if (data.code == 400) {
                            toastr.error(data.msg);
                        }
                    },
                    error: function (e) {
                        toastr.error('Server Error!');
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response) {
                if (response.code == 200) {
                    toastr.success(response.msg);
                } else if (response.code == 400) {
                    toastr.error(response.msg);
                }
            },
            error: function (file, response) {
                toastr.error('Server Error!');
            }
        };
</script>

<script>
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
</script>
<script>
    // key feature add to array and render
    function key_feature_data(el) {
        if ($(el).val()) {
            if (!key_feature.includes($(el).val())) {
                key_feature.push($(el).val());
            } else {
                var indexs = key_feature.indexOf($(el).val())
                key_feature.splice(indexs, 1)
                if (key_feature.length === 0) {
                    save_input('key_features', 'empty');
                    sync_key_feature(key_feature);
                    return;
                }
            }
            save_input('key_features', key_feature);
            sync_key_feature(key_feature);
        }
    }

    function sync_key_feature(kf) {

        $('.plan_feature_list').empty()

        $.each(kf, function (index, value) {

            $('.plan_feature_list').append(
                `<div class="list_single">
                    <img src="{{ static_asset('assets/frontend/partner/images/check.svg') }}" alt="">
                    <span>` + value + `</span>
                </div>`
            )
        })
    }

    // instraction add to array and rander
    function add_instrucetion_data(el) {
        if ($(el).val()) {
            if (!instruction_array.includes($(el).val())) {
                instruction_array.push($(el).val());
            } else {
                var indexs_i = instruction_array.indexOf($(el).val())
                instruction_array.splice(indexs_i, 1)
                if (instruction_array.length === 0) {
                    save_input('redemption_instruction', 'empty');
                    sync_instraction(instruction_array);
                    return;
                }
            }
            save_input('redemption_instruction', instruction_array);
            sync_instraction(instruction_array);

        }
    }

    function sync_instraction(i_val) {

        $('.awesome_product_list').empty()

        $.each(i_val, function (index, value) {

            $('.awesome_product_list').append(
                `<div class="list_single">
                    <img src="{{ static_asset('assets/frontend/partner/images/check.svg') }}" alt="">
                    <span>` + value + `</span>
                </div>`
            )
        })
    }
</script>

{{--file_uploads--}}
<script>
    $(function () {
        $('#csv_upload').change(function () {
            //Get reference of File.
            var fileUpload = document.getElementById('csv_upload');

            //Check whether the file is valid Image.
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.csv)$");
            if (regex.test(fileUpload.value.toLowerCase())) {
                update_image('csv_upload_form');
            } else {
                toastr.error("Please select a valid file type of csv.");
            }
        });

        $('#downloadable_file').change(function () {
            //Get reference of File.
            var fileUpload = document.getElementById('downloadable_file');

            //Check whether the file is valid Image.
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.zip|.pdf)$");
            if (regex.test(fileUpload.value.toLowerCase())) {
                update_image('downloadable_file_form');
            } else {
                toastr.error("Please select a valid file type of pdf or zip.");
                return false;
            }
        });

        $('#cover_image').change(function () {
            //Get reference of File.
            var imageUpload = document.getElementById('cover_image');

            //Check whether the file is valid Image.
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg|.svg)$");
            if (regex.test(imageUpload.value.toLowerCase())) {
                //Get reference of File.
                var fileUpload = document.getElementById('cover_image');

                //Initiate the FileReader object.
                var reader = new FileReader();
                //Read the contents of Image File.
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    //Initiate the JavaScript Image object.
                    var image = new Image();

                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;

                    //Validate the File Height and Width.
                    image.onload = function () {
                        var height = this.height;
                        var width = this.width;
                        if (width > 395) {
                            toastr.error('Image width cannot be more than 395px');

                            return 0;
                        } else if (height > 222) {
                            toastr.error('Image height cannot be more than 222px');

                            return 0;
                        } else {
                            update_image('cover_image_form');
                        }
                    };
                }
            } else {
                toastr.error("Please select a valid Image file.");
                return false;
            }
        });

        function update_image(form_name) {
            var url = '{{ route('front.product.store') }}';
            var postData = new FormData(document.getElementById(form_name));

            $.ajax({
                url: url,
                data: postData,
                processData: false,
                contentType: false,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if (data.code == 200) {
                        toastr.success(data.msg);
                    } else if (data.code == 400) {
                        toastr.error(data.msg);
                    } else if (data.code == 300) {
                        toastr.info(data.msg);
                    }
                },
                error: function () {
                    toastr.error('Server Error');
                }
            });
        }
    });
</script>

{{-- next previous button active disable --}}
<script>
    next_button_active()
    function next_button_active(){
        var name = $('#name').val()
        console.log(name);

    }
</script>

{{-- product list page click to go product single --}}
<script>
    function load_url_tr(el){
        var url = $(el).attr('datahref')
        console.log(url);
    }
//     jQuery(document).ready(function() {
//     $(".product_list_single").click(function() {
//         console.log($(this).attr("datahref"));
//         window.location.href = $(this).attr("datahref")
//     });
// });
</script>