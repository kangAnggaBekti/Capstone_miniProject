@extends('layouts.stisla.index', ['title' => auth()->user()->id === 1 ? 'Admin Dashboard' : 'Operator Dashboard',
'section_header' => auth()->user()->id === 1 ? 'Admin Dashboard' : 'Operator Dashboard'])

@section('content')
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-items mt-3">
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ $total_admins }}</div>
            <div class="card-stats-item-label">Admin</div>
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ $total_operators }}</div>
            <div class="card-stats-item-label">Operator</div>
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ $total_members }}</div>
            <div class="card-stats-item-label">Anggota</div>
          </div>
        </div>
      </div>
      <a href="{{ route('admin.users.index') }}">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-users mr-1"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pengguna</h4>
        </div>
        <div class="card-body">
          {{ $total_users }}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8 col-md-8 col-sm-12">
    <div class="card px-2 py-3">
      <h5 class="mx-2">Log Login Pengguna</h5>
      <hr>
      <ul class="list-group">
        @forelse($authenticate_logs as $authenticate_log)
        <li class="list-group-item">Login dari {{ $authenticate_log->user->name }} -
          {{ $authenticate_log->last_login_ip }} [
          {{ $authenticate_log->indonesian_date_format($authenticate_log->last_login_date) }}
          {{ $authenticate_log->time($authenticate_log->last_login_time) }} ]</li>
        @empty
        <li class="list-group-item text-danger font-weight-bold text-uppercase text-center">Data tidak ada!</li>
        @endforelse
      </ul>
      <button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#staticBackdrop">
        Lihat semua
      </button>
    </div>
  </div>
  
  <div class="container mt-5">
  <div class="row justify-content-center">          
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-globe"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Kategori Genre</span>
            {{-- <span class="info-box-number">{{ $countkategori }}</span> --}}
          </div>
        </div>
    </div>
         
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>
          <div class="info-box-content">
          <span class="info-box-text">Jumlah Novel</span>
          {{-- <span class="info-box-number">{{ $countartikel }}</span> --}}
          </div>
        </div>
      </div>
    
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
          <span class="info-box-text">Jumlah User</span>
          {{-- <span class="info-box-number">{{ $countuser }}</span> --}}
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
</div>
@push('modal')
@include('admin.dashboard.modal.show')
@endpush