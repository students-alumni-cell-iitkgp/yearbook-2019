<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class adminPageController extends Controller {
    public function __construct()
	{
		$this->middleware('auth');
	}
    public function index(){
        $users =DB::select('select * from users');
        $noOfUsers=count($users);

        $buckets=DB::select('select * from buckets');
        $noOfBuckets=count($buckets);


        $comments=DB::select('select * from comments');
        $noOfComments=count($comments);


        $images=DB::select('select * from images');
        $noOfImages=count($images);

        $invites=DB::select('select * from invites');
        $noOfInvites=count($invites);

        $likes=DB::select('select * from likes');
        $noOfLikes=count($likes);

        $migrations=DB::select('select * from migrations');
        $noOfMigrations=count($migrations);

        $polls=DB::select('select * from polls');
        $noOfPolls=count($polls);

        $views=DB::select('select * from views');
        $noOfViews=count($views);

        $writeups=DB::select('select * from writeups');
        $noOfWriteups=count($writeups);


        return view('adminPage',
                    ['users'=>$noOfUsers,'buckets'=>$noOfBuckets,'comments'=>$noOfComments,'images'=>$noOfImages,
                        'invites'=>$noOfInvites,'likes'=>$noOfLikes,
                        'migrations'=>$noOfMigrations,'polls'=>$noOfPolls,
                        'views'=>$noOfViews,'writeups'=>$noOfWriteups
                    ]);
    }

}
