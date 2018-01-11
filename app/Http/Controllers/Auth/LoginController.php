<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;


class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected  $guard='admin';

    protected function guard()
    {
        return Auth::guard($this->guard);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'guest' )->except( 'logout' );
    }

    public function handleLogin(Request $request) {
        if ( $request->isMethod( 'POST' ) ) {

            $this->validate( $request, [ 'email'    => 'required|email',
                                         'password' => 'required|min:5'
            ]);
            if ( Auth::guard( 'admin' )
                     ->attempt( ['email'=> $request->email,'password' => $request->password], $request->remember ) ) {
                return redirect()->route( 'list-blog' );
            }
            return redirect()->route( 'login' )->with( [ 'err' => trans( 'validate.err_email_password' ) ] );
        }else{
            if (Auth::guard('admin')->check()) {
                return redirect()->route('list-blog');
            }
            return view('login');
        }
    }

}
