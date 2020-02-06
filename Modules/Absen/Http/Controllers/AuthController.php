<?php

namespace Modules\Absen\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Modules\Absen\Entities\User;
use Modules\Absen\Entities\Kelompok;
class AuthController extends Controller
{
    //

    public function login()
    {
    	return view('absen::login');
    }

    public function loginadmin(Request $request)
    {
    	
    	if(Auth::attempt($request->only('nim','password'))){
    		if(Auth::user()->role == 'admin'){
            return redirect('/admin/dashboard/hadir');
            
            }else{

            return redirect('/mahasiswa/dashboard/'.Auth::user()->id.'/hadir');
            
            }
    	}
    	return redirect('/loginadmin');
    }

    public function register()
    {
        return view('absen::auth.register');
    }

    protected function create(Request $data,Kelompok $kelompok)
    {

        $tambahuser = ([
            'name' => $data['name'],
            'nim' => $data['nim'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
            'prodi' => $data['prodi'],
            'kelompok'=>$data['kelompok']
        ]);
        User::create($tambahuser);
        return redirect('/admin/dashboard/hadir');


    }



}
