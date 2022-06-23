@if($data->content != null)
    @php
        $content = decrypt(json_decode($data->content));
        $instructions = $content['instruction'];
        $guidelines = $content['guideline'];
    @endphp
@endif
<form action="{{ route('admin.guideline.copy.update_content_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <h4>Instruction Section</h4>
    <div id="instruction" class="border pt-4">
        @isset($instructions)
            @foreach($instructions as $instruction)
                <div class="row ml-3">
                    <div class="col-4 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="instruction_subjects[]"
                                   id="instruction_subject"
                                   placeholder="Subject of instruction" value="{{ $instruction['subject'] }}">
                            @error('instruction_subjects[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Subject of instruction is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="instructions[]" id="instruction"
                                   placeholder="Instruction" value="{{ $instruction['instruction'] }}">
                            @error('instructions[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Instruction is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon"
                                onclick="add_new_instruction_row()">
                            <i class="ti-plus"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                                onclick="delete_instruction_row(this)">
                            <i class="ti-trash"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row ml-3">
                <div class="col-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="instruction_subjects[]" id="instruction_subject"
                               placeholder="Subject of instruction">
                        @error('instruction_subjects[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Subject of instruction is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="instructions[]" id="instruction"
                               placeholder="Instruction">
                        @error('instructions[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="invalid-feedback">
                            Instruction is mandatory!
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-2">
                    <button type="button" class="btn btn-primary btn-rounded btn-icon"
                            onclick="add_new_instruction_row()">
                        <i class="ti-plus"></i>
                    </button>
                </div>
            </div>
        @endisset
    </div>
    <h4 class="mt-5">Guideline Section</h4>
    <div id="guideline_section" class="border pt-4">
        @isset($guidelines)
            @foreach($guidelines as $guideline)
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
                                       data-max-height="271" id="guideline_image"
                                       data-default-file="{{ isset($guideline) && $guideline['guideline_image'] != null ? static_asset($guideline['guideline_image']):null }}">
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
                                       value="{{ old('title', isset($guideline) ? $guideline['title'] : null) }}" required>
                                @error('titles[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Title is mandatory!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="note">Note <span class="text-primary">(Optional)</span></label>
                                <input type="text" class="form-control" name="notes[]" id="note"
                                       placeholder="Ex. 1 to 2 sentences"
                                       value="{{ old('notes[]', isset($guideline) ? $guideline['note'] : null) }}">
                                @error('notes[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="guidelines">Guideline <span class="text-danger">*</span></label>
                            <textarea name="guidelines[]" cols="2" rows="2"
                                      class="form-control guideline_summernote"
                                      required>{{ old('guidelines[]', isset($guideline) ? $guideline['guideline'] : null) }}</textarea>
                            @error('guidelines[]')
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
            @endforeach
        @else
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
                            <label for="note">Note <span class="text-primary">(Optional)</span></label>
                            <input type="text" class="form-control" name="notes[]" id="note"
                                   placeholder="Ex. 1 to 2 sentences"
                                   value="{{ old('notes[]', isset($data) ? $data->section_note : null) }}">
                            @error('notes[]')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="guidelines">Guideline <span class="text-danger">*</span></label>
                        <textarea name="guidelines[]" cols="2" rows="2"
                                  class="form-control guideline_summernote"
                                  required>{{ old('guidelines[]', isset($data) ? $data->guidelines : null) }}</textarea>
                        @error('guidelines[]')
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


