<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    // Menampilkan daftar masyarakat
    public function index()
    {
        return view('pages.user.masyarakat', [
        "title" => "masyarakat",
        "data" => Masyarakat::all()
        ]);
    }

    // Menghapus data masyarakat dari database
    public function destroy($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        $masyarakat->delete();

        return redirect()->route('masyarakat.index')->with('success', 'Data masyarakat berhasil dihapus.');
    }
}
