<?php

namespace App\Http\Controllers;

use App\Models\KategoriPotensidesa;
use App\Models\Potensidesa;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class   PotensiDesaController extends Controller
{

    public function create()
    {
        $categories = KategoriPotensidesa::get();
        return view('admin.potensi.index', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $imgname = date('dmyHis') . '.' . $ext;
        Storage::disk('local')->putFileAs('public/potensi', $file, $imgname);
        Potensidesa::create([
            'kategori_potensi_desa_id' => $request->kategori_potensi_desa,
            'photo_path' => $imgname,
            'name' => $request->name,
            'phone' => $request->phone,
            'social' => $request->social,
            'social1' => $request->social1,
        ]);
        // ['name' => 'UMKM'],
        //     ['name' => 'Wisata'],
        //     ['name' => 'Seni Budaya'],
        //     ['name' => 'Guest House']
        switch ($request->kategori_potensi_desa) {
            case 1:$msg = 'UMKM berhasil ditambahkan';
                break;
            case 2:$msg = 'Wisata berhasil ditambahkan';
                break;
            case 3:$msg = 'Seni Budaya berhasil ditambahkan';
                break;
            case 4:$msg = 'Guest House berhasil ditambahkan';
                break;
        }
        return back()->withSuccess($msg);
    }

    public function delete($potensi_desa_id)
    {
        $data = Potensidesa::find($potensi_desa_id);
        if ($data) {
            switch ($data->kategori_potensi_desa_id) {
                case 1:$msg = 'UMKM berhasil dihapus';
                    break;
                case 2:$msg = 'Wisata berhasil dihapus';
                    break;
                case 3:$msg = 'Seni Budaya berhasil dihapus';
                    break;
                case 4:$msg = 'Guest House berhasil dihapus';
                    break;
            }

            Storage::delete('public/potensi/' . $data->photo_path);
            $data->delete();
            return back()->withSuccess($msg);
        }
        return back()->withError('potensi tidak ditemukan');
    }

    public function umkm()
    {
        return view('public.list_umkm');
    }

    public function wisata () {
        return view('public.list_wisata');

    }

    public function seni_budaya () {
        return view('public.list_senibudaya');
    }

    public function guest_house ( ) {
        return view('public.list_guesthouse');
    }

    public function umkm_admin()
    {
        $datas = Potensidesa::where('kategori_potensi_desa_id', 1)->orderByDesc('created_at')->get();
        return view('admin.potensi.umkm.index', [
            'datas' => $datas,
        ]);
    }

    public function wisata_admin()
    {
        $datas = Potensidesa::where('kategori_potensi_desa_id', 2)->orderByDesc('created_at')->get();
        return view('admin.potensi.wisata.index', [
            'datas' => $datas,
        ]);
    }

    public function budaya_admin()
    {
        $datas = Potensidesa::where('kategori_potensi_desa_id', 3)->orderByDesc('created_at')->get();
        return view('admin.potensi.budaya.index', [
            'datas' => $datas,
        ]);
    }

    public function guest_house_admin()
    {
        $datas = Potensidesa::where('kategori_potensi_desa_id', 4)->orderByDesc('created_at')->get();
        return view('admin.potensi.guest_house.index', [
            'datas' => $datas,
        ]);
    }

}
