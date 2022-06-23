<div class="row">
    <div class="col-md-4 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label>Cover Image <span class="text-danger">*</span></label>
            <input type="file" name="cover_image" class="form-control dropify" data-height="140"
                   data-allowed-file-extensions="jpg png jpeg svg" id="image" data-default-file="">
            @error('cover_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>
    </div>
    <div class="col-md-8 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label>Product Images (395x321)
                <span class="text-primary">(Optional)</span>
            </label>
            <form method="post" action="{{ route('front.product.store_image_dropzone') }}"
                  enctype="multipart/form-data" class="dropzone" id="dropzone">
                @csrf
                <input type="hidden" name="unique_id" value="1">
            </form>
        </div>
    </div>
</div>

@push('script')
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
@endpush
