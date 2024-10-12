<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('pages.user.index',["title"=>"Data Pengguna","data"=>User::all() ]);
    }

    public function create()
    {
        return view('pages.user.tambahuser')->with([
            "title"=> "Tambah Data User",
        ]);
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "email"=>"nullable",
            "password"=>"required",
        ]);

        User::create($request->all());
        return redirect()->route('pages.user.index')->with('success','Data User Berhasil Ditambahkan');
    }

    public function tanggapiPengaduan()
    {
        // Mengembalikan view dengan data pengaduan
        return view('pages.user.tanggapanuser');
    }


    public function laporan()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pages.user.laporan', [
            'pengaduan' => $pengaduan
        ]);
    }
}
