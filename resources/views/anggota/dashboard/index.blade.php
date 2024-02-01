@extends('layouts.stisla.index', ['title' => 'Anggota Dashboard', 'section_header' => 'Anggota Dashboard'])

@section('content')
<div class="flexible-container" id="text-container">
  <!-- You can replace the text content below with your own text -->
  <h2><b>Selamat Datang Di Perpustakaan Gratis Kami</b></h2>
  <br>
  <h4><b>Silahkan pilih menu yang tersedia di sidebar</b></h4>
  <br>
  <h5><b>Tentang Kami</b></h5>
  <br>
  <h6>Kami menyadari bahwa minat baca bangsa indonesia saat ini masih dibawah rata-rata jika dibandingkan negara tetangga diasia tenggara.<br>
  Maka dari itu kami membuat website perpustakaan gratis ini untuk anda dan menyediakan konten-konten yang bermanfaat secara gratis.</h6>
</div><br>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-items mt-3">
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ count($book_approved) }}</div>
            <div class="card-stats-item-label">Disetujui</div>
          </div>
          <div class="card-stats-item">
            <!-- <div class="card-stats-item-count"></div>
            <div class="card-stats-item-label">Menunggu</div> -->
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ count($book_not_approve) }}</div>
            <div class="card-stats-item-label">Menunggu</div>
          </div>
        </div>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-book"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Buku Yang Saya Pinjam</h4>
        </div>
        <div class="card-body">
          {{ count($book_user) }}
        </div>
      </div>
    </div>
  </div>
<br>
<div class="flexible-container" id="text-container">
  <h4><b>Tata-Tertib</b></h4>
  <h6>- Harap untuk mengembalikan buku tepat waktu</h6><br>
  <h6>- Harap tidak merusak buku yang dipinjam</h6><br>
  <h6>- Harap merawat buku yang sudah dipinjam dengan baik</h6>
</div>
</div>


</div>

</div>
@endsection