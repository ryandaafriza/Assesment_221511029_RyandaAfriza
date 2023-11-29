<?php


namespace App\Http\Controllers;
use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    // Menampilkan daftar kasir
    public function index()
    {
        $kasir = Kasir::all();
        return view('admin.datakasir', compact('kasir'));
    }

    // Menampilkan form untuk menambah kasir baru
    public function create()
    {
        return view('admin.tambahkasir');
    }

    // Menyimpan kasir baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'KodeKasir' => 'required',
            'Nama' => 'required|max:255',
            'HP' => 'required',
        ]);

        Kasir::create($validatedData);
        return redirect()->route('kasir.index')->with('success', 'kasir berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit kasir
    public function edit(kasir $kasir)
    {
        return view('admin.editkasir', compact('kasir'));
    }

    // Memperbarui data kasir di database
    public function update(Request $request, kasir $kasir)
    {
        $validatedData = $request->validate([
            'Nama' => 'required|max:255',
            'HP' => 'required',
        ]);

        $kasir->update($validatedData);
        return redirect()->route('kasir.index')->with('success', 'kasir berhasil diperbarui');
    }

    // Menghapus kasir dari database
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();
        return redirect()->route('kasir.index')->with('success', 'kasir berhasil dihapus');
    }
}
