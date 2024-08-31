<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/buying.css') }}">
</head>
<body>
<header>
<a href="/dashboard"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt="Logo"></a>

    <nav>
        <ul>
        <li><a href="/dashboard">Home</a></li>
                <li><a href="/model/911">Models</a></li>
                <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="contact-container">
    <form method="POST" action="{{ url("/purchase/{$post->id}") }}" class="contact-form">
    @method('PATCH')
    @csrf

        <h2>Formulir</h2>
        <div class="form-row">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
            </div>
            <div class="form-group">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $post->no_hp }}">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}">
        </div>
        <div class="form-group">
            <label for="car" class="form-label">Name Car</label>
            <input type="text" class="form-control" id="car" name="car" value="{{ $post->car }}">
        </div>
        <div class="form-group">
            <label for="color">Color Car:</label>
            <select id="color" name="color" value="{{ $post->color }}">
                <option value="Merah">Merah</option>
                <option value="Putih">Putih</option>
                <option value="Hijau">Hijau</option>
                <option value="Silver">Silver</option>
                <option value="Kuning">Kuning</option>
                <option value="Biru">Biru</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $post->alamat }}">
        </div>
        <div class="form-group">
            <label for="status" class="form-label">
                Status            
                <span class="role-info">*0 = process, 1 = done</span>
            </label>
            <input type="boolean" class="form-control" id="status" name="status" value="{{ $post->status }}">
        </div>
        <button type="submit">Simpan</button>
    </form>

    <center>
        
<form  method="POST" action="{{ url("purchase/$post->id") }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
</center>
</div>
</body>
</html>

