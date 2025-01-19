<?php
namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('pages.user.pengaduan.detail', [
            "title" => "pengaduan",
            "data" => $pengaduan
        ]);
    }

    public function detail()
    {
        $pengaduan = Pengaduan::all();
        return view('pages.pengaduan.detail', [
            "title" => "pengaduan",
            "data" => $pengaduan
        ]);
    }

    public function index()
    {
        $data = Pengaduan::orderBy('created_at', 'DESC')->get();
        return view('pages.user.pengaduan.index', [
            "title" => "pengaduan",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        try {
            $masyarakat = Masyarakat::create([
                'nama' => $request->nama,
                'no_telepon' => $request->no_telepon,
                'alamat' => $request->alamat,
            ]);

            $pengaduan = new Pengaduan();
            if ($request->hasFile('foto')) {
                $path = $request->file('foto')->store('pengaduan', 'public');
            }
                        

            $pengaduan = new Pengaduan();
            $pengaduan->masyarakat_id = $masyarakat->id;
            $lastPengaduan = Pengaduan::orderBy('id', 'desc')->first();

            $newCode = $lastPengaduan
                ? 'PG' . str_pad(intval(substr($lastPengaduan->kode_pengaduan, 2)) + 1, 3, '0', STR_PAD_LEFT)
                : 'PG001';

            $pengaduan->kode_pengaduan = $newCode;
            $pengaduan->isi_pengaduan = $request->isi_pengaduan;
            $pengaduan->status_pengaduan = 'Belum diproses';
            $pengaduan->foto = $path;
            $pengaduan->save();

            // Generate QR code URL
            $qrCodeUrl = route('pengaduan.search', ['kode_pengaduan' => $pengaduan->kode_pengaduan]);
            $qrCode = QrCode::size(200)->generate($qrCodeUrl);

            return view('pages.pengaduan.success', [
                'pengaduan' => $pengaduan,
                'qrCode' => $qrCode,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy($id): RedirectResponse
    {

        Pengaduan::where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Data Pengaduan Berhasil Dihapus');
    }

    public function showSearchForm()
    {
        return view('pages.pengaduan.cek-pengaduan');
    }

    public function searchPengaduan(Request $request)
    {

        $request->validate([
            'kode_pengaduan' => 'required|string|max:10',
        ]);

        $lastPengaduan = Pengaduan::where('kode_pengaduan', $request->kode_pengaduan)->first();

        if ($lastPengaduan) {
            return view('pages.pengaduan.detail', ['pengaduan' => $lastPengaduan]);
        }

        return redirect()->back()->withErrors(['message' => 'Pengaduan dengan kode tersebut tidak ditemukan.']);
    }

    public function generateQrCode($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $qrCodeUrl = route('pages.pengaduan.detail', ['id' => $pengaduan->id]);
        $qrCode = QrCode::size(200)->generate($qrCodeUrl);

        return view('pages.pengaduan.success', ['qrCode' => $qrCode]);
    }

    public function showForMasyarakat($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('pages.pengaduan.detail', ['pengaduan' => $pengaduan]);
    }
}
