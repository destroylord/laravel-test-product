<div class="mb-3">
    <input type="text" name="name" value="{{ old('name') ?? $product->name }}" class="form-control" placeholder="Nama barang">
</div>
<div class="mb-3">
    <input type="number" name="range" value="{{ old('range') ?? $product->range }}" class="form-control" placeholder="Harga">
</div>
<div class="mb-3">
    <input type="number" name="stock" value="{{ old('stock') ?? $product->stock }}" class="form-control" placeholder="Stok">
</div>

<div class="mb-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div>