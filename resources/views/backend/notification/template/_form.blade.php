<div class="row">
    <div class="col-md-12 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="title">Template Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Template title"
                   value="{{ old('title', isset($template) ? $template->title : null) }}"
                   required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Template title is mandatory!
            </div>
        </div>
        <div class="form-group">
            <label>SMS Body <small class="text-primary">(Optional)</small></label>
            <textarea name="sms_body" cols="2" rows="2"
                      class="form-control summernote">{{ old('sms_body', isset($template) ? $template->sms_body : null) }}</textarea>
            @error('sms_body')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email_subject">Email Subject
                <small class="text-primary">(Optional)</small>
            </label>
            <input type="text" class="form-control" name="email_subject" id="email_subject"
                   placeholder="Email Subject"
                   value="{{ old('email_subject', isset($template) ? $template->email_subject : null) }}">
            @error('email_subject')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email_body">Email Body <small class="text-primary">(Optional)</small></label>
            <textarea name="email_body" cols="2" rows="2"
                      class="form-control summernote"
                      required>{{ old('email_body', isset($template) ? $template->email_body : null) }}</textarea>
            @error('email_body')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>



