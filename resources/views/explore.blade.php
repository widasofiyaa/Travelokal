<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('/css/swiper-bundle.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/font-awesome.css') !!}">
    <title>Jelajah | Website Wisata Cianjur</title>
    <link rel="icon" href="{!! asset('/img/icon-desa.png') !!}">

    <title>Explore</title>
</head>
<body>
@extends('layout')
    <main class="main">
        <section class="explore section container" id="explore">
            <span class="section-sub">Wisata, Kuliner, Budaya, dan Akomodasi</span>
            <h2 class="section-title">Kearifan Lokal</h2>

            <div class="explore-nav">
                <span class="explore-item active-explore" data-filter = "all">Semua</span>
                <span class="explore-item" data-filter = ".wisata">Wisata</span>
                <span class="explore-item" data-filter = ".kuliner">Kuliner</span>
                <span class="explore-item" data-filter = ".budaya">Budaya</span>
                <span class="explore-item" data-filter = ".akomodasi">Akomodasi</span>
            </div>
            <div class="explore-container grid">
            
                <div class="explore-content mix kuliner">
                    <img src="{{url('/img/explore-cafemamifokobo.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Cipanas, Cianjur</span>
                    <h3 class="explore-title">Cafe and Kitchen Mamifokobo</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Cafe yang nyaman, tempatnya luas terdiri dari 2 lantai dan dipenuhi dengan dekorasi yang cantik dan asri, Memiliki parkiran yang cukup luas . Sangat cocok untuk menikmati hidangan dengan rekan dan keluarga.</p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>Restoran</span></li>
                                <li>Lokasi - <span>Jl. Raya Puncak - Gadog No.26, Ciloto, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253</span></li>
                                <li>Jam Operasional - <span>Senin-Kamis (10.00-23.00 WIB), Jumat-Minggu (10.00-24.00 WIB)</span></li>
                                <li>Rating - <span>4.5 dari 5</span></li>
                                <li>Lihat Menu - <span><a href="https://drive.google.com/drive/folders/1Xvu31OVUNlfAylKOhXiksU6Vp_IzJXkK?usp=sharing" target="_blank" rel="noopener noreferrer">Cafe and Kitchen Mamifokobo's Menu</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @foreach($wisatas as $wisata)
                <div class="explore-content mix wisata">
                    <img src="{{url($wisata->image)}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">{{ $wisata->locate }}</span>
                    @csrf
                    <h3 class="explore-title">{{ $wisata->title }}</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>{{ $wisata->description }}</p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>{{ $wisata->type }}</span></li>
                                <li>Lokasi - <span>{{ $wisata->location }}</span></li>
                                <li>Harga Tiket - <span>Rp {{ $wisata->price }}</span></li>
                                <li>Jam Operasional - <span>{{ $wisata->duration }}</span></li>
                                <li>Lihat Peta - <span><a href="{{ $wisata->maps }}">{{ $wisata->title }}</a></span></li>
                                <li>Rating - <span>{{ $wisata->rate }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="explore-content mix budaya"> 
                    <img src="{{url('/img/Cipanas-Plant-Festival.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Cianjur</span>
                    <h3 class="explore-title">Cipanas Plant Festival 2021</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Cipanas Plant Festival 2021 yang berkolaborasi dengan Pemerintah Kabupaten (Pemkab) Cianjur melalui Dinas Pertanian menggelar festival tanaman hias, di Roofpark, Cipanas, Cianjur, Senin (08/11/2021).
                                <br><br>
                                Ketua Pelaksana Cipanas Plant Festival 2021, Sansan Iksan Waluyo mengatakan, tujuan awal festival ini diadakan adalah untuk meningkatkan keterhubungan semua lini yang terhubung dalam proses kegiatan-kegiatan tanaman hias dari hulu sampai hilir ataupun yang meliputi hubungan dengan yang berada di luar keduanya.
                                <br><br>
                                Bupati Cianjur Herman Suherman mengapresiasi adanya festival tanaman hias 2021 ini yang diinisiasi oleh para pegiat tanaman Cipanas. Sehingga pasca pandemi yang super ketat beberapa waktu kemarin, dapat segera mulai menggeliat lagi, dan tentu bisa mendongkrak ekonomi masyarakat.
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>Wisata Alam</span></li>
                                <li>Lokasi - <span>Cianjur, Jawa Barat, Indonesia</span></li>
                                <li>Harga Tiket Masuk - <span>Senin-Jumat: Rp 29.000 (WNI), Rp 320.000 (WNA), Rp 17.500 (Pelajar) <br> 
                                Sabtu - Minggu: Rp 34.000 (WNI), Rp 470.000 (WNA), Rp 20.500 (Pelajar)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="explore-content mix akomodasi">
                    <img src="{{url('/img/Hotel-Cianjur.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Pacet Cianjur</span>
                    <h3 class="explore-title">Hotel Cianjur</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li> Alamat : <span> Jl. Raya Cipanas Cipanas No.KM. 81,3, Gadog, Kec. Pacet, Kabupaten Cianjur, Jawa Barat 43253</span></li>
                                <li> Hotel  : <span>Bintang 3 </span></li>
                                <li> Rating : <span>4,3/5 (1.706 Google Review)  </span></li>
                                <li> harga  : <span>Start from 311k/nett </span></li>
                            </ul>
                        </div>
                    </div>
                </div>                
                <div class="explore-content mix kuliner">
                    <img src="{{url('/img/explore-nicole-kitchen lounge.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Cipanas, Cianjur</span>
                    <h3 class="explore-title">Nicole Kitchen Lounge</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>Restoran</span></li>
                                <li>Lokasi - <span>Kampoeng Brasco FO, 3rd Floor (Jl. Raya Hanjawar No. 1 Cimacan, Cipanas – Puncak)</span></li>
                                <li>Jam Operasional - <span>Senin-Jumat (09.00-22.00 WIB), Sabtu (09.00-23.00 WIB), Minggu (09.00-22.00 WIB)</span></li>
                                <li>Rating - <span>4.6 dari 5</span></li>
                                <li>Lihat Menu - <span><a href="https://drive.google.com/file/d/1n-jjQNzTRNzQVmzjRhhJxkK_AQVPwu4i/view">Nicole's Lounge Menu</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="explore-content mix kuliner">
                    <img src="{{url('/img/explore-roofpark-puncak.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Cipanas, Cianjur</span>
                    <h3 class="explore-title">Roofpark Puncak</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Restoran yang menyediakan menu Western & Tradisional. Untuk menikmati sejuknya Restoran Roofpark ini kamu
                                dapat melakukan reservasi atau langsung datang. Roofpark memiliki fasilitas seperti Billiard, Karaoke, Live Music, 
                                Darts Game, Play Ground, Free Wifi & Toilet yang bersih dan nyaman.</p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>Restoran</span></li>
                                <li>Lokasi - <span>Istana Raja FO, Jl. Raya Puncak - Cianjur, Palasari, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253</span></li>
                                <li>Jam Operasional - <span>Senin-Jumat (09.00-23.00 WIB), Sabtu (09.00-00.00 WIB), Minggu (09.00-23.00 WIB)</span></li>
                                <li>Rating - <span>4.6 dari 5</span></li>
                                <li>Kontak - <span><a href="https://api.whatsapp.com/send/?phone=%2B6282261187722&text&app_absent=0">WhatsApp</a></span></li>
                                <li>Lihat Menu - <span><a href="https://roofpark.co.id/menu-rpc-rpb/#dearflip-df_2074/1/">Roofpark's Menu</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="explore-content mix akomodasi">
                    <img src="{{url('/img/RSUD-Cimacan.jpeg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Pacet Cianjur</span>
                    <h3 class="explore-title">RSUD Cimacan</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Rumah Sakit Umum Daerah Cimacan adalah sebuah rumah sakit yang terletak di
                                Kabupaten Cianjur, Jawa Barat. RSUD Cimacan adalah rumah sakit umum yang berada dibawah
                                otoritas Pemerintah Kabupaten Cianjur. Rumah Sakit Umum Daerah Cimacan pada awalnya
                                adalah Puskesmas Pacet (Cimacan) yang sudah berdiri sejak tahun 1953, kemudian pada tahun
                                1981 statusnya meningkat menjadi Puskesmas DTP dan berubah status menjadi Rumah Sakit.
                                Posisi Rumah Sakit Umum Daerah Cimacan yang strategis terletak di sebelah utara kabupaten
                                Cianjur yang merupakan daerah wisata alam dan villa yang cukup terkenal antara jalur Bandung
                                - Jakarta.
                                </p>
                        </div>
                        
                    </div>
            </div>

                <div class="explore-content mix kuliner">
                    <img src="{{url('/img/explore-satemaranggimangmunir.jpg')}}" alt=""> 
                    <!-- <div class="explore-text"> -->
                    <span class="explore-sub">Cipanas, Cianjur</span>
                    <h3 class="explore-title">Sate Maranggi Mang Munir</h3>
                    <button href="" class="button button-detail">Lihat Detail</button>
                    <!-- </div> -->
                    <div class="explore-detail">
                        <div class="description">
                            <p>Warung Sate Maranggi Mang Munir adalah tempat yang menjual sate maranggi. Warung ini
                                adalah salah satu warung sate maranggi yang terfavorit di Cianjur. Sate maranggi ini adalah
                                makanan khas dari Jawa Barat khususnya Purwakarta. Warung Sate Maranggi Mang Munir
                                tidak hanya menjual sate saja tetapi juga berbagai macam pendampingnya seperti,
                                perkedel, tongkol, tahu tempe, sambal, nasi, telur, ketan, ati ampela, dan ayam bakar.
                                Semua menu yang tersedia ditampilkan dalam etalase warung. Bagi kamu yang tidak bisa makan di tempat
                                Sate Maranggi Mang Munir ini menyediakan layanan takeaway dan delivery.
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Tipe - <span>Warung Makan</span></li>
                                <li>Lokasi - <span>Jalan Raya Puncak - Cianjur, Gadog, Kec. Pacet, Kabupaten Cianjur, Jawa Barat 43253</span></li>
                                <li>Jam Operasional - <span>13.00-23.00 WIB</span></li>
                                <li>Rating - <span>4.6 dari 5</span></li>
                                <li>Kontak - <span><a href="https://api.whatsapp.com/send/?phone=%2B6281806638103&text&app_absent=0">WhatsApp</a></span></li>
                                <li>Lihat Menu - <span><a href="https://drive.google.com/drive/u/0/folders/1M_4gn8h99fADy1Y9Ih7kLurOYXY_hXlQ">Sate Maranggi Mang Munir's Menu</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="explore-popup">
        <div class="ep-inner">
          <div class="ep-content">
            <div class="ep-header">
              <button class="button ep-close"><i class="ri-close-line"></i></i></button>
              <div class="ep-thumbnail">
                <img src="assets/img/telagabiru.jpg" alt="ep-thumbnail" />
              </div>
              <h3></h3>
            </div>
            <div class="ep-body"></div>
          </div>
        </div>
    </div>
    @extends('footer')
    <script src="{!! asset('/js/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('/js/mixitup.min.js') !!}"></script>
    <script src="{!! asset('/js/main.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>
</html>