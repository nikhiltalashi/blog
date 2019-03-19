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
        
        
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        
        $message = "Article with title as '".$request->input('title')."' saved successfully!";
        
        return redirect('/')->with('info',$message); 
    }
    
    public function update($id){
    
       $articles = Article::find($id);
       return view('update',['articles'=>$articles]);
        
    }
    
    public function edit(Request $request, $id){
    
         $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $data = array(
             'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        
        Article::where('id',$id)
            ->update($data);
        
        $message = "Article with title as '".$request->input('title')."' Updated successfully!";
        
        return redirect('/')->with('info',$message); 
        
    }
}
