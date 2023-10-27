<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use App\Models\UsulanKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    public function index(Request $request){
        $unit_id = auth()->user()->unit->id;
        $tahun = $request->input('tahun');

        $listTahunGrouped = UsulanKegiatan::selectRaw("YEAR(tahun_anggaran) as tahun")
            ->groupBy('tahun')
            ->get();

        if($tahun){
            $usulan_kegiatan = UsulanKegiatan::where('unit_id', $unit_id)
                ->whereRaw("YEAR(tahun_anggaran) = ?", [$tahun])
                ->get();
        }else{
            $usulan_kegiatan = UsulanKegiatan::where('unit_id', $unit_id)->orderBy('tahun_anggaran','desc')->get();
        }

        return view('unit.kegiatan', ['usulan_kegiatan' => $usulan_kegiatan, 'listtahun' => $listTahunGrouped]);


    }

    public function anggaran(){
        return view('unit.perencanaan_anggaran');
    }

    public function store_anggaran(){

        $data = request()->validate([
            'tahun_anggaran' => 'required',
            'rincian' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
            // 'jumlah' => 'required',
        ]);
        // dd($data);

        $unitId = auth()->user()->unit->id;

        UsulanKegiatan::create([
            'unit_id' => $unitId,
            'tahun_anggaran' => $data['tahun_anggaran'],
            'rincian' => $data['rincian'],
            'volume' => $data['volume'],
            'satuan' => $data['satuan'],
            'harga_satuan' => $data['harga_satuan'],
            // 'jumlah' => $data['jumlah'],
        ]);

        return redirect()->route('unit.kegiatan');
    }


    public function edit_anggaran($id) {
        $usulan_kegiatan = UsulanKegiatan::find($id);
        return view('unit.edit_perencanaan_anggaran',['usulan_kegiatan' => $usulan_kegiatan]);
    }

    public function update_anggaran($id){
        $data = request()->validate([
            'tahun_anggaran' => 'required',
            'rincian' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'jumlah' => 'required',
        ]);

        $user = UsulanKegiatan::where('id', $id)->first();

        $user->update([
            'tahun_anggaran' => $data['tahun_anggaran'],
            'rincian' => $data['rincian'],
            'volume' => $data['volume'],
            'satuan' => $data['satuan'],
            'harga_satuan' => $data['harga_satuan'],
            'jumlah' => $data['jumlah'],
        ]);

        return redirect()->route('unit.kegiatan');
    }

    public function destroy_anggaran($id) {
        DB::beginTransaction();

        try {
            $user = UsulanKegiatan::find($id);
            $user->delete();

            DB::commit();
            return redirect()->route('unit.kegiatan');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('unit.kegiatan');
        }
    }
}
