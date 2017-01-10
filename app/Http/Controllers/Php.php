<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Php extends Controller
{
    public function getPhpProjects($id){
        $id=(int)$id;
        $phpProjects= \App\Project::all()->where('id_khowledge','=',$id);
        $phpKnowledges= \App\Khowledge::all();
        if(!count($phpProjects))
        {
            return redirect('/');
        }
        return view("php")->with(['phpProjects'=>$phpProjects,'phpKnowledges'=>$phpKnowledges]);
    }
}
