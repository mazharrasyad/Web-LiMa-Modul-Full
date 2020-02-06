<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\User;
class UserController extends Controller
{
    //

    public function index()
    {
    	return User::all();
    }

    public function create(Request $request)
    {
		// Lama
    	// $users = new User;
    	// $users->name = $request->name;
    	// $users->email = $request->email;
    	// $users->password = $request->password;
    	// $users->semester = $request->semester;
        // $users->poin_user = $request->poin_user;
    	// $users->role = $request->role;
    	// $users->prodi = $request->prodi;
    	// $users->fingerprint_code = $request->fingerprint_code;
        // $users->kelompok_id = $request->kelompok_id;
    	// $users->save();

		// Baru
    	$users = new User;
		$users->name = $request->name;
		$users->nim = $request->nim;
		$users->password = $request->password;
		$users->semester = $request->semester;
		$users->role = $request->role;
		$users->prodi_id = $request->prodi_id;
    	$users->save();

    	return " data user berhasil bertambah";
    }

    public function delete($id)
    {
    	$users = User::find($id);
    	$users->delete();

    	return "data berhasil dihapus";
    }
}
