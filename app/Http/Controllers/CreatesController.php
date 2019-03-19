<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
        
        $articles = Article::all();   
        return view('home', ['articles' => $articles]);
        
    }
    
    public function insert(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        
        return "Validation Pass";
        
    
    }
}
