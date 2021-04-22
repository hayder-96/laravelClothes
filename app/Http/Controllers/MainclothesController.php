<?php

namespace App\Http\Controllers;

use App\Models\mainclothes;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;

class MainclothesController extends BaseController
{
   
    public function index()
    {
        $clothes=mainclothes::all();
        return $this->Respone($clothes,200);
    }

   
    public function store(Request $request)
    {
        
        $input=$request->all();

        $valdit=Validator::make($request->all(),[

            'name',
            'admin_id',
            

        ]);

        if($valdit->fails()){

            return $this->sendError('Failed input',$valdit->errors());
        }


        if($request->image!=null){
        $path= Cloudinary::upload($request->file('image')->getRealPath(),
    
        array("public_id" =>$request->name,"quality"=>'auto'))->getSecurePath();

        $input['image']=$path;

        }

       
        $input['admin_id']=Auth::id();
      
        
    
        $hotel=mainclothes::create($input);

        return $this->Respone($hotel,'Success input');
    }

   
    public function show(mainclothes $mainclothes)
    {
        //
    }

  
    public function updatee(Request $request)
    {
        
        $clothes=mainclothes::find($request->id);

        $clothes->name=$request->name;

        if($request->image!=null){
            $path= Cloudinary::upload($request->file('image')->getRealPath(),
        
            array("public_id" =>$request->name,"quality"=>'auto'))->getSecurePath();
    
           
            $clothes->image=$path;
    
            }


            $clothes->save();

            return $this->Respone($clothes,200);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mainclothes  $mainclothes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $clothes=mainclothes::find($id);

        $clothes->delete();

        return $this->Respone($clothes,200);
    }
}
