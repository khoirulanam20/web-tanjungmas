@extends('template_web.layout')

@section('content')

<!------------------- JUMBOTRON DESC PROFILE ------------------------>
<div class="container py-5">
    <div class="row mt-5">
        <div class="d-flex align-items-start">
            <h1 class="fw-bold text-danger mx-auto">PROFIL KELURAHAN</h1>
        </div>
         {{-- Deskripsi Profil --}}
         <p class="headline-paragraph text-black-50 pt-2 px-2">
            <b>Tanjung Mas</b> merupakan sebuah nama kelurahan di wilayah kecamatan Semarang Utara, 
            Kota Semarang, Provinsi Jawa Tengah. Kelurahan ini berbatasan dengan Kelurahan Kemijen dan Rejomulyo di sebelah timur, 
            Purwodinatan di sebelah selatan, Bandarharjo di sebelah barat, dan Laut Jawa di sebelah utara. 
            <br><br>
            Nama kelurahan ini diambil dari Pelabuhan Tanjung Emas, dahulu bernama Pelabuhan Rede, yang dikembangkan oleh 
            <!-- Konten yang akan disembunyikan -->
            <span id="more-text" class="d-none">
                Pemerintah Hindia Belanda pada tahun 1868 untuk menggantikan pelabuhan lama di Simongan yang dianggap kurang strategis 
                karena mengalami pendangkalan akibat endapan lumpur.
                <br><br>
                Selain pelabuhan, tempat bersejarah paling menonjol di Tanjung Mas adalah Kota Lama Semarang, sebuah wilayah perdagangan Hindia Belanda 
                yang mulai dibangun pada akhir abad ke-17. GPIB Immanuel Semarang, dibangun pada tahun 1753, merupakan gereja tertua di Provinsi Jawa Tengah 
                dan saat ini berperan sebagai salah satu marka tanah Semarang. 
                Selain itu, terdapat pula bangunan-bangunan bersejarah lain seperti Gedung Marabunta, Gedung H. Spiegel, Gedung Asuransi Jiwasraya, dan Stasiun Semarang Tawang.
            </span>
        </p>
        <!-- Tombol Read More/Less -->
        <div class="d-flex justify-content-center">
            <button id="read-more-btn" class="btn btn-link text-danger text-decoration-none" onclick="toggleText()">Baca Selengkapnya</button>
        </div>
        <!-- Kolom Kiri -->
        <div class="col-lg-6">
            <!-- Tabel Lokasi Kel. Tanjung Mas -->
            <table class="table table-bordered table-hover mt-5">
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i>Kelurahan</i></td>
                        <td>Tanjung Mas</td>
                    </tr>
                    <tr>
                        <td><i>Negara</i></td>
                        <td>Indonesia</td>
                    </tr>
                    <tr>
                        <td><i>Provinsi</i></td>
                        <td>Jawa Tengah</td>
                    </tr>
                    <tr>
                        <td><i>Kota</i></td>
                        <td>Semarang</td>
                    </tr>
                    <tr>
                        <td><i>Kecamatan</i></td>
                        <td>Semarang Utara</td>
                    </tr>
                    <tr>
                        <td><i>Kodepos</i></td>
                        <td>50174</td>
                    </tr>
                    <tr>
                        <td><i>Kode Kemendagri</i></td>
                        <td>33.74.02.1008</td>
                    </tr>
                    <tr>
                        <td><i>Kode BPS</i></td>
                        <td>3374120009</td>
                    </tr>
                    <tr>
                        <td><i>Luas</i></td>
                        <td>3.24 km²</td>
                    </tr>
                </tbody>
            </table>
            <!-- Gambar Peta Infrastruktur Kel. Tanjung Mas -->
            
        </div>
        <!-- Kolom Kanan -->
        <div class="col-lg-6">
            <img src="images/about/peta-tanjung-mas.png" alt="Gambar Lokasi" class="img-fluid mt-5">
        </div>
    </div>
</div>
<!------------------- END JUMBOTRON DESC PROFILE ------------------------>

{{-- Java Script Jumbotron --}}
<script>
    function toggleText() {
        var moreText = document.getElementById("more-text");
        var btnText = document.getElementById("read-more-btn");

        if (moreText.classList.contains("d-none")) {
            moreText.classList.remove("d-none");
            btnText.innerHTML = "Baca Lebih Sedikit";
        } else {
            moreText.classList.add("d-none");
            btnText.innerHTML = "Baca Selengkapnya";
        }
    }
</script>

<!------------------- CONTENT ABOUT THIRD SECTION  ------------------------>
<div class="container mb-5 mt-5">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3 text-danger">Struktur Pemerintahan</h2>
            <p class="headline-paragraph text-black-50 mx-3">
                Struktur Pemerintahan dari Kelurahan Tanjung Mas di pimpin oleh Lurah Sony Yudha P.P.,STP,MSI; Tanjung Mas memliki Sekretaris yakni Vivin Kurnia Setyawan, S.T.; Pengelola IT Mulyono, A.Md.;
                Pengadministrasi Umum Tumin; Serta ada 3 bidang Seksi, Seksi Pemerintahan Trantibum yakni Yusri Nurwandi,A.Md.; Seksi Perekonomian & Kesejahteraan Sosial Suripto, S.E.; dan Seksi Pembangunan Subeno, S.M.
                Dengan adanya pemerintahan Lurah <b>Sony Yudha PP., S.STP, M.SI</b> di harapkan makin berkembang Kelurahan Tanjung Mas.
            </p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <img src="images/about/struktur-pemerintahan.png" alt="image produksi" class="img-fluid rounded" />
        </div>
    </div>
</div>
<!------------------- END ABOUT THIRD SECTION  ------------------------>

<!------------------- ABOUT FOURTH SECTION  ------------------------>
<section class="bg-light py-5">
    <div class="container mt-5">
        <div class="row d-flex justify-content-between align-items-center mb-5">
            <div class="col-lg-6">
                <img src="images/about/visi.png" alt="image profile visi" class="img-fluid rounded" />
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 ps-4">
                <h2 class="fw-bold mb-3 text-danger">VISI</h2>
                <p class="headline-paragraph text-black-50">"Terwujudnya Kota Semarang yang Semakin Hebat Berlandaskan Pancasila dalam Bingkai NKRI yang Ber-Bhineka Tunggal Ika"</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-6 mt-4 mt-lg-0 ps-4 order-lg-1 order-2">
                <h2 class="fw-bold mb-3 text-danger">MISI</h2>
                <ul class="headline-paragraph text-black-50">
                    <li>Meningkatkan kualitas & kapasitas sumber daya manusia yang unggul & produktif untuk mencapai kesejahteraan & keadilan sosial</li>
                    <li>Meningkatkan potensi ekonomi lokal yang berdaya saing & stimulasi pembangunan industri, berlandaskan riset & inovasi berdasar prinsip demokrasi ekonomi pancasila</li>
                    <li>Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar & perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</li>
                    <li>Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</li>
                    <li>Menjalankan reformasi birokrasi pemerintahan secara dinamis & menyusun produk hukum yang sesuai nilai - nilai pancasila dalam kerangka negara kesatuan republik indonesia</li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img src="images/about/misi.png" alt="image profile misi" class="img-fluid rounded" />
            </div>
        </div>
    </div>
</section>
<!------------------- END ABOUT FOURTH SECTION  ------------------------>
@endsection