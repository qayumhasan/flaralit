@extends('backend.layouts.master')
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <style>
        .btn-media-type {
            width: 20px !important;
            height: 20px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            font-size: 16px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
            font-size: 16px;
        }
    </style>
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product - {{ $product->name }}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-md btn-secondary">Go Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Product</h4>
                            <p class="card-description">
                                Product creation form.
                            </p>
                            <div class="row">
                                <div class="col-md-12 grid-margin grid-margin-lg-0">
                                    <div class="form-group">
                                        <label>Product Images (395x321)
                                            <span class="text-primary">(Optional)</span>
                                        </label>
                                        <form method="post" action="{{ route('admin.product.update_product_image') }}"
                                              enctype="multipart/form-data" class="dropzone" id="dropzone">
                                            @csrf
                                            <input type="hidden" name="unique_id" id="product_unique_id" value="{{ $product->unique_id }}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                        url: '{{ route('admin.product.delete_product_image') }}',
                        data: {filename: name, unique_id: unique_id},
                        success: function (data) {
                            console.log(data)
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

    @foreach ($product->images as $image)
        <?php
        $path =  base64_encode(file_get_contents(static_asset($image->image)));
        $filename = substr(strrchr($image->image, '/'), 1);
        $imageName = strtok($filename, '.');
        $imageExtension = substr(strrchr($filename, '.'), 1);

        ?>

        <script>
            $("document").ready(()=>{
                var path = "{{ $path }}";
                var file = new File([path], "{{ $imageName }}", {type: "{{ $imageExtension }}", lastModified: {{ $image->updated_at }}})
                file['status'] = "queued";
                file['status'] = "queued";
                file['previewElement'] = "div.dz-preview.dz-image-preview";
                file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                file['_removeLink'] = "a.dz-remove";
                file['webkitRelativePath'] = "";
                file['width'] = 500;
                file['height'] = 500;
                file['accepted'] = true;
                file['dataURL'] = path;
                file['upload'] = {
                    bytesSent: 0 ,
                    filename: "{{ $imageName }}",
                    progress: 0 ,
                    total: 2 ,
                    uuid: "{{ md5($image->product_image_id) }}" ,
                };

                Dropzone.emit("addedfile", file , path);
                Dropzone.emit("thumbnail", file , path);
                // myDropzone.emit("complete", itemInfo);
                // myDropzone.options.maxFiles = myDropzone.options.maxFiles - 1;
                Dropzone.files.push(file);
                console.log(file);
            });
        </script>
    @endforeach
@endpush

