<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile;
class MainController extends Controller
{

    public function ProfilPage($full_name){
        $data = pr :: where('username',$full_name)
        // ->where('username',$username)
        ->last();

        return view ('about')->with('data', $data);
        return view ('home')->with('data', $data);
    }
}
