<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;
use App\Models\accommodation\reservation;
use Auth;

class ReservationController extends Controller
{
    //
    public function add(){
    	$data = array(
            'title' => 'Add Reservation',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('status',2)->latest()->get(),
        );
    	return view('landlord.reservation.add')->with($data);
    }
    public function save(Request $request)
    { 
         $dates = explode('-',$request->check_id_date);
        $reservation = new reservation();
        $reservation->list_id = $request->list_id;
        $reservation->landlord_id = Auth::id(); 
        $reservation->user_name = $request->user_name;
        $reservation->ph_number = $request->ph_number;
        $reservation->no_of_people = $request->no_of_people;
        $reservation->check_in = date('Y-m-d',strTotime($dates[0]));
        $reservation->check_out = date('Y-m-d',strTotime($dates[1]));
        $reservation->status = 1;
        $reservation->save();
 
        return redirect()->back()->with('success', 'Reservation Created.');
    }
    public function all(Request $request)
    {   
        if($request->status == 'pending'){
            $status = '0';
        }if($request->status == 'approve'){
            $status = '1';
        }if($request->status == 'rejected'){
            $status = '2';
        }
        
        $data = array(
            'title' => ucfirst($request->status),
            'reservation_data' => reservation::where('status',$status)->latest()->get(),
        );
    	return view('landlord.reservation.all')->with($data);
    }
}
