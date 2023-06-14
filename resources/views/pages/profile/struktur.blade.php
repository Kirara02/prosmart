@extends('layout.master', ['title' => $title] )
@section('content')
<div class="col-xx">
    <div class="card mb-4 rounded-1">
      <div class="card-body">
        <div class="row">
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                @method($method)
                @csrf
                <div class="col-md-9 mb-3">
                    <label class="form-label" for="image"><h6>Isi Data Struktur Organisasi</h6></label>
                    <input type="file" class="form-control"  id="image" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-dark w-100">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
