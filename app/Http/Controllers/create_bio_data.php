<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class create_bio_data extends Controller
{
    public function create_bio_data_submit(Request $req){
    
        $req->validate([
            'phone'=>'numeric|max_digits:11|min:10|required',
            'name'=>'required'
        ]);

        $user_id = Auth::user()->id;
        $biodata = new biodata;
        $biodata->name=$req['name'];
        $biodata->dob=$req['dob'];
        $biodata->place=$req['place'];
        $biodata->height=$req['height'];
        $biodata->religion=$req['religion'];
        $biodata->caste=$req['caste'];
        $biodata->sub_caste=$req['sub_caste'];
        $biodata->rashi=$req['rashi'];
        $biodata->gotra=$req['gotra'];
        $biodata->manglik=$req['manglik'];
        $biodata->education=$req['education'];
        $biodata->college=$req['college'];
        $biodata->organizate=$req['organization'];
        $biodata->nakshatra=$req['nakshatra'];
        
        $biodata->employed=$req['employed'];
        $biodata->father_name=$req['father_name'];
        $biodata->father_occupation=$req['father_occupation'];
        $biodata->mother_name=$req['mother_name'];
        $biodata->mother_occupation=$req['mother_occupation'];
        $biodata->brother=$req['brother'];

        $biodata->sister=$req['sister'];
        $biodata->married_brother=$req['married_brother'];
        $biodata->married_sister=$req['married_sister'];
        $biodata->phone=$req['phone'];
        $biodata->address=$req['address'];
        $biodata->id=$user_id;
        $biodata->save();
        return view('index');

    }
}
