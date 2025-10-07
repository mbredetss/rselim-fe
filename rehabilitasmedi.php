<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rehabilitasi Medik - RS Elim Rantepao</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Lato:wght@400;700&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Tombol WhatsApp */
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
      background-color: #25d366;
      color: white;
      padding: 10px 15px;
      border-radius: 50px;
      font-weight: 500;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
    }
    .whatsapp-float i {
      font-size: 20px;
    }

    /* Logo */
    .logo img {
      max-height: 65px !important;
    }

    /* List jadwal */
    ul {
      padding-left: 1.5rem !important;
      text-align: left !important;
      list-style-position: outside !important;
    }
  </style>
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/lOGO.jpg" alt="Logo RS 1" class="me-2">
        <img src="assets/img/LAFKI.png" alt="Logo RS 2" class="me-2">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="profil.php">Profil</a></li>

          <!-- Fasilitas & Layanan -->
          <li class="dropdown">
            <a href="#"><span>Fasilitas & Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="ugd.php">UGD</a></li>

              <!-- Rawat Jalan -->
              <li class="dropdown">
                <a href="#"><span>Rawat Jalan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul style="max-height:300px; overflow-y:auto;">
                  <li><a href="poliklinikumum.php">Poliklinik Umum</a></li>
                  <li><a href="poliklinikanak.php">Poliklinik Anak</a></li>
                  <li><a href="poliklinikakupunktur.php">Poliklinik Akupunktur</a></li>
                  <li><a href="Poliklinikanestesi.php">Poliklinik Anestesi</a></li>
                  <li><a href="Poliklinikbedah.php">Poliklinik Bedah</a></li>
                  <li><a href="Polikliniksaraf.php">Poliklinik Saraf</a></li>
                  <li><a href="Poliklinikgigidanmulut.php">Poliklinik Gigi & Mulut</a></li>
                  <li><a href="Poliklinikgizi.php">Poliklinik Gizi</a></li>
                  <li><a href="Poliklinikjantungdanpembuluhdarah.php">Poliklinik Jantung & Pembuluh Darah</a></li>
                  <li><a href="Poliklinikkulitdankelamin.php">Poliklinik Kulit dan Kelamin</a></li>
                  <li><a href="Poliklinikmata.php">Poliklinik Mata</a></li>
                  <li><a href="Poliklinikobgyn.php">Poliklinik Obgyn</a></li>
                  <li><a href="PoliklinikOrthopaedidantraumatologi.php">Poliklinik Orthopaedi & Traumatologi</a></li>
                  <li><a href="Poliklinikparu.php">Poliklinik Paru</a></li>
                  <li><a href="Poliklinikpenyakitdalam.php">Poliklinik Penyakit Dalam</a></li>
                  <li><a href="Poliklinikpsikiatri.php">Poliklinik Psikiatri</a></li>
                  <li><a href="Polikliniktht.php">Poliklinik THT</a></li>
                </ul>
              </li>

              <!-- Rawat Inap -->
              <li class="dropdown">
                <a href="#"><span>Rawat Inap</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="vvip.php">VVIP</a></li>
                  <li><a href="vip.php">VIP</a></li>
                  <li class="dropdown">
                    <a href="#"><span>Ruang Kelas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="ruangkelas1.php">Ruang Kelas 1</a></li>
                      <li><a href="ruangkelas2.php">Ruang Kelas 2</a></li>
                      <li><a href="ruangkelas3.php">Ruang Kelas 3</a></li>
                    </ul>
                  </li>
                  <li><a href="ruangprinatologi.php">Ruang Prinatologi</a></li>
                  <li><a href="ruanghcu.php">Ruang HCU</a></li>
                </ul>
              </li>

              <li><a href="ruangoperasi.php">Ruang Operasi</a></li>

              <!-- Layanan Penunjang -->
              <li class="dropdown">
                <a href="#"><span>Layanan Penunjang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="farmasi.php">Farmasi</a></li>
                  <li><a href="laboratorium.php">Laboratorium</a></li>
                  <li><a href="radiologi.php">Radiologi</a></li>
                  <li><a href="pemulasaranjenazah.php">Pemulasaran Jenazah</a></li>
                </ul>
              </li>

              <!-- Layanan Unggulan -->
              <li class="dropdown">
                <a href="#"><span>Layanan Unggulan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="arrang.php">Arrang Beauty & Wellness Center</a></li>
                  <li><a href="homecare.php">Home Care</a></li>
                  <li><a href="rehabilitasmedi.php" class="active">Rehabilitasi Medik</a></li>
                  <li><a href="medicalcheckup.php">Medical Check Up</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="mutu.php">Mutu</a></li>
          <li><a href="promo&paketlayanan.php">Promo & Paket Layanan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- Hero -->
  <div class="container text-center my-5" style="padding-top: 120px;">
    <h1 class="fw-bold mb-3">Rehabilitasi Medik</h1>
    <hr class="mx-auto mb-5" style="width: 80px; border: 2px solid #0d6efd;">
  </div>

  <!-- Dokter -->
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-md-4 text-center">
        <img src="assets/img/dok.png" alt="dr. Rumaisa Hasan, Sp.KFR (K)" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-8 text-start">
        <h4 class="fw-bold">dr. Rumaisa Hasan, Sp.KFR (K)</h4>
        <p class="mb-2"><strong>Jadwal :</strong></p>
        <ul>
          <li>Selasa - Rabu : Pukul 08.30 – 14.00 WITA</li>
          <li>Kamis - Sabtu : Pukul 14.30 – 17.00 WITA</li>
        </ul>
      </div>
    </div>

    <!-- Gambar -->
    <div class="text-center mb-4">
      <img src="assets/img/dok2.png" alt="Layanan Homecare RS Elim Rantepao"
        class="img-fluid rounded shadow" style="max-width: 800px;">
    </div>

    <!-- Deskripsi -->
    <p class="text-justify">
      Fisioterapi ditujukan untuk mengembangkan, memelihara, dan memulihkan gerak dan fungsi tubuh dengan menggunakan
      penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), Pelatihan Fungsi,
      serta komunikasi. Pelayanan Fisioterapi Rumah Sakit Elim berfokus pada kebutuhan pasien serta menggunakan konsep
      fisioterapi terkini yang didukung oleh fisioterapis profesional, modalitas modern, peralatan latihan lengkap, dan
      harga yang terjangkau.
    </p>
  </div>

  <!-- Google Maps -->
  <div class="container section-title" data-aos="fade-up" style="margin-top:150px;">
    <h2>Hubungi Kami</h2>
    <p>Jika anda butuh panduan melalui peta kami hadir di Google Maps</p>
  </div>
  <div class="mb-5" data-aos="fade-up" data-aos-delay="200" style="margin-top:30px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4442678921523!2d119.89675249999999!3d-2.9741357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93e9e5b4eedad5%3A0x689db9cb474b5412!2sRS%20Elim%20Rantepao!5e0!3m2!1sid!2sid!4v1755838858113!5m2!1sid!2sid"
      width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- Footer -->
  <footer id="footer" class="footer position-relative light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Alamat</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Ahmad Yani No.36, Rantepao.</p>
            <p>Kec. Tamalate, Kabupaten Toraja Utara.</p>
            <p>Sulawesi Selatan 91831</p>
            <p class="mt-3"><strong>Phone:</strong> <span>082190959393</span></p>
            <p><strong>Email:</strong> <span>rselimrpao@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">RS Elim Rantepao</strong></p>
    </div>
  </footer>

  <!-- Tombol WhatsApp -->
  <a href="https://wa.me/6282190959393" class="whatsapp-float btn btn-success d-flex align-items-center" target="_blank">
    <i class="bi bi-whatsapp fs-4"></i>
    <span class="ms-2">Customer Care</span>
  </a>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
