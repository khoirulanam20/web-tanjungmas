@extends('template_web.layout')

@section('content')

		<!------------------- ABOUT FOURTH SECTION  ------------------------>
		<section class="--section-page">
			<div class="container mt-5">
				<div style="margin-top: -110px" class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/ktp.png" alt="image profile ktp" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">Pembuatan KTP</h2>
							<body>
                                <ol>
                                   <b>1. PENERBITAN KTP BARU BAGI WNI</b>
                                        <ul>
                                            <li>Surat pengantar dari RT dan RW</li>
                                            <li>Mengisi form permohonan KTP</li>
                                            <li>Melampirkan KK dan KTP lama</li>
                                            <li>Melampirkan pas foto berwarna, tahun ganjil (contoh 1987) dengan latar belakang merah, (contoh 1988) untuk tahun genap dengan latar belakang biru, dan</li>
                                            <li>Fotokopi KK terbaru</li>
                                        </ul>
                                </ol>
                                <ol>
                                    <b>2. PENERBITAN KTP KARENA HILANG / RUSAK</b>
                                        <ul>
                                            <li>Surat Keterangan Kehilangan dari Kepolisian</li>
                                            <li>Mengisi form permohonan KTP</li>
                                            <li>KTP yang rusak</li>
                                        </ul>
                                </ol>
                                <ol>
                                    <b>3. PENERBITAN KTP KARENA PINDAH DATANG</b>
                                        <ul>
                                            <li>Surat Keterangan Pindah/Surat Keterangan Pindah Datang (SKP/SKPD) dan</li>
                                            <li>Surat Keterangan Datang dari Luar Negeri (SKDLN) yang diterbitkan oleh Dinas bagi WNI yang datang dari luar negeri karena pindah.</li>
                                            <li>Fotokopi Akta Kelahiran</li>
                                            <li>Fotokopi Surat Nikah/Cerai (yang memiliki)</li>
                                        </ul>
                                </ol>
                                <ol>
                                    <b>4. PENERBITAN KTP KARENA PERPANJANGAN</b>
                                        <ul>
                                            <li>Surat Pengantar RT/RW</li>
                                            <li>Surat Keterangan Datang dari Luar Negeri (SKDLN) yang diterbitkan oleh Dinas bagi WNI yang datang dari luar negeri karena pindah.</li>
                                            <li>KTP lama</li>
                                        </ul>
                                </ol>
                                <ol>
                                    <b>5. PENERBITAN KTP KARENA PERUBAHAN DATA</b>
                                        <ul>
                                            <li>KK Asli</li>
                                            <li>KTP Asli</li>
                                            <li>Surat Keterangan / bukti perubahan peristiwa kependudukan dan peristiwa penting</li>
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
							<h2 class="title-section">TINGGAL SEMENTARA DI KOTA SEMARANG</h2>
							<body>
                                <ol>
                                    <p>Wajib mengurus :</p>
                                        <ul>
                                            <li>Surat Keterangan Tinggal Sementara (SKTS) untuk WNI</li>
                                            <li>Surat Keterangan Tempat Tinggal (SKTT) untuk WNA pemegang KITAS</li>
                                        </ul>
                                </ol>
                                <ol>
                                    {{-- <li>PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK --}}
                                        <ul>
                                            <b>1. WNI</b>
                                            <li>Bagi penduduk WNI yang datang dari luar daerah dengan maksud untuk bekerja atau menempuh pendidikan di luar kedinasan dan yang bersangkutan bertempat tinggal didaerah tetapi tidak bermaksud menjadi penduduk kota semarang (penduduk tetap).</li>
                                            <li>Masa berlaku :SKTS untuk yang bekerja : 6 bulan</li>
                                            <li>SKTS untuk menempuh pendidikan : 1 tahun</li>
                                            <li>Dapat diperpanjang selama yang bersangkutan tinggal di kota semarang</li>
                                        </ul>
                                </ol>
                                <ol>
                                    {{-- <li>PERMOHONAN KK BARU BAGI PENDUDUK YANG SUDAH MEMPUNYAI NIK --}}
                                        <ul>
                                            <b>2. WNA</b>
                                            <li>Bagi penduduk WNA yang memiliki ijin tinggal terbatas yang datang dari Luar Negeri bermaksud tinggal sementara di Kota Semarang</li>
                                        </ul>
                             <p><b><i> Berlaku : </i></b></p>
                             <p>SKTT : disesuaikan dengan KITAS/ paling lama 1 Tahun dan dapat diperpanjang</p>
                                </ol>
                            <h6>Denda Keterlambatan Pelaporan</h6>
                           <ol>
                            <ul>
                                <li>Untuk Surat Keterangan Tinggal Sementara SKTS</li>
                            </ul>
                           </ol>
                            <p>Pelaporan kedatangan lebih dari 30 hari dihitung dari tanggal surat keterangan pindah sementara dari daerah asal: Rp. 50.000</p>
                            <p>Pelaporan keterlambatan perpanjangan SKTS lebih dari 14 hari: Rp. 50.000</p>
                            <ol>
                                <ul>
                                    <li>Untuk Surat Keterangan Tempat Tinggal SKTT</li>
                                </ul>
                               </ol>
                                <p>Pelaporan kedatangan dari luar negeri paling lambat 7 hari sejak diterbitkan kitas Rp. 500.000</p>
                                <p>Pelaporan keterlambatan perpanjangan SKTT lebih dari 30 hari Rp. 500.000</p>
                        </body>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="images/layanan/ktp.png" alt="image profile ktp" class="img-fluid" />
					</div>
				</div>
			</div>
		</section>
<!------------------- END ABOUT FIVE SECTION  ------------------------>
		<!------------------- ABOUT FOURTH SECTION  ------------------------>
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/ktp.png" alt="image profile ktp" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">MANFAAT :</h2>
							<body>
                                <ol>
                                    <ul>
                                        <li>Memberikan rasa aman dan kepastian hukum</li>
                                        <li>Tercatat sebagai penduduk tinggal sementara di kota semarang</li>  
                                        <li>Dapat mengurus surat-surat kependudukan di kelurahan setempat</li>
                                    </ul>
                                   </ol>
                            </body>
                            <h2 class="title-section">SYARAT UTAMA</h2>
							<body>
                                <ol>
                                    <ul>
                                        <b>1. Bagi WNI yang bekerja dan WNA pemegang KITAS menyetor uang jaminan ke kas umum daerah melalui bank jateng cabang semarang</b>
                                        <b>2. Bagi WNI :</b>
                                        <li>Asli surat keterangan pindah sementara dari daerah asal</li>
                                        <li>Surat keterangan catatan kepolisian</li>  
                                        <li>Foto copy KTP-EL/KK</li>
                                        <li>Surat keterangan jaminan tempat tinggal</li>
                                        <li>Pas foto 3x4 : 1 lembar</li>  
                                        <li>Foto copy kartu mahasiswa (bagi yang menempuh pendidikan)</li>
                                        <li>Surat keterangan dari tempat bekerja (bagi yang bekerja)</li>
                                        <b>3. Bagi WNA :</b>
                                        <li>Foto copy</li>
                                        <b>1. KITAS</b>
                                        <b>2. PASPOR</b>
                                        <b>3. STM ( surat tanda melapor )</b>
                                        <b>4. SKTL ( surat keterngan tanda lapor )</b>
                                        <li>Pas foto 3x4 : 1 lembar</li>
                                        <li>Surat keterangan jaminan tempat tinggal</li>    
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
