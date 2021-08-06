<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiDesaController extends Controller
{
    public function umkm () {
        return view('public.list_umkm');
    }

    public function seni_budaya () {
        return view('public.list_senibudaya');
    }

    public function wisata () {
        return view('public.list_wisata');
    }

    public function guest_house () {
        return view('public.list_guesthouse');
    }
}
