<?php

namespace App\Http\Controllers;

use App\Models\notifay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class NotifayController extends BaseController
{
  

    public function index()
    {
        
        $clothes=notifay::all()->where('user_id',Auth::id())->where('noty','no');

        return $this->Respone($clothes,200);
    }




    public function indexx()
    {
        
        $clothes=notifay::all()->where('user_id',Auth::id())->where('noty','yes');

        return $this->Respone($clothes,200);
    }



    public function indexxx()
    {
        
        $clothes=notifay::all()->where('user_id',Auth::id())->where('noty','open');

        return $this->Respone($clothes,200);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $input=$request->all();

        $valdit=Validator::make($request->all(),[

            'name',
            'user_id',
            'content',
            'noty',
           
            
        ]);

        if($valdit->fails()){

            return $this->sendError('Failed input',$valdit->errors());
        }

    
        $clothes=notifay::create($input);

        return $this->Respone($clothes,200);
    }

   
    public function show(notifay $notifay)
    {
        //
    }

  

   
    public function update(Request $request,$id)
    {
        
        $clothes=notifay::find($id);

        $clothes->noty=$request->noty;
        $clothes->save();

        return $this->Respone($clothes,200);
    }

   
    public function destroy($id)
    {
        
        $clothes=notifay::find($id);
        $clothes->delete();

        return $this->Respone($clothes,200);


    }
}
