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
<header class="header" id="header">
        <nav class="nav container">
            <a href="{{ url('/index/#home') }}" class="nav-logo">Travelokal</a>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ url('/index/#home') }}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/index/#about') }}" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/index/#discover') }}" class="nav-link">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/index/#galery') }}" class="nav-link">Galeri</a>
                    </li>
                </ul>
                <i class="ri-close-fill nav-close" id="nav-close"></i>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <i class="ri-menu-3-fill"></i>
            </div>
        </nav>
    </header>
</body>
</html>