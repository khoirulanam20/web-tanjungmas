<!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('template_web.layout')

@section('content')
<body class="bg-light">
  <section class="container py-5 ">
    <h1 class="text-center text-danger mb-5">Kontak</h1>
    <div class="row mt-5">
      <div class="col-md-6">
        <form action="https://forms.nicepagesrv.com/v2/form/process" method="post" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter a valid email address" required>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6 mb-10">
        <h2>Kantor Kelurahan Tanjungmas</h2>
        <p>Selamat Datang di Website Resmi Kel. Tanjung Mas Kec. Semarang Utara Jl. Ronggowarsito 42 a Semarang.</p>
        <p>Kontak Kami melalui phone <i>(024) 3560341</i> atau email <a href="mailto:tanjungmas@gmail.com" class="text-decoration-none">tanjungmas@gmail.com</a> untuk informasi yang Anda butuhkan lebih lanjut.</p>
        <div class="d-flex">
          <a href="https://www.facebook.com/pages/Kelurahan%20Tanjung%20Emas%20Semarang%20Utara/131972440313750/" class="me-3">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://twitter.com/kel_Tanjungmas/" class="me-3">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="https://www.instagram.com/keltanjungmas/" class="me-3">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/" class="me-3">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
</body>
@endsection