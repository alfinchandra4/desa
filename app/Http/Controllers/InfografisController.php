<?php

namespace App\Http\Controllers;

use App\Models\Agelist;
use App\Models\Education;
use App\Models\Population;
use App\Models\Profession;
use App\Models\Religion;
use Faker\ORM\CakePHP\Populator;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    // Agama
    public function agama() {
        $religions = Religion::orderByDesc('created_at')->get();
        return view('admin.infografis.agama', [
            'religions' => $religions
        ]);
    }

    public function agama_store(Request $request) {
        Religion::create($request->all());
        return back()->withSuccess('Agama berhasil ditambah');
    }

    public function agama_delete($agama_id) {
        $rel = Religion::find($agama_id);
        if ($rel) {
            $rel->delete();
            return back()->withSuccess('Agama berhasil dihapus');
        }
        return back()->withError('Agama tidak ditemukan');

    }

    // Demografi
    public function demografi() {
        $genders = Population::all()->toArray();
        return view('admin.infografis.demografi', [
            'genders' => $genders
        ]);
    }

    public function demografi_update(Request $request) {
        Population::find(1)->update(['count' => $request->man]);
        Population::find(2)->update(['count' => $request->woman]);
        return back()->withSuccess('Jumlah populasi penduduk berhasil diubah');
    }

    // Pekerjaan
    public function pekerjaan() {
        $professions = Profession::orderByDesc('created_at')->get();
        return view('admin.infografis.pekerjaan', [
            'professions' => $professions
        ]);
    }

    public function pekerjaan_store(Request $request) {
        Profession::create($request->all());
        return back()->withSuccess('Pekerjaan berhasil ditambah');
    }

    public function pekerjaan_delete($pekerjaan_id) {
        $pekerjaan = Profession::find($pekerjaan_id);
        if ($pekerjaan) {
            $pekerjaan->delete();
            return back()->withSuccess('Pekerjaan berhasil dihapus');
        }
        return back()->withError('Pekerjaan tidak ditemukan');
    }

    // Pendidikan
    public function pendidikan() {
        $educations = Education::orderByDesc('created_at')->get();
        return view('admin.infografis.pendidikan', [
            'educations' => $educations
        ]);
    }

    public function pendidikan_store(Request $request) {
        Education::create($request->all());
        return redirect()->back()->withSuccess('Pendidikan berhasil ditambah');
    }

    public function pendidikan_delete($pendidikan_id) {
        $ed = Education::find($pendidikan_id);
        if ($ed) {
            $ed->delete();
            return back()->withSuccess('Pendidikan berhasil dihapus');
        }
        return back()->withError('Pendidikan tidak ditemukan');
    }

    // Umur
    public function umur() {
        $ages = Agelist::orderByDesc('created_at')->get();
        return view('admin.infografis.umur', [
            'ages' => $ages
        ]);
    }

    public function umur_store(Request $request) {
        Agelist::create($request->all());
        return back()->withSuccess('Kelompok umur berhasil ditambah');
    }

    public function umur_delete($umur_id) {
        $age = Agelist::find($umur_id);
        if($age) {
            $age->delete();
            return back()->withSuccess('Kelompok umur berhasil dihapus');
        }
        return back()->withError('Kelompok umur tidak ditemukan');
    }
}
