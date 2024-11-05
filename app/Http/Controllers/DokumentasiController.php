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
        }
        // if ($request->hasFile('url')) {
        //     $data['url'] = $request->file('url')->store('url_link_materi', 'public');
        // }
        // if ($request->hasFile('url')) {
        //     $data['url'] = $request->file('url')->store('url_link_materi', 'public');
        // }
        // if ($request->hasFile('file_path')) {
        //     $data['file_path'] = $request->file('file_path')->store('file_materi', 'public');
        // }


        Dokumentasi::create($data);
        // $test = Dokumentasi::create($data);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi created successfully!');
    }

    public function show($id)
{
    $material = Dokumentasi::findOrFail($id);

    // If 'url' is a web link, redirect to it
    if ($material->url) {
        return redirect()->to($material->url);
    }

    // If 'thumb_dokumen' exists, you might want to display the image
    if ($material->thumb_dokumen && Storage::disk('public')->exists($material->thumb_dokumen)) {
        return response()->file(storage_path('app/public/' . $material->thumb_dokumen));
    }

    return redirect()->route('dokumentasi.index')->with('error', 'File atau URL tidak ditemukan.');
}



}
