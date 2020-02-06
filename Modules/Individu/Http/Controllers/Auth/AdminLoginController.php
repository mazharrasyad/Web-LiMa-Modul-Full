<?php
namespace Modules\Individu\Http\Controllers\Auth;
use Modules\Individu\Entities\Admin;
use Auth;
use Illuminate\Http\Request;
use Modules\Individu\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'admin';
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('individu::auth.adminlogin');
    }
    public function guard()
    {
        return auth()->guard('admin');
    }
    public function showRegisterPage()
    {
        return view('individu::auth.adminregister');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('admin-login')->with('success','Registration Success');
    }
    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('adminpage');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
    public function logout(Request $request) {
      Auth::guard('admin')->logout();
      return redirect('/admin-login');
    }
}
