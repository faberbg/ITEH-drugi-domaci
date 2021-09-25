<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Validator;

class KandidatController extends Controller
{
    public function create(Request $request){

        $kandidat= new Kandidat();
        $kandidat->ime=$request->ime;
        $kandidat->prezime=$request->prezime;
        $kandidat->email=$request->email;
        $kandidat->firma_id=$request->firma_id;

        $kandidat->save();

        return redirect('/'.$request->id);
    }


    public function getAll(){

        return response()->json(Kandidat::all(),200);

    }


    public function getById($id){
        $kandidat=Kandidat::find($id);
        if(is_null($kandidat)){
            return response()->json(["message"=>"Kandidat ne postoji"],404);
        }

        return response()->json($kandidat,200);
    }


    public function save(Request $request){

        $input = $request->all();
        $validator = Validator::make($input, [
            'ime'=>'required',
            'prezime'=>'required|email',
            'email'=>'required',
            'firma_id'=>'required',
        ]);

        if ($validator->fails()) {

           
            return $this->sendError('Validation error.', $validator->errors());
        }

        $kandidat= Kandidat::create($request->all());

        return response()->json($kandidat, 201);
    }


    public function delete(Request $request, $id){
        $kandidat= Kandidat::find($id);

        if(is_null($kandidat)){
            return response()->json(["message"=>"Kandidat ne postoji"],404);
        }

        $kandidat->delete();

        return response()->json(null,204);
    }
}
