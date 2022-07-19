<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    public function index()
    {
        return view('umur');
    }

    public function umur()
    {
        // $penduduk = DB::table('penduduk')
        //         ->select('country', DB::raw('AVG(YEAR(CURDATE()) - YEAR(date)) AS age'))
        //         ->groupBy('country')
        //         ->distinct()
        //         ->get();

        $penduduk = [
            'pend' => DB::table('penduduk')
                    ->select('country', DB::raw('AVG(YEAR(CURDATE()) - YEAR(date)) AS age'))
                    ->groupBy('country')
                    ->distinct()
                    ->get(),
            'tahun' => DB::table('penduduk')
                    ->select(DB::raw('COUNT(date) AS jumlah'), DB::raw('YEAR(date) AS tahun'))
                    ->groupBy('tahun')
                    ->distinct()
                    ->get(),
        ];

                return view('umur', $penduduk);
    }


    
}
