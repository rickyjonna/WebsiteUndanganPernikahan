<!DOCTYPE html>
<html>

<head>
    <title>Undangan Pernikahan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/maps.css">
    <link rel="stylesheet" type="text/css" href="../css/gallery.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
    <style>
        body,
        h1,
        h2 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%
        }

        p {
            line-height: 2
        }

        .bgimg2,
        .bgimg3 {
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        .bgimg2,
        .bgimg3 {
            background-image: url("../images/img2.jpg")
        }
    </style>
</head>

<body>
    <!-- musik -->
    <audio autoplay loop>
        <source src="../audio/yoie.ogg" type="audio/ogg">
        <source src="../audio/yoie.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    </audio>

    <!-- Undangan Ilham & Bunga -->
    <!-- Background photo -->
    <div id="home" class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min">
        <div class="w3-content" data-aos="fade-left">
            <h1 class="w3-center w3-text-grey">Undangan Pernikahan</h1>
            <h1 class="w3-center w3-text-grey">Kepada : {{ $name }}</h1>
            <h2 class="w3-center w3-text-grey">Kami Mengharapkan Kehadiran Anda</h2>
            </br>
            <h2 class="w3-center w3-text-grey"id="cd"></h2>
            </br>
            <h1 class="w3-center w3-text-grey"><b>(QS. An-Nisa : 22)</b></h1>
            <h2 class="w3-center w3-text-grey">وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنْفُسِكُمْ أَزْوَاجًا
                لِتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً إِنَّ فِي ذَلِكَ لَآيَاتٍ لِقَوْمٍ
                يَتَفَكَّرُونَ</h2>
            <h3 class="w3-center w3-text-grey">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan
                Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
                terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</h3>
            </br>
            <h3 class="w3-center w3-text-grey">
                Assalamu'alaikum Warahmatullahi Wabarakatuh.
                Maha Suci Allah tuhan semesta alam yang telah menciptakan makhluk-Nya berpasang-pasangan. Dengan memohon
                ridha
                dan rahmat Allah SWT. Kami dengan rasa syukur yang mendalam bermaksud
                membagikan kabar gembira dengan diselenggarakan acara pernikahan putera-puteri kami.
            </h3>
            </br>
        </div>
    </div>

    </br>

    <!-- Gallery -->
    <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min" id="galeri">
        <h1 class="w3-center w3-text-grey">
            Gallery
        </h1>
        </br>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="../images/img2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="../images/img4.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="../images/img5.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="../images/img6.jpg" style="width:100%">
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        </br>
        </br>
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    </br>

    <!-- Time&Place information -->
    <div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="waktutempat">
        <div class="w3-content" data-aos="fade-right">
            <h1 class="w3-text-grey"><b>Waktu & Lokasi</b></h1>
            <br>
            <div class="w3-row">
                <div class="w3-half">
                    <h2>Waktu</h2>
                    <p>Akad - 03:00pm</p>
                    <p>Resepsi - 05:00pm</p>
                </div>
                <div class="w3-half">
                    <h2>Lokasi</h2>
                    <p>Jl. Margonda Raya No.230A, Kemiri Muka,
                        Kecamatan Beji, Kota Depok, Jawa Barat 16423,
                        Savero Wedding Depok
                    </p>
                </div>
            </div>
            </br>
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0932047526826!2d106.82806815024325!3d-6.381970164178186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb36688e961b%3A0xb7d1e4892c8da73b!2sSAVERO%20WEDDING%20DEPOK!5e0!3m2!1sid!2sid!4v1669644785081!5m2!1sid!2sid">
            </iframe>
            </br>
            </br>
            <a href="https://goo.gl/maps/ZLf7qLtX3HcdnBat6" class="btn" target="_blank" data-aos="zoom-in">
                <i class="far fa-directions">
                </i>
                Set Perjalanan!
            </a>
        </div>
    </div>

    </br>

    <!-- Reservation section -->
    <div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="reservasi">
        <h1>Kami Berharap Anda Bisa Hadir</h1>
        <p class="w3-large">Klik tombol di bawah ini untuk reservasi !</p>
        <p class="w3-xlarge">
            <button onclick="document.getElementById('reservation').style.display='block'"
                class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off"
                style="padding:8px 60px">Reservasi</button>
        </p>
    </div>

    <!-- Reservation modal -->
    <div id="reservation" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:100%">
            <div class="w3-container w3-white w3-center">
                <h1 class="w3-wide">Form Reservasi</h1>
                {{-- onsubmit="return validateForm() (kalau mau pake js) --}}
                <form action="/main" method="post">
                    @csrf
                    <label for="name" class="form-label">Nama</label>
                    <input class="w3-input w3-border" type="text" placeholder="Nama" name="name" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="phone_number" class="form-label">No.Handphone(WA)</label>
                    <input class="w3-input w3-border" type="text" placeholder="No.Handphone(WA)"
                        name="phone_number" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="wish" class="form-label">Ucapan</label>
                    <input class="w3-input w3-border" type="text" placeholder="Ucapan" name="wish" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="w3-row">
                        <div class="w3-half">
                            <button type="submit" class="w3-button w3-block w3-green">Hadir</button>
                        </div>
                        <div class="w3-half">
                            <button onclick="document.getElementById('reservation').style.display='none'"
                                type="button" class="w3-button w3-block w3-red">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hubungi kami -->
    <div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide">
        <h1>Untuk info lebih detail dapat menghubungi kami</h1>
        <a href="https://api.whatsapp.com/send?phone=6287739608281&text=Halo%20Ilham%20dan%20Bunga,%20saya%20ingin%20mendapatkan%20info%20lebih%20lanjut%20tentang%20acara%20pernikahan%20kalian!%20&source=&data="
            target="_blank">
            <button class="btnwa">
                <i class="fab fa-whatsapp"></i>
                Whatsapp
            </button>
        </a>
    </div>

    </br>

    <!-- Protokol Kesehatan -->
    <div class="w3-display-container bgimg3 py-5" id="home">
        <div class="w3-display-middle w3-text-white w3-center">
            <h1 class="w3-jumbo">Protokol Kesehatan</h1>
            <h2>Untuk memutus mata rantai
                Covid-19 jangan lupa untuk menerapkan Protokol Kesehatan. Terimakasih
            </h2>
            <img src="../images/cuci-tangan.png" alt="cucitangan" style="width:100px">
            <img src="../images/jaga-jarak.png" alt="jagajarak" style="width:100px">
            <img src="../images/pakai-masker.png" alt="pakaimasker" style="width:100px">
        </div>
    </div>

    </br>

    <!-- Navbar bawah -->
    <div class="w3-bottom w3-small w3-bar">
        <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
            <nav style="block: inline-table;">
                <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
                <a href="#galeri" style="width:25%" class="w3-bar-item w3-button">Galeri</a>
                <a href="#waktutempat" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Lokasi</a>
                <a href="#reservasi" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Reservasi</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>createdby.RickyJonna</p>
    </footer>

    </br>
    </br>

    <!-- Script -->
    <script src="../js/countdown.js"></script>
    <script src="../js/reservation.js"></script>
    <script src="../js/gallery.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
