<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche | Buat</title>
    <link rel="stylesheet" href="{{ asset('css/pageEdit.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js' )}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .mb-2 {
            display: block; /* atau inline-block */
            margin-left: 10%;
            height: 40%;
            width: 70%; 
        }
        button {
            display: block; /* atau inline-block */
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<br>
<center>
<h1>Buat Porsche</h1>
</center>
<br>
    <form method="POST" action="{{ url('posts') }}" class="form-control">
    @csrf
        <div class="mb-2">
            <label for="image" class="form-label">Gambar Porsche</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="mb-2">
            <label for="image" class="form-label">Gambar Samping Porsche</label>
            <input type="text" class="form-control" id="image" name="image_samping">
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="nama" name="name_car">
        </div>
        <div class="mb-2">
            <label for="harga" class="form-label">Harga</label>
            <input type="int" class="form-control" id="harga" name="harga">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>