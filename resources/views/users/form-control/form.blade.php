<div class="mb-3">
    <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control" placeholder="Name">
</div>
<div class="mb-3">
    <input type="email" name="email" value="{{ old('email') ?? $user->email }}" class="form-control" placeholder="Email">
</div>
<div class="mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password">
</div>
<div class="mb-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div>