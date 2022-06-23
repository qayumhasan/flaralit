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
    };

    function add_new_instruction_row() {
        $('#instruction').append(`
            <div class="row ml-3">
                <div class="col-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="instruction_subjects[]" id="instruction_subject" placeholder="Subject of instruction">
                        <div class="invalid-feedback">
                            Subject of instruction is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="instructions[]" id="instruction" placeholder="Instruction">
                        <div class="invalid-feedback">
                            Instruction is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_instruction_row()">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_instruction_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        `);
    }

    function delete_instruction_row(el) {
        el.closest('.row').remove();
    };

    function add_new_guideline_row() {
        $('#guideline_section').append(`
            <div class="single_guideline">
                <div class="row border m-3 pt-3">
                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label>Guideline Image
                                <small>(Resolution: 350×270)</small>
                                <span style="color:red">*</span>
                            </label>
                            <input type="file" name="guideline_images[]" class="form-control dropify" data-height="130"
                                   data-allowed-file-extensions="jpg png jpeg svg" data-max-width="351"
                                   data-max-height="271" id="guideline_image">
                            <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                            <div class="invalid-feedback">
                                Guideline Image is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="titles[]" id="title" placeholder="Guideline title" required>
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note">Note <span class="text-primary">(Optional)</span></label>
                            <input type="text" class="form-control" name="notes[]" id="note"
                                   placeholder="Ex. 1 to 2 sentences">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guidelines">Guideline <span class="text-danger">*</span></label>
                        <textarea name="guidelines[]" cols="2" rows="2" class="form-control guideline_summernote"
                                  required></textarea>
                        <div class="invalid-feedback">
                            Guideline is mandatory!
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mr-4 pb-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_guideline_row()">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_guideline_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        `);

        $('.dropify').dropify();

        $('.guideline_summernote').summernote({
            height: 70,
        });
    }

    function delete_guideline_row(el) {
        el.closest('.single_guideline').remove();
    };

    var count = 1;
    function add_new_example_row() {
        count++;
        $('#example_section').append(`
        <div class="row examples">
            <div class="col-10 col-md-11">
                 <div class="border pt-4 mt-2" id="single_example_`+ count +`">
                    <div class="content_row">
                 <div class="row border m-3 pt-3 content_row">
                    <div class="form-group">
                        <label for="heading">Heading <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="headings[`+ count +`][]" id="heading"
                               placeholder="Guideline Title" value="" required>
                        <div class="invalid-feedback">
                            Heading is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guidelines">Description <span class="text-danger">*</span></label>
                        <textarea name="descriptions[`+ count +`][]" cols="2" rows="2"
                                  class="form-control example_summernote" required></textarea>
                        <div class="invalid-feedback">
                            Description is mandatory!
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mr-4 pb-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon"
                            onclick="add_new_example_content_row(`+ count +`)">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                            onclick="delete_example_content_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
                </div>
            </div>
            <div class="col-2 col-md-1">
                <div class="row justify-content-end mr-4 pb-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2"
                            onclick="add_new_example_row()">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2 mt-2"
                            onclick="delete_example_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    `);

        $('.example_summernote').summernote({
            height: 70,
        });
    }

    function delete_example_row(el) {
        el.closest('.examples').remove();
    };

    function add_new_example_content_row(row_id) {
        $('#single_example_'+row_id).append(`
            <div class="content_row">
                 <div class="row border m-3 pt-3 content_row">
                    <div class="form-group">
                        <label for="heading">Heading <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="headings[`+ row_id +`][]" id="heading"
                               placeholder="Guideline Title "
                               value="" required>
                        <div class="invalid-feedback">
                            Heading is mandatory!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guidelines">Description <span class="text-danger">*</span></label>
                        <textarea name="descriptions[`+ row_id +`][]" cols="2" rows="2"
                                  class="form-control example_summernote"
                                  required></textarea>
                        <div class="invalid-feedback">
                            Description is mandatory!
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mr-4 pb-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon"
                            onclick="add_new_example_content_row(`+ row_id +`)">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                            onclick="delete_example_content_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        `);

        $('.example_summernote').summernote({
            height: 70,
        });
    }

    function delete_example_content_row(el) {
        el.closest('.content_row').remove();
    };
</script>
