@extends('layouts.app')

@section('title', 'Dashboard - Book Manager')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body text-center">
                <i class="fas fa-book fa-3x mb-3"></i>
                <h5 class="card-title">Total Buku</h5>
                <p class="card-text h3">{{ \App\Models\Book::count() }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Selamat Datang
            </div>
            <div class="card-body">
                <h5 class="card-title">Sistem Manajemen Buku v1.0</h5>
                <p class="card-text">Gunakan menu di samping untuk mengelola inventaris buku Anda. Anda dapat menambah, mengubah, dan menghapus data buku dengan mudah.</p>
                <a href="{{ route('books.index') }}" class="btn btn-primary">Lihat Daftar Buku</a>
            </div>
        </div>
    </div>
</div>
@endsection
