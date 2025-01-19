<?php
namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
class UserController extends Controller
{
    
    public function index()
    {
        return view('pages.user.index', ["title" => "Data Petugas", "data" => User::all()]);
    }

    public function create()
    {
        return view('pages.user.tambahuser')->with([
            "title" => "Tambah Data User",
        ]);
    }

    public function destroy($id): RedirectResponse
    {

        User::where('id', $id)->delete();
        return redirect()->route('pages.user.index')->with('delete', 'Data Petugas Berhasil Dihapus');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "username" => "required|unique:users,username",
            "password" => "required",
        ]);

        $password = Hash::make($request->password);
        $request->merge(["password" => $password]);

        User::create($request->all());

        return redirect()->route('pages.user.index')->with('success', 'Data Petugas Berhasil Ditambah');
    }

    public function tanggapiPengaduan($pengaduanId)
    {

        $pengaduan = Pengaduan::find($pengaduanId);
        return view('pages.user.tanggapanuser', compact('pengaduan'));
    }

    public function kirimTanggapan(Request $request, $pengaduanId)
    {
        $request->validate([
            'tanggapan_user' => 'required|string',
            'status_pengaduan' => 'required|in:Belum diproses,Sedang diproses,Selesai',
            'user_id' => 'required|exists:users,id'
        ]);

        $pengaduan = Pengaduan::findOrFail($pengaduanId);

        $pengaduan->tanggapan_user = $request->input('tanggapan_user');
        $pengaduan->status_pengaduan = $request->input('status_pengaduan');
        $pengaduan->tanggal_tanggapan = now();
        $pengaduan->user_id = $request->input('user_id');
        $pengaduan->save();

        return redirect()->back()->with('success', 'Tanggapan berhasil dikirim dan status pengaduan diperbarui.');
    }

    public function laporan()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pages.user.laporan', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function cetak()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        $pdf = Pdf::loadView('pages.user.cetaklaporan', [
            'pengaduan' => $pengaduan
        ]);

        return $pdf->download('laporan.pdf');
    }

    public function pdf($id)
    {
        $data = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.user.pengaduan.cetak', compact('data'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
