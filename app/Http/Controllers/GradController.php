<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grad;
use App\Models\Firme;
use Illuminate\Support\Facades\Validator;

class GradController extends BaseController
{

    public function all()
    {
        $grad = Grad::all();

        return view('grad', [
            'grad' => $grad
        ]);

    }


    public function view($id)
    {
       // $grad = Grad::where('id',$id)->get();
        $grad = Grad::findOrFail($id);
        $firme1 = Firme::all();
        $dodati = [];

        foreach ($firme1 as $firma) {

            if ($firma->grad_id == $id) {

                $dodati[count($dodati)] = $firma;
            }
        }

        $grad->firme1 = $dodati;

        return view('firme', ['grad' => $grad]);
       // return response()->json($grad, 200);

    }


    public function save(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'imegrada' => 'required',
        ]);

        if ($validator->fails()) {
            
            return $this->sendError('Validation error.', $validator->errors());
        }

        $grad = Grad::create($request->all());

        return response()->json($grad, 201);
    }


    public function delete(Request $request, $id)
    {
        $grad = Grad::find($id);

        if (is_null($grad)) {
            return response()->json(["message" => "Grad ne postoji"], 404);
        }

        $grad->delete();

        return response()->json(null, 204);
    }


    public function getAll()
    {
        $grad1 = Grad::all();
        $firme = Firme::all();

        foreach ($grad1 as $grad) {
            $dodati = [];

            foreach ($firme as $firma) {

                if ($firma->grad_id == $grad->id) {

                    $dodati[count($dodati)] = $firma;
                }
            }

            $grad->firme = $dodati;
        }

        return response()->json($grad1, 200);
    }


    public function getById($id)
    {
        $grad = Grad::find($id);
        $firme1 = Firme::all();

        if (is_null($grad)) {
            return response()->json(["message" => "Grad ne postoji"], 404);
        }

        $dodati = [];

        foreach ($firme1 as $firma) {
            if ($firma->grad_id == $grad->id) {
                $dodati[count($dodati)] = $firma;
            }
        }

        $grad->firme1 = $dodati;

        return response()->json($grad,200);
    }


}
