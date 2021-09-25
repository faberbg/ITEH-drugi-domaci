<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firme;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Validator;

class FirmeController extends BaseController
{
    public function view($grad, $firme){

        $pieces = explode("/", url()->current());
        $firme= Firme::findOrFail($pieces[count($pieces)-1]);

        return view('prijava',['firme'=>$firme]);

    }

    // public function index()
    // {
    //     $firme = Firme::all();

    //     return response()->json($firme,200);
    // }


    public function getAll(){

        $firme=Firme::all();
        $kandidati=Kandidat::all();

        foreach ($firme as $firma) {

            $dodati=[];

            foreach ($kandidati as $kandidat) {

                if ($kandidat->paket_id == $firma->id){

                    $dodati[count($dodati)]=$kandidat;
                }
            }

            $firma->kandidati=$dodati;
        }

        return response()->json($firme,200);

    }


    public function getById($id){

        $firme=Firme::find($id);
        $kandidati=Kandidat::all();

        if(is_null($firme)){

            return response()->json(["message"=>"Firma ne posotji!"],404);
        }
        
        $dodati=[];

        foreach ($kandidati as $kandidat) {

            if ($kandidat->firma_id == $firme->id){

                $dodati[count($dodati)]=$kandidat;
            }
        }

        $firme->kandidati=$dodati;

        return response()->json($firme,200);
    }


    public function save(Request $request){

        $input = $request->all();
        $validator = Validator::make($input(), [
            'naziv'=>'required',
            'opis'=>'required',
            'pozicija'=>'required',
            'grad_id'=>'required',
        ]);

        if ($validator->fails()) {
            
            return $this->sendError('Validation error.', $validator->errors());
        }

        $firme= Firme::create($request->all());

        return response()->json($firme, 201);
    }


    public function delete(Request $request, $id){
        
        $firme= Firme::find($id);

        if(is_null($firme)){
            return response()->json(["message"=>"Firma ne postoji"],404);
        }

        $firme->delete();

        return response()->json(null,204);
    }


}
