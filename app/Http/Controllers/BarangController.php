<?php


namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $barang = Barang::all();
        return view('layouts.index', compact('barang'));
    }

    // Menampilkan form untuk menambah barang baru
    public function create()
    {
        return view('layouts.createbarang');
    }

    // Menyimpan barang baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'NamaBarang' => 'required|max:255',
            'Satuan' => 'required',
            'HargaSatuan' => 'required|string',
            'Stok' => 'required|integer'
        ]);

        Barang::create($validatedData);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit barang
    public function edit(Barang $barang)
    {
        return view('layouts.editbarang', compact('barang'));
    }

    // Memperbarui data barang di database
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'NamaBarang' => 'required|max:255',
            'Satuan' => 'required',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer'
        ]);

        $barang->update($validatedData);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    // Menghapus barang dari database
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
