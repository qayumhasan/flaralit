@isset($paypal)
@php $data_paypal = json_decode($paypal->credentials); @endphp
@endisset
<form action="{{ route('admin.configuration.update') }}" class="forms-sample needs-validation" novalidate method="POST">
    @csrf
    <input type="hidden" name="type_id" value="{{ \App\Models\Configuration::TYPE_PAYPAL_CONFIGURATION }}">
    <div class="form-group">
        <label>Client ID
            <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" name="client_id" placeholder="Paypal Client Id"
            value="{{ old('client_id', isset($paypal) ? $data_paypal->client_id : null) }}" required>
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
        <input type="text" class="form-control" name="client_secret" placeholder="Client Secret"
            value="{{ old('client_secret', isset($paypal) ? $data_paypal->client_secret : null) }}" required>
        @error('client_secret')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="form-group">
        <label>API Mode
            <span class="text-danger">*</span>
        </label>
        <select name="mode" id="" class="form-control">
            <option value="">Select</option>
            <option {{ old('mode', isset($paypal) && $data_paypal->mode=='sandbox'?'selected' : '') }}
                value="sandbox">SandBox</option>
            <option {{ old('mode', isset($paypal) && $data_paypal->mode=='live'?'selected' : '') }} value="live">Live
            </option>
        </select>

        @error('mode')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="invalid-feedback">
            This Should not be Empty!
        </div>
    </div>
    <div class="ml-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="on" id="isActivePaypal" name="status" {{
                isset($paypal) ? ($paypal->status == true) ? 'checked' : null : null }}>
            <label class="form-check-label" for="isActivePaypal">
                Active
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
</form>