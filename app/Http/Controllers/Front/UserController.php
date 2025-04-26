<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'mariam deeb';
    }

    public function getindex(){


      /*  $obj = new \stdClass();

        $obj -> name = 'mariam';
        $obj -> id = 4;
        $obj -> gender = 'female';*/

        $data=['mariam','ali','mohammad','ahmad','zein','batoul'];
        return view('welcome',compact('data')) ;
    }
}
