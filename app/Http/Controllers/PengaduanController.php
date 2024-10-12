<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // Menampilkan form pengaduan
    public function create()
    {
        return view('pages.pengaduan.create');
    }

    public function show()
    {
        $pengaduan=Pengaduan::all();
        return view('pages.user.pengaduan.detail',[
            "title"=>"pengaduan",
            "data"=>$pengaduan
        ]);
    }
    
    public function showtanggapiPengaduan()
    {
        // Mengembalikan view dengan data pengaduan
        return view('pages.user.tanggapanuser');
    }

    public function detail()
    {
        $pengaduan=Pengaduan::all();
        return view('pages.pengaduan.detail',[
            "title"=>"pengaduan",
            "data"=>$pengaduan
        ]);
    }

    public function index()
    {
        $pengaduan=Pengaduan::all();
        return view('pages.user.pengaduan.index',[
            "title"=>"pengaduan",
            "data"=>$pengaduan
        ]);
    }

    // Menyimpan data pengaduan dan masyarakat
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "nama"=>"required",
            "no_telepon"=>"required",
            "alamat"=>"required",
            "isi_pengaduan"=>"required",
            "foto"=>"nullable",
        ]);

        // Simpan data masyarakat (atau temukan jika sudah ada)
        $masyarakat = Masyarakat::firstOrCreate([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
        ]);

        // Upload file foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto_pengaduan', 'public');
        }

        // Generate kode pengaduan yang unik
        $kodePengaduan = 'PG' . str_pad(Pengaduan::max('id') + 1, 3, '0', STR_PAD_LEFT);

        // Simpan data pengaduan
        Pengaduan::create([
            'masyarakat_id' => $masyarakat->id,
            'kode_pengaduan' => $kodePengaduan,
            'isi_pengaduan' => $request->isi_pengaduan,
            'status_pengaduan' => 'pending',  // Set status awal pengaduan
            'foto' => $fotoPath,
        ]);

        // Tampilkan kode pengaduan ke user
        return view('pages.pengaduan.sukses', ['kodePengaduan' => $kodePengaduan]);
    }

     // Menampilkan form pencarian pengaduan
     public function showSearchForm()
     {
         return view('pages.pengaduan.cek-pengaduan');
     }
 
     // Mencari pengaduan berdasarkan kode pengaduan
     public function searchPengaduan(Request $request)
     {
         // Validasi input kode pengaduan
         $request->validate([
             'kode_pengaduan' => 'required|string|max:10',
         ]);
 
         // Cari pengaduan berdasarkan kode_pengaduan
         $pengaduan = Pengaduan::where('kode_pengaduan', $request->kode_pengaduan)->first();
 
         // Jika pengaduan ditemukan, tampilkan hasil
         if ($pengaduan) {
             return view('pages.pengaduan.hasil-pengaduan', compact('pengaduan'));
         }
 
         // Jika tidak ditemukan, kembali ke form dengan pesan error
         return redirect()->back()->with('error', 'Pengaduan dengan kode tersebut tidak ditemukan.');
     }
}

