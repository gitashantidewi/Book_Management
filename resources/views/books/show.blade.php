@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Buku</h1>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-header bg-dark text-white">
        Informasi Buku
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="200">Judul</th>
                <td>{{ $book->title }}</td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>{{ $book->author }}</td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>{{ $book->year }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td><span class="badge bg-primary">{{ $book->category }}</span></td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $book->created_at->format('d M Y H:i') }}</td>
            </tr>
            <tr>
                <th>Terakhir Diperbarui</th>
                <td>{{ $book->updated_at->format('d M Y H:i') }}</td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning text-white">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline delete-form">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger btn-delete">
                <i class="fas fa-trash me-1"></i> Hapus
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            const form = this.closest('.delete-form');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data buku akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
