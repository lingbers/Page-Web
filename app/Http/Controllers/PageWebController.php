<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageWebController extends Controller
{
    public function Index(){
//        $individual_service_id = [];
//        $empresa = Company::all();
//        $plane = Plan::orderBy('name', 'asc')->get();
//        $opinion = Opinion::orderBy('client', 'asc')->get();
//        $home = Home::orderBy('title', 'asc')->get();
        return view('web.Pages.Home', [


        ]);
    }

    public function about(){
//        $empresa = Company::all();
//        $redes = Redes::all();
//        $quienesomos=WhoAre::all();
//        $equipo=Team::orderBy('profession', 'asc')->get();
//        $home = Home::orderBy('title', 'asc')->get();
        return view('web.Pages.About',[
//            'empresa'=>$empresa,
//            'redes'=>$redes,
//            'quienesomos'=>$quienesomos,
//            'equipo'=>$equipo,
//            'home' => $home
        ]);
    }
}
