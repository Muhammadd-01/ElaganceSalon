<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User; // or App\Entities\User, depending on the actual namespace


class HomeController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
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
            // 'image' => $imagePath, // Save image path in the database
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

        // Check if the user is an admin based on their email and password
        if ($user->email == 'admin@gmail.com' && Hash::check('12345678', $user->password)) {
            return view('admin.dashboard');  // Admin view
        } elseif (($user->email == 'jazib@gmail.com' || $user->email == 'hamza@gmail.com' || $user->email == 'zaki@gmail.com') && Hash::check('staffpassword', $user->password)) {
            return view('admin.index');  // Regular user view
        } else {
            return view('users.pages.welcome');  // Regular user view
        }


    }


    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        return view('admin.user', ['myuser' => $user]);
    }

    // Method to update an existing user
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'mobile' => 'required|string|max:15',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:255',
        ]);

        // Find the user by ID and update their data
        $user = User::findOrFail($id);
        $user->update($request->all());

        // Redirect to user list with a success message
        return redirect()->route('admin.user')->with('success', 'User updated successfully.');
    }

    // Method to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        $user->delete(); // Delete the user

        // Redirect to user list with a success message
        return redirect()->route('admin.user')->with('success', 'User deleted successfully.');
    }

    public function create()
    {
        return view('user.create'); // Return the view with the form to add a user
    }
    public function store(Request $request)
    {
        // Validate the request
        // return $request->all();
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'mobile' => 'required|string|max:15',
        //     'age' => 'required|integer',
        //     'gender' => 'required|string',
        //     'password' => 'required|string|min:8|confirmed',
        //     'address' => 'required|string|max:255',
        //     'role' => 'required|string|in:User,Staff,Admin',
        // ]);

        // Create the new user
     $res =  User::create(attributes: [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'gender' => $request->gender,
            'password' => $request->password,
            'address' => $request->address,
            'role' => $request->role,
        ]);
        // return $res;

        // Redirect back to the users list with a success message
        return redirect()->route('admin.user')->with('success', 'User added successfully.');
    }

}



