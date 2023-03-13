<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Details</title>
  <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif"/>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link type="text/css" href="css/demos/photo.css" rel="stylesheet" />
  <link type="text/css" href="css/demos/interest.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Navigation--> 
  @extends('navbar')
  <style type="text/css">
  .material-icons{
    position: relative;
    top: 6px;
  }
  .col-sm-6{
    margin-top: 20px;
  }
</style>
</head>

<body>
  @section('main-content')
    <div class="main-container">
      <div class="profile">
        <img src="img/bg/collage.webp" alt="" class="profile-cover">
        <div class="profile-avatar">
          <div class="profile-photo">
            <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'img/shot.jpg';}?>" alt="" class="profile-img">
            <div class="profile-name">{{Auth::user()->name}}</div>
          </div>
          <div class="caption">
            @if(!empty(Auth::user()->view_self))
            {{Auth::user()->view_self}}
            @else
            Your Caption Here!
            @endif
          </div>
          <div class="timeline">
            <div style="width: 100%" class="album box">
              <h2>Edit Details</h2>
              <form class="form" method="POST" action="/details">
                {{csrf_field()}}
                @if (count($errors) > 0)
    
                <script type="text/javascript">
    
                  alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');
    
                </script>
    
                @endif
                
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <i class="material-icons prefix">email</i>&nbsp;
                    <label for="email" style="margin-top: -10px;">Email</label>
                    <input name="email" value="{{Auth::user()->email}}"  class="form-control" type="email" required >
    
                  </div>
                  <div class="col-sm-6">
                    <i class="material-icons prefix">phone</i>&nbsp;
                    <label for="phone">Phone no</label>
                    <input name="phone" value="{{Auth::user()->phone}}" class="form-control"  type="number" size="10" required> 
                  </div>
    
                  <div class=" col-lg-4 col-sm-6">
                    <i class="material-icons prefix">password</i>&nbsp;
                    <label for="phone">Password</label>
                        <input name="password" placeholder="xx-yy-zzzz" pattern="\d{1,2}-\d{1,2}-\d{4}" class="form-control"  type="text"   required> 
                  </div>
                </div>
                <br>
    
                <div class="row">
                  <div class="col text-center">
                    <!--<a class="status-share" href="/details">Update</a>-->
                    <input type="submit" value='Update' class="status-share" />
                  </div>
                </div>
    
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/base.js') }}"></script>
  @endsection
