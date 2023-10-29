<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\KegiatanSiperada;
use App\Models\Komponen;
use App\Models\kro;
use App\Models\Porgram;
use App\Models\ro;
use App\Models\SubKomponen;
use App\Models\SubKomponenDetail;
use App\Models\Unit;
use App\Models\User;
use App\Models\UsulanKegiatan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function usulan_unit(){
    //     $usulan = UsulanKegiatan::all();
    //     return view('admin.usulan_unit', ['usulan' => $usulan]);
    // }
    public function usulan(){
        $unit = Unit::all();
        return view('admin.usulan',['unit' => $unit]);
    }

    public function unit_mengusulkan(Request $request, $id){
        $unit = Unit::find($id);
        $tahun = $request->input('tahun');

        if(!$unit){
            return redirect()->route('admin.usulan');
        }
        // $usulan = UsulanKegiatan::where('unit_id', $id)->get();

        $listTahunGrouped = UsulanKegiatan::selectRaw("YEAR(tahun_anggaran) as tahun")
            ->groupBy('tahun')
            ->get();
            if($tahun){
                $usulan_kegiatan = UsulanKegiatan::where('unit_id', $unit->id)
                    ->whereRaw("YEAR(tahun_anggaran) = ?", [$tahun])
                    ->get();
            }else{
                $usulan_kegiatan = UsulanKegiatan::where('unit_id', $unit->id)->orderBy('tahun_anggaran','desc')->get();
            }
            // dd($listTahunGrouped);
            // dd($usulan_kegiatan);
            $kegiataSiperada = KegiatanSiperada::with('program', 'kegiatan', 'kro', 'ro', 'komponen', 'subKomponen', 'subKomponenDetail')->first();
            // dd($usulan_kegiatan);
            return view('admin.unit_mengusulkan',[
                'usulan' => $usulan_kegiatan,
                'unit' => $unit,
                'tahun_usulan' => $listTahunGrouped,
                // 'kegiatan_siperada' => $kegiataSiperada,
                ]);
    }

    public function buat_kode_usulan(Request $request, $id){

        $usulan_kegiatan = UsulanKegiatan::find($id);
        // dd($request->all());

        $dataKodeGabungan = "";
        if($request->program){
            // dd($request->program);
            $program = Porgram::find($request->program);
            // dd($program);
            $dataKodeGabungan = $program->kode;
        }
        if($request->kegiatan){
            // dd($request->kegiatan);
            $kegiatan= kegiatan::find($request->kegiatan);
            // dd($kegiatan);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$kegiatan->kode;
        }
        if($request->kro){
            $kro = kro::find($request->kro);
            // dd($request->program);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$kro->kode;
        }
        if($request->ro){
            $ro = ro::find($request->ro);
            // dd($request->program);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$ro->kode;
        }
        if($request->komponen){
            $komponen = komponen::find($request->komponen);
            // dd($request->program);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$komponen->kode;
        }
        if($request->sub_komponen){
            $subKomponen = SubKomponen::find($request->sub_komponen);
            // dd($request->sub_komponen);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$subKomponen->kode;
        }
        if($request->sub_komponen_detail){
            $subKomponenDetail = SubKomponenDetail::find($request->sub_komponen_detail);
            // dd($request->program);
            $dataKodeGabungan = $dataKodeGabungan.'.'.$subKomponenDetail->kode;
        }
        $usulan_kegiatan->kode = $dataKodeGabungan;
        $usulan_kegiatan->update();

        return redirect()->route('admin.unit_mengusulkan', ['id' => $usulan_kegiatan->unit_id]);

    }

    public function modal($id){
        $usulan_kegiatan = UsulanKegiatan::find($id);
        if(!$usulan_kegiatan){
            return redirect()->route('admin.usulan');
        }
        $kegiataSiperada = KegiatanSiperada::with(['program', 'kegiatan', 'kro', 'ro', 'komponen', 'subKomponen', 'subKomponenDetail'])->first();
        // dd($kegiataSiperada);
        return view('admin.modal', ['kegiatan_siperada' => $kegiataSiperada, 'usulan_kegiatan' => $usulan_kegiatan]);
    }

    // program
    public function program()
    {
        $program = Porgram::all();
        return view('admin.program',['program' => $program]);
    }

    public function program_create() {
        return view('admin.create_program');
    }

    public function program_store() {
        $data = request()->validate([
            'kode' => 'required',
            'program' => 'required',
        ]);

        Porgram::create([
            'kode' => $data['kode'],
            'program' => $data['program'],
        ]);

        return redirect()->route('admin.program');
    }

    public function program_edit($id) {
        $program = Porgram::find($id);
        return view('admin.edit_program', ['program' => $program]);
    }

    public function update_program($id) {
        $data = request()->validate([
            'kode' => 'required',
            'program' => 'required',
        ]);

        Porgram::where('id', $id)->update([
            'kode' => $data['kode'],
            'program' => $data['program'],
        ]);

        return redirect()->route('admin.program');
    }

    public function program_delete($id) {
        Porgram::where('id', $id)->delete();
        return redirect()->route('admin.program');
    }

    // end program

    // kegiatan

    public function kegiatan(){
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function kegiatan_create() {
        return view('admin.create_kegiatan');
    }

    public function kegiatan_store() {
        $data = request()->validate([
            'kode' => 'required',
            'kegiatan' => 'required',
        ]);

        Kegiatan::create([
            'kode' => $data['kode'],
            'kegiatan' => $data['kegiatan'],
        ]);

        return redirect()->route('admin.kegiatan');
    }

    public function kegiatan_edit($id) {
        $kegiatan = Kegiatan::find($id);
        return view('admin.edit_kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function update_kegiatan($id) {
        $data = request()->validate([
            'kode' => 'required',
            'kegiatan' => 'required',
        ]);

        Kegiatan::where('id', $id)->update([
            'kode' => $data['kode'],
            'kegiatan' => $data['kegiatan'],
        ]);

        return redirect()->route('admin.kegiatan');
    }

    public function kegiatan_delete($id) {
        Kegiatan::where('id', $id)->delete();
        return redirect()->route('admin.kegiatan');
    }

    // end kegiatan

    // KRO
    public function kro(){
        $kro = kro::all();
        return view('admin.kro', ['kro' => $kro]);
    }

    public function kro_create() {
        return view('admin.create_kro');
    }

    public function kro_store() {
        $data = request()->validate([
            'kode' => 'required',
            'kro' => 'required',
        ]);

        kro::create([
            'kode' => $data['kode'],
            'kro' => $data['kro'],
        ]);

        return redirect()->route('admin.kro');
    }

    public function kro_edit($id) {
        $kro = kro::find($id);
        return view('admin.edit_kro', ['kro' => $kro]);
    }

    public function update_kro($id) {
        $data = request()->validate([
            'kode' => 'required',
            'kro' => 'required',
        ]);

        kro::where('id', $id)->update([
            'kode' => $data['kode'],
            'kro' => $data['kro'],
        ]);

        return redirect()->route('admin.kro');
    }

    public function kro_delete($id) {
        kro::where('id', $id)->delete();
        return redirect()->route('admin.kro');
    }

    // end KRO

    // RO

    public function ro(){
        $ro = ro::all();
        return view('admin.ro', ['ro' => $ro]);
    }

    public function ro_create() {
        return view('admin.create_ro');
    }

    public function ro_store() {
        $data = request()->validate([
            'kode' => 'required',
            'ro' => 'required',
        ]);

        ro::create([
            'kode' => $data['kode'],
            'ro' => $data['ro'],
        ]);

        return redirect()->route('admin.ro');
    }

    public function ro_edit($id) {
        $ro = ro::find($id);
        return view('admin.edit_ro', ['ro' => $ro]);
    }

    public function update_ro($id) {
        $data = request()->validate([
            'kode' => 'required',
            'ro' => 'required',
        ]);

        ro::where('id', $id)->update([
            'kode' => $data['kode'],
            'ro' => $data['ro'],
        ]);

        return redirect()->route('admin.ro');
    }

    public function ro_delete($id) {
        ro::where('id', $id)->delete();
        return redirect()->route('admin.ro');
    }

    // end RO

    // komponen

    public function komponen() {
        $komponen = Komponen::all();
        return view('admin.komponen', ['komponen' => $komponen]);
    }

    public function komponen_create() {
        return view('admin.create_komponen');
    }

    public function komponen_store() {
        $data = request()->validate([
            'kode' => 'required',
            'komponen' => 'required',
        ]);

        Komponen::create([
            'kode' => $data['kode'],
            'komponen' => $data['komponen'],
        ]);

        return redirect()->route('admin.komponen');
    }

    public function komponen_edit($id) {
        $komponen = Komponen::find($id);
        return view('admin.edit_komponen', ['komponen' => $komponen]);
    }

    public function update_komponen($id) {
        $data = request()->validate([
            'kode' => 'required',
            'komponen' => 'required',
        ]);

        Komponen::where('id', $id)->update([
            'kode' => $data['kode'],
            'komponen' => $data['komponen'],
        ]);

        return redirect()->route('admin.komponen');
    }

    public function komponen_delete($id) {
        Komponen::where('id', $id)->delete();
        return redirect()->route('admin.komponen');
    }

    // end komponen

    // sub-komponen

    public function sub_komponen() {
        $SubKomponen = SubKomponen::all();
        return view('admin.sub_komponen',['SubKomponen' => $SubKomponen]);
    }

    public function sub_komponen_create() {
        return view('admin.create_sub_komponen');
    }

    public function sub_komponen_store() {
        $data = request()->validate([
            'kode' => 'required',
            'sub_komponen' => 'required',
        ]);

        SubKomponen::create([
            'kode' => $data['kode'],
            'sub_komponen' => $data['sub_komponen'],
        ]);

        return redirect()->route('admin.sub_komponen');
    }

    public function sub_komponen_edit($id) {
        $SubKomponen = SubKomponen::find($id);
        return view('admin.edit_sub_komponen', ['SubKomponen' => $SubKomponen]);
    }

    public function update_sub_komponen($id) {
        $data = request()->validate([
            'kode' => 'required',
            'sub_komponen' => 'required',
        ]);

        SubKomponen::where('id', $id)->update([
            'kode' => $data['kode'],
            'sub_komponen' => $data['sub_komponen'],
        ]);

        return redirect()->route('admin.sub_komponen');
    }

    public function sub_komponen_delete($id) {
        SubKomponen::where('id', $id)->delete();
        return redirect()->route('admin.sub_komponen');
    }

    // end sub-komponen

    // sub-komponen-detail
    public function sub_komponen_detail() {
        $SubKomponenDetail = SubKomponenDetail::all();
        return view('admin.sub_komponen_detail',['SubKomponenDetail' => $SubKomponenDetail]);
    }

    public function sub_komponen_detail_create() {
        return view('admin.create_sub_komponen_detail');
    }

    public function sub_komponen_detail_store() {
        $data = request()->validate([
            'kode' => 'required',
            'sub_komponen_detail' => 'required',
        ]);

        SubKomponenDetail::create([
            'kode' => $data['kode'],
            'sub_komponen_detail' => $data['sub_komponen_detail'],
        ]);

        return redirect()->route('admin.sub_komponen_detail');
    }

    public function sub_komponen_detail_edit($id) {
        $SubKomponenDetail = SubKomponenDetail::find($id);
        return view('admin.edit_sub_komponen_detail', ['SubKomponenDetail' => $SubKomponenDetail]);
    }

    public function update_sub_komponen_detail($id) {
        $data = request()->validate([
            'kode' => 'required',
            'sub_komponen_detail' => 'required',
        ]);

        SubKomponenDetail::where('id', $id)->update([
            'kode' => $data['kode'],
            'sub_komponen_detail' => $data['sub_komponen_detail'],
        ]);

        return redirect()->route('admin.sub_komponen_detail');
    }

    public function sub_komponen_detail_delete($id) {
        SubKomponenDetail::where('id', $id)->delete();
        return redirect()->route('admin.sub_komponen_detail');
    }

    // end sub-komponen-detail
}
