@extends('layouts.app')

@section('container')
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">

        <div class="d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">   {{ $pend->name }}</h6>

            <h6 class="m-0 font-weight-bold text-primary">   {{ $pend->date }}</h6>
        </div>
       
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <tr>
                <th>Email : </th>
                <td>{{ $pend->email }}</td>
            </tr>
            <br>
            <tr>
                <th>Jenis Kelamin : </th>
                <td>{{ $pend->gender }}</td>
            </tr>
            <br>
            <tr>
                <th>Pekerjaan : </th>
                <td>{{ $pend->job_title }}</td>
            </tr>
            <br>
            <tr>
                <th>Alamat : </th>
                <td>{{ $pend->address }}</td>
            </tr>
            <br>
            <tr>
                <th>Keahlian : </th>
                <td>{{ $pend->skill }}</td>
            </tr>
            <br>
            <tr>
                <th>Pin Kode : </th>
                <td>{{ $pend->pin }}</td>
            </tr>
            <br>
            <tr>
                <th>Negara : </th>
                <td>{{ $pend->country }}</td>
            </tr>







        </div>
    </div>
</div>
@endsection