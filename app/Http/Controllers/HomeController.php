<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'mobile' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        'age' => 'required|integer',
        'gender' => 'required|string',
        'address' => 'required|string',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('profile_images', 'public'); // Save to 'storage/app/public/profile_images'
    }

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'image' => $imagePath, // Save image path in the database
        'age' => $request->age,
        'gender' => $request->gender,
        'address' => $request->address,
        'password' => bcrypt($request->password),
    ]);

    // Redirect or perform other actions
    return redirect()->route('home')->with('success', 'Registration successful');
}

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



