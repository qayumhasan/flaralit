@isset($facebook)
@php $data_facebook = json_decode($facebook->credentials); @endphp
@endisset
<form action="{{ route('admin.configuration.update') }}" class="forms-sample needs-validation" novalidate method="POST">
    @csrf
    <input type="hidden" name="type_id" value="{{ \App\Models\Configuration::TYPE_FACEBOOK_CONFIGURATION }}">
    <div class="form-group">
        <label>App ID
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="app_id" placeholder="Facebook App ID"
            value="{{ old('app_id', isset($facebook) ? $data_facebook->app_id : null) }}" required>
        @error('app_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="form-group">
        <label>App Secret
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="app_secret" placeholder="Facebook App Secret"
            value="{{ old('app_secret', isset($facebook) ? $data_facebook->app_secret : null) }}" required>
        @error('app_secret')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="ml-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="on" id="isActivefacebook" name="status" {{
                isset($facebook) ? ($facebook->status == true) ? 'checked' : null : null }}>
            <label class="form-check-label" for="isActivefacebook">
                Active
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>