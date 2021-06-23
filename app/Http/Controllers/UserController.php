<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Crypt;
use Exception;
use Illuminate\Support\Facades\Validator;
class UserController  extends BaseController
{
   
    public function Register(Request $request){
    
        $validit=Validator::make($request->all(),[
    
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'c_password'=>'required|same:password',
    
        ]);
        if($validit->fails()){
    
            return $this->sendError('failed register!',$validit->errors());
        }
    
        $input=$request->all();
    
    
        
    
        $input['password']= Crypt::encrypt( $input['password']);
       
        $user=User::create($input);
         $success=$user->createToken('ihf76}{Pjks-0=+-aq')->accessToken;
        
          
    
       // return $this->Respone($success,200);
       return response()->json($succes);
    
        
    }
    
    public function Login(Request $request){
    
     
    
       
    
        $validit=Validator::make($request->all(),[
    
            'email'=>'required|email',
            'password'=>'required',
    
        ]);
       
        $user=User::where('email',$request->email)->first();
        $users=crypt::decrypt($user->password);
    
       
        if($users===$request->password && $user->email===$request->email){
            try{
         $succes=$user->createToken('ihf76}{Pjks-0=+-aq')->accessToken;
    
         }catch(Exception $e){
    
            //  return $this->Respone($e,$succes);
           return  response()->json($succes);
    
         }
         return  response()->json($succes);
    
    
    
        }else{
            return $this->Respone(500,"البريد  او الرمز غير متطابق");
        }  
    }
    
    
}
