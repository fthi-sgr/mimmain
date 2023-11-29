<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'))->withSuccess('Giriş başarılı');
        }

        return redirect('login')->withError('Giriş bilgileri doğru değil');
    }

    public function customRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        Auth::login($user);

        return redirect()->route('dashboard')->withSuccess('Hesap oluşturuldu');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (auth()->check()) {
            return view('dashboard');
        }

        return redirect('login')->withSuccess('Erişim izniniz yok');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect('login');
    }

    //public function forgotPassword()
    //{
      //  return view('authentication.forgotpassword');
    //}

    //public function error404()
    //{
      //  return view('authentication.error404');
    //}
}

