<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Exports\TokoExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toko = toko::leftJoin('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')->get(['buku.*']);
        return view('toko_0166', ['buku'=> $toko]);
    }

    public function export(){
        return Excel::download(new TokoExport, 'Data_1461900166.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tokotambah_0166');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        toko::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect('toko_0166');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = toko::find($id);
        return view('tokoedit_0166', ['toko_0166' => $toko]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $toko = toko::find($id);
        $toko->id = $request->id;
        $toko->judul = $request->judul;
        $toko->tahun_terbit = $request->tahun_terbit;
        $toko->save();

        return redirect('toko_0166');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toko = toko::find($id);
        $toko->delete();

        return redirect ('toko_0166');
    }
}