<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $data = Reservation::where("reservation_status","reserved")->get();
        return view('admin.reservations.table',["data" => $data]);
    }
    public function completed()
    {
        $data = Reservation::where("reservation_status","Done")->get();
        return view('admin.reservations.table',["data" => $data]);
    }
    public function store(Request $request)
    {
        $useremail = Auth::user()->email;

        if (Auth::user()) {


            $request->validate([
                "name" => "required",
                "email" => "required",
                "nog" => "required",
                "reserve_time" => "required",
                "contact_number" => "required",
                "message" => "required",
            ]);

               $reservation = new Reservation();

               $reservation->name           = $request->name;
               $reservation->reserved_by    =  $useremail;
               $reservation->email          = $request->email;
               $reservation->number         = $request->contact_number;
               $reservation->reservation_time  = $request->reserve_time;
               $reservation->num_of_guests  = $request->nog;
               $reservation->message         = $request->message;
               $reservation->save();

            return redirect()->back();
        } 
        else 
        {
           
            return route('login');
        }
    }
    public function Done($id)
    {
        $res = Reservation::find($id);
        if($res)
        {
        $res->reservation_status = "Done";
        $res->save();
        return redirect()->route('reservation.completed');
        }
    }
}
