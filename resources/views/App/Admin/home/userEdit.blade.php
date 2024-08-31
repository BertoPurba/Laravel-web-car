<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - User Management</title>
    <link rel="stylesheet" href="{{ asset('css/pageEditUser.css') }}">
</head>
<body>
    <h1>Ubah Data</h1>
    <form method="POST" action="{{ url("dataUsers/{$post->id}") }}" class="form-control">
    @method('PATCH')
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}">
    </div>
    <div class="mb-3">
    <label for="email_verified" class="form-label">
        Role            
        <span class="role-info">*0 = User, 1 = Admin</span>
    </label>
    <input type="boolean" class="form-control" id="email_verified" name="email_verified" value="{{ $post->email_verified }}">
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<br>
<center>
<form  method="POST" action="{{ url("dataUsers/$post->id") }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
</center>
</html>