<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanas = DB::table('campanas')
            ->where('admin_id', '=', Auth::user()->id)
            ->where('team_id', '=', Auth::user()->currentTeam->id)
            ->paginate(5);
        $cantidadCampanas = DB::table('campanas')
            ->selectRaw('count(*) as campi')
            ->where('admin_id', '=', Auth::user()->id)
            ->where('team_id', '=', Auth::user()->currentTeam->id)->get();
        foreach ($cantidadCampanas as $cantCamp) {
            $ccampanas = $cantCamp->campi;
        }

        return view('home', ["listaCampanas"=>$campanas, "cantidadCampanas"=>$ccampanas]);
    }
}
