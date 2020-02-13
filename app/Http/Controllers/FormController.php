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
        //step1 get information
        $step1data = serialize($request->step1);

        //step2 get information
        $step2 = array(
            $request->step2checkbox1,
            $request->step2checkbox2,
            $request->step2checkbox3,
            $request->step2checkbox4,
                        );
        $step2data = serialize($step2);

        //step3 get information
        $step3 = array(
          $request->step3checkbox1,
          $request->step3checkbox2,
          $request->step3checkbox3,
          $request->step3checkbox4,
          $request->step3checkbox5,
          $request->step3checkbox6,
          $request->step3checkbox7,
          $request->step3checkbox8,
          $request->step3checkbox9,
          $request->step3checkbox10,
          $request->step3checkbox11,
          $request->step3checkbox12,
          $request->step3checkbox13,
          $request->step3checkbox14,
          $request->step3checkbox15,
          $request->step3checkbox16,
          $request->step3checkbox17,
        );

        $step3data = serialize($step3);

        //step4 get information



        $StoreInDB = Form::create([
            'step1'  => 2,
            'step2'  => 1,
//            'step3'  => $step3data,
//            'step4'  => 4,
//            'step5'  => 5,
//            'step6'  => 6,
//            'step7'  => 7,
//            'step8'  => 8,
//            'step9'  => 9,
//            'step10' => 10,
        ]);

        if ($StoreInDB){
            return 'ok';
        }
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
