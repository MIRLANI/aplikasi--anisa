<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:riwayat-list', ['only' => ['index']]);
        $this->middleware('permission:riwayat-show', ['only' => ['show']]);
    }

    public function index()
    {
        if (auth()->user()->hasRole('Admin')) {
            $riwayat = Riwayat::with('penyakit')
                ->latest()
                ->paginate(10);
        } else {
            $riwayat = auth()->user()
                ->riwayats()
                ->with('penyakit')
                ->latest()
                ->paginate(10);
        }

        return view('admin.riwayat.index', compact('riwayat'));
    }

    public function show(string $id)
    {
        // $riwayat = Riwayat:: query()->where("id", $id)->with('penyakit')->latest()->paginate(10);
        $riwayat = Riwayat::query()->where("id", $id)->get();
        $kode = str_replace(['(', ')'], '',unserialize($riwayat[0]->cf_max)[1]);
        

        $kepribadian = Penyakit::query()->where("kode", trim($kode))->get();

        return view('admin.riwayat.show', compact('riwayat', 'kepribadian'));
    }
}
