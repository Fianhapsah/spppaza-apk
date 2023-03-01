<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function index(){
        $siswa = DB::select('select * from siswa');
        return view('siswa',['siswa' => $siswa]);
    }

    public function create(Request $request)
    {

        return view('tambah-siswa');
    }

    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'id_login' => $request->id_login,
        ]);
        return redirect('/siswa');
    }



    public function edit(Request $request, $id)
    {   $siswa = DB::table('siswa')->where('nisn',$id)->first();
        return view('edit-siswa',['id'=>$id,
        'siswa' => $siswa
    ]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        DB::table('siswa')->where('nisn' , $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'id_login' => $request->id_login,
        ]);
        return redirect('/siswa');
    }

    public function bayar(Request $request, $id)
    {
       
        $siswa = DB::table('siswa')->where('nisn',$id)->first();
        $spp = DB::table('spp')->get();
        return view('siswa-bayar',['spp'=>$spp,'siswa'=>$siswa]);
    }

    public function bayarSpp(Request $request,$id)
    {
        // dd('ada');
        $spp = DB::table('spp')->where('tahun',$request->tahun_bayar)->first();
       
        foreach ($request->bulan_dibayar as $key => $value) {
            DB::table('pembayaran')->insert([
       
        'nisn'=>$id,
        'id_petugas'=>Auth::id(),
	    'tgl_bayar'=>Carbon::now(),
	    'bulan_dibayar'=>$value,
	    'tahun_dibayar'=>$request->tahun_bayar,
	    'id_spp'=>$spp->id_spp,
	    'jumlah_bayar'=>$spp->nominal,
            ]);
        }
        return redirect('/pembayaran');
    }

    public function delete($id)
    {
        DB::table('siswa')->where('nisn', $id)->delete();
        return redirect('/siswa');
    }
}
