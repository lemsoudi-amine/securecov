<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Securecovannonce;

class CovoiturageController extends Controller
{
    public function index(){
        $listdesdemandes=Securecovannonce::all();
        return view('covoiturage.index',['listdesdemandes'=>$listdesdemandes]);

    }
    public function create(){
        return view('covoiturage.create');

    }
    public function store(Request $request){
        $annonce = new Securecovannonce();

        return view('covoiturage.create');

    }
}
