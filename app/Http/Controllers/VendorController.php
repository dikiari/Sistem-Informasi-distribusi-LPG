<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        $data = Vendor::all();
        return view('vendor', compact('data'));
    }
    public function vendorInput()
    {
        return view('vendor-input');
    }

    function vendorCreate(Request $request)
    {
        $validatedData = $request->validate([
            'nama_vendor' => 'required|string|max:255',
            'nomor_kontak_vendor' => 'required|numeric',
            'order_suply_per_bulan' => 'required|numeric',
            'alamat_vendor' => 'required|string',
        ]);

        // Buat vendor baru
        $vendor = Vendor::create($validatedData);

        // Redirect atau lakukan sesuatu setelah vendor dibuat
        return redirect()->route('vendor.index')->with('success', 'Data Vendor Berhasil Di Tambahkan');
    }

    public function vendorDelete($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        return redirect()->route('vendor.index')->with('success', 'Data Vendor Berhasil Dihapus');
    }

    function vendorUpdate($id)
    {
        $data = Vendor::findOrFail($id);
        return view('vendor-update', compact('data'));
    }

    function vendorUpdateStore(Request $request)
    {
        $id = $request->id;
        $vendor = Vendor::findOrFail($id);

        $validatedData = $request->validate([
            'nama_vendor' => 'required|string|max:255',
            'nomor_kontak_vendor' => 'required|numeric',
            'order_suply_per_bulan' => 'required|numeric',
            'alamat_vendor' => 'required|string',
        ]);

        $vendor->update($validatedData);

        return redirect()->route('vendor.index')->with('success', 'Data Vendor Berhasil Diperbarui');
    }
}
