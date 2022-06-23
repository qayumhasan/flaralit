<div class="row">
    <div class="col-md-12 grid-margin grid-margin-lg-0">
        <div class="form-group">
            <label for="title">Plan Title <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex. Yearly Plan"
                value="{{ old('title', isset($plan) ? $plan->title : null) }}" required>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>


        <div class="form-group">
            <label for="price">Price<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Ex. 99.00"
                value="{{ old('price', isset($plan) ? $plan->price : null) }}" required>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>

        <div class="form-group">
            <label for="discount">Discount (%)<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="discount" id="discount" placeholder="Ex. 10%"
                value="{{ old('discount', isset($plan) ? $plan->discount : null) }}" required>
            @error('discount')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>

        <div class="form-group">
            <label for="cashback">CashBack (%) <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="cashback" id="cashback" placeholder="Ex. 2.5%"
                value="{{ old('cashback', isset($plan) ? $plan->cashback : null) }}" required>
            @error('cashback')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
    
    
</div>