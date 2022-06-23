@php
    use App\Models\Role;
@endphp
<div class="row">
    <div class="col-lg-4 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="image">User Image <small>(Resolution: 120×120)</small> <small class="text-primary">(Optional)</small></label>
            <input type="file" name="image" class="form-control dropify" data-height="230" id="image"
                   data-default-file="{{ isset($user) ? static_asset($user->image) : null }}"
                   data-max-width="121" data-max-height="121" data-allowed-file-extensions="jpg jpeg png svg">
            <label class="card-description text-primary">The maximum size of the file can be 5MB.</label>
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-lg-8 grid-margin grid-margin-lg-0">
        @if(!isset($user))
            <div class="form-group">
                <label for="role">User Role <span class="text-danger">*</span></label>
                <select id="role" class="form-control" name="role" required>
                    <option value="" class="selected" >Select User Role</option>
                    @foreach(Role::ROLE_LIST as $key => $role)
                        <option value="{{ $key }}" class="selected" >{{ $role }}</option>
                    @endforeach
                </select>
                @error('type')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    User role selection is mandatory!
                </div>
            </div>
        @endif
        <div class="form-group">
            <label for="name">Full Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Fullname"
                   value="{{ old('name', isset($user) ? $user->name : null) }}" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                Full name is mandatory!
            </div>
        </div>
        <div class="form-group">
            <label for="email">User Email <span class="text-danger">*</span></label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Ex. Teacher Online"
                   value="{{ old('email', isset($user) ? $user->email : null) }}" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                User email is mandatory!
            </div>
        </div>
        @if(!isset($user))
            <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="status" placeholder="Password"
                       value="{{ old('password', isset($user) ? $user->password : null) }}" required>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Password is mandatory!
                </div>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                       placeholder="Confirm Password" required>
                @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="invalid-feedback">
                    Password confirmation is mandatory!
                </div>
            </div>
        @endif
    </div>
</div>

