<div class="card">
    <div class="card-body">
        <h4 class="card-title">Edit Stack Saving Section</h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="section_title">Section Heading <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="section_title" id="section_title"
                        placeholder="Ex. Section Heading"
                        value="{{ old('section_title', isset($stack) ? $stack->section_title : null) }}" required>
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
$stack = json_decode($stack->content??'');
@endphp
<div class="card mt-3">
    <div class="card-body">
        <div class="card-title">
            First Deal
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_price">First Deal Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="first_price" id="first_price"
                        placeholder="Ex. Deal Price"
                        value="{{ old('first_price', isset($stack) ? $stack->first_price : null) }}" required>
                    @error('first_price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_title">Deal Price title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="first_title" id="first_title"
                        placeholder="Ex. Deal Price Title"
                        value="{{ old('first_title', isset($stack) ? $stack->first_title : null) }}" required>
                    @error('first_title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="first_about">Deal About <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="first_about" id="first_about"
                        placeholder="Ex. Deal About"
                        value="{{ old('first_about', isset($stack) ? $stack->first_about : null) }}" required>
                    @error('first_about')
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

<div class="card mt-3">
    <div class="card-body">
        <div class="card-title">
            Second Deal
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="second_price">Second Deal Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="second_price" id="second_price"
                        placeholder="Ex. Deal Price"
                        value="{{ old('second_price', isset($stack) ? $stack->second_price : null) }}" required>
                    @error('second_price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="second_title">Deal Price title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="second_title" id="second_title"
                        placeholder="Ex. Deal Price Title"
                        value="{{ old('second_title', isset($stack) ? $stack->second_title : null) }}" required>
                    @error('second_title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="second_about">Deal About <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="second_about" id="second_about"
                        placeholder="Ex. Deal About"
                        value="{{ old('second_about', isset($stack) ? $stack->second_about : null) }}" required>
                    @error('second_about')
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

<div class="card mt-3">
    <div class="card-body">
        <div class="card-title">
            Third Deal
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="third_price"> Deal Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="third_price" id="third_price"
                        placeholder="Ex. Deal Price"
                        value="{{ old('third_price', isset($stack) ? $stack->third_price : null) }}" required>
                    @error('third_price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="third_title">Deal Price title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="third_title" id="third_title"
                        placeholder="Ex. Deal Price Title"
                        value="{{ old('third_title', isset($stack) ? $stack->third_title : null) }}" required>
                    @error('third_title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        This Should not be Empty!
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="third_about">Deal About <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="third_about" id="third_about"
                        placeholder="Ex. Deal About"
                        value="{{ old('third_about', isset($stack) ? $stack->third_about : null) }}" required>
                    @error('third_about')
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