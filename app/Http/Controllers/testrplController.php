<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class testrplController extends Controller
{
    public function test(){
        return True;
    }

    public function rpl(Request $request){
        $validator = Validator::make(
            $request->all(),[
                'name'=>[
                    'required',
                    'string',
                    'max:255',
                    'regex:/^[a-zA-Z\s]*$/'
                ],
                'telephone'=>[
                    'string',
                    'min:5',
                    'max:25'
                ],
                'email'=>[
                    'email',
                    'max:255'
                ]
            ]);
        if($validator->fails()){
            return response()->json([
                'errors'=>$validator->errors()
            ],422);
        }
        else{
            return response()->json(['data'=>$validator],400);
        }
    }
}
