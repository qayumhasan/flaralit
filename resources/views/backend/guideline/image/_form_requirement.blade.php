@if($data->content != null)
    @php
        $requirements = decrypt(json_decode($data->content));
    @endphp
@endif
<form action="{{ route('admin.guideline.image.update_requirement_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div id="guideline_section" class="border pt-4">
        @isset($requirements)
            @php $counter = 0; @endphp
            @foreach($requirements as $requirement)
                <div class="single_guideline">
                    <div class="row border m-3 pt-3">
                        <div class="col-lg-4 grid-margin grid-margin-lg-0">
                            <div class="form-group">
                                <label>Guideline Image
                                    <small>(Resolution: 120×120)</small>
                                    <span style="color:red">*</span>
                                </label>
                                <input type="file" name="icon_images[]" class="form-control dropify" data-height="130"
                                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="351"
                                       data-max-height="271" id="guideline_image"
                                       data-default-file="{{ isset($requirement) && $requirement['icon_image'] != null ? static_asset($requirement['icon_image']):null }}">
                                <label class="card-description text-primary">The maximum size of the file can be
                                    5MB.</label>
                                @error('icon_image[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Guideline Image is mandatory!
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 grid-margin grid-margin-lg-0">
                            <div class="form-group">
                                <label for="title[]">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="titles[]" id="title"
                                       placeholder="Guideline Title "
                                       value="{{ old('title', isset($requirement) ? $requirement['title'] : null) }}"
                                       required>
                                @error('titles[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Title is mandatory!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="products">Products <span class="text-primary">(Optional)</span></label>
                                <select class="js-example-basic-multiple form-control select_2_with_icon"
                                        multiple="multiple" name="products[{{ $counter }}][]">
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ in_array($product->id, $requirement['product_id']) ? 'selected' : null }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('products[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="guidelines">Guideline <span class="text-danger">*</span></label>
                            <textarea name="short_descriptions[]" cols="2" rows="2"
                                      class="form-control guideline_summernote"
                                      required>{{ old('short_descriptions[]', isset($requirement) ? $requirement['short_description'] : null) }}</textarea>
                            @error('short_descriptions[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Short description is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mr-4 pb-2">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon"
                                onclick="add_new_guideline_row()">
                            <i class="ti-plus"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                                onclick="delete_guideline_row(this)">
                            <i class="ti-trash"></i>
                        </button>
                    </div>
                </div>
                @php $counter++; @endphp
            @endforeach
        @else
            <div class="single_guideline">
                <div class="row border m-3 pt-3">
                    <div class="col-lg-4 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label>Icon Image
                                <small>(Resolution: 120×120)</small>
                                <span style="color:red">*</span>
                            </label>
                            <input type="file" name="icon_images[]" class="form-control dropify" data-height="130"
                                   data-allowed-file-extensions="jpg png jpeg svg" data-max-width="351"
                                   data-max-height="271" id="guideline_image"
                                   data-default-file="{{ isset($data) && $data->guideline_image != null ? static_asset($data->guideline_image):null }}">
                            <label class="card-description text-primary">The maximum size of the file can be
                                5MB.</label>
                            @error('guideline_image[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Guideline Image is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label for="title[]">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="titles[]" id="title"
                                   placeholder="Guideline Title "
                                   value="{{ old('title', isset($data) ? $data->title : null) }}" required>
                            @error('titles[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="products">Products <span class="text-primary">(Optional)</span></label>
                            <select class="js-example-basic-multiple form-control select_2_with_icon"
                                    multiple="multiple" name="products[0][]">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" {{ in_array($product->id, $requirement['product_id']) ? 'selected' : null }}>
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('products[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guidelines">Guideline <span class="text-danger">*</span></label>
                        <textarea name="short_descriptions[]" cols="2" rows="2"
                                  class="form-control guideline_summernote"
                                  required>{{ old('short_descriptions[]', isset($data) ? $data->guidelines : null) }}</textarea>
                        @error('short_descriptions[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Short description is mandatory!
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mr-4 pb-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon"
                            onclick="add_new_guideline_row()">
                        <i class="ti-plus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                            onclick="delete_guideline_row(this)">
                        <i class="ti-trash"></i>
                    </button>
                </div>
            </div>
        @endisset
    </div>

    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>


