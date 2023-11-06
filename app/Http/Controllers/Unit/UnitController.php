<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\KomponenProgram;
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

        $usulan = Usulan::with('usulan_komponen_program')->where('unit_id', $unit->id)->get();

        if(!$tahun){
            $currentUsulan = Usulan::with('usulan_komponen_program')
        ->where('tahun', $tahunenow)
        ->where('unit_id', $unit->id)->first();
        }else{
            $currentUsulan = Usulan::with('usulan_komponen_program')
        ->where('tahun', $tahun)
        ->where('unit_id', $unit->id)->first();
        }

        // dd($currentUsulan);

        $kategori = Kategori::all();

        $komponen_program = KomponenProgram::with('kategori','parent')->get();
        $usulan_komponent_program = UsulanKomponenProgram::with('usulan','komponen_program')->get();
        // dd($currentUsulan);
        return view('unit.usulan_kegiatan.table_usulan_kegiatan',[
            'usulan_komponent_program' => $usulan_komponent_program,
            'usulan' => $usulan,
            'komponen_program' => $komponen_program,
            'unit' => $unit,
            'currentUsulan' => $currentUsulan,
            'kategori' => $kategori,
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
        ->where('unit_id', $unit->id)->first();

        $usulangeprek = UsulanKomponenProgram::create([
            'usulan_id' => $usulan->id
        ]);

        if($usulangeprek){
            return redirect()->route('table_usulan_kegiatan',['tahun' => $name])->withErrors('success','Data berhasil ditambahkan');
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

}
