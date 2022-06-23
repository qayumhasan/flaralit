@if($data->content != null)
    @php
        $examples = decrypt(json_decode($data->content));
    @endphp
@endif
<form action="{{ route('admin.guideline.copy.update_example_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <h4>Example Section</h4>
    <div id="example_section">
        @isset($examples)
            @php $counter = 100; @endphp
        @foreach($examples as $example)
            <div class="row examples mt-2">
                <div class="col-10 col-md-11 ">
                    <div class="border pt-4" id="single_example_{{ $counter }}">
                        @foreach($example as $content)
                             <div class="content_row">
                                 <div class="row border m-3 pt-3">
                                     <div class="form-group">
                                         <label for="heading">Heading <span class="text-danger">*</span></label>
                                         <input type="text" class="form-control" name="headings[{{ $counter }}][]" id="heading"
                                                placeholder="Guideline Title "
                                                value="{{ old('headings[]', isset($content) ? $content['heading'] : null) }}" required>
                                         @error('headings[][]')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                         <div class="invalid-feedback">
                                             Heading is mandatory!
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="guidelines">Description <span class="text-danger">*</span></label>
                                         <textarea name="descriptions[{{ $counter }}][]" cols="2" rows="2"
                                                   class="form-control example_summernote"
                                                   required>{{ old('descriptions[]', isset($content) ? $content['description'] : null) }}</textarea>
                                         @error('descriptions[1][]')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                         <div class="invalid-feedback">
                                             Description is mandatory!
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row justify-content-end mr-4 pb-2">
                                     <button type="button" class="btn btn-primary btn-rounded btn-icon"
                                             onclick="add_new_example_content_row({{ $counter }})">
                                         <i class="ti-plus"></i>
                                     </button>
                                     <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                                             onclick="delete_example_content_row(this)">
                                         <i class="ti-trash"></i>
                                     </button>
                                 </div>
                             </div>
                        @endforeach
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
                            <div class="row border m-3 pt-3">
                                <div class="form-group">
                                    <label for="heading">Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="headings[1][]" id="heading"
                                           placeholder="Guideline Title "
                                           value="{{ old('headings[]', isset($data) ? $data->heading : null) }}" required>
                                    @error('headings[1][]')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Heading is mandatory!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="guidelines">Description <span class="text-danger">*</span></label>
                                    <textarea name="descriptions[1][]" cols="2" rows="2"
                                              class="form-control example_summernote"
                                              required>{{ old('descriptions[]', isset($data) ? $data->descriptions : null) }}</textarea>
                                    @error('descriptions[1][]')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Description is mandatory!
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end mr-4 pb-2">
                                <button type="button" class="btn btn-primary btn-rounded btn-icon"
                                        onclick="add_new_example_content_row(1)">
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



