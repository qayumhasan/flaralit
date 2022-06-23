@isset($twilio)
@php $data_twilio = json_decode($twilio->credentials); @endphp
@endisset
<form action="{{ route('admin.configuration.update') }}" class="forms-sample needs-validation" novalidate method="POST">
    @csrf
    <input type="hidden" name="type_id" value="{{ \App\Models\Configuration::TYPE_TWILIO_CONFIGURATION }}">
    <div class="form-group">
        <label>Twilio SID
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="tw_sid" placeholder="Twilio SID"
            value="{{ old('tw_sid', isset($twilio) ? $data_twilio->tw_sid : null) }}" required>
        @error('tw_sid')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="form-group">
        <label>Twilio Auth Token
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="twilio_token" placeholder="Twilio Auth Token"
            value="{{ old('twilio_token', isset($twilio) ? $data_twilio->twilio_token : null) }}" required>
        @error('twilio_token')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="form-group">
        <label>Twilio Number
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="twilio_number" placeholder="Twilio Auth Token"
            value="{{ old('twilio_number', isset($twilio) ? $data_twilio->twilio_number : null) }}" required>
        @error('twilio_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>

    <div class="ml-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="on" id="isActiveTwilio" name="status" {{
                isset($twilio) ? ($twilio->status == true) ? 'checked' : null : null }}>
            <label class="form-check-label" for="isActiveTwilio">
                Active
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>