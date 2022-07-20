@extends('layouts.app')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Penduduk</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
            <th>Alamat</th>
            <th>PIN</th>
            <th>Keahlian</th>
            <th>Negara</th>
            <th>Tanggal</th>
        </tr>
    </thead>
   <tbody>

    @foreach ($alls as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->job_title }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->address }}</td>
        <td>{{ $data->pin }}</td>
        <td>{{ $data->skill }}</td>
        <td>{{ $data->country }}</td>
        <td>{{ $data->date }}</td>
    </tr>
    @endforeach
   </tbody>
    
</table>

<div class="d-flex justify-content-center">
    {{ $alls->links() }}

</div>
@endsection