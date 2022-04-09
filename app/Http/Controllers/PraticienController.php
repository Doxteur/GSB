<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Praticien;

class PraticienController extends Controller
{
    //
    public function index()
    {
        // $praticiens = Praticien::all();
        $praticiens = Praticien::orderBy('PRA_NUM', 'asc')
        ->get();
        return view('praticien', ['praticiens' => $praticiens]);
    }
    public function getByPraticienName(Request $request){
        $praticien = $request->input('praName');
        if($praticien == ""){
            return redirect()->route('praticien');
        }
        $praticiens = Praticien::where('PRA_NOM', 'like',  '%' . $praticien. "%")
        ->orWhereRaw('upper(PRA_NOM) like ?', ['%' . strtoupper($praticien) . '%'])
        ->orderBy('PRA_NUM', 'asc')
        ->get();
        return view('praticien', ['praticiens' => $praticiens]);
    }
}
