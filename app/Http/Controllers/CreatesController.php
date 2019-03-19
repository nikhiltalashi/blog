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
        
        $data = $request->input();
        
          if ($validator->fails()) {
            return redirect('create')
                        ->withErrors($validator)
                        ->withInput($data);
        }
        
        
        
        //return view('create', ['datas' => $data]);
        
        return "Validation Pass";
        
    
    }
}
