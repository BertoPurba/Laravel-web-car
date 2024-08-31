<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <section class="intro">
        <h1>Welcome to the World of Porsche</h1>
        <p>Rasakan sensasi berkendara Porsche yang luar biasa. Setiap model dibuat dengan cermat untuk menghadirkan performa, kemewahan, dan gaya yang tak tertandingi. Baik Porsche 911 yang ikonik, Macan yang bertenaga, atau Taycan yang futuristik, ada Porsche yang sesuai dengan hasrat berkendara Anda.</p>
        <br>
        <a href="/model/911" class="btn btn-primary">Explore Our Models</a>
    </section>

    <section class="models-overview">
        <br><br><br>
        <h2>Discover Our Top Models</h2>
        <div class="model">
            <img src="https://www.hdwallpapers.in/thumbs/2024/dark_grey_porsche_911_carrera_gts_2024_car_4k_5k_hd_cars-t2.jpg" alt="Porsche 911">
            <h3>Porsche 911</h3>
            <p>Porsche 911 adalah lambang mobil sport. Dengan garis keturunan yang mencakup beberapa dekade, mobil ini menggabungkan teknologi mutakhir dengan desain yang tak lekang oleh waktu. 911 dirancang bagi mereka yang menginginkan performa dan dinamika berkendara terbaik.</p>
            <a href="/model/911" class="btn btn-secondary">see models</a>
        </div>
        <div class="model">
            <img src="https://www.hdwallpapers.in/thumbs/2022/orange_porsche_macan_t_2022_car_4k_hd_cars-t1.jpg" alt="Porsche Cayenne">
            <h3>Porsche Macan</h3>
            <br>
            <p>Porsche Macan mendefinisikan ulang pengalaman berkendara dengan SUV. Mobil ini menghadirkan performa yang bertenaga, kenyamanan yang luar biasa, dan fleksibilitas untuk menaklukkan jalanan kota dan medan yang berat.</p>
            <br>
            <a href="/model/macan" class="btn btn-secondary">see models</a>
        </div>
        <div class="model">
            <img src="https://www.hdwallpapers.in/thumbs/2023/white_prior_design_porsche_taycan_pd_te_aerodynamic_kit_wallpaper_car_4k_8k_hd_cars-t1.jpg" alt="Porsche Taycan">
            <h3>Porsche Taycan</h3>
            <br>
            <p>Taycan adalah mahakarya Porsche yang sepenuhnya bertenaga listrik. Mobil ini menawarkan perpaduan antara akselerasi yang mengasyikkan, pengendalian yang dinamis, dan teknologi canggih, semuanya tanpa emisi.</p>
            <br>
            <a href="/model/taycan" class="btn btn-secondary">see models</a>
        </div>
    </section>
<br><br><br>
    <section class="heritage">
    <h2>Porsche history</h2>
    <p>Porsche memiliki sejarah panjang dan gemilang dalam dunia otomotif, yang dimulai sejak Ferdinand Porsche mendirikan perusahaan pada tahun 1931. Setiap mobil yang kami produksi mencerminkan warisan inovasi dan keunggulan teknis. Mulai dari kemenangan pertama kami di Le Mans hingga pengenalan Porsche 911 yang ikonik, setiap momen dalam sejarah Porsche telah membentuk identitas kami sebagai pelopor di dunia otomotif.</p>
    <p>Selama bertahun-tahun, Porsche terus memimpin dengan memperkenalkan inovasi yang menantang batas teknologi dan desain. Dari mesin turbocharged pertama di dunia hingga sistem penggerak empat roda yang revolusioner, setiap inovasi adalah bukti dedikasi kami untuk memberikan pengalaman berkendara terbaik.</p>
</section>

<br><br>

<section class="innovation">
    <h2>Innovation at Porsche</h2>
    <p>Di Porsche, inovasi adalah inti dari setiap produk yang kami buat. Kami percaya bahwa masa depan otomotif harus lebih efisien, lebih ramah lingkungan, dan tetap menawarkan performa yang luar biasa. Inilah mengapa kami terus mengembangkan teknologi baru, seperti sistem penggerak listrik pada Taycan yang menawarkan kinerja luar biasa tanpa emisi.</p>
    <p>Kami juga berinvestasi dalam pengembangan bahan ringan, sistem aerodinamika canggih, dan teknologi digital yang membuat setiap perjalanan lebih nyaman dan aman. Dengan setiap model baru, kami membawa inovasi yang membuat mobil kami lebih efisien, lebih aman, dan lebih menyenangkan untuk dikendarai.</p>
</section>

</main>
</body>
</html>
