<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'app_name' => 'required|string|max:255',
                'app_email' => 'required|email',
                'app_phone' => 'required|string',
                'app_free_time' => 'required',
                'app_services' => 'required',
                'app_barbers' => 'required',
            ]);

            // Create the appointment
            $appointment = Appointment::create([
                'name' => $request->app_name,
                'email' => $request->app_email,
                'phone' => $request->app_phone,
                'free_time' => $request->app_free_time,
                'service' => $request->app_services,
                'barber' => $request->app_barbers,
            ]);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'Appointment booked successfully! We will contact you soon.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation error response
            return response()->json([
                'status' => 'error',
                'message' => 'Please fill all required fields correctly.'
            ]);
        } 
    }
}
