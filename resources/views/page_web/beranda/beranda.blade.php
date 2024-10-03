@extends('template_web.layout')

@section('content')
    <!------------------- CAROUSEL ------------------------>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner py-6">
				<div class="carousel-item active">
					<img src="images/beranda/image1.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 600px;" />
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 600px;" />
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image2.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 600px;" />
				</div>
			</div>	
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	<!------------------- END CAROUSEL ------------------------>

		<!------------------- JUMBOTRON DESC PROFILE ------------------------>
		<div class="container my-5">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h1 class="display-4 fw-bold text-danger">Kel. Tanjung Mas, Semarang</h1>
					<p class="lead text-muted mt-3">
						Selamat Datang di Website Resmi Kelurahan Tanjung Mas Kecamatan Semarang Utara
						Jl. Ronggowarsito 42a Semarang. <br><br>
						Platform Informasi Penting dan Pelayanan Masyarakat Setempat!
					</p>
				</div>
			</div>
		</div>
		<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
		<hr class="invisible" id="r-more" />

		<!------------------- BERANDA THIRD SECTION  ------------------------>
		<div class="container mb-5">
			<div class="row d-flex justify-content-between align-items-center">
				<div class="col-lg-6">
					<h2 class="fw-bold mb-3 text-danger">Geografis Kelurahan</h2>
					<p class="text-muted">
						Tanjung Mas merupakan sebuah nama kelurahan di wilayah Kecamatan Semarang Utara, Kota Semarang, Provinsi Jawa Tengah. Di kelurahan ini terdapat Pelabuhan Tanjung Emas yang merupakan satu-satunya pelabuhan di Semarang. Kelurahan Tanjungmas memiliki jumah penduduk sekitar 29.073 jiwa dengan jumlah RT sebanyak 129 buah dan jumlah RW sebanyak 12 buah. 
						Kelurahan Tanjung Emas berbatasan dengan Laut Jawa disebelah Utara
					</p>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<img src="images/beranda/image1.png" alt="image produksi" style="border-radius: 15px" class="img-fluid" />
				</div>
			</div>
		</div>		
		<!------------------- END BERANDA THIRD SECTION  ------------------------>

		<!------------------- BERANDA FOURTH SECTION  ------------------------>
		<section class="bg-light py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mb-4 mb-lg-0">
						<img src="images/beranda/image2.png" alt="image profile marwah" class="img-fluid rounded">
					</div>
					<div class="col-lg-6">
						<h2 class="fw-bold mb-3 text-danger">Layanan Masyarakat</h2>
						<p class="text-muted mb-4">Kelurahan Tanjung Mas memberikan layanan kemasyarakatan diantaranya adalah Pembuatan KTP, Pembuatan KK, Pengantar Syarat Nikah, Permohonan Akta Kelahiran, Pengaduan Masyarakat, dll.</p>
						<div class="row g-3">
							<div class="col-6 col-md-3">
								<div class="card h-100 p-2">
									<div class="card-body text-center">
										<i class="bi bi-megaphone fs-3 text-danger mb-2"></i>
										<h6 class="card-title">Aduan</h6>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="card h-100 p-2">
									<div class="card-body text-center">
										<i class="bi bi-person-vcard fs-3 text-danger mb-2"></i>
										<h6 class="card-title">KTP</h6>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="card h-100 p-2">
									<div class="card-body text-center">
										<i class="bi bi-people fs-3 text-danger mb-2"></i>
										<h6 class="card-title">KK</h6>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="card h-100 p-2">
									<div class="card-body text-center">
										<i class="bi bi-heart fs-3 text-danger mb-2"></i>
										<h6 class="card-title">Syarat Nikah</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END BERANDA FOURTH SECTION  ------------------------>

		<!------------------- KEUNGGULAN KAMI SECTION ------------------------>
		<section>
			<div class="container mb-5">
				<h2 class="fw-bold mb-3 text-center text-danger">Program Kami</h2>
					<div class="row mb-5">
						<div class="col-lg">
							<div class="py-3 px-4 --box-advantage">
								<div class="d-flex justify-content-start align-items-center">
									<img src="images/beranda/quality-control.png" alt="" />
									<h4 class="text-danger">Kelembagaan</h4>
								</div>
								<p class="text-black-50 headline-paragraph">Organisasi Kemasyarakatan (PKK) Kelurahan Tanjung Mas dalam setiap momentum seperti Posyandu Balita, Kelas Bumil, Lomba, dll.</p>
							</div>
						</div>
						<div class="col-lg">
							<div class="py-3 px-4 --box-advantage">
								<div class="d-flex justify-content-start align-items-center">
									<img src="images/beranda/design-tool.png" alt="" />
									<h4 class="text-danger">Pemberdayaan</h4>
								</div>
								<p class="text-black-50 headline-paragraph">Organisasi Kepemudaan " Satria Tanjung Anom" (Karang Taruna) Kelurahan Tanjung Mas seperti RAKERDA, Sosialisasi Fotografi dan Videografi, Pentas Seni, dll.</p>
							</div>
						</div>
					</div>
			</div>
		</section>
		<!------------------- END KEUNGGULAN KAMI SECTION ------------------------>
@endsection