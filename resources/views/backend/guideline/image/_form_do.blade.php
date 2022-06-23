@if($data->content != null)
    @php
        $dos = decrypt(json_decode($data->content));
    @endphp
@endif
<form action="{{ route('admin.guideline.image.update_do_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <h4>Example Section</h4>
    <div id="example_section">
        @isset($dos)
            @php $counter = 100; @endphp
            @foreach($dos as $do)
                <div class="row examples mt-3">
                    <div class="col-10 col-md-11 ">
                        <div class="border pt-4" id="single_example_1">
                            <div class="content_row">
                                <div class="row ml-3 mr-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="heading">Heading <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="headings[{{ $counter }}]" id="heading"
                                                   placeholder="Guideline Title "
                                                   value="{{ old('headings[]', isset($dos) ? $do['heading'] : null) }}"
                                                   required>
                                            @error('headings[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                Heading is mandatory!
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image_layout">Image Layout <span
                                                    class="text-primary">(Optional)</span></label>
                                            <select id="image_layout" class="select_2 form-control"
                                                    name="image_layout[{{ $counter }}]">
                                                <option value="" class="selected">Select Image Layout</option>
                                                @foreach(\App\Models\ImageGuideline::IMAGE_LAYOUT_TYPES as $key=>$layout)
                                                    <option
                                                        value="{{ $key }}" {{ old('image_layout[]', isset($dos) && $do['layout'] == $key ? 'selected' : null) }}>{{ $layout }}</option>
                                                @endforeach
                                            </select>
                                            @error('author')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                Image layout selection is mandatory!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="guidelines">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="descriptions[{{ $counter }}]" cols="2" rows="2"
                                                      class="form-control example_summernote"
                                                      required>{{ old('descriptions[]', isset($dos) ? $do['description'] : null) }}</textarea>
                                            @error('descriptions[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                                    class="btn btn-md btn-primary" onclick="add_new_image_field(0)">
                                                Add More Images
                                            </button>
                                        </div>
                                        <div class="row " id="image_row_0">
                                            @foreach($do['images'] as $image)
                                                <div class="col-md-4 image_field">
                                                    <div class="row border m-2">
                                                        <div class="form-group">
                                                            <label for="image">Image <small
                                                                    class="text-danger">*</small></label>
                                                            <input type="file" name="images[{{ $counter }}][]"
                                                                   class="form-control dropify"
                                                                   data-height="150" id="image"
                                                                   data-default-file="{{ isset($dos) && $image['image'] != null ? static_asset($image['image']) : null }}"
                                                                   data-allowed-file-extensions="jpg jpeg png svg">
                                                            @error('images[][]')
                                                            <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="invalid-feedback">
                                                                Image is mandatory!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="captions[{{ $counter }}][]"
                                                                       placeholder="Image Caption (Optional)"
                                                                       value="{{ old('captions[0][]', isset($dos) ? $image['caption'] : null) }}">
                                                                @error('captions[]')
                                                                <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button"
                                                                    class="btn btn-danger btn-rounded btn-icon"
                                                                    onclick="delete_image_field(this)">
                                                                <i class="ti-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-1">
                        <div class="row justify-content-end mr-4 pb-2 ">
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
                @php $counter++; @endphp
            @endforeach
        @else
            <div class="row examples">
                <div class="col-10 col-md-11 ">
                    <div class="border pt-4" id="single_example_1">
                        <div class="content_row">
                            <div class="row ml-3 mr-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="heading">Heading <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="headings[]" id="heading"
                                               placeholder="Guideline Title "
                                               value="{{ old('headings[]', isset($data) ? $data->heading : null) }}"
                                               required>
                                        @error('headings[]')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="invalid-feedback">
                                            Heading is mandatory!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_layout">Image Layout <span
                                                class="text-primary">(Optional)</span></label>
                                        <select id="image_layout" class="select_2 form-control" name="image_layout[]">
                                            <option value="" class="selected">Select Image Layout</option>
                                            @foreach(\App\Models\ImageGuideline::IMAGE_LAYOUT_TYPES as $key=>$layout)
                                                <option value="{{ $key }}">{{ $layout }}</option>
                                            @endforeach
                                        </select>
                                        @error('author')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
                                                  required>{{ old('descriptions[]', isset($data) ? $data->descriptions : null) }}</textarea>
                                        @error('descriptions[]')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
                                                class="btn btn-md btn-primary" onclick="add_new_image_field(0)">
                                            Add More Images
                                        </button>
                                    </div>
                                    <div class="row " id="image_row_0">
                                        <div class="col-md-4 image_field">
                                            <div class="row border m-2">
                                                <div class="form-group">
                                                    <label for="image">Image <small
                                                            class="text-danger">*</small></label>
                                                    <input type="file" name="images[0][]" class="form-control dropify"
                                                           data-height="150" id="image"
                                                           data-default-file="{{ isset($data) && $data->image != null ? static_asset($data->image) : null }}"
                                                           data-allowed-file-extensions="jpg jpeg png svg" required>
                                                    @error('images[0][]')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                        Image is mandatory!
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="captions[0][]"
                                                               placeholder="Image Caption (Optional)"
                                                               value="{{ old('captions[0][]', isset($data) ? $data->heading : null) }}">
                                                        @error('captions[]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
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
                                onclick="add_new_example_row()">
                            <i class="ti-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endisset
    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>




