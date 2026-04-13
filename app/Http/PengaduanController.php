<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function submit(Request $request)
    {

        $data = $request->all();

        return back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
