<!DOCTYPE html>
<html lang="en">
    <head>

      <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Images | Bucket List</title>

      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta property="og:title" content="" />
      <meta property="og:url" content="" />
      <meta property="og:description" content="" />  
      <meta name="csrf-token" content="{{ csrf_token() }}">   
    
    <!-- ==============================================
    Favicons
    =============================================== --> 
    <link rel="icon" href="{{asset('img/navbar/SAClogo.png')}}" sizes="32x32" type="image/gif"/>
      <link rel="icon" href="{{ asset('img/logo.jpg') }}">
      <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
      <!-- ==============================================
    CSS
    =============================================== -->
        <link type="text/css" href="{{ asset('css/demos/photo.css') }}" rel="stylesheet" />
        <link type="text/css" href="{{ asset('css/demos/interest.css') }}" rel="stylesheet" />
        <link type="text/css" href="{{ asset('css/demos/viewitch.css') }}" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        
    <!-- ==============================================
    Feauture Detection
    =============================================== --> 
    <!--<style type="text/css">
        #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 12px;
          border: none;
          outline: none;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
        }

        #myBtn:hover {
          background-color: #555;
        }
    .back{
      width: 100%;
      height: 100%;
      overflow-y: scroll;
      /* overflow: scroll;*/
      /*background-image: url('img/bg/bgbg.jpg');
      background-attachment: fixed;*/
    }
    .article{
      background-color: #ffffff;
      border-radius: 10px;
    }
    @media screen and (min-width: 768px){
      body {
        position: relative;
      }
      .affix {
        top: 20px;
        z-index: 9999 !important;
        height: 100%;
        overflow-y: scroll;
      }
    }-->
    <style type="text/css"> 
    .back{
      width: 100%;
      height: 100%;
      overflow-y: scroll;
      /* overflow: scroll;*/
      /*background-image: url('img/bg/bgbg.jpg');
      background-attachment: fixed;*/
    }

    .logo {
    padding:0;
    background-color:rgb(11 21 35);
    }
    </style>
@extends('navbar')
    </head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="10">

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
   
  
  
   <!-- ==============================================
   Navbar Second Section
   =============================================== -->
   
  
   <!-- ==============================================
   News Feed Section
   =============================================== --> 
   @section('main-content')
   <section class="newsfeed back">
    <section class="channel-one">
       <div class="container">
          <div class="row">

            <div class="col-sm-9">
              <div class="text-center rounded article" align = "center" style = "color: #9c9cab;">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-lower">ITCH LIST</span>
                </h2>
                <p class="mb-0"> Snaps from the Itch List we gave you.</p>
              </div>
          
              @if(count($images)>0)
      
                <div class="row pagi1">
                  <div class="col-12">
                    {{ $images->links('vendor.pagination.bootstrap-4')}}
                  </div>
                </div>

                @php
                $count= 0;
                $boxcount =0;
                $linecount=1;
                @endphp
       
                @foreach($images as $image)
                  @if(true)
                           
                    @php
                    $name = App\User::where('rollno',$image['roll'])->get();
                    @endphp

                    @php $boxcount++; @endphp

                    @if($boxcount>10)
                    @php $linecount=1;   @endphp
                    @endif
                  
                    @if($boxcount>2)
                    @php $linecount=2;   @endphp
                    @endif

                    @if($boxcount>4)
                    @php $linecount=3;   @endphp
                    @endif

                    @if($boxcount>6)
                    @php $linecount=4;   @endphp
                    @endif

                    @if($boxcount>8)
                    @php $linecount=5;   @endphp
                    @endif

                    @if($boxcount>10)
                    @php $boxcount=0;   @endphp
                    @endif
                       
                    <div class="section1 box{{$boxcount}}">
                      <div class="cardbox" id="img{{$image['pic']}}" style = "border: 2px solid #272a3a;border-radius: 8px;">
                        <div class="cardbox-heading">
                             <!-- START dropdown-->
                             @if($image['roll'] == Auth::user()->rollno)
                            <div class="dropdown pull-right">
                               <button class="btn btn-secondary btn-flat btn-flat-icon" title="Click to delete!" type="button" data-toggle="dropdown" aria-expanded="false">
                                 <em class="fa fa-ellipsis-h"></em>
                               </button>
                               <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                 <a class="dropdown-item delete" href="#" id="{{$image['pic']}}" data-token="{{csrf_token()}}">Delete</a>
                               </div>
                            </div><!--/ dropdown -->
                             @endif
                             <!-- END dropdown-->
                            <div class="media m-0">
                               <div class="d-flex mr-3">
                                 <a href="/profile_index/{{$image['roll']}}">
                                   <img class="img-responsive img-circle" src="{{$name[0]['pro_pic']}}" alt="User">
                                 </a>
                               </div>
                               <div class="media-body">
                                 <a href="/profile_index/{{$image['roll']}}') }}">
                                   <p class="m-0">{{$name[0]['name']}}</p>
                                 </a>
                                 <small><span>{{$image['created_at']->diffForHumans() }}</span></small>
                               </div>
                            </div><!--/ media -->
                          </div>
       
                           <div class="cardbox-item">
                             
                             <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0 " src="{{$image['pic']}}"
                             id="{{$image['pic']}}"  data-toggle="tooltip" data-placement="top" style="cursor: pointer; width: 100%;max-height: 500px; min-height: 300px; height: 50vw;">
                           </div><!--/ cardbox-item -->
                                   
                        </div><!--/ cardbox -->    
                    </div><!--section1-->
                  @endif
                  <script type="text/javascript">
                    $(document).ready(function() {
                      if($(window).width() < 768) {
                        document.getElementById('side').setAttribute('data-spy', ' ');
                        $(window).scroll(function() {    
                          var scroll = $(window).scrollTop();
                          if (scroll >= 1) {
                            document.getElementById('side').setAttribute('class', ' ');
                          }
                        });
                      }
                    });
                  </script>
            
                @endforeach
                 
               <div class="row pagi2">
                 <div class="col-12">
                 {{ $images->links('vendor.pagination.bootstrap-4')}}
                 </div>
               </div>
      
              @else
               <script type="text/javascript">
                 document.getElementById('side').setAttribute('data-spy', ' ');
               </script>

              <div class="text-center rounded article" align = "center" style = "color: #9c9cab;">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-lower">Nothing to show yet!</span>
                </h2>
              </div>
              <!-- <section class="page-section cta">
                 <div class="container" style="margin-top: 20px; font-family: 'Varela Round', sans-serif;">
                   <div class="row">
                     <div class="col-lg-9 mx-auto">
                       <div class="cta-inner text-center rounded">
                         <h2 class="section-heading mb-4">
                           <span class="section-heading-upper"></span>
                           <span class="section-heading-lower">Nothing to show yet!</span>
                         </h2><br>
                       </div>
                     </div>
                   </div>
                 </div>
               </section>-->
               
              @endif 
          </div><!--col-sm-9-->

          <div class="col-sm-3" id="myScrollspy">
            <div class="menu pmd-floating-action"  role="navigation"> 
              <aside class="rightnavbar">      
                <ul id="side" data-spy="affix" data-offset-top="180">
       
                   <li class="" id="0">
                   <a href="{{ url('/viewbucket') }}" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Add" href="javascript:void(0);"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">All Photos</span>
           	      	<i class="material-icons " style = " font-size: 18px;">dialpad</i> 
           	       </a> </li>
      
                   <li id="1">
           	       <a href="{{ url('/viewbucket?id=1') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[1]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">fastfood</i> 
           	       </a> </li>
      
                   <li id="2">
           	       <a href="{{ url('/viewbucket?id=2') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[2]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">add_road</i> 
           	       </a> </li>
      
                   <li id="3">
           	       <a href="{{ url('/viewbucket?id=3') }}" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[3]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">hiking</i> 
           	       </a> </li>
      
                   <li id="4">
           	       <a href="{{ url('/viewbucket?id=4') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[4]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">whatshot</i> 
           	       </a> </li>
      
                   <li id="5">
           	       <a href="{{ url('/viewbucket?id=5') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[5]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">home_work</i> 
           	       </a> </li>
       
                   <li id="6">
           	       <a href="{{ url('/viewbucket?id=6') }}" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[6]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">color_lens</i> 
           	       </a> </li>
      
                   <li id="7">
           	       <a href="{{ url('/viewbucket?id=7') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[7]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">queue_music</i> 
           	       </a> </li>
      
                   <li id="8">
           	       <a href="{{ url('/viewbucket?id=8') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[8]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">beach_access</i> 
           	       </a> </li>
      
                   <li id="9">
           	       <a href="{{ url('/viewbucket?id=9') }}" class="pmd-floating-action-btn btn  pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[9]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">emoji_events</i> 
           	       </a> </li>
                   
                    <li id="10">
           	       <a href="{{ url('/viewbucket?id=10') }}" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-light" data-title="Cloud Queue"> 
           	      	<span class="pmd-floating-hidden" style="padding-right:10px">{{$buckets[10]}}</span> 
           	      	<i class="material-icons" style = " font-size: 18px;">auto_awesome</i> 
           	       </a> </li>

                </ul>
              </aside>
             </div>
            </div><!--col-sm-3-->

           </div>
          </div>
   </section>
   </section>

<!-- ==============================================
   Modal Section
   =============================================== -->
   <div id="myModal" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
         <span aria-hidden="true">×</span>
         <span class="sr-only">Close</span>
       </button>
       <div class="row">
         
        <div class="col-md-8 modal-image">
          <img class="img-responsive enlargeImageModalSource" src="" alt="Image"/>
        </div><!--/ col-md-8 -->
        <div class="col-md-4 modal-meta">
         <div class="modal-meta-top">
          <div class="img-poster clearfix">
           <a href="" id="profile">
            <img class="img-responsive img-circle" id="image" src="" />
            <strong><span style="font-size: 14px;" id="posted_by"></span></strong>
          </a>
          <span id="created_at"></span><br/>
        </div><!--/ img-poster -->
        <div id="comments"> 
        </div>
        
        <div class="modal-meta-bottom">     
          <span class="thumb-xs">
            @if(!empty(Auth::user()->pro_pic))
            <img class="img-fluid img-circle" src="{{Auth::user()->pro_pic}}" style="width: 35px; height: 35px;" alt="Image">
            @endif       
          </span>
          <div class="comment-body">
            <form class="form" id="form-comment" action="{{ url('/comment') }}" method="post">
              {{csrf_field()}}
              <input id="comment-token" type="hidden" name="_token" value="{{ csrf_token() }}">
              <textarea name="comment" id="textarea" class="form-control input-sm" rows="2" type="text" placeholder="Write your comment..." required></textarea>
              <div align="right">
                <button class="btn" id="submit" style="margin-top: 10px;"><span>Comment</span></button>
              </div>
            </form>
          </div><!--/ comment-body -->        
        </div><!--/ modal-meta-bottom -->

      </div><!--/ modal-meta-top -->
    </div><!--/ col-md-4 -->
    
  </div><!--/ row -->
</div><!--/ modal-body -->

</div><!--/ modal-content -->
</div><!--/ modal-dialog -->
</div><!--/ modal -->
     <!-- ==============================================
   Scripts
   =============================================== -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/base.js') }}"></script>
   <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.js') }}"></script>
   <script>
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

  var instance = M.FloatingActionButton.getInstance(elem);

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left'
    });
  });

</script>
   <script>            
      $('#viewbucket').removeClass('p-2 nav-icon-lg dark-black');
      $('#viewbucket').addClass('p-2 nav-icon-lg mint-green');            
  </script>
  
   <script>
    $('#Slim,#Slim2').slimScroll({
      height:"auto",
      position: 'right',
      railVisible: true,
      alwaysVisible: true,
      size:"8px",
    });   
  </script>
  <script>
    $(document).ready(function() {
      $('.delete').click('.delete', function() {
        var pic = $(this).attr('id');
        var token = $(this).attr('data-token');
        $.ajax({
          url: "{{ url('/bucketdelete') }}",
          type: "POST",
          data: {'pic': pic, '_token': token, },

          success: function(response)
          {

           document.getElementById("img"+pic).innerHTML = "";
           // console.log("img"+pic);
         },
         error: function(data)
         {
          // console.log('Error in likeadd');  
        }
      });
      });
    });
    $('#<?php echo $listid; ?>').addClass('active');
  </script>
<!-- @include('footer') -->
</body>
</html>
@endsection