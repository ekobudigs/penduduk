@extends('layouts.app')

@section('container')

 <!-- Bar Chart -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Umur Rata-Rata Penduduk Tiap Negara</h6>
    </div>
    <div class="card-body">
        <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
        </div>
        <hr>
        Styling for the bar chart can be found in the
        <code>/js/demo/chart-bar-demo.js</code> file.
    </div>
</div>

<!-- Bar Chart -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Jumlah Kelahiran Tiap Tahunya</h6>
   </div>
   <div class="card-body">
       <div class="chart-bar">
           <canvas id="tahun"></canvas>
       </div>
       <hr>
       Styling for the bar chart can be found in the
       <code>/js/demo/chart-bar-demo.js</code> file.
   </div>
</div>




@endsection