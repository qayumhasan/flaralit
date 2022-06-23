<div class="form-group">
    <label>Upload CSV</label>
    <input type="file" name="csv" id="csv" class="form-control">
    @error('csv')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
</div>
<div class="form-group">
    <label>Website</label>
    <input type="url" name="website" id="website" class="form-control" placeholder="Website">
</div>
<div class="form-group">
    <label>Support Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Support Email">
</div>
<div class="form-group">
    <label>Support Phone</label>
    <input type="text" name="phone" id="email" class="form-control" placeholder="Support Phone">
</div>
<div class="form-group">
    <label>Cover Image</label>
    <input type="file" name="cover_image" id="email" class="form-control" placeholder="Support Phone">
</div>
<div class="row">
    @foreach($categories as $key=>$category)
        <div class="col-md-4">
            <div class="form-group">
                <input type="checkbox" name="categories[]" id="categories_{{ $key }}" value="{{ $category->id }}">
                <label for="categories_{{ $key }}">{{ $category->name }}</label>
            </div>
        </div>
    @endforeach
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control"></textarea>
</div>
<div class="form-group">
    <input type="checkbox" name="is_free" id="is_free" value="free">
    <label for="is_free">Is free?</label>
</div>
<div class="form-group">
    <label>Price</label>
    <input type="number" name="price" id="email" class="form-control" placeholder="Price">
</div>
<div class="form-group">
    <label>Discount Price</label>
    <input type="number" name="discount_price" id="email" class="form-control" placeholder="Discount Price">
</div>
