<?php

namespace App\Http\Controllers;

use App\Models\accept as ac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AcceptController extends BaseController
{
    
    public function index()
    {
        $clothes=ac::all()->where('enable','no');

        return $this->Respone($clothes,200);
    }


    public function getenyes()
    {
        $clothes=ac::all()->where('enable','yes');

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

            'phone',
            'name',
            'adress'
           
            
        ]);

        if($valdit->fails()){

            return $this->sendError('Failed input',$valdit->errors());
        }

        $input['user_id']=Auth::id();

        $clothes=ac::create($input);

        return $this->Respone($clothes,$clothes->id);
    }

   
    public function show($id)
    {
        
       

    }

  
    public function update(Request $request,$id)
    {
        $clothes=ac::find($id);

        $clothes->enable=$request->enable;
        $clothes->save();

        return $this->Respone($clothes,200);
    }




    public function updatee(Request $request,$id)
    {
        $clothes=ac::find($id);

        $clothes->noty=$request->noty;
        $clothes->save();

        return $this->Respone($clothes,200);
    }









   
    public function destroy($id)
    {
        $clothes=ac::find($id);

        $clothes->delete();
        return $this->Respone($clothes,200);
    }
}
