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

  
</head>

<body>

   <div class="container-fluid">




  <h1><small>

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
                        <label for="user"><h5 style="font-size: 140%;  color: #004d33;">Name</h5></label>
                    </div>
                </div>
                
                <div style="text-align : left">To:</div>
                <div class="row" style="margin-bottom: 0px; text-align : center">
                    <div class="input-field col s12 l6 m12 " >                   
                        <input name="rollno" id="rollno" autofocus placeholder="Roll Number" type="text" style="margin-top: 5px;" required>
                        <label for="rollno"><h5 style="font-size: 140%;  color: #004d33;">Roll Number (16THXXXXX)</h5></label>
                    </div>
                </div>
                <div style="text-align : left">Enter your review here:</div>
                <textarea class="form-control animated" style="height:100px" cols="50" id="new-review" name="viewf" placeholder="Enter your review here...(max 144 character)" rows="10" maxlength="144" ></textarea>
                <br>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" style="font-size: 15px;" required >Submit</button>
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
