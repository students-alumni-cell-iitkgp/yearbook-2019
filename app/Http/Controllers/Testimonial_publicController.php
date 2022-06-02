<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\views;
use Auth;
use App\User;
use App\Image;
use App\writeup;
use App\Comment;


class Testimonial_publicController extends Controller
{
    //
   public function index()
   {
      
       $user = User::get();
    //    print_r($user);
       return view('auth.Testimonial_public',['user'=>$user]);
    
   


}
}