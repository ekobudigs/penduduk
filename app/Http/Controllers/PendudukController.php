<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::filter(request(['search']))->paginate(15)->withQueryString();
        return view('penduduk.index', [
            'alls' => $penduduk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'name' =>  ['required', 'string', 'max:100'],
            'gender' => ['required'],
            'address' => ['required'],
            'pin' => ['required'],
            'skill' => ['required'],
            'country' => ['required'],
            'date' => ['required'],
        ]);

         Penduduk::create([
            'job_title' => $request->job_title,
            'email' => $request->email,
            'name' =>  $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'pin' => $request->pin,
            'skill' => $request->skill,
            'country' => $request->country,
            'date' => $request->date,
        ]);

        return redirect('/penduduk')->with('success', 'Yeah Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view('penduduk.show', [
            'pend' => $penduduk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', [
            'pend' => $penduduk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $rules = [
            'job_title' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'name' =>  ['required', 'string', 'max:100'],
            'gender' => ['required'],
            'address' => ['required'],
            'pin' => ['required'],
            'skill' => ['required'],
            'country' => ['required'],
            'date' => ['required'],
        ];

       

        $validateData = $request->validate($rules);
        Penduduk::where('id', $penduduk->id)
            ->update($validateData);

        return redirect('/penduduk')->with('success', 'Yeah Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        Penduduk::destroy($penduduk->id);

        return redirect('/penduduk')->with('success', 'Yeah Data Berhasil Di Hapus');
    }
}
