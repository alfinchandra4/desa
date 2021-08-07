<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index () {
        $news = Berita::orderByDesc('created_at')->get();
        return view('admin.berita.index', [
            'news' => $news
        ]);
    }

    public function create () {
        return view('admin.berita.create');
    }

    public function store (Request $request) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $imgname = date('dmyHis') . '.' . $ext;
        Storage::disk('local')->putFileAs('public/berita', $file, $imgname);

        Berita::create([
            'photo_path' => $imgname,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back()->withSuccess('Berita berhasil ditambahkan');
    }

    public function edit($berita_id) {
        $berita = Berita::find($berita_id);
        if($berita) {
            return view('admin.berita.edit', [
                'berita' => $berita
            ]);
        }
        return back()->withSuccess('Berita tidak ditemukan');
    }

    public function update(Request $request, $berita_id) {
        $berita = Berita::find($berita_id);
        if($berita) {
            // Kalo mau ganti gambar
            if ($request->file('image') !== null) {
                Storage::delete('public/berita/' . $berita->photo_path);
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $imgname = date('dmyHis') . '.' . $ext;
                Storage::disk('local')->putFileAs('public/berita', $file, $imgname);
            } else {
                $imgname = $berita->photo_path;
            }

            $berita->update([
                'photo_path' => $imgname,
                'title' => $request->title,
                'body' => $request->body
            ]);
            return back()->withSuccess('Berita berhasil diubah');
        }
        return redirect()->route('admin.berita.index')->withError('Berita tidak ditemukan');
    }

    public function destroy($berita_id) {
        $berita = Berita::find($berita_id);
        if($berita) {
            Storage::delete('public/berita/' . $berita->photo_path);
            $berita->delete();
            return back()->withSuccess('Berita berhasil dihapus');
        }
        return back()->withError('Berita tidak ditemukan');
    }

    public function detail ($berita_id) {
        $berita = Berita::find($berita_id);
        if($berita) {
            return view('public.detail_berita', [
                'berita' => $berita
            ]);
        }
        return back()->withError('Berita tidak ditemukan');
    }

}
