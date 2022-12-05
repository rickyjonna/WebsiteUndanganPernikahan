<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    use HasFactory;

    public function index()
    {
        return view('reservations.index',[
            'title' => 'Halaman Reservasi',
            'reservations' => Reservation::latest()->paginate(7)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'phone_number'=>'required|max:15',
            'wish'=>'required',
        ]);
        Reservation::create($validated);
        return back();
    }
}
