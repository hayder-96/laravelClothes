<?php

namespace App\Http\Controllers;

use App\Models\detail_clothes;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\detailclothes;

class DetailClothesController extends BaseController
{
   
    public function indexx($id)
    {
        $clothes=detail_clothes::all()->where('detail_id',$id);

        return $this->Respone(detailclothes::collection($clothes),200);

    }




    public function index()
    {
        $clothes=detail_clothes::all();

        return $this->Respone(detailclothes::collection($clothes),200);

    }










   
    public function store(Request $request)
    {
        
        $input=$request->all();

        $valdit=Validator::make($request->all(),[

            'name',
            'price',
            'detail_id',
            
        ]);

        if($valdit->fails()){

            return $this->sendError('Failed input',$valdit->errors());
        }


        if($request->image1!=null){
        $path1= Cloudinary::upload($request->file('image1')->getRealPath(),
    
        array("public_id" =>$request->name1,"quality"=>'auto'))->getSecurePath();

        $input['image1']=$path1;

        }


        if($request->image2!=null){
            $path2= Cloudinary::upload($request->file('image2')->getRealPath(),
        
            array("public_id" =>$request->name2,"quality"=>'auto'))->getSecurePath();
    
            $input['image2']=$path2;
    
            }




            if($request->image3!=null){
                $path3= Cloudinary::upload($request->file('image3')->getRealPath(),
            
                array("public_id" =>$request->name3,"quality"=>'auto'))->getSecurePath();
        
                $input['image3']=$path3;
        
                }




                if($request->image4!=null){
                    $path4= Cloudinary::upload($request->file('image4')->getRealPath(),
                
                    array("public_id" =>$request->name4,"quality"=>'auto'))->getSecurePath();
            
                    $input['image4']=$path4;
            
                    }



                    if($request->image5!=null){
                        $path5= Cloudinary::upload($request->file('image5')->getRealPath(),
                    
                        array("public_id" =>$request->name5,"quality"=>'auto'))->getSecurePath();
                
                        $input['image5']=$path5;
                
                        }

       
    
    
        $hotel=detail_clothes::create($input);

        return $this->Respone($hotel,'Success input');



    }

  
    public function show(detail_clothes $detail_clothes)
    {
        
    }

   
    public function updatee(Request $request)
    {
        
        $clothes=detail_clothes::find($request->id);



        if($request->image1!=null){
            $path1= Cloudinary::upload($request->file('image1')->getRealPath(),
        
            array("public_id" =>$request->name1,"quality"=>'auto'))->getSecurePath();
    
            $clothes->image1=$path1;
    
            }
    
    
            if($request->image2!=null){
                $path2= Cloudinary::upload($request->file('image2')->getRealPath(),
            
                array("public_id" =>$request->name2,"quality"=>'auto'))->getSecurePath();
        
                $clothes->image2=$path2;
        
                }
    
    
    
    
                if($request->image3!=null){
                    $path3= Cloudinary::upload($request->file('image3')->getRealPath(),
                
                    array("public_id" =>$request->name3,"quality"=>'auto'))->getSecurePath();
            
                    $clothes->image3=$path3;
            
                    }
    
    
    
    
                    if($request->image4!=null){
                        $path4= Cloudinary::upload($request->file('image4')->getRealPath(),
                    
                        array("public_id" =>$request->name4,"quality"=>'auto'))->getSecurePath();
                
                        $clothes->image4=$path4;
                
                        }
    
    
    
                        if($request->image5!=null){
                            $path5= Cloudinary::upload($request->file('image5')->getRealPath(),
                        
                            array("public_id" =>$request->name5,"quality"=>'auto'))->getSecurePath();
                    
                            $clothes->image5=$path5;
                    
                            }


                            $clothes->name=$request->name;
                            $clothes->price=$request->price;

                    
                            $clothes->color1=$request->color1;
                            $clothes->color2=$request->color2;
                            $clothes->color3=$request->color3;
                            $clothes->color4=$request->color4;
                            $clothes->color5=$request->color5;
                            $clothes->number1=$request->number1;
                            $clothes->number2=$request->number2;
                            $clothes->number3=$request->number3;
                            $clothes->number4=$request->number4;
                            $clothes->number5=$request->number5;
                            $clothes->number6=$request->number6;
                            $clothes->save();

                            return $this->Respone($clothes,200);

    }

   
    public function destroy($id)
    {
        
        $clothes=detail_clothes::find($id);

        $clothes->delete();

        return $this->Respone($clothes,200);
    }




    public function addnum(Request $request)
    {
        
        $clothes=detail_clothes::find($request->id);

       $n=$clothes->nummore+$request->nummore;

       $clothes->nummore=$n;
       $clothes->save();
        return $this->Respone($clothes,200);
    }










    public function upnum(Request $request,$id){

        $clothes=detail_clothes::find($id);

        if($request->number1!=null){
        $clothes->number1=$request->number1;

        }

        if($request->number2!=null){
            $clothes->number2=$request->number2;
    
            }

            if($request->number3!=null){
                $clothes->number3=$request->number3;
        
                }

                if($request->number4!=null){
                    $clothes->number4=$request->number4;
            
                    }

                    if($request->number5!=null){
                        $clothes->number5=$request->number5;
                
                        }

                        $clothes->save();

                        return $this->Respone($clothes,200);

    }
}
