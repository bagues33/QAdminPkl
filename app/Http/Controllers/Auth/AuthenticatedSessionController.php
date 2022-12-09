<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthenticatedSessionController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    public function createLoginAnggota() {
        return view('auth.login-anggota');
    }

    public function authenticateAnggota(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (Auth::user()->role == 'anggota') {
                // jika user superadmin
                // return redirect()->intended('/superadmin');
                dd("berhasil login");
            } else {
                // jika user pegawai
                // return redirect()->intended('/pegawai');
                dd("berhasil login");
            }
        }

        return back()->with('error', 'email atau password salah');

    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->hasRole('anggota')) {
            return redirect()->intended(RouteServiceProvider::ANGGOTA);
        } elseif($user->hasRole('pm')) {
            // dd("ini pm");
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        // $response = $this->get(route('admin.dashboard'));
    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
