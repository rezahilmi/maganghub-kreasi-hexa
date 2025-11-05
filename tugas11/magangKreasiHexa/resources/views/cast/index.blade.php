@extends('layout.main')

@section('content-header')
<div class="col-sm-6">
    <h3 class="mb-0">Cast</h3>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cast</h3>
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
        <a href="{{ route('cast.create') }}" class="btn btn-success mb-2">Tambah</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>bio</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($casts as $cast)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-warning mb-2">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-primary mb-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('cast.destroy', $cast->id) }}" onsubmit="return confirm('Hapus data?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-2"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection