<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/forallmodel.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js' )}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #active {
            color: #007bff;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header>
    <nav>
            <ul>
                <li class="logout-form">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    <br>
    <div class="all">
    <div class="left">
    <div class="text"><a href="/dataUsers">Users</a></div>
    </div>
    <div class="center">
    <div class="explainer"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt=""></div>
    <div class="text"><a href="/posts911">Home</a></div>
    </div>
    <div class="right">
    <div class="text"><a href="/purchase">Purchase</a></div>
    </div>
    </div>
    <br><br>
    </header>
    <main>
        <section class="model-nav">
            <ul>
                <li><a href="/posts911" id="active">911</a></li>
                <li><a href="/posts">718</a></li>   
                <li><a href="/postsMacan">Macan</a></li>
                <li><a href="/postsTaycan">Taycan</a></li>
            </ul>
        </section>
        <br>
<center>
        <a class="btn btn-success" href="{{ url('create911') }}">+ Tambahkan Mobil</a>
</center>
        <section class="model-grid">
        
        @foreach ( $posts as $post )
            <div class="model">
                <center>
                <a href="{{ url("/admin/posts911/$post->id")}} "><img src="{{ $post->image }}" alt="718 Cayman" id="size-model"></a>
                </center>
                <p>{{$post->name_car}}</p>
                <p>From $ {{ number_format($post->harga) }}</p>
                <a href="{{ url("/posts911/$post->id/edit")}} " class="btn btn-warning">Edit</a>
                <br>
            </div> 
        
        @endforeach
        </section>
    </main>
</body>
</html>
