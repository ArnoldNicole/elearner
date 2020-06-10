<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Player;
use Illuminate\Support\Facades\Hash;
class PlayerController extends Controller
{
	//index method called by /PlayerProfile/id 
    public function index (User $player){
        //dd($player);
        if ($player->account_type!='PlayingUnit') {
            return view('errors.WrongRoute');
        }
    	//dd($id);
    	return view('player.index', compact('player'));
    }
    public function edit(User $user){
     $this->authorize('update', $user->player);
      // dd($id);
    return view('player.EditPlayerProfileForm', compact('user'));

    }
    public function update(User $user){
        $this->authorize('update', $user->player);
    	$player=$user;
    	$data=request()->validate([
    		'name'=>['required'],
    		'email'=>['required','email'],
    		'country'=>['required','string'],
    		'url'=>['required','url'],
    		'club'=>[],
    		'Jersey_Number'=>[],
    		
    	]);
    	//dd($data);
        $user=auth()->user();

        $user->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
        ]);
        $user->player->update([
            'Country'=>$data['country'],
            'url'=>$data['url'],
            'Club'=>$data['club'],
            'Jersey_Number'=>$data['Jersey_Number'],

        ]);      
        return redirect('/home');
        
    }
    public function passwordChange(User $user){
        $this->authorize('update', $user->player);
            $player=$user;
            return view('player.PasswordChangeForm', compact('player'));
    }
    public function updatePassword(){
        $data=request()->validate([
             'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        $user=auth()->user();
        $user->password= Hash::make($data['password']);
            $user->save();
        return redirect('/home');
        //dd($data);
    }
}
