<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Player;
use App\Coach;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' /*,'verified']*/]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=auth()->user()->id;
        $player=User::findorfail($id);
       // dd($player->account_type);
        if (  $player->account_type=="PlayingUnit" ) {
           $playerProfile= new Player;
           $playerProfile->user_id=$id;
           $playerProfile->save();
              return view('home');
        }
         if ( $player->account_type=="TechnicalStaff" ) {
           $playerProfile= new Coach;
           $playerProfile->user_id=$id;
           $playerProfile->save();
              return view('home');
        }
        
      
    }
}
