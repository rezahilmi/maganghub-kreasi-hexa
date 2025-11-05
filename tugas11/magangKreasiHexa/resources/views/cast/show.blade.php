@extends('layout.main')

@section('content-header')
<div class="col-sm-6">
    <h3 class="mb-0">Cast</h3>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Show Data Cast</h3>
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
        <div class="mb-3">
            <h5>Nama</h5>
            <p>{{ $cast->nama }}</p>
        </div>
        <div class="mb-3">
            <h5>Umur</h5>
            <p>{{ $cast->umur }}</p>
        </div>
        <div class="mb-3">
            <h5>Bio</h5>
            <p>{{ $cast->bio }}</p>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection