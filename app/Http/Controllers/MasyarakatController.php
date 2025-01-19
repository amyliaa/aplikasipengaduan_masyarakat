<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
class MasyarakatController extends Controller
{

    public function index()
    {
        return view('pages.user.masyarakat', [
        "title" => "masyarakat",
        "data" => Masyarakat::all()
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        $masyarakat = Masyarakat::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
        ]);

        return $masyarakat;
    }

    public function destroy($id): RedirectResponse
    {

        Masyarakat::where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Data Masyarakat Berhasil Dihapus');
    }
}

