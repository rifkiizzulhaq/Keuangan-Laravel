<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AkunDetail;
use App\Models\Kategori;
use App\Models\KomponenProgram;
use App\Models\Satuan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function table_program(){
        $komponen_program = KomponenProgram::with('kategori','parent')->get();
        // dd($komponen_program);
        return view('admin.program.table_program',[
            'komponen_program' => $komponen_program
        ]);
    }
    public function program(){
        $kategori = Kategori::all();
        $komponen_program = KomponenProgram::with('kategori','parent')->get();
        return view('admin.program.program',[
            'kategori' => $kategori,
            'komponen_program' => $komponen_program
        ]);
    }
    public function store_program(Request $request){
        $request->validate([
            'kode' => 'required',
            'uraian' => 'required',
            'kategori_id' => 'required',
        ]);
        KomponenProgram::create([
            'kode' => $request->kode,
            'uraian' => $request->uraian,
            'kategori_id' => $request->kategori_id,
            'parent_id' => $request->parent_id,
        ]);
        // Kategori::create([
        //     'kategori' => $request->kategori,
        // ]);
        return redirect()->route('table_program')->with('success','Data berhasil ditambahkan');
    }

    public function edit_program($id){
        $kategori = Kategori::all();
        $komponen_program_all = KomponenProgram::all();
        $komponen_program = KomponenProgram::with('kategori','parent')->find($id);
        // dd($komponen_program);
        return view('admin.program.edit_program',[
            'komponen_program' => $komponen_program,
            'kategori' => $kategori,
            'komponen_program_all' => $komponen_program_all,
        ]);
    }

    public function update_program(Request $request, $id){
        $request->validate([
            'kode' => 'required',
            'uraian' => 'required',
            'kategori_id' => 'required',
        ]);
        KomponenProgram::find($id)->update([
            'kode' => $request->kode,
            'uraian' => $request->uraian,
            'kategori_id' => $request->kategori_id,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('table_program')->with('success','Data berhasil diupdate');
    }

    public function destroy_program($id){
        $komponen_program = KomponenProgram::find($id);
        if(!$komponen_program){
            return redirect()->back();
        }
        $komponen_program->delete();
        // dd($id);
        return redirect()->route('table_program')->with('success','Data berhasil dihapus');
    }

    public function table_kategori(){
        $kategori = Kategori::all();
        return view('admin.kategori.table_kategori',[
            'kategori' => $kategori
        ]);
    }

    public function kategori(){
        return view('admin.kategori.kategori');
    }

    public function store_kategori(Request $request){
        $request->validate([
            'kategori' => 'required',
        ]);
        Kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('table_kategori')->with('success','Data berhasil ditambahkan');
    }

    public function edit_kategori($id){
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit_kategori',[
            'kategori' => $kategori
        ]);
    }

    public function update_kategori(Request $request, $id){
        $request->validate([
            'kategori' => 'required',
        ]);
        Kategori::find($id)->update([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('table_kategori')->with('success','Data berhasil diupdate');
    }

    public function destroy_kategori($id){
        $kategori = Kategori::find($id);
        if(!$kategori){
            return redirect()->back();
        }
        $kategori->delete();
        // dd($id);
        return redirect()->route('table_kategori')->with('success','Data berhasil dihapus');
    }

    public function table_satuan(){
        $satuan = Satuan::all();
        return view('admin.satuan.table_satuan',[
            'satuan' => $satuan
        ]);
    }
    public function satuan(){
        return view('admin.satuan.satuan');
    }

    public function store_satuan(Request $request){
        $request->validate([
            'satuan' => 'required',
        ]);
        Satuan::create([
            'satuan' => $request->satuan,
        ]);
        return redirect()->route('table_satuan')->with('success','Data berhasil ditambahkan');
    }

    public function edit_satuan($id){
        $satuan = Satuan::find($id);
        return view('admin.satuan.edit_satuan',[
            'satuan' => $satuan
        ]);
    }

    public function update_satuan(Request $request, $id){
        $request->validate([
            'satuan' => 'required',
        ]);
        Satuan::find($id)->update([
            'satuan' => $request->satuan,
        ]);
        return redirect()->route('table_satuan')->with('success','Data berhasil diupdate');
    }

    public function destroy_satuan($id){
        $satuan = Satuan::find($id);
        if(!$satuan){
            return redirect()->back();
        }
        $satuan->delete();
        // dd($id);
        return redirect()->route('table_satuan')->with('success','Data berhasil dihapus');
    }

    public function table_akun_detail(){
        $akun_detail = AkunDetail::all();
        return view('admin.akun_detail.table_akun_detail',[
            'akun_detail' => $akun_detail
    ]);
    }

    public function akun_detail(){
        return view('admin.akun_detail.akun_detail');
    }

    public function store_akun_detail(Request $request){
        $request->validate([
            'kode' => 'required',
            'uraian' => 'required',
        ]);
        AkunDetail::create([
            'kode' => $request->kode,
            'uraian' => $request->uraian,
        ]);
        return redirect()->route('table_akun_detail')->with('success','Data berhasil ditambahkan');
    }

    public function edit_akun_detail($id){
        $akun_detail = AkunDetail::find($id);
        return view('admin.akun_detail.edit_akun_detail',[
            'akun_detail' => $akun_detail
        ]);
    }

    public function update_akun_detail(Request $request, $id){
        $request->validate([
            'kode' => 'required',
            'uraian' => 'required',
        ]);
        AkunDetail::find($id)->update([
            'kode' => $request->kode,
            'uraian' => $request->uraian,
        ]);
        return redirect()->route('table_akun_detail')->with('success','Data berhasil diupdate');
    }

    public function destroy_akun_detail($id){
        $akun_detail = AkunDetail::find($id);
        if(!$akun_detail){
            return redirect()->back();
        }
        $akun_detail->delete();
        // dd($id);
        return redirect()->route('table_akun_detail')->with('success','Data berhasil dihapus');
    }
}
