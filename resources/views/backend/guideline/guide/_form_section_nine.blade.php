<form action="{{ route('admin.guideline.guide.store') }}" class="forms-sample needs-validation" method="POST"
    enctype="multipart/form-data" novalidate>
    @csrf
    <input type="hidden" name="section_id" value="{{ $section_id }}">

    <div class="col-md-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Section</h4>

                    <div class="form-group">
                        <label for="section_nine_items_img">Item Image <small>(Resolution: 960×430)</small> <small
                                class="text-danger">*</small></label>
                        <input type="file" name="section_nine_items_img" class="form-control dropify" data-height="200"
                            id="section_nine_items_img"
                            data-default-file="{{ isset($data) ? static_asset($data->section_nine_items_img) : null }}"
                            data-max-width="961" data-max-height="431" data-allowed-file-extensions="jpg jpeg png svg">
                        @error('section_nine_items_img')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- <div class="col-md-6"> --}}

                    {{-- <div class="form-group">
                        <label for="section_nine_items_one_title">Section Title <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_one_title" class="form-control"
                            id="section_nine_items_one_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_one_title', isset($data) ? $data->section_nine_items_one_title : null) }}"
                            required>
                        @error('section_nine_items_one_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div> --}}

                    {{-- <div class="form-group">
                        <label for="section_nine_items_one_short">Section Short <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_one_short" class="form-control"
                            id="section_nine_items_one_short" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_one_short', isset($data) ? $data->section_nine_items_one_short : null) }}"
                            required>
                        @error('section_nine_items_one_short')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_one_subitem_one_text">Section Item One <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_one_subitem_one_text" class="form-control"
                            id="section_nine_items_one_subitem_one_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_one_subitem_one_text', isset($data) ? $data->section_nine_items_one_subitem_one_text : null) }}"
                            required>
                        @error('section_nine_items_one_subitem_one_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>


                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_one_subitem_one_check"
                            name="section_nine_items_one_subitem_one_check">
                        <label class="custom-control-label" for="customCheck">Section Item
                            One Check</label>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_one_subitem_two_text">Section Item Two <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_one_subitem_two_text" class="form-control"
                            id="section_nine_items_one_subitem_two_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_one_subitem_two_text', isset($data) ? $data->section_nine_items_one_subitem_two_text : null) }}"
                            required>
                        @error('section_nine_items_one_subitem_two_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_one_subitem_two_check"
                            name="section_nine_items_one_subitem_two_check">
                        <label class="custom-control-label" for="section_nine_items_one_subitem_two_check">Section Item
                            One Check</label>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_one_subitem_three_text">Section Item Three <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_one_subitem_three_text" class="form-control"
                            id="section_nine_items_one_subitem_three_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_one_subitem_three_text', isset($data) ? $data->section_nine_items_one_subitem_three_text : null) }}"
                            required>
                        @error('section_nine_items_one_subitem_three_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_one_subitem_three_check"
                            name="section_nine_items_one_subitem_three_check">
                        <label class="custom-control-label" for="section_nine_items_one_subitem_three_check">Section
                            Item
                            Three Check</label>
                    </div>


                    <div class="form-group mt-4">
                        <label for="section_nine_items_one_subitem_four_details">Short Description <span
                                class="text-danger">*</span></label>
                        <textarea name="section_nine_items_one_subitem_four_details" cols="2" rows="2"
                            class="form-control summernote" required>
                                  {{ old('section_nine_items_one_subitem_four_details', isset($data) ? $data->section_nine_items_one_subitem_four_details : null) }}
                                </textarea>
                        @error('section_nine_items_one_subitem_four_details')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Short description is mandatory!
                        </div>
                    </div> --}}
                    {{--
                </div> --}}
                {{-- <div class="col-md-6">

                    <div class="form-group">
                        <label for="section_nine_items_two_title">Section Title <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_two_title" class="form-control"
                            id="section_nine_items_two_title" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_two_title', isset($data) ? $data->section_nine_items_two_title : null) }}"
                            required>
                        @error('section_nine_items_two_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_two_short">Section Short <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_two_short" class="form-control"
                            id="section_nine_items_two_short" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_two_short', isset($data) ? $data->section_nine_items_two_short : null) }}"
                            required>
                        @error('section_nine_items_two_short')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_two_subitem_one_text">Section Item One <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_two_subitem_one_text" class="form-control"
                            id="section_nine_items_two_subitem_one_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_two_subitem_one_text', isset($data) ? $data->section_nine_items_two_subitem_one_text : null) }}"
                            required>
                        @error('section_nine_items_two_subitem_one_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>


                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_two_subitem_one_check"
                            name="section_nine_items_two_subitem_one_check">
                        <label class="custom-control-label" for="customCheck">Section Item
                            One Check</label>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_two_subitem_two_text">Section Item Two <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_two_subitem_two_text" class="form-control"
                            id="section_nine_items_two_subitem_two_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_two_subitem_two_text', isset($data) ? $data->section_nine_items_two_subitem_two_text : null) }}"
                            required>
                        @error('section_nine_items_two_subitem_two_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_two_subitem_two_check"
                            name="section_nine_items_two_subitem_two_check">
                        <label class="custom-control-label" for="section_nine_items_two_subitem_two_check">Section Item
                            One Check</label>
                    </div>

                    <div class="form-group">
                        <label for="section_nine_items_two_subitem_three_text">Section Item Three <span
                                class="text-danger">*</span></label>
                        <input type="text" name="section_nine_items_two_subitem_three_text" class="form-control"
                            id="section_nine_items_two_subitem_three_text" placeholder="Ex. How to write copy for your"
                            value="{{ old('section_nine_items_two_subitem_three_text', isset($data) ? $data->section_nine_items_two_subitem_three_text : null) }}"
                            required>
                        @error('section_nine_items_two_subitem_three_text')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Main Header is mandatory!
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"
                            id="section_nine_items_two_subitem_three_check"
                            name="section_nine_items_two_subitem_three_check">
                        <label class="custom-control-label" for="section_nine_items_two_subitem_three_check">Section
                            Item
                            Three Check</label>
                    </div>


                    <div class="form-group mt-4">
                        <label for="section_nine_items_two_subitem_four_details">Short Description <span
                                class="text-danger">*</span></label>
                        <textarea name="section_nine_items_two_subitem_four_details" cols="2" rows="2"
                            class="form-control summernote" required>
                                  {{ old('section_nine_items_two_subitem_four_details', isset($data) ? $data->section_nine_items_two_subitem_four_details : null) }}
                                </textarea>
                        @error('section_nine_items_two_subitem_four_details')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Short description is mandatory!
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>








    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>