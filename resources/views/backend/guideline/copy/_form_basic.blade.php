<form action="{{ route('admin.guideline.copy.update_basic_section') }}"
      class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
      novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label>Section Image
                    <small>(Resolution: 415×375)</small>
                    <span style="color:red">*</span>
                </label>
                <input type="file" name="section_image" class="form-control dropify" data-height="200"
                       data-allowed-file-extensions="jpg png jpeg svg" data-max-width="416" data-max-height="376"
                       id="section_image"
                       data-default-file="{{ isset($data) && $data->section_image != null ? static_asset($data->section_image):null }}">
                <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
                @error('section_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Section Image is mandatory!
                </div>
            </div>
        </div>
        <div class="col-lg-8 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <label for="title">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Ex. The basics"
                       value="{{ old('title', isset($data) ? $data->title : null) }}" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Title is mandatory!
                </div>
            </div>
            <div class="form-group">
                <label for="note">Note <span class="text-primary">(Optional)</span></label>
                <input type="text" class="form-control" name="note" id="note"
                       placeholder="Ex. Get paid. No upfront fees."
                       value="{{ old('note', isset($data) ? $data->section_note : null) }}">
                @error('note')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div id="content">
                @isset($data->content)
                    @php
                        $contents = decrypt(json_decode($data->content));
                    @endphp
                    @foreach($contents as $content)
                        <div class="row">
                            <div class="col-lg-9 grid-margin grid-margin-lg-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contents[]" id="terms" placeholder="Content" value="{{ $content }}">
                                    @error('contents[]')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 grid-margin grid-margin-lg-0 d-flex">
                                <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_row()">
                                    <i class="ti-plus"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_row(this)">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row d-flex">
                        <div class="col-10 col-sm-10 grid-margin grid-margin-lg-0">
                            <div class="form-group">
                                <input type="text" class="form-control" name="contents[]" id="terms" placeholder="Content" required>
                                @error('contents[]')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Content is mandatory!
                                </div>
                            </div>
                        </div>
                        <div class="col-2 grid-margin grid-margin-lg-0 d-flex">
                            <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_row()">
                                <i class="ti-plus"></i>
                            </button>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Update</button>
</form>

