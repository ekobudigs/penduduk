@extends('layouts.app')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Penduduk</h1>
    </div>


    <div class="col-lg-8">
        <form method="post" action="/penduduk" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" value="{{ old('job_title') }}" class="form-control @error('job_title') is-invalid @enderror"
                    id="job_title" name="job_title" required autofocus>
                @error('job_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                    id="email" name="email" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                    id="name" name="name" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">gender</label>
                <select class="form-control" name="gender">
                  
                            <option value="Male">Laki - Laki</option>
                            <option value="Female">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input type="text" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror"
                    id="address" name="address" required autofocus>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pin" class="form-label">pin</label>
                <input type="text" value="{{ old('pin') }}" class="form-control @error('pin') is-invalid @enderror"
                    id="pin" name="pin" required autofocus>
                @error('pin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="skill" class="form-label">skill</label>
                <input type="text" value="{{ old('skill') }}" class="form-control @error('skill') is-invalid @enderror"
                    id="skill" name="skill" required autofocus>
                @error('skill')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">country</label>
                <input type="text" value="{{ old('country') }}" class="form-control @error('country') is-invalid @enderror"
                    id="country" name="country" required autofocus>
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">date</label>
                <input type="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror"
                    id="date" name="date" required autofocus>
                @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>


@endsection
