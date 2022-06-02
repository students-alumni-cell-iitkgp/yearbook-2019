<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\views;
use App\User;
use App\Comment;
use Auth;

class outsideController extends Controller
{
   

    public function autocomplete(Request $request)
    {

    /*$name = strtok(request('search'), "|");
          $user = User::where('name',$name)->get();

          if( $user->isNotEmpty()){
            $roll = $user[0]['rollno']; 

            $data = $user + '|' + $roll ;
            return response()->json($data);
            
          }*/

         $datas = User::select("name","rollno")->where("name","LIKE","%{$request->terms}%")->get();
        
          return response()->json($datas);

       //   $users = User::get();
    //    print_r($user);

     
       // return view('auth.Testimonial_public',['user'=>$user]);
}
}
