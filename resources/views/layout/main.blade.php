<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">

    <title>LPKP - {{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container" style="height: 80px;">
            <a class="navbar-brand" href="index.html">
              <img src="img/logolpkp.png" alt="" style="height: 100px; width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "PROGRAM") ? 'active' : '' }}" href="/program">Our Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('container')

</body>

<!-- Remove the container if you want to extend the Footer to full width. -->
<!-- Footer -->
<footer class="text-center text-lg-start text-black" style="background-color: #d8d8d8">
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-5 mx-auto mb-4 mt-5">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">LPKP</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 40px; background-color: #2c2c2c; height: 2px; " />
                    <p>
                        Lembaga Pengkajian Kemasyarakatan dan Pembangunan (LPKP) merupakan organisasi
                        non-profit yang didirikan tanggal 1989, secara aktif berkerja untuk membantu petani
                        dan keluarganya agar mendapat penghasilan yang lebih baik.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-5">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 108px; background-color: #2c2c2c; height: 2px; text-decoration: none;" />
                    <p>
                        <a href="" class="" style="text-decoration: none; color: black;">Career</a>
                    </p>
                    <p>
                        <a href="" class="" style="text-decoration: none; color: black;">Donation</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-2 mx-auto mb-md-0 mb-4 mt-5">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; background-color: #2c2c2c; height: 2px; text-decoration: non;" />
                    <p><i class="fas fa-home mr-3"></i> Perum Karanglo Indah Blok i No. 4, Balearjosari, Kec. Blimbing, Kota Malang, Provinsi Jawa Timur</p>
                    <p><i class="fas fa-envelope mr-3"></i> lpkp.jatim@yahoo.com</p>
                    <p><i class="fas fa-phone mr-3"></i> (0341) 472557</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

</footer>
<!-- Footer -->
<section class="d-flex justify-content-between p-2" style="background-color: #a3a3a3; text-decoration: none;">
    <!-- Left -->
    <div class="me-5">

    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
        <a href="https://www.facebook.com/lpkpjatim/" class="me-4" style="text-decoration: none; color: black;">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://mobile.twitter.com/lpkpanwar" class="me-4" style="text-decoration: none; color: black;">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCZdJGsT6vPSOjYUFmRbJswA" class="me-4" style="text-decoration: none; color: black;">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/lpkpjatim/?hl=en" class="me-4" style="text-decoration: none; color: black;">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    <!-- Right -->
</section>