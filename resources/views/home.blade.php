@extends('layout.main')

@section('container')

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: 3rem;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel1f.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carousel2f.jpg" class=" d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carousel3f.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="container">
        <div class="card" style="width: 1000px; margin: auto; margin-top: 4rem; margin-bottom: 3rem; border-radius: 1rem; padding: 10px; text-align: center;">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;"><strong>VISI</strong></h2>
            <p class="card-text">Terwujudnya Lembaga yang mandiri, dalam rangka membangun masyrakat yang terbebas dari kemiskinan, kebodohan, ketertindasam, dan bentuk – bentuk ketidakadilan lainnya dengan berprespektif gender, ham dan kelestarian lingkungan.</p>
          </div>
        </div>

        <div class="card" style="width: 1000px; margin: auto; margin-top: 4rem; margin-bottom: 3rem; border-radius: 1 rem; text-align: center;">
          <div class="card-body">
            <h2 class="card-title"><strong>MISI</strong></h2>
            <p class="card-text">Memberdayakan masyarakat marginal yang bebrbasis pada isu strategis lingkungan (Pertanian berkelanjutan, sanitasi Lingkungan dan kesehatan), HAM (perlindungan Perempuan dan anak), dan Advokasi Kebijakan</p>

            <p class="card-text">Memerankan diri sebagai agen pembaharu di bidang pengembangan SDM, Pemberdayaan ekonomi rakyat, dan pengorganisasian masyarakat dengan bertumpu pada kearifan lokal</p>

            <p class="card-text">Meningkatkan kualitas manajemen kelembagaan, agar menjadi Lembaga yang kuat dan mandiri dalam memberikan layanan pemberdayaan masyarakat</p>

            <p class="card-text">Membangun kemitraan dan jaringan multipihak dengan prinsip mutualisme dan saling menghormati</p>

            <p class="card-text">Memfasilitasi tumbuh kembangnya institusi dan kader lokal dalam rangka keberlanjutan aktivitas pemberdayaan masyarakat</p>
          </div>
        </div>

      </div>

@endsection