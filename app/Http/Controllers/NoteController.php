<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //
    public function index()
    {
        // $notes = Note::all();
        // Notes inner join praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM
        $notes = Note::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->select('rapport_visite.RAP_NUM', 'rapport_visite.RAP_DATE', 'rapport_visite.RAP_BILAN', 'rapport_visite.RAP_MOTIF', 'rapport_visite.PRA_NUM', 'praticien.PRA_NOM', 'praticien.PRA_PRENOM')
            ->orderBy('rapport_visite.RAP_NUM', 'asc')
            ->get();
        return view('dashboard', ['notes' => $notes]);
    }

    public function getByPraticien(Request $request){
        $praticien = $request->input('praName');
        if($praticien == ""){
            return redirect()->route('dashboard');
        }

        $praticiensNote = Note::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->select('rapport_visite.RAP_NUM', 'rapport_visite.RAP_DATE', 'rapport_visite.RAP_BILAN', 'rapport_visite.RAP_MOTIF', 'rapport_visite.PRA_NUM', 'praticien.PRA_NOM', 'praticien.PRA_PRENOM')
            ->where('praticien.PRA_NOM', 'like',  '%' . $praticien. "%")
            ->orWhereRaw('upper(praticien.PRA_NOM) like ?', ['%' . strtoupper($praticien) . '%'])
            ->orderBy('rapport_visite.RAP_NUM', 'asc')
            ->get();
        return view('dashboard', ['notes' => $praticiensNote]);
    }
}
