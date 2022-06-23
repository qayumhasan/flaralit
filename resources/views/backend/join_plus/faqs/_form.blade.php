<div class="card">
    <div class="card-body">
        <h4 class="card-title">Edit FAQ Section</h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="section_title">Section Heading <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="section_title" id="section_title"
                        placeholder="Ex. Section Heading"
                        value="{{ old('section_title', isset($faqs) ? $faqs->section_title : null) }}" required>
                    @error('section_title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
$faqs = json_decode($faqs->content??'');
@endphp
@if (empty($faqs))

<div class="card mt-3 single_faqs">
    <div class="card-body">
        <div class="row faqs_row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>FAQ Question <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="question[]" placeholder="Ex. FAQ Question" required>
                    @error('question.*')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="first_title">Faq Answer <span class="text-danger">*</span></label>
                    <textarea name="answer[]" class="form-control summernote" cols="5" rows="3" required></textarea>
                    @error('answer.*')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a class="btn btn-info" onclick="addMoreFaq(this)">
                    <div class="fa fa-plus"></div>
                </a>

            </div>
        </div>
    </div>
</div>
@else
@foreach ($faqs as $faq)

<div class="card mt-3 single_faqs">
    <div class="card-body">
        <div class="row faqs_row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>FAQ Question <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="question[]" placeholder="Ex. FAQ Question"
                        value="{{ $faq->question }}" required>
                    @error('question.*')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="first_title">Faq Answer <span class="text-danger">*</span></label>
                    <textarea name="answer[]" class="form-control summernote" cols="5" rows="3"
                        required>{{ $faq->answer }}</textarea>
                    @error('answer.*')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a class="btn btn-info" onclick="addMoreFaq(this)">
                    <div class="fa fa-plus"></div>
                </a>
                @if (!$loop->first)
                <a class="btn btn-danger" onclick="removefaq(this)">
                    <div class="fa fa-trash"></div>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach

@endif
<div class="add_new_faqs">

</div>