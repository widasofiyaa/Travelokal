<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('/css/swiper-bundle.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('/css/styles.css') !!}">
</head>
<body>
<footer class="footer section">
        <div class="footer-container container grid">
            <div>
                <a href="#" class="footer-logo">
                    <img src="{{url('/img/footer.png')}}" alt="" class="footer-logo-img"> 
                    Travelokal
                </a>

                <p class="footer-description">
                    Website Informasi<br>Destinasi Wisata<br>di daerah Cianjur
                </p>
            </div>

            <div>
                <h3 class="footer-title">Website</h3>

                <ul class="footer-links">
                    <li>
                        <a href="#about" class="footer-link">Tentang</a>
                    </li>
                    <li>
                        <a href="#destination" class="footer-link">Destinasi</a>
                    </li>
                    <li>
                        <a href="#galery" class="footer-link">Galeri</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="footer-title">Kontak</h3>
                <p class="footer-address">JL Pahlawan, No. 4, Pacet,<br>
                    Kecamatan Cipanas Kabupaten Cianjur <br> Provinsi Jawa Barat
                    Kode Pos 43253</p>
                <a href="">(0263) 524372</a>
            </div>

            <div>
                <h3 class="footer-title">Website ini<br>dibangun bekerjasama <br> dengan</h3>

                <div class="footer-aviables">
                    <img src="{{url('/img/telu-logo.png')}}" alt="" class="footer-aviable-img">
                </div>
            </div>
        </div>

        <span class="footer-copy">&#169; Telkom University. All rigths reserved</span>
    </footer>
</body>
</html>