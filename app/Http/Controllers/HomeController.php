<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        // Check if the user is an admin based on their email and password
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
       public function index()
       {
           $user = Auth::user();
        //    $staff = Auth::guard('staff')->user();

           // Check if the user is an admin based on their email and password
          if ($user->email == 'admin@gmail.com' && Hash::check('adminpassword', $user->password)) {
              return view('admin.index');  // Admin view
          } elseif (($user->email == 'jazib@gmail.com' || $user->email == 'hamza@gmail.com' || $user->email == 'zaki@gmail.com') && Hash::check('staffpassword', $user->password)) {
              return view('admin.index');  // Regular user view
        //   } elseif ($user->email == 'another_email@example.com' && Hash::check('another_password', $user->password)) {
        //       return view('another_view');  // Another view
          } else {
              return view('users.pages.welcome');  // Regular user view
          }


       }
}



