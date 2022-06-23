@isset($google)
@php $data_google = json_decode($google->credentials); @endphp
@endisset
<form action="{{ route('admin.configuration.update') }}" class="forms-sample needs-validation" novalidate method="POST">
    @csrf
    <input type="hidden" name="type_id" value="{{ \App\Models\Configuration::TYPE_GOOGLE_CONFIGURATION }}">
    <div class="form-group">
        <label>Client ID
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="client_id" placeholder="Google Client ID"
            value="{{ old('client_id', isset($google) ? $data_google->client_id : null) }}" required>
        @error('client_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="form-group">
        <label>Client Secret
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="client_secret" placeholder="Google Client Secret"
            value="{{ old('meta_title', isset($google) ? $data_google->client_secret : null) }}" required>
        @error('client_secret')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="ml-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="on" id="isActiveGoogle" name="status" {{
                isset($google) ? ($google->status == true) ? 'checked' : null : null }}>
            <label class="form-check-label" for="isActiveGoogle">
                Active
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>