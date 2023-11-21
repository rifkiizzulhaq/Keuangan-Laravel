<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use App\Models\AkunDetail;
use App\Models\Kategori;
use App\Models\KomponenProgram;
use App\Models\Satuan;
use App\Models\Unit;
use App\Models\Usulan;
use App\Models\UsulanKomponenProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class UnitController extends Controller
{
    public function table_usulan_kegiatan(Request $request){
        $tahun = $request->tahun;
        $unit = Auth::user()->unit;

        $tahunenow = Date::now()->format('Y');

        $satuan = Satuan::all();
        $akun_detail = AkunDetail::all();

        $usulan = Usulan::with('usulan_komponen_program')->where('unit_id', $unit->id)->get();

        if(!$tahun){
            $currentUsulan = Usulan::with('usulan_komponen_program.komponen_program.satuan')
        ->where('tahun', $tahunenow)
        ->where('unit_id', $unit->id)->first();
        }else{
            $currentUsulan = Usulan::with('usulan_komponen_program.komponen_program.satuan')
        ->where('tahun', $tahun)
        ->where('unit_id', $unit->id)->first();
        }

        // dd($currentUsulan);

        $kategori = Kategori::all();

        $komponen_program = KomponenProgram::with('kategori','parent')->get();
        $usulan_komponent_program = UsulanKomponenProgram::with('usulan','komponen_program')->get();
        // dd($currentUsulan);
        return view('unit.usulan_kegiatan.table_usulan_kegiatan1',[
            'usulan_komponent_program' => $usulan_komponent_program,
            'usulan' => $usulan,
            'komponen_program' => $komponen_program,
            'unit' => $unit,
            'currentUsulan' => $currentUsulan,
            'kategori' => $kategori,
            'satuan' => $satuan,
            'akun_detail' => $akun_detail,
        ]);
    }

    public function store_tahun(Request $request){
        // dd($request->all());
        $request->validate([
            'tahun' => 'required|max:4|min:4|unique:usulans,tahun',
        ]);
        Usulan::create([
            'unit_id' => 1,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('table_usulan_kegiatan',['tahun' => $request->tahun])->withErrors('success','Data berhasil ditambahkan');
    }

    public function store_table_program($name) {
        $unit = Auth::user()->unit;
        $usulan = Usulan::where('tahun', $name)
            ->where('unit_id', $unit->id)
            ->first();

        $usulangeprek = UsulanKomponenProgram::create([
            'usulan_id' => $usulan->id
        ]);

        if($usulangeprek){
            return redirect()->route('table_usulan_kegiatan', ['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
        }
    }

    public function store_table_tambah_kegiatan($name){
        $unit = Auth::user()->unit;
        $usulan = Usulan::where('tahun', $name)
            ->where('unit_id', $unit->id)
            ->first();

        $usulangeprek = UsulanKomponenProgram::create([
            'usulan_id' => $usulan->id
        ]);

        if($usulangeprek){
            return redirect()->route('store_table_tambah_kegiatan', ['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
        }
    }


    public function store_table_kegiatan($name) {
        $unit = Auth::user()->unit;
        $usulan = Usulan::where('tahun', $name)
        ->where('unit_id', $unit->id)->first();

        $usulangeprek = UsulanKomponenProgram::create([
            'usulan_id' => $usulan->id
        ]);

        if($usulangeprek){
            return redirect()->route('table_usulan_kegiatan',['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
        }
    }

    public function store_table_judul_kegiatan($name) {
        $unit = Auth::user()->unit;
        $usulan = Usulan::where('tahun', $name)
        ->where('unit_id', $unit->id)->first();

        $usulangeprek = UsulanKomponenProgram::create([
            'usulan_id' => $usulan->id
        ]);

        if($usulangeprek){
            return redirect()->route('table_judul_kegiatan',['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
        }
    }

    // public function store_usulan_unit($id){
    //     $unit = Auth::user()->unit;
    //     $usulan = UsulanKomponenProgram::find($id);

    //     $komponen_program = KomponenProgram::all();

    //     return view('unit.usulan_kegiatan.table_usulan_kegiatan',[
    //         'usulan' => $usulan,
    //         'komponen_program' => $komponen_program,
    //         'unit' => $unit,
    //     ]);
    // }

    public function destroy_table_usulan($id){
        $usulan_program = UsulanKomponenProgram::find($id);

        if ($usulan_program) {
            $usulan_program->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data not found or already deleted.');
        }
    }

    public function table_judul_kegiatan(Request $request){
        $usulan_komponent_program = UsulanKomponenProgram::with('usulan','komponen_program')->get();

        return view('unit.table_judul_kegiatan.table_judul_kegiatan',[
            'usulan_komponent_program' => $usulan_komponent_program,
        ]);
    }

    public function update_usulan(Request $request, $id) {
        $usulan = UsulanKomponenProgram::find($id);
        $name = $usulan->usulan->tahun;

        // dd($request->all());

        if ($request->komponen_program_id) {
            $usulan->komponen_program_id = $request->komponen_program_id;
        }

        if($request->satuan_id){
            $usulan->satuan_id = $request->satuan_id;
        }

        if($request->volume){
            $usulan->volume = $request->volume;
        }

        if($request->harga_satuan){
            $usulan->harga_satuan = $request->harga_satuan;
        }

        if($request->akun_detail_id){
            $usulan->akun_detail_id = $request->akun_detail_id;
        }

        $usulan->save(); // Save the changes to the $usulan model.

        return redirect()->route('table_usulan_kegiatan',['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
    }

    public function update_judul_kegiatan(Request $request, $id) {
        $usulan = UsulanKomponenProgram::find($id);

        // dd($request->all());

        if ($request->komponen_program_id) {
            $usulan->komponen_program_id = $request->komponen_program_id;
        }

        if($request->satuan_id){
            $usulan->satuan_id = $request->satuan_id;
        }

        if($request->volume){
            $usulan->volume = $request->volume;
        }

        if($request->harga_satuan){
            $usulan->harga_satuan = $request->harga_satuan;
        }

        if($request->akun_detail_id){
            $usulan->akun_detail_id = $request->akun_detail_id;
        }

        $usulan->save(); // Save the changes to the $usulan model.

        return redirect()->route('table_judul_kegiatan');
    }

    public function destroy_table_judul_kegiatan($id){
        $usulan_program = UsulanKomponenProgram::find($id);

        if ($usulan_program) {
            $usulan_program->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data not found or already deleted.');
        }
    }


}
