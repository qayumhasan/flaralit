<script>
    $(document).ready(function () {
        $('.guideline_summernote').summernote({
            height: 70,
        });

        $('.example_summernote').summernote({
            height: 70,
        });
    });

    function add_new_row() {
        $('#content').append(`
                <div class="row" id="row">
                    <div class="col-9 col-sm-10 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <input type="text" class="form-control" name="contents[]" placeholder="Content" required>
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-2 grid-margin grid-margin-lg-0 d-flex">
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
    }

    var count = 0;

    function add_new_example_row() {
        count++;
        $('#example_section').append(`
        <div class="row examples mt-3">
            <div class="col-10 col-md-11 ">
                <div class="border pt-4" id="single_example_1">
                    <div class="content_row">
                        <div class="row ml-3 mr-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="heading">Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="headings[]" id="heading"
                                           placeholder="Guideline Title "
                                           required>
                                    <div class="invalid-feedback">
                                        Heading is mandatory!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image_layout">Image Layout <span class="text-primary">(Optional)</span></label>
                                    <select id="image_layout" class="select_2 form-control" name="image_layout[]">
                                        <option value="" class="selected">Select Image Layout</option>
                                        @foreach(\App\Models\ImageGuideline::IMAGE_LAYOUT_TYPES as $key=>$layout)
                                            <option value="{{ $key }}">{{ $layout }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Image layout selection is mandatory!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guidelines">Description <span class="text-danger">*</span></label>
                                    <textarea name="descriptions[]" cols="2" rows="2"
                                              class="form-control example_summernote"
                                              required></textarea>
                                    <div class="invalid-feedback">
                                        Description is mandatory!
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row border m-3 pt-3">
                        <div class="col-md-12">
                            <div class="row p-3">
                                <button href="{{ route('admin.guideline.image.index') }}"
                                        class="btn btn-md btn-primary" onclick="add_new_image_field(`+ count +`)">
                                    Add More Images
                                </button>
                            </div>
                                <div class="row" id="image_row_`+ count +`">
                                    <div class="col-md-4 image_field">
                                        <div class="row border m-2">
                                            <div class="form-group">
                                                <label for="image">Image <small class="text-danger">*</small></label>
                                                <input type="file" name="images[`+ count +`][]" class="form-control dropify"
                                                       data-height="150" id="image"
                                                       data-default-file="{{ isset($data) && $data->image != null ? static_asset($data->image) : null }}"
                                                       data-allowed-file-extensions="jpg jpeg png svg" required>
                                                <div class="invalid-feedback">
                                                    Image is mandatory!
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="captions[`+ count +`][]"
                                                           placeholder="Image Caption (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-rounded btn-icon"
                                                        onclick="delete_image_field(this)">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-md-1">
                <div class="row justify-content-end mr-4 pb-2 ">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2"
                            onclick="add_new_example_row()"><i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2 mt-2"
                            onclick="delete_example_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        </div>
`);
        $('.dropify').dropify();

        $('.example_summernote').summernote({
            height: 70,
        });
    }

    function delete_example_row(el) {
        el.closest('.examples').remove();
    };

    function add_new_image_field(row_id) {
        $('#image_row_' + row_id).append(`
            <div class="col-md-4 image_field">
                <div class="row border m-2">
                    <div class="form-group">
                        <label for="image">Image <small class="text-danger">*</small></label>
                        <input type="file" name="images[`+ row_id +`][]" class="form-control dropify"
                               data-height="150" id="image"
                               data-allowed-file-extensions="jpg jpeg png svg" required>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="captions[`+ row_id +`][]"
                                   placeholder="Image Caption (Optional)">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger btn-rounded btn-icon"
                                onclick="delete_image_field(this)">
                            <i class="ti-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `);

        $('.dropify').dropify();
    }

    function delete_image_field(el) {
        el.closest('.image_field').remove();
    };
</script>
