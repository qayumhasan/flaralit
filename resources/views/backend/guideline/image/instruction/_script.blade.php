<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 100,
        });
    });

    function add_new_image_field() {
        $('#image_row').append(`
            <div class="col-md-4 image_field">
                <div class="row border m-2">
                    <div class="form-group">
                        <label for="image">Image <small class="text-danger">*</small></label>
                        <input type="file" name="images[]" class="form-control dropify"
                               data-height="150" id="image"
                               data-allowed-file-extensions="jpg jpeg png svg" required>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="captions[]"
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
