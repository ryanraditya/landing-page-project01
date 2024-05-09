<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>puskesmas01</title>
    <!--link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--link css-->
    <link rel="stylesheet" href="ryan.css">
    <!--link animasi-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-light">

    <!--navbar start-->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-success text-light fw-bold text-uppercase">
            <div class="container-fluid mt-2 mb-2  ">
                <a class="navbar-brand text-light fw-bold text-uppercase" href="#home">Puskesmas 01</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#hubungi_kami">Temui Kami</a>
                        </li>


                    </ul>
                    <form class="d-flex">
                        <button type="button" class="btn btn-link "> <a href="register.php "
                                class="text-decoration-none text-light">Register</a></button>
                        <button type="button" class="btn btn-link "> <a href="login.php"
                                class="text-decoration-none text-light">Login</a></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!--navbar end-->
    <!--content start-->
    <!--home start-->
    <section class="" id="home">
        <div class="container px-5 bg- mt-5">
            <div class="row">
                <div class="text-uppercase text-center fw-bold text mt-5">
                    profile puskesmas 01
                </div>
                <div class="col-md-4 text-center mt-2  ">
                    <img src="img/3.jpg" class="rounded-circle shadow p-3 mb-5 bg-body rounded" alt="">
                </div>
                <div class="col-md-6 mt-4">
                    <p>Puskesmas 01 melayani berbagai macam layanan kesehatan dasar untuk masyarakat umum, seperti:

                        Pemeriksaan medis rutin dan konsultasi dengan dokter umum.
                        Pengobatan untuk penyakit umum dan kronis.
                        Pelayanan kebidanan, termasuk pemeriksaan kehamilan dan persalinan.
                        Program imunisasi untuk anak-anak dan dewasa.
                        Penyuluhan kesehatan dan promosi kesehatan.
                        Pelayanan gizi, termasuk konseling gizi.
                        Pelayanan kesehatan lingkungan dan sanitasi dasar.
                        Layanan ini bertujuan untuk memberikan akses kesehatan yang terjangkau dan berkualitas bagi
                        masyarakat setempat.
                    </p>
                </div>

            </div>
        </div>
        <!--home end-->
        <!--layanan start-->
        <section id="layanan">
            <div data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
                <div class="text-uppercase fw-bold  bg-info p-5 text-center shadow p-3 mb-5 bg-body rounded">
                    <span class="text-success">layanan</span> <span class="text-primary">tersedia</span>
                </div>
            </div>
            <div class="container text-center text-uppercase mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mx-4 shadow p-3 mb-5 bg-body rounded " style="width: 18rem;">
                            <img src="img/farmasi.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Laboratorium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-2 mx-4 shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                            <img src="img/periksa kehamilan.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Cek Usia Kehamilan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-2 mx-4 shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
                            <img src="img/periksa tensi.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Cek Tekanan Darah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-2 mx-4 shadow-lg p-2 mb-1 bg-body rounded " style="width: 18rem;">
                            <img src="img/perliksa gigi.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <p class="card-text">Dokter Gigi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--layanan end-->
        <!--profil start-->
        <section id="profil">
            <div data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
                <div class="text-uppercase fw-bold  bg-info p-5 text-center shadow p-3 mb-5 bg-body rounded ">
                    <span class="text-success">anggota</span> <span class="text-primary">staff</span>
                </div>
            </div>
            <div class="container text-center text-uppercase mt-5 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-2 mx-4 shadow p-3 mb-5 bg-body rounded">
                            <img src="img/b88951aea6ff136a3e021c7504332a72.jpg " class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Security</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-2 mx-4 shadow p-3 mb-5 bg-body rounded" >
                            <img src="img/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Kepala Dokter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-2 mx-4 shadow-lg p-2 mb-1 bg-body rounded " >
                            <img src="img/profil4.4.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <p class="card-text">Cleaning Service</p>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <!--profil end-->
        <!--hubungi kami start-->
        <section id="hubungi_kami">
            <div data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">
                <div class="text-uppercase fw-bold  bg-info p-5 text-center shadow p-3 mb-5 bg-body rounded ">
                    <span class="text-success">lebih</span> <span class="text-primary">lanjut</span>
                </div>
            </div>
            <div class="container text-center text-uppercase mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h1 class="mb-5">Visit US</h1>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207721147!2d106.83004867475178!3d-6.352924493636995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1714563189149!5m2!1sid!2sid"
                                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="mt-5">
                            <div class="text-uppercase ">
                                <h6 class="text-uppercase fw-bold fs-4">
                                    <span class="text-success">hubungi</span> <span class="text-primary">Kami</span>
                                </h6>
                                <p>bila ada tanggapan, kritik maupun saran <br> mengenai puskesmas baik dari segi
                                    pelayanan
                                    <br>
                                    ataupun kinerja kerja yang ada dipuskesmas 01 ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
        </section>
        <!--hubungi kami end-->




        <!--content end-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <!--js animasi-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <?php
    include "footer.html";
    ?>
</body>

</html>