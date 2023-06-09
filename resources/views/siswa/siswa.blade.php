@extends('layout/dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Siswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a type="button" class="btn btn-primary" href="/tambahsiswa">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Nis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($data as $row)
                     <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>{{ $row->nis }}</td>
                        <td>
                           <a type="button" class="btn btn-success" href="/tampilsiswa/{{ $row->id }}">Edit</a>
                           <a type="button" class="btn btn-danger" href="/deletesiswa/{{ $row->id }}">Hapus</a>
                        </td>
                    </tr>   
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection