<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /* VIEW HOME */
    public function index(){
        $userData = Auth::user();
        $profileUser = ProfileUser::select('photo_profile', 'first_name', 'second_name', 'contact')->where('username', $userData->username)->first();
        $totalData = $profileUser == true ? 1 : 0;
        
        if($totalData > 0){
            $fotoProfil = $profileUser->photo_profile;
        }else{
            $fotoProfil = 'none';
        }
        return view('dashView.Home', [
            'userLogin' => $userData,
            'fotoProfil' => $fotoProfil,
            'title' => 'Home'
        ]);
    }
}
