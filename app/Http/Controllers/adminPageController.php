<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class adminPageController extends Controller {
public function index(){
$users =DB::select('select * from users');
$noOfUsers=0;
foreach($users as $user) { 
    $noOfUsers++;
}

$buckets=DB::select('select * from buckets');
$noOfBuckets=0;
foreach($buckets as $bucket) { 
    $noOfBuckets++;
}

$comments=DB::select('select * from comments');
$noOfComments=0;
foreach($comments as $comment) { 
    $noOfComments++;
}

$images=DB::select('select * from images');
$noOfImages=0;
foreach($images as $image) { 
    $noOfImages++;
}
$invites=DB::select('select * from invites');
$noOfInvites=0;
foreach($invites as $invite) { 
    $noOfInvites++;
}
$likes=DB::select('select * from likes');
$noOfLikes=0;
foreach($likes as $like) { 
    $noOfLikes++;
}
$migrations=DB::select('select * from migrations');
$noOfMigrations=0;
foreach($migrations as $migration) { 
    $noOfMigrations++;
}
$polls=DB::select('select * from polls');
$noOfPolls=0;
foreach($polls as $poll) { 
    $noOfPolls++;
}
$views=DB::select('select * from views');
$noOfViews=0;
foreach($views as $view) { 
    $noOfViews++;
}
$writeups=DB::select('select * from writeups');
$noOfWriteups=0;
foreach($writeups as $writeup) { 
    $noOfWriteups++;
}



return view('adminPage',
            ['users'=>$noOfUsers,'buckets'=>$noOfBuckets,'comments'=>$noOfComments,'images'=>$noOfImages,
                'invites'=>$noOfInvites,'likes'=>$noOfLikes,
                'migrations'=>$noOfMigrations,'polls'=>$noOfPolls,
                'views'=>$noOfViews,'writeups'=>$noOfWriteups
            ]);
}

}
