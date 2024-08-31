<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt="Logo" id="logo">
        <div class="login-form">
            <h2>Tambah User</h2>
            @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('dataUsers') }}" class="form-control">
                    @csrf
                <div class="input-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="email_verified" class="form-label">
                        Role            
                        <span class="role-info">*0 = User, 1 = Admin</span>
                    </label>
                    <input type="text" class="form-control" id="email_verified" name="email_verified">
                </div>
                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="input-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</la>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                <br><br>
            </form>
        </div>
    </div>
</body>
</html>



