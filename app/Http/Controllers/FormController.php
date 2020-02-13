<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class FormController extends Controller
{

    public function ShowForm(){
        return view('multipage');
    }
    public function SubmitForm(Request $request){
        dd($request->step1);
    }



    public function dd(Request $request){

        $arr = array(
                        array('first step yes no',$request->radiobotton),
                        array('first step age',$request->radiobottonage),
                    );
        $jsonarr = serialize($arr);
//        dd($jsonarr);
        $SaveIntoDb = Form::create([
            'step1'=>$jsonarr,
        ]);

        $lastdb = Form::where('id',57)->get();

        if ($SaveIntoDb){
//           foreach ($lastdb as $ss){
////               dd(unserialize($ss));
//           }
            return view('welcome2',compact('lastdb'));
        }
    }
}
