<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\biodata;

class preview_biodata extends Controller
{
    public function preview(Request $req){
        $id=Auth::user()->id;
        $data = biodata::where('id',$id)->get();
        if($data){
            return view('view_biodata',['data'=>$data]);
        }
        else{
            return view('error');
        }
    }
}

