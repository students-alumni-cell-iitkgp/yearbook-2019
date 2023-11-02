<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Testimonials</title>
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/autocomplete.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/autocomplete.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    .dropdown-menu{
      top: 0px;
      left: 0px;
    }
    .dropdown-item{
      border-bottom: 1px; 
    }
    ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 0em;
    margin-block-end: 0em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 0px;
    border-bottom: 1px white;
    padding-top:0;
  margin-top:0;
}
li{
  display: flex;
  justify-content: space-evenly;
  background-color:#f8f8ff;
  padding-top:0;
  margin-top:0;
}
    a{
      color: #005555;
      font-weight: lighter;
      font-size:small;
    }
    #user, #user1, #rollno {
      margin-top: 5px;
    }
    h1{
      padding: 1rem 1rem;
    }
    @media (max-width: 730px) {
      #user, #user1, #rollno {
      margin-top: 12px;
    
    }
    .rollno{
      input-field: 1rem 0;
    }
    }
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
<!-- <b> Write Testimonials</b> </h3><br> -->
 <p> The Yearbook Portal has been closed. </p> 


   <!-- <form action="{{ url('/writetestimonyngb') }}" onSubmit="alert('Your views will be added in their yearbook after their registration and approval');" method="POST" class="form main-title center">              
                {{ csrf_field() }}

                <div style="text-align : left">Sender Details:</div>
                <div class="row" style="margin-bottom: 0px; text-align : center">

                   
                    <div class="input-field col s12 l6 m12 " >                   
                        <input name="user" id="user" autofocus placeholder="Name" type="text"  required>
                        <label for="user"><h5 style="font-size: 140%;  color: white;">Name</h5></label>
                    </div>
                    <div class="input-field col s12 l6 m12 " >                   
                        <input name="user1" id="user1" autofocus placeholder="Roll Number" type="text" style="
    padding-top: 5px;" required >
                        <label for="user1"><h5 style="font-size: 140%;  color: white;">Roll Number (18THXXXXX)</h5></label><br>
                    </div>
                </div> -->
                
                <!-- <div style="text-align : left">To:</div>
                <div class="row" style="margin-bottom: 0px;"> -->
                    <!-- <div class="input-field col s12 l6 m12 " >                   
                    <input name="rollno" id="rollno" autofocus placeholder="Roll Number" type="text" style="
    padding-top: 5px;
" required>
                        <label for="rollno"><h5 style="font-size: 140%;  color: white;">Roll Number (18THXXXXX)</h5></label>
                    </div>  -->
                    
                    <!-- <div class="input-field col s12 l6 m12 " >
                        <input type="text" name="rollno" id="rollno" autofocus class="form-control typeahead" placeholder="Search your friend here.....by name" style="
    padding-top: 5px;
" required>
                        <label for="rollno"><h5 style="font-size: 140%;  color: white;">Roll Number (18THXXXXX)</h5></label>
                
                      </div>
                      </div>
                      <br>
                <div style="text-align : left">Enter your review here:</div>
                <textarea class="form-control animated" style="height:100px" cols="50" id="new-review" name="viewf" autofocus placeholder="Max 144 character" rows="10" maxlength="144" ></textarea>
                <br>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="status-share" style="font-size: 15px;" required >Submit</button>
                    </div>
                </div>
            </form>  -->
         
            </small></h1>
  </div>

<!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
<div class="slideshow">
  <div class="slideshow-image" style="background-image: url('oldbuilding.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('toat_work.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('kalidas.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('vikramshila.jpg')"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
 var path = "{{route('autocomplete')}}";
 var name ;
 $('input.typeahead').typeahead({
   source: function(terms,process){
       return $.get(path,{terms:terms},function(data){
       for( var i=0;i<data.length;i++){
        name = data[i].name + '|' + data[i].rollno;
        data[i].name = name;
       }
         return process(data);
       })
   }
 });
</script>

</body>

</html>
