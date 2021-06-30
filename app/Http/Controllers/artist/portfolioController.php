<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\art\portraitType;
use App\Models\art\portfolio;
use Auth;

class portfolioController extends Controller
{
    //
    function new(){
        $type = portraitType::orderBy('name')->get();

        return view('artist.portfolio.new', ['type' => $type]);
    }

    function newInsert(Request $request){
        $data = $request->all();

        $id = portfolio::addPortfolio($data);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/art/portfolio/'), $filename);
            portfolio::addFeatureImage($id, $filename);
        }
        
        return redirect()->back()->with('success', 'Portfolio uploaded. Please wait for admin approval.');
    }
    function edit($id){
        $id = base64_decode($id);
        $type = portraitType::orderBy('name')->get();
        $data = portfolio::where('artist_id', Auth::id())->where('id', $id)->first();

        return view('artist.portfolio.edit', ['data' => $data, 'type' => $type]);
    }
    function editUpdate(Request $request){
        $data = $request->all();

        $id = portfolio::editPortfolio($data);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/art/portfolio/'), $filename);
            portfolio::addFeatureImage($id, $filename);
        }
        
        return redirect()->back()->with('success', 'Portfolio updated.');
    }

    function delete($id){
        $id = base64_decode($id);
        $data = portfolio::where('artist_id', Auth::id())->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Portfolio deleted.');
    }


    function pending(){
        $data = portfolio::where('artist_id', Auth::id())->where('status', '0')->latest()->paginate(25);

        return view('artist.portfolio.pending', ['data' => $data]);
    }
    function published(){
        $data = portfolio::where('artist_id', Auth::id())->where('status', '1')->latest()->paginate(25);

        return view('artist.portfolio.published', ['data' => $data]);
    }
    function rejected(){
        $data = portfolio::where('artist_id', Auth::id())->where('status', '2')->latest()->paginate(25);

        return view('artist.portfolio.rejected', ['data' => $data]);
    }
}
