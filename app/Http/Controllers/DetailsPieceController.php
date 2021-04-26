<?php

namespace App\Http\Controllers;

use App\Models\detail_clothes;
use App\Models\DetailsPiece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailsPieceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx($id)
    {
        
        $clothes=DetailsPiece::all()->where('accept_id',$id);

        return $this->Respone($clothes,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $input=$request->all();

        $valdit=Validator::make($request->all(),[

            'name',
        'size',
        'color',
        'accept_id',
        'clothes_id'
           
            
        ]);

        if($valdit->fails()){

            return $this->sendError('Failed input',$valdit->errors());
        }

    
        $clothes=DetailsPiece::create($input);

        return $this->Respone($clothes,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailsPiece  $detailsPiece
     * @return \Illuminate\Http\Response
     */
    public function show(DetailsPiece $detailsPiece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailsPiece  $detailsPiece
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailsPiece $detailsPiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailsPiece  $detailsPiece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailsPiece $detailsPiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailsPiece  $detailsPiece
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailsPiece $detailsPiece)
    {
        //
    }
}
