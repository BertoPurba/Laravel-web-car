<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/forallmodeluser.css') }}">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js' )}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #active {
            color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <a href="/dashboard"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt="Logo"></a>
        <nav>
            <ul>
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/model/911">Models</a></li>
                <li class="logout-form">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="model-nav">
            <ul>
                <li><a href="/model/911">911</a></li>
                <li><a href="/model/718" id="active">718</a></li>   
                <li><a href="/model/macan">Macan</a></li>
                <li><a href="/model/taycan">Taycan</a></li>
            </ul>
        </section>
        <section class="model-grid">
    @foreach ($posts as $post)
        <div class="model hidden"> <!-- Tambah class hidden -->
            <center>
                <a href="{{ url("/posts718/$post->id")}} "><img src="{{ $post->image }}" alt="718 Cayman" id="size-model"></a>
            </center>
            <p>{{ $post->name_car }}</p>
            <p>From $ {{ number_format($post->harga) }}</p>
            <br>
        </div> 
    @endforeach
</section>
</main>

<script>
    // Menggunakan Intersection Observer untuk mendeteksi kapan elemen muncul di viewport
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        });

        // Mendaftarkan setiap elemen yang memiliki class 'hidden'
        const hiddenElements = document.querySelectorAll('.hidden');
        hiddenElements.forEach((el) => observer.observe(el));
    });
</script>

</body>
</html>
