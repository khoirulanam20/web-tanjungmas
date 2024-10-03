@extends('template_web.layout')

<!-- resources/views/page_web/about/about.blade.php -->


<!------------------- VISI MISI ------------------------>

<!------------------- END PILIH KAMI ------------------------>

@section('content')

		<!------------------- ABOUT FOURTH SECTION  ------------------------>
		<section class="--section-page">
			<div class="container mt-5">
				<div style="margin-top: -110px" class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/kk1.png" alt="image profile kk" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">Pembuatan KK</h2>
							<body>
                                <ol>
                                    <b>1. PERMOHONAN KK BARU</b>
                                        <ul>
                                            <li>Surat pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga</li>
                                            <li>Melampirkan KK dan KTP lama</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Kelahiran bagi kepala keluarga dan seluruh anggota keluarga, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Mengisi Data Keluarga dan Biodata setiap Anggota Keluarga</li>
                                            <li>Melampirkan fotocopy Bukti / Ketetapan Ganti Nama (apabila sudah ganti nama), dengan memperlihatkan dokumen aslinya</li>
                                            <li>Asli Surat Keterangan Pindah Datang, bagi penduduk yang pindah tempat tinggal</li>
                                            <li>Khusus bagi penduduk WNI yang baru pindah dan datang dari luar negeri membawa Surat Keterangan Datang dari Luar Negeri</li>
                                        </ul>
                                </ol>
                            </body>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END ABOUT FOURTH SECTION  ------------------------>
		
			<!------------------- ABOUT FIVE SECTION  ------------------------>
		
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							{{-- <h2 class="title-section">MISI</h2> --}}
							<body>
                                <ol>
                                    <b>2. PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK</b>
                                        <ul>
                                            <p>Permohonan ini khusus bagi penduduk yang sudah terekam datanya dalam Bank Data Kependudukan, namun mengajukan permohonan KK baru karena :</p>
                                            <b><i><li>Penduduk yang membentuk rumah tangga baru</li></i></b>
                                            <li>Surat Pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga</li>
                                            <li>Melampirkan fotocopy KK lama yang sudah ada NIK</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah, bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                        </ul>
                                </ol>
                                <ol>
                                    {{-- <li>PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK --}}
                                        <ul>
                                            <b><i><li>Penduduk yang pindah datang</li></i></b>
                                            <li>Surat Pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga</li>
                                            <li>Melampirkan fotocopy KK lama yang sudah ada NIK</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah, bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Mengisi Data Keluarga dan Biodata setiap Anggota Keluarga (bila ada perubahan)</li>
                                            <li>Melampirkan fotocopy Bukti / Ketetapan Ganti Nama (apabila sudah ganti nama), dengan memperlihatkan dokumen aslinya</li>
                                            <li>Asli Surat Keterangan Pindah</li>
                                        </ul>
                                    {{-- </li> --}}
                                </ol>
                                <ol>
                                    {{-- <li>PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK --}}
                                        <ul>
                                            <b><i><li>Penduduk yang KK hilang atau rusak</li></i></b>
                                            <li>Surat Pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga</li>
                                            <li>Melampirkan dokumen kependudukan dari salah satu anggota keluarga yang sudah ada NIK</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah, bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Melampirkan fotocopy KTP dan KK yang sudah ada NIK</li>
                                            <li>Melampirkan Kartu Keluarga yang rusak bagi yang rusak</li>
                                        </ul>
                                    {{-- </li> --}}
                                </ol>
                                <ol>
                                    {{-- <li>PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK --}}
                                        <ul>
                                            <b><i><li>Penduduk yang mengalami peristiwa kependudukan / peristiwa lainnya</li></i></b>
                                            <li>Surat Pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga di ketahui Lurah</li>
                                            <li>Melampirkan dokumen peristiwa kependudukan / peristiwa penting lainnya</li>
                                            <li>Melampirkan fotocopy KTP dan KK yang sudah ada NIK</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah, bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Mengisi Data Keluarga dan Biodata bagi yang ada perubahan</li>
                                            <li>Melampirkan fotocopy Bukti / Ketetapan Ganti Nama (apabila sudah ganti nama), dengan memperlihatkan dokumen aslinya</li>
                                        </ul>
                                    {{-- </li> --}}
                                </ol>
                            </body>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="images/layanan/kk2.png" alt="image profile kk" class="img-fluid" />
					</div>
				</div>
			</div>
		</section>
<!------------------- END ABOUT FIVE SECTION  ------------------------>
		<!------------------- ABOUT FOURTH SECTION  ------------------------>
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/kk3.png" alt="image profile kk" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<body>
                                <ol>
                                    <b>3. PERMOHONAN NUMPANG KK</b>
                                        <ul>
                                            <p>Permohonan ini khusus bagi penduduk yang sudah terekam datanya dalam Bank Data Kependudukan, namun mengajukan permohonan KK baru karena :</p>
                                            <b><i><li>Penduduk yang KK lama dibawa pindah oleh kepala keluarga</li></i></b>
                                            <li>Surat pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga di ketahui lurah</li>
                                            <li>Melampirkan fotocopy KK dan KTP lama yang sudah ada NIK</li>
                                            <li>Mengisi data keluarga dan biodata setiap Anggota Keluarga</li>
                                        </ul>
                                </ol>
                                <ol>
                                        <ul>
                                            <b><i><li>Anggota keluarga pindah tempat tinggal</li></i></b>
                                            <li>Surat pengantar RT/RW dan Kelurahan</li>
                                            <li>Mengisi Formulir Permohonan Kartu Keluarga</li>
                                            <li>Asli Surat Keterangan Pindah dari daerah asal</li>
                                            <li>Melampirkan fotocopy KK lama yang sudah ada NIK</li>
                                            <li>Melampirkan fotocopy Kutipan Akta Perkawinan / Akta Nikah, bagi penduduk yang sudah menikah, dengan memperlihatkan dokumen aslinya</li>
                                            <li>Mengisi data keluarga dan biodata setiap Anggota Keluarga</li>
                                            <li>Melampirkan Surat Pernyataan bermeterai dari Kepala Keluarga yang ditumpangi</li>
                                        </ul>
                                </ol>
                            </body>
						</div>
					</div>
				</div>
			</div>
	
		<!------------------- END ABOUT FOURTH SECTION  ------------------------>

        <a style="margin-left:600px" class="btn btn-secondary" href="/program">KEMBALI &raquo;</a>

@endsection
