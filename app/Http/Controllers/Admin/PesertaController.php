<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Peserta::all();

        return view('pages.admin.lpeserta.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.lpeserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Peserta::create($data);
        
        return redirect()->route('peserta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Peserta::findOrFail($id);

        return view('pages.admin.lpeserta.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Peserta::findOrFail($id);

        return view('pages.admin.lpeserta.edit', compact('item'));
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
        $data = $request->all();
        $item = Peserta::findOrFail($id);
        $item->update($data);

        return redirect()->route('peserta.index')->with('status', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }

    public function confirm()
    {
        $items = Peserta::all();

        return view('pages.admin.pconfirm.index', compact('items'));
    }

    public function pending()
    {
        $items = Peserta::all();

        return view('pages.admin.ppending.index', compact('items'));
    }

    public function setStatus(Request $request, $id)
    {
        $item = Peserta::findOrFail($id);

        $item->status = $request->status;
        $item->username = strtolower($item->name);
        $item->password = 'funlearning' . mt_rand(1,999);
        $item->save();

        return redirect()->route('peserta.index')->with('status', 'Data Berhasil di Confirm');
    }

    public function showConfirm($id)
    {
        $item = Peserta::findOrFail($id);

        return view('pages.admin.lpeserta.showConfirm', compact('item'));
    }

    public function hapus($id)
    {
        $item = Peserta::findOrFail($id);
        $item->delete();

        return redirect()->route('peserta.index')->with('status', 'Data Berhasil di Hapus');
    }
}
