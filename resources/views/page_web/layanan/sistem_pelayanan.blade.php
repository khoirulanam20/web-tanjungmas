@extends('template_web.layout')

@section('content')

		<!------------------- ABOUT FOURTH SECTION  ------------------------>
		<section class="--section-page">
			<div class="container mt-5">
				<div style="margin-top: -110px" class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/pelayanan.png" alt="image profile pelayanan" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">Alur Sistem Pelayanan</h2>
							<body>
                                <ol>
                                   <b>1. Alur Sistem Pelayanan Publik</b>
                                </ol>
                            </body>
                            <img style="width:450px; height:250px" src="images/layanan/pelayanan_publik.jpg" alt="image profile alur sistem pelayanan publik" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!------------------- END ABOUT FOURTH SECTION  ------------------------>

        <a style="margin-left:600px" class="btn btn-secondary" href="/program">KEMBALI &raquo;</a>

@endsection
