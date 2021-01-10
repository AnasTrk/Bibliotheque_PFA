<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examplaire;
use App\Categorie;
class ExamplaireController extends Controller
{
    public function index()
    {
        $examplaires =  Examplaire::all();
        $categories = Categorie::all();
        return view('admin.examplaires',['examplaires'=>$examplaires])->with("categories",$categories);
    }
    public function store(Request $request)
    {
        $examplaire = new Examplaire();
        $examplaire->titre = $request->input('titre');
        $examplaire->description = $request->input('description');
        $examplaire->categorie_id = $request->input('select');
        $examplaire->is_disponible = 1;
       // dd($request->all());
        //$titre = $request->input('titre');
        $examplaire->save();
        redirect('/examplaires');
    }
}