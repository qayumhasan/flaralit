<div id="example_section">
    <div class="row examples">
        <div class="col-12">
            <div class="pt-4" id="single_example_1">
                <div class="content_row">
                    <div class="row ml-3 mr-3">
                        <div class="form-group">
                            <label for="heading">Heading <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="heading" id="heading"
                                   placeholder="Guideline Title "
                                   value="{{ old('heading', isset($data) ? $data->heading : null) }}"
                                   required>
                            @error('heading')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Heading is mandatory!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_layout">Image Layout <span
                                        class="text-primary">(Optional)</span></label>
                                <select id="image_layout" class="select_2 form-control" name="image_layout" required>
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
                                <label for="instruction_type">Instruction Type <span
                                        class="text-primary">(Optional)</span></label>
                                <select id="instruction_type" class="select_2 form-control" name="instruction_type" required>
                                    <option value="" class="selected">Select Instruction Type</option>
                                    @foreach(\App\Models\ImageGuidelineInstruction::INSTRUCTION_TYPES as $key=>$instruction)
                                        <option value="{{ $key }}">{{ $instruction }}</option>
                                    @endforeach
                                </select>
                                @error('instruction_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Instruction Type selection is mandatory!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="guidelines">Description <span class="text-danger">*</span></label>
                            <textarea name="description" cols="2" rows="2"
                                      class="form-control summernote"
                                      required>{{ old('description', isset($data) ? $data->descriptions : null) }}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Description is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="row border m-3 pt-3">
                        <div class="col-md-12">
                            <div class="row p-3">
                                <button href="{{ route('admin.guideline.image.index') }}"
                                        class="btn btn-md btn-primary" onclick="add_new_image_field()">
                                    Add More Images
                                </button>
                            </div>
                            <div class="row " id="image_row">
                                <div class="col-md-4 image_field">
                                    <div class="row border m-2">
                                        <div class="form-group">
                                            <label for="image">Image <small
                                                    class="text-danger">*</small></label>
                                            <input type="file" name="images[]" class="form-control dropify"
                                                   data-height="150" id="image"
                                                   data-default-file="{{ isset($data) && $data->image != null ? static_asset($data->image) : null }}"
                                                   data-allowed-file-extensions="jpg jpeg png svg" required>
                                            @error('images[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                Image is mandatory!
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="captions[]"
                                                       placeholder="Image Caption (Optional)"
                                                       value="{{ old('captions[]', isset($data) ? $data->heading : null) }}">
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
    </div>
</div>






