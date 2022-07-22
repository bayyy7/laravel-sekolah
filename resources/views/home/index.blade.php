@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')

<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{ asset('img/bg') }}/1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">

                <div class="hero-content text-center">
                    <h2>Selamat Datang di Website SMPN 2 Jombang</h2>
                    <a href="#" class="btn clever-btn">Sekolah Terintegritas dan Terakreditasi A</a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">Sekolah Adiwiyata</div>
            <div class="card-body">
                <p class="lead">
                    Kata ADIWIYATA berasal dari 2 kata Sansekerta ”ADI” dan ”WIYATA”.
                    ADI mempunyai makna: besar, agung, baik, ideal atau sempurna.
                    WIYATA mempunyai makna: tempat dimana seseorang mendapatkan ilmu pengetahuan,
                    norma dan etika dalam berkehidupan sosial. Bila kedua kata tersebut digabung,
                    secara keseluruhan ADIWIYATA mempunyai pengertian atau makna:Tempat yang baik
                    dan ideal dimana dapat diperoleh segala ilmu pengetahuan dan berbagai norma
                    serta etika yang dapat menjadi dasar manusia menuju terciptanya kesejahteraan
                    hidup kita dan menuju kepada cita-cita pembangunan berkelanjutan.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Pendaftaran -->
<div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">PENDAFTARAN</h2>
        <p class="w3-opacity w3-center"><i>Bagi siswa yang ingin mendaftar silahkan pilih pilihan dibawah ini!</i></p><br>

        <ul class="w3-ul w3-border w3-white w3-text-grey">
            <li class="w3-padding">12-24 Mei 2022 <span class="w3-tag w3-red w3-margin-left">Gelombang 1</span></li>
            <li class="w3-padding">25-31 Juni 2022 <span class="w3-tag w3-red w3-margin-left">Gelombang 2</span></li>
            <li class="w3-padding">13-16 Juni 2022 <span class="w3-tag w3-red w3-margin-left">Pengumuman</span></li>
        </ul>

        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
            <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>UMUM</b></p>
                    <p class="w3-opacity">27 Juni 2022</p>
                    <p>SMPN 2 JOMBANG menerima pendaftaran jalur UMUM</p>
                    <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">UMUM</button>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>PRESTASI</b></p>
                    <p class="w3-opacity">27 November 2022</p>
                    <p>SMPN 2 JOMBANG menerima pendaftaran jalur PRESTASI</p>
                    <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">PRESTASI</button>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>RTM</b></p>
                    <p class="w3-opacity">29 November 2022</p>
                    <p>SMPN 2 JOMBANG menerima pendaftaran jalur RTM</p>
                    <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">RTM</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pendaftaran inside -->
<div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8">
        <header class="w3-container w3-teal w3-center w3-padding-32">
            <span onclick="document.getElementById('ticketModal').style.display='none'" class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
            <h2 class="w3-wide"><i class="fa fa-drivers-license-o w3-margin-right"></i>Pendaftaran</h2>
        </header>
        <div class="w3-container">
            <p><label><i class="fa fa-user"></i> Nama Lengkap</label></p>
            <input class="w3-input w3-border" type="text" placeholder="Nama">
            <p><label><i class="fa fa-university"></i> Asal Sekolah</label></p>
            <input class="w3-input w3-border" type="text" placeholder="Asal Sekolah">
            <button class="w3-btn-block w3-teal w3-padding-12 w3-section w3-right">Daftar <i class="fa fa-check"></i></button>
            <button class="w3-btn w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">TUTUP <i class="fa fa-remove"></i></button>
            <p class="w3-right">Butuh <a href="#" class="w3-text-blue">Bantuan?</a></p>
        </div>
    </div>
</div>

<!-- The Contact Section -->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Anda butuh bantuan?Silahkan hubungi kami</i></p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Jombang, Jawa Timur<br>
            <i class="fa fa-phone" style="width:30px"></i> 0321 - 12345<br>
            <i class="fa fa-envelope" style="width:30px"> </i> smpn2jombang@gmail.com<br>
        </div>
        <div class="w3-col m6">
            <form action="form.asp" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Nama" required name="Nama">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Pesan" required name="Pesan">
                <button class="w3-btn w3-section w3-right" type="submit">KIRIM</button>
            </form>
        </div>
    </div>
</div>

<!-- End Page Content -->
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;filter:grayscale(90%);-webkit-filter:grayscale(90%);"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(-7.555535, 112.233034);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 17,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($artikel as $art)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ $art->judul }}

                        <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                        <div class="card-text mt-3">
                            {!! Str::limit($art->deskripsi) !!}
                        </div>

                        <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary float-right">kategori : {{ $art->kategoriArtikel->nama_kategori }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif

@stop