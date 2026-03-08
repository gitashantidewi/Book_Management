@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Buku</h1>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $book->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author', $book->author) }}">
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="year" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $book->year) }}">
                    @error('year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ old('category', $book->category) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-warning text-white">
                    <i class="fas fa-sync me-1"></i> Update Buku
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
