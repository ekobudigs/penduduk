@extends('layouts.app')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Penduduk</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>



<div class="col-md-6">
    <form action="/penduduk">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Nama Dan Pekerjaan" name="search"
                value="{{ request('search') }}">
            <button class="btn btn-info" type="submit">Cari</button>
        </div>
    </form>
</div>

   



@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>

@endif

<a href="/penduduk/create" class="btn btn-primary mb-3">Tambah Data</a>
<table id="a" class="display mb-4" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Job Title</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Keahlian</th>
            <th>Negara</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
   <tbody>

    @foreach ($alls as $key => $data)
    <tr>
        <td>{{ ($alls->currentpage()-1) * $alls->perpage() + $key + 1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->job_title }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->skill }}</td>
        <td>{{ $data->country }}</td>
        <td>{{ $data->date }}</td>
        <td>
            <a href="/penduduk/{{ $data->id }}" class="badge bg-info text-bold text-white">lihat</a>
            <a href="/penduduk/{{ $data->id }}/edit" class="badge bg-warning text-bold text-white">Edit</a>
            <form action="/penduduk/{{ $data->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 text-bold text-white" onclick="return confirm('Apakah Kamu Yakin Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
   </tbody>
    
</table>

<div class="d-flex justify-content-center">
    {{ $alls->links() }}

</div>
@endsection