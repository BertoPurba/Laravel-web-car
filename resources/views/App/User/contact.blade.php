<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="icon">
    <link href="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
<header>
<a href="/dashboard"><img src="https://tse2.mm.bing.net/th?id=OIP.rIY7QrJ_LmdIKmc_K3oyIgHaGR&pid=Api&P=0&h=220" alt="Logo"></a>

    <nav>
        <ul>
        <li><a href="/dashboard">Home</a></li>
                <li><a href="/models">Models</a></li>
                <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="contact-container">
    <form class="contact-form">
        <h2>Contact Us</h2>
        <div class="form-row">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name *" required>
            </div>
            <div class="form-group">
                <label for="contact">Your Contact Number</label>
                <input type="text" id="contact" name="contact" placeholder="Your Contact Number *" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email *" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Message *" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</div>
</body>
</html>
