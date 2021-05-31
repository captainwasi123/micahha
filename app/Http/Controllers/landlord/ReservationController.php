<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function add(){
    	$data = array('title' => 'Add Reservation');
    	return view('landlord.reservation.add')->with($data);
    }

    public function all()
    {
    	$data = array('title' => 'All Reservation');
    	return view('landlord.reservation.all')->with($data);
    }
}
