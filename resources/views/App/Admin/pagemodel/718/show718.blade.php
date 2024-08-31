<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/klikmodels.css') }}">
</head>
<body>
<header>
    <a href="/posts"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt="Logo" style="width:59px; height: 49px"></a>
        <nav>
            <ul>
                <li><a href="/posts">Models</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <br><br>
    </header>
    
    <main>
    <section class="hero">
        <img src="{{ $post->image }}" style="width: 50%; height: 50%">
    </section>
    
    <section class="details">
        <h1>{{$post->name_car}}</h1>
        <h5 id="price">From $ {{ number_format($post->harga) }}</h5>
    </section>
    <br><br><br>
<center>
    <p class="mileage">269 mi</p>
    <p class="mileage">¹Manufacturer’s Suggested Retail Price. Excludes options; taxes; title; registration; delivery, processing and handling fee; dealer charges. Dealer sets actual selling price.</p>
</center>
<br><br><br><br>
    <section class="performance">
        <img src="{{ $post->image_samping }}"
            alt="Taycan Turbo GT Weissach Package">
        <div class="performance-details">
            <ul>
                <li>
                    <h1 class="highlight number" data-target="2.1">2.1</h1> s
                    <li>
                    <p>0 - 60 mph with Launch Control</p>
                    </li>
                </li>
                <li>
                    <h1 class="highlight number" data-target="760">0</h1> kW / <h1  class="highlight number" data-target="1019">0</h1>hp
                    <li>
                    <p>Overboost Power with Launch Control</p>
                    </li>
                </li>
                <li>
                    <h1 class="highlight number" data-target="190">0</h1>mph
                    <li>
                    <p>Top track speed (with summer tires)</p>
                    </li>
                </li>
            </ul>
        </div>  
    </section>

    <section>
        <center>
        <button type="button"  class="hover-2"><a href="/formulir">BUY NOW</a></button>
        </center>
    </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.number');
    const speed = 200; // The lower the speed, the faster the count

    const updateCount = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const inc = target / speed;

        if (count < target) {
            counter.innerText = (count + inc).toFixed(1);
            setTimeout(() => updateCount(counter), 10);
        } else {
            counter.innerText = target;
        }
    };

    const handleIntersection = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateCount(entry.target);
                observer.unobserve(entry.target); // Stop observing after animation starts
            }
        });
    };

    const observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.1
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>

</body>
</html>
