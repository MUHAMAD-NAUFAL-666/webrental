<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Models\Handphone;
use Illuminate\Http\Request;

class ManajemenBarangController extends Controller
{
    // Menampilkan halaman manajemen barang
    public function index()
    {
        $laptop = Laptop::all();
        $handphone = Handphone::all();
        return view('admin.manajemen-barang', compact('laptop', 'handphone'));
    }


    //edit handphone
    public function updateHandphone(Request $request, $id)
    {
        $handphone = Handphone::findOrFail($id);
        $handphone->update([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'os' => $request->os,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'harga_sewa' => $request->harga_sewa,
            'status' => $request->status,
            'gambar' => $request->gambar,
            'layar' => $request->layar,
            'chipset' => $request->chipset,
            'baterai' => $request->baterai,
            'kamera' => $request->kamera,
            'jaringan' => $request->jaringan,
        ]);


        return response()->json(['success' => true]);
    }
    //edit laptop
    public function updateLaptopData(Request $request, $id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->update([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'kategori' => $request->kategori,
            'os' => $request->os,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'harga_sewa' => $request->harga_sewa,
            'status' => $request->status,
            'gambar' => $request->gambar,
            'layar' => $request->layar,
            'prosesor' => $request->prosesor,
            'baterai' => $request->baterai,
        ]);

        return response()->json(['success' => true]);
    }



    // Menambah data laptop
    public function tambahLaptop(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'kategori' => 'required',
            'os' => 'nullable',
            'ram' => 'nullable',
            'storage' => 'nullable',
            'harga_sewa' => 'required|numeric',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prosesor' => 'nullable',
            'baterai' => 'nullable',
            'layar' => 'nullable'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/laptop-images', $filename);
            $gambarPath = $request->file('gambar')->store('laptop-images', 'public');
        }
        Laptop::create([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'kategori' => $request->kategori,
            'os' => $request->os,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'harga_sewa' => $request->harga_sewa,
            'status' => $request->status,
            'gambar' => $gambarPath ?? null,
            'layar' => $request->layar,
            'prosesor' => $request->prosesor,
            'baterai' => $request->baterai,
        ]);

        return response()->json(['success' => true]);
    }


    // Menambah data handphone
    public function tambahHandphone(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'os' => 'nullable',
            'ram' => 'nullable',
            'storage' => 'nullable',
            'harga_sewa' => 'required|numeric',
            'status' => 'required',
            'layar' => 'nullable',
            'chipset' => 'nullable',
            'baterai' => 'nullable',
            'kamera' => 'nullable',
            'jaringan' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/handphone-images', $filename);
            $gambarPath = $request->file('gambar')->store('handphone-images', 'public');
        }
        Handphone::create([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'os' => $request->os,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'harga_sewa' => $request->harga_sewa,
            'status' => $request->status,
            'layar' => $request->layar,
            'chipset' => $request->chipset,
            'baterai' => $request->baterai,
            'kamera' => $request->kamera,
            'jaringan' => $request->jaringan,
            'gambar' => $gambarPath ?? null
        ]);

        return response()->json(['success' => true]);
    }

    // Menghapus data laptop
    public function deleteLaptop($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();
        return redirect()->route('manajemen-barang')->with('success', 'Laptop berhasil dihapus');
    }

    // Menghapus data handphone
    public function deleteHandphone($id)
    {
        $handphone = Handphone::findOrFail($id);
        $handphone->delete();
        return redirect()->route('manajemen-barang')->with('success', 'Handphone berhasil dihapus');
    }
}
