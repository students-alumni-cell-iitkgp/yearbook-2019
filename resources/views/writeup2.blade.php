<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Writeup</title>
  <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif"/>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  
  .dropdown-menu{
    top: 60px;
    right: 0px;
    left: unset;
    width: 460px;
    box-shadow: 0px 5px 7px -1px #c1c1c1;
    padding-bottom: 0px;
    padding: 0px;
  }
  .dropdown-menu:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 12px;
    border:10px solid #343A40;
    border-color: transparent transparent #343A40 transparent;
  }
  .head{
    padding:5px 15px;
    border-radius: 3px 3px 0px 0px;
  }
  .notification-box{
    padding: 10px 0px; 
  }
  .bg-gray{
    background-color: #eee;
  }
  @media (max-width: 640px) {
    .dropdown-menu{
      top: 50px;
      left: -16px;  
      width: 290px;
    } 
    .nav{
      display: block;
    }
    .nav .nav-item,.nav .nav-item a{
      padding-left: 0px;
    }
    .message{
      font-size: 13px;
    }
  }
  .cta .cta-inner:before
  {
    content: none;
  }
  .article{
    /* background-color: #1d202f; */
    border-radius: 10px;
    color: #fff;
  }
  select{
    font-size: 1.5rem !important;
    padding: 5px;
    border-radius: 5px;
    background-color: transparent;
    color: #fff;
    /* padding: 5px; */
}
.page-section{
  /* background-color: #1d202f; */
  color: #fff;

}
.status-textarea {
flex-grow: 1;
background-color: transparent;
border: none;
resize: none;
margin-top: 15px;
color: #fff;
        max-width: calc(100% - 70px);}
 .status-textarea::placeholder {
 color: #5c5d71;
 /* outline: none; */
}

.status-share {
background-color: #1b86f9;
border: none;
color: #fff;
border-radius: 4px;
padding: 6px 12px;
margin-left: auto;
font-size:2rem;
/* font-weight:bold; */
box-shadow: 0 0 5px #1b86f9;
cursor: pointer;
}
.status-img {
width: 50px;
height: 50px;
object-fit: cover;
border-radius: 50%;
margin-right: 20px;
}
.section-heading-lower{
  font-weight:bold !important;
}

@media (max-width:500px) {
.section-heading-lower{
  font-weight :500 !important;
  font-size: 2.2rem !important;;
}
.section-heading i{
  font-size:19px;
}  
}
</style>
</head>

<body>
  

  



    <section class="page-section article">
      <div class="container" >
        <div class="row">
          <div class=" col-md-11 mx-auto">
            <div class=" text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-lower">Upload Articles</span>
              </h2><br>
              <p class="mb-0 text-left"> 
              How have all these years in KGP transformed you? What’s your funniest experience in the campus? Share with us your stories to make it a part of the yearbook that you carry along. Choose the topic below and send us your articles.</p>
              <br>
              <form class="form-horizontal" method="POST" action="{{ url('/writeup') }}" >
                {{csrf_field()}}
                <!-- <div class="row"> -->
                  <div class="text-left">
                   <select name="topic" id="topic" class="select" required="required" onchange="showfield(this.options[this.selectedIndex].value)">
                    <option selected disabled value="">Choose your topic</option>
                    <option  value="Spring Fest">Spring Fest</option>
                    <option value="Kshitij">Kshitij</option>
                    <option value="Annual Alumni Meet">Annual Alumni Meet</option>
                    <option value="Life at Kgp">Life at Kgp</option>
                    <option value="Illumination">Illumination</option>
                    <option value="Hall">Hall</option>
                    <option value="Every Place a Story">Every Place has a Story</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              <!-- </div> -->
              <br>
              <!-- <div class="row"> -->
                <div class="input-group">
                  <!-- <span class="input-group-addon"><i class="material-icons prefix text-lighten-1">mode_edit</i></span> -->
                  @if(!empty(Auth::user()->pro_pic))
                  <img class="status-img" src="{{Auth::user()->pro_pic}}" alt="Image" data-toggle="tooltip">
                  @else
                  <img class="status-img" src="{{ asset('index.png') }}" alt="Image" data-toggle="tooltip">
                  @endif
                  <textarea name="writeup" id="icon_prefix2" required class="status-textarea" placeholder="Your article here..."></textarea>
                </div>
              <!-- </div> -->
              <hr>
              <br>
              <div class="form-group"> 
                <button class="status-share" type="submit">Submit</button>
              </div>
            </form>
            

          </div>
        </div>
      </div>

    </div>
  </section>
    @foreach($writeups as $writeup)
     <div class="article box" data-toggle="tooltip" title="Click to edit!" style="margin-top:3%;padding-top:2vw;padding-right: 6vw;padding-left:2vw; ">
      
      <h2 class="section-heading mb-4 text-center ">
          <a href="writeup/{{ $writeup->id }}"><i style="float: right;color: #fff" class="material-icons">delete</i></a>
          <span class="section-heading-lower">{{ $writeup->topic }} </span>

      </h2>
      
      <textarea  name="abc"readonly="" rows="5" cols="100" class=" abc no-border status-textarea " style=" overflow:auto;margin-left:7%;margin-top:-1%; font-family: 'Abhaya Libre', serif;font-size : 14 px; font-colo margin-left : 1vw;" style="width:100%;padding: 2vw;text-align: left" onblur="update({{ $writeup->id }})" id="{{ $writeup->id }}" contenteditable >{!!  nl2br($writeup->writeup)!!}</textarea>

  </div>
  @endforeach
  
  
</body>


<script type="text/javascript">
  window.addEventListener('load', function() {
   

const abc_names = document.getElementsByName("abc");
for (var i = 0; i < abc_names.length; i++) {
  if(screen.width<882){
  abc_names[i].setAttribute("cols", 30)

}
else if(screen.width<988){
  abc_names[i].setAttribute("cols", 50)
}
else if(screen.width<1059){
  abc_names[i].setAttribute("cols", 60)
}
else if(screen.width<1152){
  abc_names[i].setAttribute("cols", 70)
}
else if(screen.width<1326){
  abc_names[i].setAttribute("cols", 80)
}else{
  abc_names[i].setAttribute("cols", 100)


}
console.log(screen.width)
// console.log(abc_names)
} 


    
    
})
  

window.addEventListener("resize", ()=>{

  const abc_names = document.getElementsByName("abc");
  for (var i = 0; i < abc_names.length; i++) {
    if(screen.width<882){
    abc_names[i].setAttribute("cols", 30)

  }
  else if(screen.width<988){
    abc_names[i].setAttribute("cols", 50)
  }
  else if(screen.width<1059){
    abc_names[i].setAttribute("cols", 60)
  }
  else if(screen.width<1152){
    abc_names[i].setAttribute("cols", 70)
  }
  else if(screen.width<1326){
    abc_names[i].setAttribute("cols", 80)
  }else{
    abc_names[i].setAttribute("cols", 100)


  }
  console.log(screen.width)
  // console.log(abc_names)
} 

});

  
    

   
  
 

  

 function update(id){
  var writeupedit=$("#"+id).text();
  //console.log(writeupedit);
  $.ajax({
    type: "POST",
    url:' {{ URL::to("/updates") }} ',
    data: {
      writeup: writeupedit,
      id:id,
      _token: $('#signup-token').val()
    }


  });
}
 function showfield(name){
      if(name=='other')document.getElementById('div1').innerHTML='Write your Topic here: <input type="text" name="writeup" />';
      else document.getElementById('div1').innerHTML='';
    }


</script>
</html>