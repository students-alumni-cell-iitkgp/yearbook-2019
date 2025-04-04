<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Yearbook</title>
  <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href="{{ url('https://fonts.googleapis.com/css?family=Raleway:300') }}">

  <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

  <style>
    .box{
/* From https://css.glass */
background: rgba(255, 255, 255, 0.73);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(8px);
-webkit-backdrop-filter: blur(8px);
border: 1px solid rgba(255, 255, 255, 0.57);
      
      color:black;
    }
    .status-share {
      background-color: green;
      border: none;
      color: #fff;
      border-radius: 4px;
      padding: 10px 20px;
      margin-left: auto;
      box-shadow: 0 0 20px #1b86f9;
      cursor: pointer;
      margin-top: 10px;
    }

    ::placeholder{
      color: gray;
      opacity:0.8;
    }

    @media only screen and (max-width: 600px) {
    .box {
        border-radius: 8px; /* Adjust border radius for smaller screens */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Adjust box shadow for smaller screens */
        backdrop-filter: blur(8px); /* Disable backdrop filter for smaller screens */
        -webkit-backdrop-filter: blur(8px); /* Disable backdrop filter for smaller screens */
        border: 1px solid rgba(255, 255, 255, 0.2); /* Adjust border for smaller screens */
        padding: 2px;
    }
    }

  </style>


</head>

<body>

  <div class="container-fluid" >




    <h1 class="box">
      <small>
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
          Welcome to<b> Yearbook'25</b> Portal
        </h3><br>
        <!-- <p> The Yearbook Portal has been closed. </p> -->
        <form method="post" class="form main-title center"  action="{{ route('login') }}">
         <form method="post" class="form main-title center" onSubmit="alert('Kindly reapprove the desired testimonials to be shown in the testimonial timeline!!');" action="{{ route('login') }}"> 
                {{ csrf_field() }}

                <div class="row" style="margin-bottom: 0px; text-align : center">
                   
                    <div class="input-field row s12 l6 m12 " >                   
                        <input name="rollno" id="rollno" autofocus placeholder="Roll Number" type="text" style="margin-top: 20px;" required>
                        <label for="rollno"><h5 style="font-size: 140%; color:black">Roll Number (21THXXXXX)</h5></label>
                    </div>
                    <div class="input-field row s12 l6 m12 ">                   
                        <input name="password" id="dob" placeholder="Date of Birth" pattern="\d{1,2}-\d{1,2}-\d{4}" type="text" style="margin-top: 20px;" required>
                        <label for="dob"><h5 style="font-size: 140%;color:black">Date of Birth (dd-mm-yyyy)</h5></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="status-share" style="font-size: 15px;" required >Submit</button>
                    </div>
                </div>
            </form> 

        <p class=" center sub-title main-title " style="color:black"><a href="{{ url('/Testimonial_public') }}" style="color:black"> Write Testimonials<a><i class="material-icons" style="color:black">error_outline</i><span class="tooltip" style="background:white;color:black">If you are not graduating this year, but want to write about your friends who are graduating, you can click on this link.</span></a></p> 
        <p class=" center sub-title main-title" style="color: black">Contact us at:<br> <a style="color: black" href="mailto:Yearbookiitkgp2022@gmail.com"> yearbookandclass.song.2024@gmail.com<a><i style="color: black" class="material-icons">error_outline</i><span class="tooltip">If you are not graduating this year, but want to write about your friends who are graduating, send us the testimonials via mail at yearbookandclass.song.2024@gmail.com</span></a></p> 

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
