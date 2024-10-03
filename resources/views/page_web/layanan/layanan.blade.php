@extends('template_web.layout')

@section('content')
    <!------------------- END ROLL PROGRAM-LAYANAN  ------------------------>
    <hr class="invisible" id="a-more" />

    <!------------------- JUMBOTRON DESC PROFILE LAYANAN ------------------------>
    <div class="container my-5 py-md-5">
        <div class="row mt-md-5 d-flex justify-content-center">
            <!------------------- BERANDA FOURTH SECTION  ------------------------>
            <section class="--section-page" style="margin-bottom: -35px; margin-top:-50px">
                <div class="container mt-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <img src="images/layanan/layanan.png" alt="image profile layanan" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
                            <div class="row">
                                <h2 class="title-section text-danger">Layanan Kemasyarakatan</h2>
                                <p class="headline-paragraph text-black-50">Kelurahan Tanjung Mas memberikan layanan
                                    kemasyarakatan diantaranya adalah Pembuatan KTP, Pembuatan KK, Pengantar Syarat Nikah,
                                    Permohonan Akta Kelahiran, Pengaduan Masyarakat, dll.</p>
                            </div>
                            <div class="row gap-2 mb-2">
                                <div class="col-lg-6 shadow-sm --box-4">
                                    <h4 class="text-danger">Aduan</h4>
                                    <span>
                                    </span>
                                </div>
                                <div class="col-lg-6 shadow-sm --box-4">
                                    <h4 class="text-danger">KTP</h4>
                                    <span class="mb-1">
                                    </span>
                                </div>
                            </div>
                            <div class="row gap-2">
                                <div class="col-lg-6 shadow-sm --box-4">
                                    <h4 class="text-danger">KK</h4>
                                    <span>
                                    </span>
                                </div>
                                <div class="col-lg-6 shadow-sm --box-4">
                                    <h4 class="text-danger">Syarat Nikah</h4>
                                    <span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!------------------- END JUMBOTRON DESC PROFILE ------------------------>
    <hr class="invisible" id="r-more" />

    <div class="row row-cols-1 row-cols-md-3 g-4"
        style="max-width: 100%; margin-left:5%; margin-right:5%; margin-bottom:5%;">
        {{-- CARD 1 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/kk.png" class="card-img-top" alt="kartu keluarga">
                <div class="card-body">
                    <h5 class="card-title">Pembuatan KK</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan pembuatan KK (Kartu Keluarga) diantaranya,
                        Permohonan KK baru, Permohonan KK baru bagi penduduk yang sudah mempunyai NIK, Permohonan numpang
                        KK..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/kk" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 2 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/ktp.png" class="card-img-top" alt="ktp">
                <div class="card-body">
                    <h5 class="card-title">Pembuatan KTP</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan diantaranya penerbitan KTP rusak, pindah
                        datang, perpanjangan, perubahan data, tinggal sementara di Kota Semarang dll ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/ktp" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 3 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/nikah.png" class="card-img-top" alt="pengantar surat nikah">
                <div class="card-body">
                    <h5 class="card-title">Pengantar Syarat Nikah</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Pengantar atau Syarat Nikah dengan
                        persyaratan berikut ini untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/syarat_nikah" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 4 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/akte kelahiran.png" class="card-img-top" alt="akte kelahiran">
                <div class="card-body">
                    <h5 class="card-title">Permohonan Akte Kelahiran</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Permohonan Akte Kelahiran dengan
                        persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/akte_kelahiran" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 5 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/akte kematian.png" class="card-img-top" alt="akte kematian">
                <div class="card-body">
                    <h5 class="card-title">Permohonan Akte Kematian</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Permohonan Akte Kematian dengan
                        persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/akte_kematian" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 6 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/pengaduan.png" class="card-img-top" alt="pengaduan masyarakat">
                <div class="card-body">
                    <h5 class="card-title">Pengaduan Masyarakat</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Pengaduan Masyarakat dengan mekanisme
                        persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a href="/layanan/pengaduan" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 7 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/pelayanan.png" class="card-img-top" alt="alur pelayanan sistem">
                <div class="card-body">
                    <h5 class="card-title">Alur Sistem Pelayanan</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Alur Sistem Pelayanan Publik dengan
                        persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>
        {{-- CARD 8 --}}
        <div class="col">
            <div class="card h-100">
                <img src="images/layanan/pajak pbb.png" class="card-img-top" alt="cek pbb">
                <div class="card-body">
                    <h5 class="card-title">Cek PBB</h5>
                    <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Cek PBB (Pajak Bumi & Bangunan) dengan
                        persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small>
                    <a class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>
    <!------------------- END CARD LAYANAN ------------------------>
@endsection
