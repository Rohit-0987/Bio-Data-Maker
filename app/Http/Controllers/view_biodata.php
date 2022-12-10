<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class view_biodata extends Controller
{
    public function view_bio_data(Request $req){


        $id=Auth::user()->id;
        $data = biodata::where('id',$id)->get();
        if($data->isNotEmpty()){
            $pdf = PDF::loadView('view_biodata',['data'=>$data]);
     
         return $pdf->download('test.pdf');
        }
        else{
            return view('error');
        }
       
        
    }
}
