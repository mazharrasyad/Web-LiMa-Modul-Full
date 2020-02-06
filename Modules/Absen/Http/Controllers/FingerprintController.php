<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Absen\Entities\Fingerprint;
class FingerprintController extends Controller
{
    //
    public function index()
    {
    	return Fingerprint::all();
    }

    public function create(Request $request)
    {
    	$fingerprints = new Fingerprint;
    	$fingerprints->kode_pin = $request->kode_pin;
    	$fingerprints->save();

    	return "data fingerprint berhasil ditambah";

    }

    public function delete($id)
    {
        $fingerprints = Fingerprint::find($id);
        $fingerprints->delete();
        return "data fingerprint berhasil dihapus";
    }
}
