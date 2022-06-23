@isset($product)
    @php $terms = json_decode($product->deal_terms, true); @endphp
    @foreach($terms as $term)
        <div class="row">
            <div class="col-lg-9 grid-margin grid-margin-lg-0">
                <div class="form-group">
                    <input type="text" class="form-control" name="terms[]" id="terms" placeholder="Deal Term" value="{{ $term }}">
                    @error('terms')
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
    <div class="row">
        <div class="col-lg-9 grid-margin grid-margin-lg-0">
            <div class="form-group">
                <input type="text" class="form-control" name="terms[]" id="terms" placeholder="Deal Term" value="">
                @error('terms')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3 grid-margin grid-margin-lg-0 d-flex">
            <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_row()">
                <i class="ti-plus"></i>
            </button>
            {{-- <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_row(this)"><i class="ti-trash"></i>
            </button> --}}
        </div>
    </div>
@endisset

