<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('/css/swiper-bundle.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('/css/styles.css') !!}">

    <title>Beranda | Website Wisata Cianjur</title>
    <link rel="icon" href="{!! asset('/img/icon-desa.png') !!}">
</head>
<body>
@extends('layout')
    <main class="main">
        <section class="home" id="home">
            <img src="{{url('/img/home (1).png')}}" alt="" class="home-img">
            <div class="home-container container grid">
                <div class="home-text">
                    <span class="home-text-sub">MARI <span style="color: var(--main-color);" class="type"></span></span>
                    <h1 class="home-text-title">Cianjur</h1>
                    <h1 class="home-text-sub-title">JAWA BARAT</h1>
                    <h2>Staycation di Tempat dengan Seribu Destinasi Wisata</h2>
                    <a href="{{ url('/explore/') }}" class="button">Jelajahi</a>
                </div>
                <div class="home-social">
                    <a href="https://www.instagram.com/kecamatancipanas/" target="_blank" class="home-social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <!-- <a href="" target="_blank" class="home-social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="" target="_blank" class="home-social-link">
                        <i class="ri-instagram-fill"></i>
                    </a> -->
                </div>
            </div>
        </section>

        <section class="category section">
            <h2 class="section-title"><b>Pilihan Kategori</b> <br> Kami Untuk Kamu</h2>
            <div class="category-container container grid">
                <div class="box">
                    <img src="{{url('/img/waterfall.png')}}" alt="">
                    <h3>Wisata</h3>
                    <p> Berbagai tempat wisata yang bisa kamu kunjungi bersama keluarga</p>
                </div>
        
                <div class="box">
                    <img src="{{url('/img/rice.png')}}" alt="">
                    <h3>Kuliner</h3>
                    <p>Buat perutmu kenyang dengan merasakan kuliner di Cianjur</p>
                </div>
        
                <div class="box">
                    <img src="{{url('/img/indonesian.png')}}" alt="">
                    <!-- https://www.flaticon.com/free-icon/indonesian_1072954 -->
                    <h3>Budaya</h3>
                    <p>Melihat keberagaman budaya dari warga daerah setempat</p>
                </div>
        
                <div class="box">
                    <img src="{{url('/img/building.png')}}" alt="">
                    <h3>Fasilitas</h3>
                    <p>Sarana dan prasana yang akan membantumu saat di Cianjur</p>
                    <!-- <a href="#" class="button">read more</a> -->
                </div>
        
            </div>
        
        </section>

        <section class="about section" id="about">
            <div class="about-container container grid">
                <div class="about-data">
                    <h2 class="section-title about-title">Seputar Kabupaten Cianjur</h2>
                    <p class="about-description">
                        Sebuah kabupaten di Provinsi Jawa Barat yang memiliki banyak sekali tempat wisata yang 
                        potensial untuk dikembangkan dan diperkenalkan ke masyarakat luas. 
                        Website ini dibangun sebagai media promosi destinasi wisata dan kearifan lokal 
                        yang ada di Cianjur yang masih banyak belum diketahui oleh masyarakat umum.
                    </p>
                    <a href="https://www.google.com/maps/@-6.6857376,106.9334267,12z" class="button">Lihat Peta</a>
                </div>

                <div class="about-img">
                    <div class="about-img-overlay">
                        <img src="{{url('/img/tamanbunganusantara3.jpg')}}" alt="" class="about-img-one">
                    </div>

                    <div class="about-img-overlay">
                        <img src="{{url('/img/airterjuncibereum-potrait.jpg')}}" alt="" class="about-img-two">
                    </div>
                </div>
            </div>
        </section>
        <section class="discover section" id="discover">
            <h2 class="section-title">Temukan <br> Tempat Paling Direkomendasikan</h2>
            <div class="discover-container container swiper">
                <div class="swiper-wrapper">
                    
                    <div class="discover-card swiper-slide">
                        <img src="{{url('/img/tamanbunganusantara-potrait.jpg')}}" alt="" class="discover-img">
                        <div class="discover-text">
                            <h2 class="discover-title" >Taman Bunga Nusantara</h2>
                            <span class="discover-description"><i class="ri-star-fill"></i> 4.6</span>
                        </div>
                    </div>

                    <div class="discover-card swiper-slide">
                        <img src="{{url('/img/card2.jpg')}}" alt="" class="discover-img" >
                        <div class="discover-text">
                            <h2 class="discover-title">Gunung Gede Pangrango</h2>
                            <span class="discover-description"><i class="ri-star-fill"></i> 4.7</span>
                        </div>
                    </div>

                    <div class="discover-card swiper-slide">
                        <img src="{{url('/img/kebunrayacibodas-potrait.jpg')}}" alt="" class="discover-img">
                        <div class="discover-text">
                            <h2 class="discover-title">Kebun Raya Cibodas</h2>
                            <span class="discover-description"><i class="ri-star-fill"></i> 4.6</span>
                        </div>
                    </div>

                    <div class="discover-card swiper-slide">
                        <img src="{{url('/img/thelittlevenice-potrait.jpg')}}" alt="" class="discover-img">
                        <div class="discover-text">
                            <h2 class="discover-title">The Little Venice Kota Kembang</h2>
                            <span class="discover-description"><i class="ri-star-fill"></i> 4.2</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="galery section" id="galery">
            <h2 class="section-title">Galeri</h2>
            <div class="galery-container container grid">
                <div class="galery-img">
                    <img src="{{url('/img/galery3.jpg')}}" alt="">
                </div>
                <div class="galery-img">
                    <img src="{{url('/img/galery2.jpg')}}" alt="">
                </div>
                <div class="galery-img">
                    <img src="{{url('/img/galery3.jpg')}}" alt="">
                </div>
                <div class="galery-img">
                    <img src="{{url('/img/galery4.jpg')}}" alt="">
                </div>
                <div class="galery-img">
                    <img src="{{url('/img/galery5.jpg')}}" alt="">
                </div>
                <div class="galery-img">
                    <img src="{{url('/img/galery2.jpg')}}" alt="">
                    <!-- Photo by <a href="https://unsplash.com/@azinumoto?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Azinumoto</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> -->
                </div>
            </div>
        </section>

        <section class="testimonial section">
            <h2 class="section-title">Testimoni</h2>
            <span class="section-sub">Apa kata wisatawan?</span>
            <div class="testimonial-container container swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial-content swiper-slide">
                        <div class="testimonial-text">
                            <div class="testimonial-header">
                                <img src="{{url('/img/user-woman.jpg')}}" alt="" class="testimonial-img">
                                <!-- <a href='https://www.freepik.com/vectors/woman'>Woman vector created by jcomp - www.freepik.com</a> -->
                                <div>
                                    <h3 class="testimonial-name">Diaz Angel</h3>
                                    <span class="testimonial-visitor">Wisatawan Taman Bunga Nusantara</span>
                                </div>
                            </div>
                            <div>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-description">Taman bunga besar, tempat indah ini selalu memanggil Anda kembali, setelah saya mengunjungi taman ini pada tahun 2017, lebih baik dari sekarang. Namun tetap terawat dengan baik, jernih dan bagus untuk berfoto dengan banyak spot bagus, pastikan berkunjung pada musim yang tepat. Pastinya membutuhkan perhatian ekstra dan dana yang besar. Dengan harga tiket murah Rp 40.000 anda sudah bisa menikmati pemandangan indah, rerumputan hijau dan air bersih yang segar, berfoto sepuasnya.</p>    
                    </div>
    
                    <!-- TESTIMONIAL 2 -->
                    <div class="testimonial-content swiper-slide">
                        <div class="testimonial-text">
                            <div class="testimonial-header">
                                <img src="{{url('/img/testi2.png')}}" alt="" class="testimonial-img">
                                <div>
                                    <h3 class="testimonial-name">Riko Saputra</h3>
                                    <span class="testimonial-visitor">Wisatawan Kebun Raya Cibodas</span>
                                </div>
                            </div>
                            <div>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-line testimonial-icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-description">Tempat wisata bagus di daerah puncak, asik bawa keluarga</p>    
                    </div>
    
                    <!-- TESTI 3 -->
                    <div class="testimonial-content swiper-slide">
                        <div class="testimonial-text">
                            <div class="testimonial-header">
                                <img src="{{url('/img/testi3.png')}}" alt="" class="testimonial-img">
                                <div>
                                    <h3 class="testimonial-name">WRN UNO</h3>
                                    <span class="testimonial-visitor">Wisatawan Gunung Gede Pangrango</span>
                                </div>
                            </div>
                            <div>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-description">Keindahan alam yg masih terjaga pada Gunung Pangrango sebagai daya tarik primer bagi para pendaki. Ada poly objek wisata menarik pada sepanjang jalur menuju zenit  yg mampu engkau  temukan. Inilah beberapa objek alam istimewa yg akan engkau  temukan pada Gunung Pangrango</p>    
                    </div>

                    <div class="testimonial-content swiper-slide">
                        <div class="testimonial-text">
                            <div class="testimonial-header">
                                <img src="{{url('/img/user-man.jpg')}}" alt="" class="testimonial-img">
                                <div>
                                    <h3 class="testimonial-name">Aganto Seno</h3>
                                    <span class="testimonial-visitor">Wisatawan The Little Venice Kota Bunga</span>
                                </div>
                            </div>
                            <div>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                                <i class="ri-star-fill testimonial-icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-description">Meski lokasinya tidak cukup luas, banyak spot yang instagramable. Sangat direkomendasikan untuk dikunjungi, kecuali tiket masuknya yang agak mahal</p>    
                    </div>

                </div>
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>
        </section>

        <section class="subscribe section">
            <div class="subscribe-bg">
                <div class="subscribe-container container">
                    <h2 class="section-title subscribe-title">Subscribe<br> Buletin Kami</h2>
                    <p class="subscribe-description">Subscribe untuk mendapatkan informasi menarik mengenai <br> destinasi wisata di Cianjur
                    </p>

                    <form action="{{ route('subscribers.store') }}" method="post" class="subscribe-form">
                        @csrf
                        @if (session('subscribed'))
                    <div class="alert alert-success">
                        <p>{{ session('subscribed') }}</p>
                    </div>
                    @endif
                        <input type="text" class="subscribe-input" name="email" id="email">
                        <button type="submit" id="subscribe" class="button" value="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    @extends('footer')
    <script src="{!! asset('/js/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('/js/main.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup-icon"></i>
    </a>
    <script src="{!! asset('/js/scrollreveal.js') !!}"></script>
    <script>
    var typed = new Typed(".type", {

      strings: ["MIMPIKAN", "EKSPLORASI", "TEMUKAN"],
      typeSpeed:100,
      backSpeed:70,
      loop:true,
    
    });
    </script>
</body>
</html>