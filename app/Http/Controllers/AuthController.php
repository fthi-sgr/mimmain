<?php
namespace App\Http\Controllers;


use  App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    //Login bölümü-----------------

    public function showLogin()
    {
        return view('authentication.login');
    }

    public function customLogin(Request $request)
    {        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect('login')->with('error','Kullanıcı bulunamadı');
        }

        $credentials = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            Auth::login($user);
            return redirect()->intended(route('anasayfa.index'))->withSuccess('Giriş başarılı');
        }


        return redirect('login')->with('error','Giriş bilgileri doğru değil');
    }

    //Register Bölümü---------------

    public function showRegister()
    {
        return view('authentication.register');
    }

    public function customRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        //$data = $request->all();
        //$user = $this->create($data);
        //Auth::login($user);




        $user = User::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'password' => Hash::make($request->input('password')),
        ]);
        if ($user) {
            // User registration was successful
            return redirect('login')->withSuccess('Kayıt işlemi başarıyla tamamlandı. Şimdi giriş yapabilirsiniz.');
        } else {
            // User registration failed
            return redirect('register')->withError('Kayıt işlemi sırasında bir hata oluştu. Lütfen tekrar deneyin.');
        }
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

    public function logout()
    {
        Auth::logout();

        return Redirect::route('authentication.login');
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

