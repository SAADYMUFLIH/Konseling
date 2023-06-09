@extends('layout/dashboard')

@section('content')
<div class="container">
    <h2>Form edit</h2>
    <form action="/updatesiswa/{{ $data->id }}" method="POST">
     @csrf
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required>
      </div>
      
      <div class="form-group">
        <label for="nama">Jurusan:</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $data->jurusan }}" required>
      </div>

      <div class="form-group">
        <label for="nama">Kelas:</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $data->kelas }}" required>
      </div>

      <div class="form-group">
        <label for="nama">Nis:</label>
        <input type="text" class="form-control" id="nis" name="nis" value="{{ $data->nis }}" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>

@endsection 