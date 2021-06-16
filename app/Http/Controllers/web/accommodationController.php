<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;
use App\Models\accommodation\propertyType;
use App\Models\accommodation\reservation;
use App\Models\accommodation\amenities;
use App\Models\User;
use App\Models\Enquiry_type;
use App\Models\Accommodation_Enquiry;
use Illuminate\Support\Facades\Auth;

class accommodationController extends Controller
{
    //
    function index(){
        $data = array(
            'rendom_list' => listing::with(['address','address.country'])->where('status',2)->latest()->limit(30)->get()->toArray(),
            'list_data' => listing::where('status',2)->where('is_feature',1)->latest()->limit(6)->get(),
            'amenities_data' => amenities::where('show_in_home',1)->latest()->limit(5)->get()->toArray(),
            'property_type' => propertyType::get(),
          );
        return view('web.accommodation.index')->with($data);
    }

    function all(Request $request){



        $list = listing::where('status',2);
        if ($request->filer){

            $property_type = $request->property_type ?? null;

            $price = explode('-', str_replace('$', '', $request->price));

            $list = $list->whereBetween('price',$price);
            $list = $list->when($property_type , function ($q, $property_type)
            {
                return $q->whereIN('property_type',$property_type);
            });
        }
        $list = $list->latest()->paginate(6);

        $data = array(
            'rendom_list' => listing::where('status',2)->inRandomOrder()->limit(3)->get(),
            'list_data' => $list,
            'property_type' => propertyType::get(),
        );
        return view('web.accommodation.all')->with($data);;
    }

    public function details(Request $request)
    {

        $userid =  \Auth::id();
        $user = User::find($userid);
        $list_id =  base64_decode($request->id);
        $enquiry_type = Enquiry_type::get();
        $data = array(
            'rendom_list' => listing::where('status',2)->where('id','!=',$list_id)->inRandomOrder()->limit(3)->get(),
            'list_data' => listing::where('status',2)->where('id',$list_id)->first(),
            'user' => $user,
            'enquiry_type' => $enquiry_type
        );
        return view('web.accommodation.details')->with($data);
    }

    public function add_reservation_modal(Request $request)
    {
        // dd($request);
        $reservation = new reservation;
        $dates = explode('-',$request->check_id_date);
        $reservation->list_id = $request->list_id;
        $reservation->landlord_id = base64_decode($request->landlord_id);
        $reservation->user_name = $request->user_name;
        $reservation->ph_number = $request->ph_number;
        $reservation->no_of_people = $request->adults_qty;
        $reservation->children = $request->children;
        $reservation->infants = $request->infants;
        $reservation->check_in = date('Y-m-d',strTotime($dates[0]));
        $reservation->check_out = date('Y-m-d',strTotime($dates[1]));
        $reservation->infants = $request->infants;
        $reservation->status = 0;
        $reservation->reserved_by = $request->user_id;
        $reservation->customer_status = 0;
        $reservation->save();
        $msg = "Reservation Added";
        return redirect()->route('accommodation.details', base64_encode($request->list_id))->with('success',$msg);
    }

    public function add_accommodation_enquiry(Request $request)
    {
        $enquiry = new Accommodation_Enquiry;
        if($request->user_id){
            $enquiry->user_id = $request->user_id;
        }else{
            $enquiry->user_id = null;
        }
        $enquiry->list_id = $request->list_id;
        $enquiry->enquiry_type_id = $request->enquiry_type_id;
        $enquiry->details = $request->details;
        $enquiry->username = $request->name;
        $enquiry->email = $request->email;
        $enquiry->save();
        $msg = "Your Enquiry Is Added";
        return redirect()->route('accommodation.details', base64_encode($request->list_id))->with('success',$msg);
    }

    public function feature_list()
    {
        $data = array(
            'list_data' => listing::where('status',2)->where('is_feature',1)->latest()->paginate(6),
            'property_type' => propertyType::get(),
          );
        return view('web.accommodation.feature_list')->with($data);
    }
}
