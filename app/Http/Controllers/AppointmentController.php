<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        try {
            // Check if user is authenticated
            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please login to book an appointment'
                ], 401);
            }

            // Validate the request
            $validated = $request->validate([
                'app_name' => 'required|string|max:255',
                'app_email' => 'required|email',
                'app_phone' => 'required|string',
                'app_free_time' => 'required',
                'app_services' => 'required',
                'app_barbers' => 'required',
            ]);

            // Create appointment with user_id
            $appointment = Appointment::create([
                'user_id' => Auth::id(), // Add user_id to appointment
                'name' => $request->app_name,
                'email' => $request->app_email,
                'phone' => $request->app_phone,
                'free_time' => $request->app_free_time,
                'service' => $request->app_services,
                'barber' => $request->app_barbers,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Appointment booked successfully! We will contact you soon.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please fill all required fields correctly.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! Please try again.'
            ]);
        }
    }
}
