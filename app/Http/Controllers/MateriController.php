<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();

    //     dump($materi);
    // exit; // Berhenti eksekusi script


        // Mengirim data materi ke view
        return view('materi.index', compact('materi'));

    }

    public function create()
    {
        return view('materi.create');
    }

    // Store new Materi
    public function store(Request $request)
    {
        $request->validate([
            'judul_materi' => 'required|string|max:255',
            'thumbnail_materi' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'deskripsi' => 'required|string',
            'tanggal_upload' => 'required|date',
            'link_url_materi' => 'nullable|url',
            'file_path' => 'required|file|mimes:pdf,doc,docx,|max:2048'
        ]);

        $data = $request->all();

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail_materi')) {
            $data['thumbnail_materi'] = $request->file('thumbnail_materi')->store('thumbnails', 'public');
        }
        if ($request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('file_materi', 'public');
        }

        Materi::create($data);

        return redirect()->route('materi.index')->with('success', 'Materi created successfully!');
    }

    public function show($id)
    {
        $material = Materi::findOrFail($id);

        if (Storage::disk('public')->exists($material->file_path)) {
            return response()->file(storage_path('app/public/' . $material->file_path));
        }

        return redirect()->route('materi.index')->with('error', 'File tidak ditemukan.');
    }
}
