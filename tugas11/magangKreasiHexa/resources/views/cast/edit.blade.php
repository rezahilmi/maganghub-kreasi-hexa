@extends('layout.main')

@section('content-header')
<div class="col-sm-6">
    <h3 class="mb-0">Cast</h3>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Data Cast</h3>
        <div class="card-tools">
            <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
            </button>
            <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('cast.update', $cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $cast->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $cast->umur }}" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea type="area" class="form-control" id="bio" name="bio" required>{{ $cast->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-success mb-2">Edit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection