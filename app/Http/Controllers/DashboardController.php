<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pengaduan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'userCount' => User::count(),
            'pengaduanCount' => Pengaduan::count(),
            'pendingCount' => Pengaduan::where('status_pengaduan', 'Belum diproses')->count(),
            'processCount' => Pengaduan::where('status_pengaduan', 'Sedang diproses')->count(),
            'successCount' => Pengaduan::where('status_pengaduan', 'Selesai')->count(),
        ]);
    }
}
