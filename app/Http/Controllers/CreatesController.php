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
        
    public function add(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        
        echo "<pre>";
        print_r($request);
        echo "</pre>";
        
        //return "Validation Pass";
        
    
    }
}
