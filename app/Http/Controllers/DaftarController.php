<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class DaftarController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'Pending';
        Peserta::create($data);

        return redirect()->route('home');
    }
}
