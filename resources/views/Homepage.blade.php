<!DOCTYPE html>
<html lang="en">
{{-- word-wrap: break-word; --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BS CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" href="/myassets/logo-qw-light.png" style="width: 32px; height:32px;" />
    {{-- Roboto G-Fonts and Any Configure CSS --}}
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/mycss/style.css">

    <title>Qwords</title>
</head>

<body class="bg-qwords-white">
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary border-bottom border">
        <div class="container-fluid px-5">
            <a class="navbar-brand pe-3" href="#">
                <img src="/myassets/logo-qw-light.png" alt="Bootstrap" width="130" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0 mb-2 me-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cloud Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Email Suite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Internet Access</a>
                    </li>
                </ul>
                <form class="d-flex gap-2" role="search">
                    <a href="#" class="btn btn-outline-dark fw-medium pb-0 pt-2">Register</a>
                    <a href="#" class="btn btn-orange fw-medium pb-0 pt-2" style="width:100px">Login</a>
                </form>
            </div>
        </div>
    </nav>

    <main class="container-fluid w-100 px-0">
        {{-- Section 1 --}}
        <section class="bg-qwords-dark text-qwords-white">

            <div class="container">
                <div class="row px-2 py-5">
                    <div class="col-md-8 pe-4">
                        <h1 class="fw-bold text-qwords-orange mb-4"
                            style="text-decoration: underline; word-wrap: break-word;">
                            #QwordsYourSuccess</h1>
                        <h1 class="fw-bold" style="font-size: 60px; word-wrap: break-word;">Cloud Hosting untuk
                            Kesuksesan <span class="text-qwords-orange">Websitemu!</span></h1>
                        <p class="fw-light mt-3">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan
                            24 jam untuk memenuhi
                            kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-medium text-qwords-white" style="margin-top: 4.3rem">
                            Terdaftar di PSE, ICANN dan Partner Lainnya!
                        </h5>
                        <div class="d-flex justify-content-start align-items-center mt-3 flex-wrap gap-2">
                            <img src="/myassets/qr-code.webp" alt="Missing" style="width:80px; height:80px">
                            <img src="/myassets/icann-logo.webp" alt="Missing" style="width:80px; height:80px">
                            <img src="/myassets/badge_whmadmin.svg" alt="Missing" style="width:80px; height:80px">
                            <img src="/myassets/badge_litespeed.svg" alt="Missing" style="width:80px; height:80px">
                            <img src="/myassets/acronis-cloud-tech.webp" alt="Missing" style="width:90px; height:90px">
                            <img src="/myassets/acronis-cloud-sales.webp" alt="Missing"
                                style="width:90px; height:90px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-light container pb-3">
                <div class="row mt-4">
                    <div class="col-md-8 flex-wrap pe-4">
                        <h3 class="fw-bold fs-2">Cari Nama Domainmu</h3>
                        <p class="fw-light mb-0">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs
                            Anda.</p>
                        <p class="fw-light">Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan
                            Anda.</p>

                        <input type="text" class="form-control py-3" placeholder="Masukkan Nama Domain...">


                        <div class="d-flex mb-2 mt-3 gap-2">
                            <select class="form-select" style="height: 55px; width:25%">
                                <option selected value="">Select</option>
                                <option value=".com">.com</option>
                                <option value=".id">.id</option>
                                <option value=".info">.info</option>
                            </select>
                            <button type="submit" class="btn btn-orange-lg fw-medium mb-3">Cari</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-qwords-orange rounded-2 mb-4 mt-3 px-3 py-3">
                            <h3 class="fw-bold fs-2 text-center">Harga Mulai Dari :</h3>
                            <div class="d-flex justify-content-center align-items-center mt-3 flex-wrap gap-3">
                                <div>
                                    <h3 class="fw-light">.com</h3>
                                    <p class="fw-light">150.000</p>
                                </div>
                                <div>
                                    <h3 class="fw-light">.id</h3>
                                    <p class="fw-light">70.000</p>
                                </div>
                                <div>
                                    <h3 class="fw-light">.info</h3>
                                    <p class="fw-light">30.000</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-lg btn-light fw-bold">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- end section 1 -------------------------------------------------------- --}}

        {{-- Section 2 --}}
        <section class="text-qwords-dark">

            <div class="container pt-5">

                <h1 class="fw-bold fs-1 mb-2 text-center">Cloud Hosting Indonesia <br>
                    <span class="text-qwords-orange">
                        Diskon Hingga 50%
                    </span>
                </h1>

                <div class="row justify-content-center align-items-start mt-5 flex-wrap gap-4">

                    <div class="col-md-4 col-sm-12 col-12 costum-card-size px-1">
                        <div class="card shadow-lg">
                            <h5 class="card-header bg-danger-subtle">Best Offer!</h5>
                            <div class="card-body mb-2">
                                <h2 class="card-title fs-2 text-qwords-orange">VCH1</h2>
                                <p class="card-text">Value Cloud Hosting</p>
                                <s class="text-muted">Rp 24.500</s>
                                <h3 class="fw-bold text-qwords-orange">Rp 14.500</h3>

                                <div id="description" class="mt-3">
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/disk.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Disk</p>
                                            <h4>3GB</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/bandwidth.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Bandwidth</p>
                                            <h4>Unlimited</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/cpu.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Core CPU</p>
                                            <h4>0.5 Core</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/addon.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Addon/parked domain</p>
                                            <h4>NO</h4>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-orange">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 costum-card-size px-1">
                        <div class="card shadow-lg">
                            <h5 class="card-header bg-success-subtle fw-bold">Unlimited Storage</h5>
                            <div class="card-body mb-2">
                                <h2 class="card-title fs-2 text-qwords-orange">Signature</h2>
                                <p class="card-text">Unlimited Hosting</p>
                                <s class="text-muted">Rp 89.500</s>
                                <h3 class="fw-bold text-qwords-orange">Rp 109.500</h3>

                                <div id="description" class="mt-3">
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/disk.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Disk</p>
                                            <h4>3GB</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/bandwidth.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Bandwidth</p>
                                            <h4>Unlimited</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/cpu.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Core CPU</p>
                                            <h4>1 Core</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/addon.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Addon/parked domain</p>
                                            <h4>5/5</h4>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-orange">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 costum-card-size px-1">
                        <div class="card shadow-lg">
                            <div class="card-body mb-2" style="padding-top: 3.6rem;">
                                <h2 class="card-title fs-2 text-qwords-orange">HPCH Bisnis1</h2>
                                <p class="card-text">High Performance</p>
                                <s class="text-muted">Rp 89.500</s>
                                <h3 class="fw-bold text-qwords-orange">Rp 109.500</h3>

                                <div id="description" class="mt-3">
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/disk.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Disk</p>
                                            <h4>3GB</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/bandwidth.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Bandwidth</p>
                                            <h4>Unlimited</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/cpu.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Core CPU</p>
                                            <h4>1 Core</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/addon.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Addon/parked domain</p>
                                            <h4>-</h4>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-orange">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 costum-card-size px-1">
                        <div class="card shadow-lg">
                            <div class="card-body mb-2" style="padding-top: 3.6rem;">
                                <h2 class="card-title fs-2 text-qwords-orange">VPS SC1</h2>
                                <p class="card-text">Cloud VPS KVM SSD</p>
                                <s class="text-muted">Rp 89.500</s>
                                <h3 class="fw-bold text-qwords-orange">Rp 109.500</h3>

                                <div id="description" class="mt-3">
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/disk.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Disk</p>
                                            <h4>25GB</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/bandwidth.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Bandwidth</p>
                                            <h4>Unlimited</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/cpu.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Core CPU</p>
                                            <h4>1 Core</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-3">
                                        <img src="/myassets/addon.webp" alt="Missing">
                                        <div>
                                            <p class="mb-0">Addon/parked domain</p>
                                            <h4>Unlimited</h4>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-orange">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 col-sm-12 px-1 costum-card-size" style="width: 23%;">
                        <div class="card">
                            <div class="card-body" style="padding-top: 3.6rem;">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> 
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>

        </section>
        {{-- end section 2 ------------------------------------------------------------ --}}

        {{-- section 3 --}}
        <section class="text-qwords-dark mt-5">
            <div class="container pt-5">
                <h1 class="fw-bold fs-1 text-qwords-orange mb-2 text-center">Lihat Juga Layanan Kami <br>
                    <span class="text-qwords-dark">Yang Lain</span>
                </h1>

                <div class="row justify-content-center align-items-center mt-5 gap-3">

                    <div class="col-md-4 col-sm-12 costum-card-size-secondary px-1">
                        <div class="card p-3 shadow">
                            <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-2">
                                <img src="/myassets/ssl.webp" alt="Missing">
                                <h2 class="card-title fw-bold fs-2 text-qwords-dark mb-0">SSL</h2>
                            </div>

                            <p class="fw-light mb-0">Mulai Dari</p>
                            <h3 class="fw-bold text-qwords-orange">Rp 109.500 <span
                                    class="fs-6 text-dark fw-light">/tahun</span> </h3>
                            <button class="btn btn-orange">Pesan Sekarang</button>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 costum-card-size-secondary px-1">
                        <div class="card p-3 shadow">
                            <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-2">
                                <img src="/myassets/dbstack.webp" alt="Missing">
                                <h2 class="card-title fw-bold fs-2 text-qwords-dark mb-0">SSL</h2>
                            </div>

                            <p class="fw-light mb-0">Mulai Dari</p>
                            <h3 class="fw-bold text-qwords-orange">Rp 109.500 <span
                                    class="fs-6 text-dark fw-light">/bulan</span> </h3>

                            <button class="btn btn-orange">Pesan Sekarang</button>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 costum-card-size-secondary px-1">
                        <div class="card p-3 shadow">
                            <div class="d-flex align-items-center justify-content-start mb-3 flex-wrap gap-2">
                                <img src="/myassets/disk.webp" alt="Missing">
                                <h2 class="card-title fw-bold fs-2 text-qwords-dark mb-0">SSL</h2>
                            </div>

                            <p class="fw-light mb-0">Mulai Dari</p>
                            <h3 class="fw-bold text-qwords-orange">Rp 109.500 <span
                                    class="fs-6 text-dark fw-light">/bulan</span></h3>

                            <button class="btn btn-orange">Pesan Sekarang</button>
                        </div>
                    </div>

                </div>
            </div>


        </section>
        {{-- end section 3-------------------------------------------------------------------- --}}

        {{-- section 4 --}}
        <section class="bg-qwords-orange mt-5">
            <div class="container py-3">
                <h1 class="fw-bold fs-1 text-qwords-white mb-2 mt-4 text-center">Solusi Paket Hosting Terbaik<br>
                    <span class="text-qwords-dark">dari Kami</span>
                </h1>

                <div class="row justify-content-center align-items-center mb-3 mt-5">
                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/company.webp" class="card-img rounded-3 bg-qwords-dark"
                                alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">Perusahaan</h4>
                                <p class="card-text fw-light">
                                    Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting
                                    terbaik dan fitur keamanan ekstra.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/umkm.webp" class="card-img rounded-3 bg-qwords-dark" alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">UMKM dan Toko Online</h4>
                                <p class="card-text fw-light">
                                    Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa
                                    secara online.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/orgs.webp" class="card-img rounded-3 bg-qwords-dark" alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">Organisasi dan Komunitas</h4>
                                <p class="card-text fw-light">
                                    Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang
                                    ramah kantong.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-5 mt-2">
                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/school.webp" class="card-img rounded-3 bg-qwords-dark"
                                alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">Sekolah</h4>
                                <p class="card-text fw-light">
                                    Infrastruktur web hosting terbaik untung menunjang kegiatan e-learning. Didukung
                                    platform MOODLE khusus pembelajaran daring.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/dev.webp" class="card-img rounded-3 bg-qwords-dark" alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">Developer</h4>
                                <p class="card-text fw-light">
                                    Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra
                                    NodeJS dan Git Version Control.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card text-bg-dark">
                            <img src="/myassets/blog.webp" class="card-img rounded-3 bg-qwords-dark" alt="Missing">
                            <div class="card-img-overlay pe-5">
                                <h4 class="card-title fw-bold text-qwords-orange">Blogger dan Personal</h4>
                                <p class="card-text fw-light">
                                    Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template
                                    website premium untuk tampil lebih profesional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section 4 -------------------- --}}

        {{-- section 5 --}}
        <section class="mt-5">
            <div class="container py-3">
                <h1 class="fw-bold fs-1 text-qwords-orange mb-2 mt-4 text-center">
                    <span class="text-qwords-dark">
                        Komitmen
                    </span> Qwords
                </h1>

                <div class="row align-items-center justify-content-center mt-5">
                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/call.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Layanan 24/7</h4>
                                <p class="fw-light">
                                    Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam,
                                    7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/book.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Panduan Manual Lengkap</h4>
                                <p class="fw-light">
                                    Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar
                                    pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/router.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Up time 99.99%</h4>
                                <p class="fw-light">
                                    Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat.
                                    Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta
                                    multiple peering.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/guard.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Jaminan Keamanan</h4>
                                <p class="fw-light">
                                    Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang
                                    berstandar & berkelanjutan telah menjadi perhatian utama kami.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/networkAlt.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Clustered DNS</h4>
                                <p class="fw-light">
                                    DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat
                                    DNS Server akan selalu dapat di akses karena saling membackup antar server.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/diamond.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>High Enterprise Server</h4>
                                <p class="fw-light">
                                    Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang
                                    merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan
                                    terkemuka.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/router.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Tier1Network</h4>
                                <p class="fw-light">
                                    Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan
                                    lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 pt-3">
                        <div class="d-flex align-items-center justify-between gap-3 rounded border p-4 shadow">
                            <img src="/myassets/network.webp" alt="Missing" style="width: 100px;height:100px">
                            <div>
                                <h4>Peering Network</h4>
                                <p class="fw-light">
                                    Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX
                                    yang membuat latency atau waktu tunggu pengiriman data semakin kecil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section 5 -------------------------------------------------------------- --}}
        <section class="mt-5">
            <div class="container py-3">
                <div
                    class="row bg-qwords-white-darken bg-qwords-cream justify-content-center align-items-center rounded-3 mt-3 gap-3 py-3 py-5">
                    <div class="col-md-5 col-sm-12">
                        <img class="img-fluid" src="/myassets/bw.webp" alt="Missing">
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="row justify-content-start align-items-center">
                            <div class="col-md-12 col-sm-11">
                                <h1 class="fw-bold fs-1 text-qwords-dark mb-2 mt-4"><span
                                        class="text-qwords-white">Bikin Website Impianmu</span> Dengan Mudah Hanya 1
                                    Jutaan Loh !
                                </h1>

                                <p class="fw-light mb-0 ms-2">
                                    Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa
                                    pembuatan.....
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-11">
                                <a href="#" class="btn btn-light fw-bold mt-3 px-3">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- end  section 5 --}}

        {{-- section 6 --}}
        <section class="mt-5">
            <div class="rounded-3 container mx-auto mb-3 border py-3 pb-4 pt-3 shadow">

                <div class="row justify-content-center align-items-center">
                    <div
                        class="d-flex justify-content-center align-items-center col-md-6 col-sm-12 border-end flex-row flex-wrap">
                        <h1 class="fw-bold fs-1 text-qwords-dark w-100 mb-2 mb-3 ms-5 mt-4">
                            Telah Dipercaya oleh 45.000+ Pelanggan Aktif !
                        </h1>

                        <img data-placeholder-resp="200pxx85px" src="/myassets/cimory.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/forisa.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Elsheskin.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/icon.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Horison.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/MD.webp" width="200px"
                            height="85px">
                    </div>

                    <div
                        class="d-flex justify-content-center align-items-center col-md-6 col-sm-12 flex-row flex-wrap">
                        <h1 class="fw-bold fs-1 text-qwords-dark w-100 mb-2 mb-3 ms-5 mt-4">
                            Partner Kami
                        </h1>
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Google.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Cpanel.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Idea.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/Archi.webp" width="200px"
                            height="85px">
                        <img data-placeholder-resp="200pxx85px" src="/myassets/dotid.webp" width="200px"
                            height="85px">
                    </div>
                </div>

        </section>
        {{-- endsection 6-------------------------------------------------- --}}

        {{-- section 7 ---- --}}
        <section class="mt-5">
            <div class="container px-3 pt-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <img src="/myassets/guarantee.webp" alt="Missing" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h1 class="fw-bold">
                            Garansi 30 Hari <span class="text-qwords-orange">Uang Kembali</span>
                        </h1>
                        <p class="fw-light">
                            Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga
                            30 hari setelah hosting aktif.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section 7 --}}

        {{-- section 8  testi --}}
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-6 col-sm-12 card-review p-5">

                        <h2 class="hero-hashtag text-qwords-orange mt-5" style="font-size: 32px">TESTIMONIALS <<<
                                </h2>
                                <h2 class="hero-hashtag mt-3 text-black" style="font-size: 54px">Apa Kata Mereka ?
                                </h2>
                                <p class="hero-p mb-5 mt-4 text-black">Apa kata mereka yang sudah menggunakan
                                    layanan web hosting indnonesia dari Qwords?
                                    Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
                                <a href="#" class="btn btn-dark btn-lg">View All >>></a>

                    </div>
                    <div class="col-md-6 col-sm-12 card-review p-5" style="background:#F07900;">
                        <img src="/myassets/stars.png" alt="Missing" class="w-50 mt-5">
                        <p class="hero-p text-white" style="margin-top: 82px; margin-bottom:52px;">Semoga Qwords dapat
                            terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik
                            dari Qwords</p>
                        <div class="profil d-flex mt-5">
                            <img src="/myassets/budi.png" alt="Missing" style="width: 128px; height: 128px;">
                            <div class="profil-text ms-4 mt-2 text-white">
                                <h2 class="hero-hashtag text-white" style="font-size: 38px;">Budi Raharjo</h2>
                                <p class="hero-p">
                                    Founder ID Cert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 card-review p-5" style="background: #353535;">
                        <img src="/myassets/stars.png" alt="Missing" class="w-50 mt-5">
                        <p class="hero-p text-white" style="margin-top: 62px; margin-bottom:22px;">Pelayanan Qword
                            sangat
                            cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali
                            normal.
                            Terbaik pokoknya, mah</p>
                        <div class="profil d-flex mt-5">
                            <img src="/myassets/kuns.png" alt="Missing" style="width: 128px; height: 128px;">
                            <div class="profil-text ms-4 text-white">
                                <h2 class="hero-hashtag text-white" style="font-size: 38px;">Kuns Kurniawan
                                </h2>
                                <p class="hero-p">
                                    PR Event Info BDG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 bg-qwords-white-darken card-review p-5">
                        <img src="/myassets/stars-2.png" alt="Missing" class="w-50 mt-5">
                        <p class="hero-p text-black" style="margin-top: 52px; margin-bottom:22px;">Hingga saat ini
                            pula,
                            kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan
                            Customer Service syang sangat baik, membuat kami tidak ingin berpindah dari Qwords.</p>
                        <div class="profil d-flex mt-4">
                            <img src="/myassets/denden.png" alt="Missing" style="width: 128px; height: 128px;">
                            <div class="profil-text ms-4 mt-2 text-white">
                                <h2 class="hero-hashtag text-black" style="font-size: 38px;">Denden Sofiudin</h2>
                                <p class="hero-p text-black">
                                    Owner Rumah Kopi Temanggung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section 8 --}}

        {{-- section 9 --}}
        <section class="mt-5 pt-5">
            <div class="rounded-3 container border px-4 py-3 shadow">
                <h1 class="fw-bold text-center">Diliput Oleh :</h1>
                <div class="d-flex justify-content-center align-items-center flex-row flex-wrap">
                    <img src="/myassets/Liputan6.webp" alt="Missing">
                    <img src="/myassets/Detikcom.webp" alt="Missing">
                    <img src="/myassets/TribunJogja.webp" alt="Missing">
                    <img src="/myassets/antara.webp" alt="Missing">
                    <img src="/myassets/RM.webp" alt="Missing">
                    <img src="/myassets/KoranBernas.webp" alt="Missing">
                </div>
            </div>
        </section>
        {{-- end section 9 --}}

        {{-- section 10 --}}
        <section class="mt-5 pt-5">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center flex-row flex-wrap">
                    <h3 class="fw-medium text-center">Pilih metode e-payment otomatis. <br>
                        Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h3>
                    <img src="/myassets/all-payment.webp" class="costum-width-payment" alt="Missing">
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h2 class="text-center">
                            Pertanyaan seputar <span class="text-qwords-orange">Layanan Web Hosting</span> Qwords
                        </h2>
                    </div>
                </div>
                <div class="row mt-lg-5 mt-3">
                    <div class="col-12">
                        <div class="accordion" id="FAQ">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Apa itu web hosting?
                                    </button>
                                </h3>
                                <div id="collapse1" class="accordion-collapse show collapse"
                                    aria-labelledby="heading1" data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Hosting adalah tempat penyimpanan file dan data website seperti teks, video
                                            dan gambar website. File dan data tersebut di simpan di dalam server yang
                                            terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa
                                            saja, kapan saja dan di mana saja.
                                            <br>
                                            <br> Penjelasan lebih lanjut dapat Anda baca pada artikel ini :
                                            https://qwords.com/blog/apa-itu-hosting/
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                                        aria-controls="collapse2">
                                        Ada berapa jenis hosting di Qwords?
                                    </button>
                                </h3>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan
                                            beragam paket hosting Indonesia yang bisa dipilih sesuai kebutuhan.
                                            <br>
                                            <br>
                                        </p>
                                        <h4>Value Performance</h4>
                                        Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang dirancang
                                        khusus untuk keperluan sederhana seperti UKM, toko online, blog, website
                                        sederhana, hingga email untuk penggunaan personal.
                                        <br>
                                        <br> Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru
                                        terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan
                                        ekstra lega mulai 3 GB hingga
                                        <br>
                                        <br>
                                        <h4>High Performance Cloud Hosting Bisnis</h4>
                                        <br> Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda.
                                        Kinerja lebih produktif dengan performa tinggi &amp; optimal untuk website
                                        profesional perusahaan, e-commerce, startup bisnis, serta support
                                        Moodle--platform open source yang memudahkan sistem pembelajaran online
                                        <br>
                                        <br>
                                        <h4>High Performance Cloud Hosting Enterprise</h4>
                                        <br>Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise.
                                        Tampil lebih premium dengan resource dedicated hanya untuk 1 pengguna. Performa
                                        lebih stabil, bebas gangguan dari Cloud Hosting lainnya. More productivity, less
                                        drama
                                        <br>
                                        <br>
                                        <h4>WordPress Hosting</h4>
                                        <br>Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop
                                        untuk kinerja WordPress yang optimal.
                                        <br>
                                        <br> WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP
                                        <br>
                                        <br>
                                        <h4>Unlimited Hosting</h4>
                                        <br>Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free
                                        Domain &amp; SSL Certificate dengan Uptime Server 99,99%.
                                        <br>
                                        <br>Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU.
                                        Akses internasional ngebut, serta garansi 30 hari uang kembali.
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true"
                                        aria-controls="collapse3">
                                        Apa kelebihan dari cloud hosting Qwords?
                                    </button>
                                </h3>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar
                                            negeri. Anda akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan
                                            teknis selama 24 jam, 7 hari melalui Live chat, Call Center, atau Support
                                            Ticket dan masih banyak lagi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        Mengapa saya perlu web hosting?
                                    </button>
                                </h3>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Tanpa web hosting, Anda tidak bisa membuat website company profile, portal
                                            berita, blog pribadi, website toko online, atau jenis website lain yang bisa
                                            diakses secara online.
                                            <br>
                                            <br>Penyedia layanan web hosting seperti Qwords.com membantu memastikan
                                            data-data dan file website Anda tetap aman serta responsif ketika diakses
                                            oleh pengguna secara online.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true"
                                        aria-controls="collapse5">
                                        Bagaimana cara membeli hosting?
                                    </button>
                                </h3>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan
                                            mudah yang dapat Anda akses selengkapnya <a
                                                href="https://qwords.com/blog/cara-membeli-hosting/">di sini</a>. Beli
                                            hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai
                                            metode pembayaran
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true"
                                        aria-controls="collapse6">
                                        Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
                                    </button>
                                </h3>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                    data-bs-parent="#FAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud
                                            Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru
                                            sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi
                                            pada tim support kami, lalu proses migrasi akan dibantu hingga selesai.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- EndSection 10----------- --}}

        <section class="mt-5 pt-5">
            <div class="container">
                <h1 class="fw-bold text-qwords-dark text-center">Kontak Kami</h1>
                <p class="fw-light text-center">Kami siap membantu anda 24 Jam !</p>
                <div
                    class="d-flex justify-content-center align-items-center text-qwords-dark flex-row flex-wrap gap-2">
                    <a href="#" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-telephone"></i>
                        0804-1-808-888</a>
                    <a href="#" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-telephone"></i>
                        02139708800</a>
                    <a href="#" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-whatsapp"></i>
                        +62817437111 (WhatsApp Only)</a>
                    <a href="#" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-envelope-at"></i>
                        info@qwords.com</a>
                </div>

            </div>
        </section>
    </main>

    <footer style="margin-top: 6rem;" class="bg-qwords-orange">
        <div class="container-fluid px-5 pt-5">
            <div class="row d-flex h-100">
                <div class="col-12 col-lg-3">
                    <div id="begin-logo" class="mb-5">
                        <div class="qw-logo">
                            <img src="/myassets/logo-dark.webp" class="img-fluid">
                        </div>
                        <div class="mt-lg-4 mt-3">
                            <h4 class="fw-bold mb-lg-4 h5home mb-3">
                                PT Qwords Company International
                            </h4>
                            <p class="fw-light">
                                Cloud Web Hosting Indonesia. Domain &amp; hosting terbaik dengan
                                akses cepat yang didukung layanan support 24/7
                            </p>
                        </div>
                        <a
                            href="https://www.bsigroup.com/en-ID/validate-bsi-issued-certificates/client-directory-certificate/IS%20776219">
                            <div class="qw-logo">
                                <img src="/myassets/bsi.webp" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div id="#customer-care">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">Customer Care</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://qwords.com/v2/order-payment">Pembayaran</a></li>
                            <li><a href="https://qwords.com/v2/permintaan-faktur-pajak">Faktur Pajak</a></li>
                            <li><a href="https://portal.qwords.com/submitticket.php">Bantuan 24 jam</a></li>
                            <li><a href="https://qwords.com/v2/qwords-rewards">Qwords Rewards</a></li>
                            <li><a href="https://kb.qwords.com">Knowledge Base</a></li>
                            <li><a href="https://qwords.com/blog">Blog</a></li>
                            <li><a href="https://qwords.com/v2/faq">FAQ</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/contact-qwordscom">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div id="aboutus" class="mb-5">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">Mengenai Kami</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://qwords.co.id">Corporate Website</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/history/">Qwords History</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/difference/">Qwords Differences</a></li>
                            <li><a href="https://qwords.com/v2/media-publication">Media Publication</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/network/">Network &amp;
                                    Infrastructure</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/partner/">Partner</a></li>
                            <li><a href="https://qwords.com/v2/karir">Career &amp; Employment</a></li>
                        </ul>
                    </div>
                    <div id="msa" class="mb-5">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">MSA/SLA/AUP</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://qwords.com/v2/master-service-agreement">Master Service Agreement</a>
                            </li>
                            <li><a href="https://qwords.com/v2/master-service-agreement/refund-policy">Refund
                                    Policy</a></li>
                            <li><a href="https://qwords.com/v2/master-service-agreement/privacy-policy/">Privacy
                                    Policy</a></li>
                            <li><a href="https://qwords.com/v2/master-service-agreement/product-life-cycle-policy/">Product
                                    Life Cycle Policy</a></li>
                            <li><a href="https://qwords.com/v2/about-qwordscom/penggunaan-merek-dan-logo">Penggunaan
                                    Merek dan Logo</a></li>
                            <li><a href="https://qwords.com/v2/migrasi-pelanggan">Migrasi Ke Qwords</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-12 col-lg-3">
                    <div id="others" class="mb-5">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">Layanan Lainnya</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://qwords.com/v2/services/extended-support">Extended Support</a></li>
                            <li><a href="https://qwords.com/v2/manage-the-box-dedicated-colocation-server">Manage The
                                    Box Server</a></li>
                            <li><a href="https://qwords.com/v2/flexi-main-domain">Flexi Main Domain</a></li>
                            <li><a href="https://qwords.com/v2/ftp-backup">FTP Backup</a></li>
                            <li><a href="https://qwords.com/v2/services/offline-backup">Offline Backup</a></li>
                            <li><a href="https://qwords.com/v2/services/hosting-insurance">Hosting Insurance</a></li>
                            <li><a href="https://qwords.com/v2/licenses">Software License</a></li>
                            <li><a href="https://qwords.com/v2/services/digital-signature">Digital Signature</a></li>
                        </ul>
                    </div>
                    <div id="resellerservice" class="mb-5">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">Layanan Reseller</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://qwords.com/v2/afiliasi">Afiliasi</a></li>
                            <li><a href="https://qwords.com/v2/qwordscom-package-reseller">Qwords VIP Partner</a></li>
                            <li><a href="https://qwords.com/v2/private-label-hosting-reseller">Private Label Hosting
                                    Reseller</a></li>
                            <li><a href="https://qwords.com/v2/private-label-domain-reseller">Private Label Domain
                                    Reseller</a></li>
                        </ul>
                    </div>
                    <div id="resellerservice">
                        <h4 class="fw-bold mb-lg-4 h5home mb-3">Free Tools</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://link.share.web.id/">Qwords Link-Q</a></li>
                            <li><a href="https://wa.share.web.id/">WhatsApp Link Generator</a></li>
                            <li><a href="https://qwords.info/">Network Tools</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div id="office">
                        <div id="surabaya" class="mb-5">
                            <h4 class="fw-bold mb-lg-3 h5home mb-3">Kantor Surabaya</h4>
                            <p>
                                Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution
                                No.21, Surabaya 60271 - Indonesia 031 30008800
                            </p>
                        </div>
                        <div id="yogya" class="mb-5">
                            <h4 class="fw-bold mb-lg-3 h5home mb-3">Kantor Yogyakarta</h4>
                            <p>
                                Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman,
                                Yogyakarta 55584 - Indonesia 0274 6058800
                            </p>
                        </div>
                        <div id="jakarta" class="mb-5">
                            <h4 class="fw-bold mb-lg-3 h5home mb-3">Kantor Jakarta</h4>
                            <p>
                                Gedung Cyber 1 Lantai 3,
                                Jl.Kuningan Barat no.8,
                                Jakarta 12710 - Indonesia
                                021 39708800
                            </p>
                        </div>
                        <div id="bandung" class="mb-5">
                            <h4 class="fw-bold mb-lg-3 h5home mb-3">Kantor Bandung</h4>
                            <p>
                                Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung
                                40163 - Indonesia 022 30508800
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="min-height: 7rem;" class="d-flex justify-content-center pb-lg-0 pb-3">
                <div class="row justify-content-center align-items-end mt-auto" id="end-footer">
                    <div class="col-12 col-lg-auto pb-3">
                        <div class="hstack justify-content-center justify-content-lg-end gap-3">
                            <a href="https://www.facebook.com/qwordsdotcom">
                                <div class="social-icon">
                                    <img data-lazyloaded="1" data-placeholder-resp="30pxx30px"
                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Facebook.webp"
                                        loading="lazy"
                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Facebook.webp"
                                        alt="fb.webp" width="30px" height="30px" data-ll-status="loaded"
                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Facebook.webp"
                                            alt="fb.webp" width="30px" height="30px" /></noscript>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/qwordsdotcom/">
                                <div class="social-icon">
                                    <img data-lazyloaded="1" data-placeholder-resp="30pxx30px"
                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Instagram.webp"
                                        loading="lazy"
                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Instagram.webp"
                                        alt="ig.webp" width="30px" height="30px" data-ll-status="loaded"
                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Instagram.webp"
                                            alt="ig.webp" width="30px" height="30px" /></noscript>
                                </div>
                            </a>
                            <a href="https://twitter.com/qwordsdotcom">
                                <div class="social-icon">
                                    <img data-lazyloaded="1" data-placeholder-resp="30pxx30px"
                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Twitter.webp"
                                        loading="lazy"
                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Twitter.webp"
                                        alt="twt.webp" width="30px" height="30px" data-ll-status="loaded"
                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Twitter.webp"
                                            alt="twt.webp" width="30px" height="30px" /></noscript>
                                </div>
                            </a>
                            <a href="https://www.youtube.com/user/qwordsvideo">
                                <div class="social-icon">
                                    <img data-lazyloaded="1" data-placeholder-resp="30pxx30px"
                                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Youtube.webp"
                                        loading="lazy"
                                        data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Youtube.webp"
                                        alt="yt.webp" width="30px" height="30px" data-ll-status="loaded"
                                        class="entered litespeed-loaded"><noscript><img loading="lazy"
                                            src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/Youtube.webp"
                                            alt="yt.webp" width="30px" height="30px" /></noscript>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 pb-3">
                        <p class="mb-0 text-center">
                            Copyright © <span id="yearFooter"></span> PT. Qwords Company International
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    {{-- BS JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
