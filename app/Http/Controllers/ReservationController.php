<?php
 
namespace App\Http\Controllers;
 
use App\Models\Reservations;
use Illuminate\Http\Request;
 
class ReservationController extends Controller
{
    public function input(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'phone_number'=>'required|max:255',
            'wish'=>'required|max:255',
        ]);
        Reservations::create($validated);
        return back();
    }
}