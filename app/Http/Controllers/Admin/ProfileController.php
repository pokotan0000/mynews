<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//以下を追加することでProfile Modelが扱えるようになる
use App\profile;

class ProfileController extends Controller
{
    //
    public function add(){
        return view('admin.profile.create');
    }
    
    public function create(Request $request){

        // Varidationを行う
        
        $this->validate($request, Profile::$rules);
        
        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        //データベースに保存する
        $news->fill($form);
        $news->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(){
        return view('admin.profile.edit');
    }
    
    public function update(){
        return redirect('admin/profile/edit');
    }
    
        

}
