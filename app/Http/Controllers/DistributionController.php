<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;

class DistributionController extends Controller
{
    public function index()
    {
        $data = Distribution::all();
        return view('distribution', compact('data'));
    }
    public function distributionInput()
    {
        return view('distribution-input');
    }
    public function distributionCreate(Request $request)
    {
        $validatedData = $request->validate([
            'waktu_pengiriman' => 'required|date',
            'alamat_pengiriman' => 'required|string',
            'jumlah_pengiriman' => 'required|integer',
            'jumlah_kendaraan_pengirim' => 'required|integer',
            'plat_nopol' => 'required|string',
            'nama_driver' => 'required|string',
            'status_pengiriman' => 'required|string',
        ]);

        $distribution = Distribution::create($validatedData);

        return redirect()->route('distributionIndex')->with('success', 'Data Distribution Berhasil Ditambahkan');
    }
    public function distributionDelete($id)
    {
        $distribution = Distribution::findOrFail($id);
        $distribution->delete();

        return redirect()->route('distributionIndex')->with('success', 'Data Distribution Berhasil Dihapus');
    }

    public function distributionUpdate($id) {
        $data = Distribution::findOrFail($id);
        return view('distribution-update', compact('data'));
    }
    public function distributionUpdateStore(Request $request)
    {
        $id = $request->id;
        $distribution = Distribution::findOrFail($id);

        $validatedData = $request->validate([
            'waktu_pengiriman' => 'required|date',
            'alamat_pengiriman' => 'required|string',
            'jumlah_pengiriman' => 'required|integer',
            'jumlah_kendaraan_pengirim' => 'required|integer',
            'plat_nopol' => 'required|string',
            'nama_driver' => 'required|string',
            'status_pengiriman' => 'required|string',
        ]);

        $distribution->update($validatedData);

        return redirect()->route('distributionIndex')->with('success', 'Data Distribution Berhasil Diperbarui');
    }
}
