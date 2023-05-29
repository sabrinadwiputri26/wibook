
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Wibook </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<!-- heading section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-book"></i>Wi-Book</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <a href="/login"><button class="btn">log in</button></a>
        </ul>
    </nav>

</header>

<!-- heading section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>Selamat datang di Wibook Perpustakaan Belajar Online Wikrama!!</h1>
        <p>Wibook adalah perpustakaan Online yang dapat dikunjungi kapan saja dan dimana saja, Wibook juga menyediakan pilihan buku yang lengkap</p>
        <a href="/register"><button class="btn">register</button></a>
    </div>

    <div class="image">
        <img src="{{asset('assets/img/hero.png')}}" alt="">
    </div>

</section>

<!-- home section ends -->





<!-- Product section starts  -->

<section class="product" id="product">

<h1 class="heading">Top Book of the mounth</h1>

<h1 class="title">Rekomendasi buku yang banyak dibaca oleh orang-orang</h1>

<div class="box-container">

    <div class="box">
        <h3>Mariposa</h3>
        <img src="{{asset('assets/img/mariposa1.jpg')}}" alt="">
        <span class="price">Novel ini mengisahkan tentang </span>
        <span class="price">perjalanan cinta anak remaja SMA</span>
        <a href="#"><button class="btn">READ NOW</button></a>
    </div>

    <div class="box">
        <h3>Harry Poter</h3>
        <img src="{{asset('assets/img/harry.webp')}}" alt="">
        <span class="price">Buku tentang petualangan Penyihir</span>
        <span class="price">Harry Potter dan sahabatnya.</span>
        <a href="#"><button class="btn">READ NOW</button></a>
    </div>

    <div class="box">
        <h3>Jasmine's</h3>
        <img src="{{asset('assets/img/jasmine.jpg')}}" alt="">
        <span class="price">Buku ini berisi tentang Princess</span>
        <span class="price">Jasmine dan keajaibannya</span>
        <a href="#"><button class="btn">READ NOW</button></a>
    </div>

    <div class="box">
        <h3>Rentang Waktu</h3>
        <img src="{{asset('assets/img/rentang.png')}}" alt="">
        <span class="price">Novel menjelaskan jarak waktu</span>
        <span class="price">bertemunya sepasang kekasih</span>
        <a href="#"><button class="btn">READ NOW</button></a>
    </div>

</div>

</section>

<!-- Product section ends -->



<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>Mengapa website ini dibuat?</h3>
        <p>Website ini dibuat untuk memudahkan semua siswa-siswi wikrama yang gemar membaca, mereka bisa membaca dimana pun hanya dengan membuka website wibook tanpa perlu datang ke perpustakaan langsung</p>
    </div>


    <div class="box">
        <h3>contact us</h3>
        <p> <i class="fas fa-map-marker-alt"></i> JL. BALUBUR SARI, NO.9, BOGOR SELATAN - KOTA, ID. 16137 </p>
        <p> <i class="fas fa-globe"></i> @sabrina_dpu </p>
        <p> <i class="fas fa-phone"></i> +62 898 4629 292 </p>
    </div>

</div>

<h1 class="credit"> created by <a href="#">Sabrina Dwi Putri Utami </a> | all rights reserved. </h1>

</section>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>

</body>
</html>