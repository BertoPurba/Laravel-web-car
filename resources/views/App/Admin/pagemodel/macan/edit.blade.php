<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Buat Postingan</title>
    <link rel="stylesheet" href="{{ asset('css/pageEdit.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js' )}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Ubah Postingan</h1>
    <form method="POST" action="{{ url("postsMacan/{$post->id}") }}" class="form-control">
    @method('PATCH')
    @csrf

    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $post->image }}">
    </div>
    <div class="mb-3">
        <label for="image_samping" class="form-label">Gambar Samping</label>
        <input type="text" class="form-control" id="image_samping" name="image_samping" value="{{ $post->image_samping }}">
    </div>
    <div class="mb-3">
        <label for="name_car" class="form-label">Name Car</label>
        <input type="text" class="form-control" id="name_car" name="name_car" value="{{ $post->name_car }}">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="int" class="form-control" id="harga" name="harga" value="{{ $post->harga }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<br>
<center>
<form  method="POST" action="{{ url("postsMacan/$post->id") }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
</center>
</html>