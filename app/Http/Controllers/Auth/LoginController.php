<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;


class LoginController extends Controller
{
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

    /**
     * Where to redirect users after login.
     *z
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // //Google Login
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // //Google callback

    // public function  handleGoogleCallback()
    // {
    //     $user = Socialite::driver('google')->user();

    //     $this->_registerOrLoginUser($user);
        
    //     //return home after login
    //     return redirect()->route('home');
    // }

    //  //Facebook Login
    //  public function redirectToFacebook()
    //  {
    //      return Socialite::driver('facebook')->redirect();
    //  }
 
    //  //Facebook callback
 
    //  public function  handleFacebookCallback()
    //  {
    //      $user = Socialite::driver('facebook')->user();
         
    //      $this->_registerOrLoginUser($user);
        
    //      //return home after login
    //      return redirect()->route('home');
    //  }

    //   //Github Login
    //   public function redirectToGithub()
    //   {
    //       return Socialite::driver('github')->redirect();
    //   }
  
    //   //Github callback
  
    //   public function  handleGithubCallback()
    //   {
    //       $user = Socialite::driver('github')->user();
         
          
    //       $this->_registerOrLoginUser($user);
        
    //     //return home after login
    //     return redirect()->route('home');
    //   }

    //   public function _registerOrLoginUser($data)
    //   {
    //      $user = User::where('email',$data->email)->first();
    //      if(!$user)
    //      {
    //         $user = new User();

    //          $user->name = $data->nickname;
    //          $user->email = $data->email;
    //          $user->provider_id = $data->id;
    //          $user->avatar = $data->avatar;
    //          $user->save();

    //      }
    //      Auth::login($user);
    //   }
}