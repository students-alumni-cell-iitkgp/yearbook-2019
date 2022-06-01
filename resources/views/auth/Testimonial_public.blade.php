<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Testimonials</title>
  
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/autocomplete.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href="{{ url('https://fonts.googleapis.com/css?family=Raleway:300') }}">

      <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
      <style>
      .box{
      background: #373e57e3;
      color: white;
    }
    .status-share {
      background-color: #1b86f9;
      border: none;
      color: #fff;
      border-radius: 4px;
      padding: 10px 20px;
      margin-left: auto;
      box-shadow: 0 0 20px #1b86f9;
      cursor: pointer;
      margin-top: 10px;
    }
   /* textarea placeholder{
      color:black;
    }*/

    </style>
  
</head>

<body>

   <div class="container-fluid">

  <h1 class = "box"><small>

   <h3 class="center main-title animated zoomIn">
    <div class="clock-wrap">
  <div class="clock">
    <div class="clock__date">
    </div>
    <div class="clock__time">
    </div>
  </div>
</div>
<div class="clock-toogle">
  <div class="clock-toogle__toogle"></div>
</div>           
<br>
<b> Write Testimonials</b> </h3><br>
<!-- <p> The Yearbook Portal has been closed. </p> -->


   <form action="{{ url('/writetestimonyngb') }}" onSubmit="alert('Your views will be added in their yearbook after their registration and approval');" method="POST" class="form main-title center">              
                {{ csrf_field() }}

                <div style="text-align : left">Sender Details:</div>
                <div class="row" style="margin-bottom: 0px; text-align : center">

                   
                    <div class="input-field col s12 l6 m12 " >                   
                        <input name="user" id="user" autofocus placeholder="Name" type="text" style="margin-top: 5px;" required>
                        <label for="user"><h5 style="font-size: 140%;  color: white;">Name</h5></label>
                    </div>
                </div>
                
                <div style="text-align : left">To:</div>
                <div class="row" style="margin-bottom: 0px; text-align : center">
                    <div class="input-field col s12 l6 m12 " >                   
                      <form class="search-nav" action="{{ url('/search') }}" method="POST">
	                    		{{ csrf_field() }}
	                    		<input type="text" placeholder=" Search Your Friend Here..." name = "search" id="search" style="margin-top: 5px;" required>
	                    		<input type="submit" value="Search" class="kafe-btn kafe-btn-mint" style="display: none;">
	                    </form>
                      <label for="user"><h5 style="font-size: 140%;  color: white;">Name</h5></label>
                    </div>
                </div>
                
                <div style="text-align : left">Enter your review here:</div>
                <textarea class="form-control animated" style="height:100px" cols="50" id="new-review" name="viewf" autofocus placeholder="Enter your review here...(max 144 character)" rows="10" maxlength="144" ></textarea>
                <br>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="status-share" style="font-size: 15px;" required >Submit</button>
                    </div>
                </div>
            </form> 
         
            </small></h1>
  </div>

<!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
<div class="slideshow">
  <div class="slideshow-image" style="background-image: url('oldbuilding.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('toat_work.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('kalidas.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('vikramshila.jpg')"></div>
</div>
   


</body>

</html>
