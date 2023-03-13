<!DOCTYPE html>
<html lang="en">
    <head>

      <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Trending</title>
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta property="og:title" content="" />
      <meta property="og:url" content="" />
      <meta property="og:description" content="" />  
      <meta name="csrf-token" content="{{ csrf_token() }}">   
      <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif"/>
    
    <!-- ==============================================
    Favicons
    =============================================== --> 
    @extends('navbar')
      <link rel="icon" href="{{ asset('img/logo.jpg') }}">
      <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114.png') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
      <!-- ==============================================
    CSS
    =============================================== -->
        <link type="text/css" href="{{ asset('css/demos/photo.css') }}" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <link type="text/css" href="{{ asset('css/demos/trend.css') }}" rel="stylesheet" />
        
        <style type="text/css">
        
        :root{--primary-color-dark-blue-1: hsl(217, 28%, 15%);
--primary-color-dark-blue-2: hsl(218, 28%, 13%);
--primary-color-dark-blue-3: hsl(216, 53%, 9%);
--primary-color-dark-blue-4: hsl(219, 30%, 18%);}
@import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Nunito&family=Source+Sans+Pro&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Karla&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap');
body{
    /* background-color: #394262 !important; */
    background-color: var(--primary-color-dark-blue-2) !important;
    /* font-family: 'Baloo Bhaijaan 2', cursive !important; */
    
    /* font-family: 'Source Sans Pro', sans-serif !important; */
    /* font-family: 'Nunito', sans-serif !important; */
    /* font-family: 'Neonderthaw', cursive !important; */
    /* font-family: 'Karla', sans-serif !important; */
    /* font-family: 'Balsamiq Sans', cursive !important; */
    font-family: 'IBM Plex Serif', serif;
}
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
          /* background-image: url('img/bg/bgbg.jpg'); */
          background-attachment: fixed;
        }

        @media(max-width: 500px){
          .product-item-img{
              height: 200px !important;
          }
        }   
        .panel-body:not(.two-col) {
              padding: 0px;
          }

          .glyphicon {
              margin-right: 5px;
          }

          .glyphicon-new-window {
              margin-left: 5px;
          }

          .panel-body .radio, .panel-body .checkbox {
              margin-top: 0px;
              margin-bottom: 0px;
          }

          .panel-body .list-group {
              margin-bottom: 0;
          }

          .margin-bottom-none {
              margin-bottom: 0;
          }

          .panel-body .radio label, .panel-body .checkbox label {
              display: block;
          }

          .row{
            margin-left: 0px;

          }

          .cardbox {
           width: 55vw;
          }

          .cardbox-like {
           width: 80%;
           float: none;
           margin: 18px;
          }

          .page-section {
          padding-left: 13vw;
          }

          .cardbox-like ul {
          padding: 0px 0px 10px 0px !important;
          font-size: 0px;
          text-align: -webkit-left;
          }

          .cardbox .cardbox-heading {
    padding: 2%;
    margin: 0;
}

          .modal-image img {
    width: 300px !important;
    height: 300px !important;
}

.status-textarea {
    flex-grow: 1;
    background-color: transparent;
    border: none;
    resize: none;
    margin-top: 15px;
    color: #fff;
    max-width: calc(100% - 10px) !important;
}

.comment-send{
  
}


          @media (min-width: 992px){
.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: none !important;
  }
}
        </style>    
        <!-- ==============================================
    Feauture Detection
    =============================================== --> 
    <script>
  $('.carousel').carousel({
          interval: 2000,
          cycle: true,
          pause: "null"
      })
  </script>
    </head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
 
  
   <!-- ==============================================
   Navbar Second Section
   =============================================== -->
    
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
   News Feed Section
   =============================================== --> 
   @section('main-content')

  <div class="row back"  style="overflow-y:auto;" >

    
    <div class="back">
      @if(count($images)>0)
      @php
      $count= 0;
      @endphp
          <div>
                  @foreach($images as $image)
                  @if(file_exists($image['thumbnail']))
                  <section class="page-section">
                    <div >
                      <div class="product-item">
                        <div class="product-item-title d-flex">
                          <div class="bg-faded p-5 d-flex ml-auto rounded">
                            <h2 class="section-heading mb-0">
                              <!--<span class="section-heading-upper">Blended to Perfection</span>-->
                              @php
                              $name = App\User::where('rollno',$image['rollno'])->get()->toArray();
                              @endphp
                            </h2>
                            <strong></strong>
                          </div>
                        </div>
                        
                        </div>
                      </div>
                      <div>
                          <div >
                            <div class="cardbox" id="img{{$image['id']}}">
                              <div class="cardbox-heading bkg">
                                <!-- START dropdown-->
                                @if($image['rollno'] == Auth::user()->rollno)
                                <div class="dropdown pull-right">
                                  <button class="btn bg-transparent" title="Click to delete!" type="button" data-toggle="dropdown" aria-expanded="false">
                                  <i style="float: right;color: #5C5D71;/* line-height: 63%; */font-size: large;" class="material-icons">delete</i>
                                  </button> 
                                   <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item delete" href="#" id="{{$image['id']}}" data-token="{{csrf_token()}}">Delete</a>
                                  </div> 
                                </div><!--/ dropdown -->
                                @endif
                                <!-- END dropdown-->
                                <div class="media colr m-0">
                                  <div class="d-flex mr-3">
                                    <a href="{{ url('/profile_index/'.$image['rollno']) }}">
                                      @if(!empty($name[0]['pro_pic']))
                                      <img class="img-responsive img-circle" src="{{$name[0]['pro_pic']}}" alt="User">
                                      @else
                                      <img class="img-fluid img-circle pro_pic" src="{{ asset('index.png') }}" style="width: 35px; height: 35px; top:3px;">
                                      @endif
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="{{ url('/profile_index/'.$image['rollno']) }}">
                                      <p class="m-0 colr">{{$name[0]['name']}}</p>
                                    </a>
                                    <small><span style="font-family: 'Abhaya Libre', serif;font-size:17px">{{$image['created_at']->diffForHumans() }}</span></small>
                                  </div>
                                </div><!--/ media -->
                              </div><!--/ cardbox-heading -->
          
                              <div class="row cardbox-item bkg">
                                <div class="col-md-8 full">
                                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0 " src="{{$image['thumbnail']}}" data-src="{{$image['url']}}" id="{{$image['id']}}"  data-toggle="tooltip" data-placement="top" title="Click the image!" style="cursor: pointer; width: 145%;height: 380px;">
                                </div>
                                <div class="vl"></div>
                                <div class="col-md-4  cardbox-like"> 
                                  <textarea readonly rows="3" cols="65" class="no-border status-textarea " style="  font-family: 'Abhaya Libre', serif;font-size : 18px; font-colo margin-left : 1vw;">&nbsp {{$image['caption']}}</textarea><br>

                                  <ul style="top: 6px; position: relative;">
                                  <li>
                                    <div id="+{{$image['id']}}+" style="border-right:1px solid gray;padding-right:10px" class="like"></div>  <!-- Like Button -->
                                  </li>
                                  <li>
                                    <button type="button" class="com btn comment_btn" id="{{$image['id']}}" style="margin-left:-30px;border: none;background:none" value="{{$image['url']}}">
                                      <i class="far fa-comment"></i> View Comments
                                    </button>
                                  </li>
                                </ul>


                                <ul style="top: 6px; position: relative;list-style-type: none">
                                  <!-- <li>
                                    @if(!empty(Auth::user()->pro_pic))
                                    <img class="img-fluid img-circle" src="{{Auth::user()->pro_pic}}" style="width: 30px; height: 30px;margin-top:-40px;" alt="Image">
                                    @else
                                    <img class="img-fluid img-circle" src="{{ asset('index.png') }}" style="width: 25px; height: 25px;margin-top:-40px;" alt="Image">  
                                    @endif
                                  </li> -->
                                  <div class="row comment-send">
                                    <li style="width: 100%;padding: 0px;border-right:none;margin: 0px; display:flex; flex-flow: row;">
                                      <div class="d-flex justify-content-between col-lg-8 col-md-8 col-sm-12 comment-body" style="width=:100%">
                                        <form class="form" id="form-comment" action="{{ url('/comment') }}" method="post">
                                          {{csrf_field()}}
                                          <!-- <ul>
                                            <li > -->
                                                <input id="comment-token" type="hidden" name="_token" value="{{ csrf_token() }}" style="padding-left:20px;padding-right:20px">
                                                <textarea name="comment" id="textarea" class="form-control input-sm" rows="1" type="text" placeholder="Write your comment..." required></textarea>
                                            <!-- </li>
                                            <li>  -->
                                          </form>
                                      </div>
                                      <div class="d-flex justify-content-between col-2 send-body">
                                        <button class="comment_btn" style="height : 100%; margin-right : 15vh;float:left;color:red;border-radius:3px;border:0px solid white;">	<i class="material-icons" id="submit" style = " font-size:28px;color:gray">send</i> </button>
                                      </div>      
                                        <!-- </li>
                                          </ul>   -->
                                    </li>
                                  </div>
                                </ul>
                                <script type="text/javascript"> 
                                  $(document).ready(function () {
                                    var formData = {
                                      'pic_id' : {{$image["id"]}},
                                      '_token': '{!! csrf_token() !!}',
                                    }
                                    $.ajax({
                                      url: "{{ url('/likes') }}",
                                      type: "POST",
                                      data: formData,
                                      success: function(response)
                                      {
                                        document.getElementById('+{{$image['id']}}+').innerHTML = response;
                                      },
                                      error: function(data)
                                      {
                                      }
                                    });
                                  });
                                </script>
          
                              </div>
                              </div><!--/ cardbox-item -->
                                    
                            </div>
                          </div>
                        </div>
                
                </section>
                @endif
                @endforeach
          
                {{ $images->links('vendor.pagination.bootstrap-4')}}
                
                @else
          
                <section class="page-section cta" style="background-color: rgba(76,71,97,0.55);">
                  <div class="container">
                    <div class="row">
                      <div class="col-xl-9 ">
                        <div class="cta-inner text-center rounded">
                          <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"></span>
                            <span class="section-heading-lower">Nothing to show yet</span>
                          </h2>
                          <br>
                        </div>
                      </div>
                    </div>
          
                  </div>
                </section>
                @endif
          </div>   
    </div>
    // <button onclick="topFunction()" id="myBtn" title="Go to top"><i class = "fa fa-chevron-circle-up" style = "font-size : 28px"></i><br><br>Scroll to top!</button>   
  </div>       
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
                @else
                <img class="img-fluid img-circle" src="{{ asset('index.png') }}" style="width: 35px; height: 35px;" alt="Image">  
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
    

  </div>
</div>

     <!-- ==============================================
   Scripts
   =============================================== -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/base.js') }}"></script>
  <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.js') }}"></script>
  
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
    $('#trending').removeClass('p-2 nav-icon-lg dark-black');
    $('#trending').addClass('p-2 nav-icon-lg mint-green');            
  </script>
  <script>
    $('.input-field').children().css({"background-color": "#f4f4f4", "border": "none", "border-radius": "5px", "padding-top": "3px", "padding-left": "5px", "line-height": "33px", "cursor": "text"});
      $(document).ready(function() {
      $('#q1, #q2, #q3, #q4, #q5, #q6, #q7, #q8, #q9, #q10, #q11, #q12, #q13, #q14').autocomplete({
      source: [names]
      });
      });
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
  </script>

  
  <script>
      
    $('.like').click('.like', function() {
      var v = $(this).attr('id');
      var formData = {
        'pic_id' : v.split('+')[1],
        '_token' : $('#comment-token').val()
      }
      // console.log(formData);
      $.ajax({
        url: "{{ url('/likeadd') }}",
        type: "POST",
        data: formData,
        success: function(response)
        {
         document.getElementById(v).innerHTML = response;
         // console.log(response);
       },
       error: function(data)
       {
          // console.log('Error in likeadd');  
        }
      });
    });
    $('.comment_btn').click('.comment_btn', function() {
      $('.enlargeImageModalSource').attr('src', $(this).attr('value'));       
      $('.enlargeImageModalSource').attr('id', $(this).attr('id'));
      $('#myModal').modal('show');
      var formData = {
        'comments' : $('textarea[name=comment]').val(),
        'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      } 
 
      $.ajax({
        url: "{{ url('/commentadd') }}",
        type: "POST",
        data: formData,
        success: function(response)
        {
          document.getElementById("comments").innerHTML = response;
        },
        error: function(data)
        {
        }
      });
      $.ajax({
        url: "{{ url('/getimage') }}",
        type: "POST",
        data: formData,
        success: function(response)
        {
          var image = response;
          document.getElementById('profile').href = "{{url('/profile_index')}}" + '/' + image["rollno"];
          document.getElementById('image').src = image['pic'];
          document.getElementById('posted_by').innerHTML = image["name"];
          document.getElementById('created_at').innerHTML = image["created_at"];
        },
        error: function(data)
        {
        }
      });
    });
    $(function() {
      $('.product-item-img').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $(this).attr('data-src'));
        $('.enlargeImageModalSource').attr('id', $(this).attr('id'));
        $('#myModal').modal('show');
        var formData = {
          'comments' : $('textarea[name=comment]').val(),
          'pic_id' : $('.enlargeImageModalSource').attr('id'),
          '_token' : $('#comment-token').val()
        }
        $.ajax({
          url: "{{ url('/commentadd') }}",
          type: "POST",
          data: formData,
          success: function(response)
          {
            document.getElementById("comments").innerHTML = response;
          },
          error: function(data)
          {
          }
        });
        $.ajax({
          url: "{{ url('/getimage') }}",
          type: "POST",
          data: formData,
          success: function(response)
          {
            var image = response;
            document.getElementById('profile').href = "{{url('/profile_index')}}" + '/' + image["rollno"];
            document.getElementById('image').src = image['pic'];
            document.getElementById('posted_by').innerHTML = image["name"];
            document.getElementById('created_at').innerHTML = image["created_at"];
          },
          error: function(data)
          {
          }
        });
      });
    });
    
    $(document).ready(function (e) {
      $('form#form-comment').on('submit', function(e) {
       e.preventDefault();
       var formData = {
        'comments' : $('textarea[name=comment]').val(),
        'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      }
      // console.log(formData);
      $.ajax({
        url: "{{ url('/comment') }}",
        type: "POST",
        data: formData,
        
        success: function(response)
        {
          // console.log('Added Comments');
          document.getElementById("textarea").value="";
          document.getElementById("comments").innerHTML = response;
        },
        error: function(data)
        {
          // console.log('Error in comment');  
        }
      });
    });
    });
    $(document).ready(function() {
      $('.delete').click('.delete', function() {
        var id = $(this).attr('id');
        var token = $(this).attr('data-token');
        $.ajax({
          url: "{{ url('/delete') }}",
          type: "POST",
          data: {'id': id, '_token': token, },
          success: function(response)
          {
           document.getElementById("img"+id).innerHTML = "";
         },
         error: function(data)
         {
          // console.log('Error in likeadd');  
        }
      });
      });
    });

    
  </script>
  
  @endsection
  </body>
</html>