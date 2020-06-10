<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Player;
use App\Coach;
class coachesController extends Controller
{
    public function index(User $user){
    	if ($user->account_type!='TechnicalStaff') {
            return view('errors.WrongRoute');
        }
    	return view('coaches.index', compact('user'));
    }
    public function list(){
    	$players=User::where(['account_type'=>'PlayingUnit'])->get();
    	//dd($players);
    	return view('coaches.listedplayers',compact('players'));
    }
    public function profile(User $coach){
        if ($coach->account_type!='TechnicalStaff') {
            return redirect()->back();
        }else{
            return view('coaches.profile', compact('coach'));
        }
    }
}
