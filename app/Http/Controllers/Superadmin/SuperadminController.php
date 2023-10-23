<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Pemimpin;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperadminController extends Controller
{
    // Admin
    public function account()
    {
        return view('superadmin.account');
    }

    public function admin(){
        $user = User::where('role', 'Admin')->with('Admin')->get();
        return view('superadmin.admin', [
            'users' => $user,
        ]);
    }

    public function create_admin() {
        return view('superadmin.create_admin');
    }

    public function store_admin() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'Admin',
            'password' => bcrypt($data['password']),
        ]);

        Admin::create([
            'user_id' => $user->id,
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
        ]);

        return redirect()->route('account.admin');
    }

    public function edit_admin($id) {
        $user = User::where('id', $id)->with('Admin')->first();
        return view('superadmin.edit_admin', [
            'user' => $user,
        ]);
    }

    public function update_admin($id) {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
        ]);

        $user = User::where('id', $id)->first();
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $admin = Admin::where('user_id', $id)->first();
        $admin->update([
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
        ]);

        session()->flash('success', 'Admin berhasil dibuat.');

        return redirect()->route('account.admin');
    }

    public function destroy_admin($id) {
        DB::beginTransaction();
            try {
                $user = User::find($id);

                if ($user) {
                    $admin = $user->admin;
                    if ($admin) {
                        $admin->delete();
                    }
                    $user->delete();
                } else {
                    return 'not found';
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                return 'Error: ' . $e->getMessage();
            }
        return redirect()->route('account.admin');
    }
    // END ADMIN


    // PEMIMPIN
    public function pemimpin()
    {
        $user = User::where('role', 'Pemimpin')->with('Pemimpin')->get();
        return view('superadmin.pemimpin', [
            'users' => $user,
        ]);
    }

    public function create_pemimpin() {
        return view('superadmin.create_pemimpin');
    }

    public function store_pemimpin() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'bidang' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'Pemimpin',
            'password' => bcrypt($data['password']),
        ]);

        Pemimpin::create([
            'user_id' => $user->id,
            'bidang' => $data['bidang'],
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
        ]);

        return redirect()->route('account.pemimpin')->with('success', 'Pemimpin berhasil dibuat.');
    }

    public function edit_pemimpin($id) {
        $user = User::where('id', $id)->with('Pemimpin')->first();
        return view('superadmin.edit_pemimpin', [
            'user' => $user,
        ]);
    }

    public function update_pemimpin($id) {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'bidang' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
        ]);

        $user = User::where('id', $id)->first();
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $pemimpin = Pemimpin::where('user_id', $id)->first();
        $pemimpin->update([
            'bidang' => $data['bidang'],
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
        ]);

        return redirect()->route('account.pemimpin');
    }

    public function destroy_pemimpin($id) {
        DB::beginTransaction();

        try {
            $user = User::find($id);

            if ($user) {
                $pemimpin = $user->pemimpin;
                if ($pemimpin) {
                    $pemimpin->delete();
                }
                $user->delete();
            } else {
                return 'not found';
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return 'Error: ' . $e->getMessage();
        }

        return redirect()->route('account.pemimpin');
    }

    // END PEMIMPIN


    // UNIT
    public function unit()
    {
        $user = User::where('role', 'Unit')->with('Unit')->get();
        return view('superadmin.unit', [
            'users' => $user,
        ]);
    }

    public function create_unit() {
        return view('superadmin.create_unit');
    }

    public function store_unit() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'bidang' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'Unit',
            'password' => bcrypt($data['password']),
        ]);

        Unit::create([
            'user_id' => $user->id,
            'bidang' => $data['bidang'],
        ]);

        return redirect()->route('account.unit');
    }

    public function edit_unit($id) {
        $user = User::where('id', $id)->with('Unit')->first();
        return view('superadmin.edit_unit', [
            'user' => $user,
        ]);
    }

    public function update_unit($id) {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'bidang' => 'required',
        ]);

        $user = User::where('id', $id)->first();
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $unit = Unit::where('user_id', $id)->first();
        $unit->update([
            'bidang' => $data['bidang'],
        ]);

        return redirect()->route('account.unit');
    }

    public function destroy_unit($id) {
        DB::beginTransaction();

        try {
            $user = User::find($id);

            if ($user) {
                $unit = $user->unit;
                if ($unit) {
                    $unit->delete();
                }
                $user->delete();
            } else {
                return view('not_found');
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return 'Error: ' . $e->getMessage();
        }

        return redirect()->route('account.unit');
    }

    // END UNIT
}
