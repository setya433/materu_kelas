<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index(){
        $dokumentasi = Dokumentasi::all();

        return view('dokumentasi.index',compact('dokumentasi'));
    }

    public function create() {
        return view('dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'url' => 'nullable|url',
            'thumb_dokumen' => 'nullable|image|mimes:jpeg,png,jpg,gif',

        ]);

        $data = $request->all();

        // Handle thumbnail upload
        if ($request->hasFile('thumb_dokumen')) {
            $data['thumb_dokumen'] = $request->file('thumb_dokumen')->store('thumb_dokumen', 'public');
        }else{
            echo "gagal upload thumb";
        }
        // if ($request->hasFile('file_path')) {
        //     $data['file_path'] = $request->file('file_path')->store('file_materi', 'public');
        // }


        Dokumentasi::create($data);

        return redirect()->route('domentasi.index')->with('success', 'Dokumentasi created successfully!');
    }


}
