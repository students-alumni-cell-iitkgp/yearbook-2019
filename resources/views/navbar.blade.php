<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/autocomplete.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/autocomplete.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
{{-- <style type="text/css">
	
	.navbar{
		width : 100%;
		z-index : 1;
	}
<header class="tr-header">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header" style='height:90px;'>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://sac.iitkgp.ac.in/index.php"><img src="{{ asset('img/navbar/SACLogo.png') }}" width="230px" height="105px" style="margin-top:-23px;" /></a>
			</div><!-- /.navbar-header -->
			<div class="navbar-left">
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
					</ul>
				</div>
			</div><!-- /.navbar-left -->
			<div class="navbar-right" style = "margin-top : 2vh">                          
				<ul class="nav navbar-nav">
					<li>
						<div class="search-dashboard">
							<form action="{{ url('/search') }}" method="POST" class="form-inline">
								{{ csrf_field() }}
								<input placeholder=" Search Your Friend Here..." type="text" name="search" required="required" id="search" style="background: none; border: none; padding-top: 3px; padding-left: 20px; line-height: 40px; cursor: text; font-size: 14px;">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>              
					</li>
					<li class="">
						<a class="text-uppercase text-expanded" href="{{ url('/home') }}" style='top:4px'>Home
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<li>
						<a class="text-uppercase text-expanded" href="{{ url('/trending') }}"  data-step="6" data-intro="<center> See the most popular photos of Kgpians </center> " style='top:4px'>Trending</a>
					</li>

					<li class="dropdown" style = "top:4px">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Itch List
						</a>
						<ul class="dropdown-menu" style = "width : 50%; padding-left : 10px">
						<li><a href="{{ url('/bucket') }}">Fill Itch List</a></li><br>
						<li><a href="{{ url('/viewbucket') }}">View Itch List</a></li>
						</ul>
					</li>

				    <li>
						<a class="test" href="#" data-toggle="modal" data-target="#modal_test" style='top:4px'>
							Testimonials
						</a>
					</li>

					<li class="dropdown notification-list">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="notification" role="button"
						aria-haspopup="false" aria-expanded="false">
						@if(count($notifications) || count($comment_notification))
						<i class="fa fa-bell noti-icon"></i>
						<span class="badge badge-danger badge-pill noti-icon-badge">
							{{count($notifications) + count($comment_notification)}}
						</span>
						@else
						<i class="fa fa-bell noti-icon"></i>
						@endif
						</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg notificationModal">

						<div class="dropdown-item noti-title">
							<h6 class="m-0">
								<span class="pull-right">
									<a href="{{ url('/readall') }}" class="text-dark">
										<small>Clear All</small>
									</a> 
								</span>
								<span style="color: #000;">Notifications({{count($notifications) + count($comment_notification)}})</span> 
							</h6>
						</div>

						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
							<div class="slimscroll" style="max-height: 300px; overflow: hidden; width: auto; height: 416.983px;">
								<div id="Slim">
									@if(count($comment_notification))
									@foreach($comment_notification as $notification)
									@php
									$url = App\Image::where('id', $notification['pic_id'])->value('url');
									@endphp
									<button class="dropdown-item notify-item comment_notification" id="{{$notification['pic_id']}}" value="{{$url}}">
										@php
										$commentedBy = App\User::where('id', $notification['user_id'])->pluck('name');
										$pic = App\User::where('id', $notification['user_id'])->pluck('pro_pic');
										@endphp
										<div class="notify-icon">
											<img src="../{{$pic[0]}}" class="img-responsive img-circle" style="width: 35px; height: 35px">
										</div>
										<p class="notify-details" style="font-family: Verdana">
											<strong>{{$commentedBy[0]}}</strong> commented on your post: <br>
											<span>&nbsp"{{$notification['comments']}}"</span>
											<small class="text-muted">{{$notification['created_at']->diffForHumans()}}</small>
										</p>
									</button><!--/ dropdown-item-->
									@endforeach
									@endif
									@if(count($notifications))
									@foreach($notifications as $notification)
									<a href="{{ url('/read/'.$notification['id']) }}" class="dropdown-item notify-item">
										@php
										@endphp
										<div class="notify-icon">
											<img src="{{ asset('index.png') }}" class="img-responsive img-circle" style="width: 35px; height: 35px">
										</div>
										<p class="notify-details" style="font-family: Verdana">
											<strong>{{$notification['user']}}</strong> wrote :<br>
											<span>&nbsp"{{$notification['views']}}"</span>
											<small class="text-muted">{{$notification['created_at']->diffForHumans()}}</small>
										</p>
									</a><!--/ dropdown-item-->
									@endforeach
									@endif

									@if(count($notifications) + count($comment_notification) == 0)
									<div class="notify-details" align="center">No New Notifications!</div>
									@endif

								</div><!--/ .Slim-->
								<div class="slimScrollBar" style="background: rgb(158, 165, 171); none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
							</div><!--/ .slimscroll-->
						</div><!--/ .slimScrollDiv-->
						<div class="dropdown-item text-center" style="height: 30px; background-color: #f4f4f4;">

						</div><!-- All-->
					</div><!--/ dropdown-menu-->
				</li>


				<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="fa fa-cog"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg" style="width: 100px; height:70.983px; left:-160px;">     
						<!-- <div class="dropdown-item noti-title">
							<h6 class="m-0">
								<span class="pull-right">
									<a href="#" class="text-dark"></a> 
								</span>Settings
							</h6>
						</div> -->

						<div style="height: 35px;">
							<a class="dropdown-item " href="{{ url('/details') }}"><p style="font-family: 'Abhaya Libre', serif;">Edit Details</p></a>
						</div>
						<div >
							<a class="dropdown-item " href="{{ url('/logout') }}"><p style="font-family: 'Abhaya Libre', serif;">Logout</p> </a>
						</div>

					</div><!--/ dropdown-menu-->
				</li>  
				<li class="dropdown mega-avatar">  
					<a href="{{ url('/profile_index') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
						<span class="avatar w-32">                  
							@if(!empty(Auth::user()->pro_pic))
							<img class="img-fluid img-circle pro_pic" src="{{Auth::user()->thumbnail}}" style="width: 35px; height: 35px; top:3px;">
							@else
							<img class="img-fluid img-circle pro_pic" src="{{ asset('index.png') }}" style="width: 35px; height: 35px; top:3px;">
							@endif
						</span>
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs">
							&nbsp{{Auth::user()->name}}
						</span>
					</a>
					
				</li><!-- /navbar-item `--> 

			</ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
	</div><!-- /.container -->
</nav><!-- /.navbar -->

</header> --}}

    <div id="modal_test" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<center><h4 class="modal-title text-uppercase" style="color: #000">Write Testimonials</h4></center>
    			</div>
    			<div class="modal-body" style='top:10px;'><center>
    				<div class="search-dashboard" >
    					<form action="{{ url('/search') }}" method="POST" class="form-inline">
    						{{ csrf_field() }}
    						<input class="test-search" placeholder=" Search Your Friend Here..." type="text" name="search" required="required" id="search1" style="background: none; border: 1px solid; border-radius: 5px; padding-top: 3px; padding-left: 10px; line-height: 40px; cursor: text; font-size: 14px;">
    						<input type="submit" value="Search" class="kafe-btn kafe-btn-mint testi-btn" style=" color: #fff"></input>
    					</form>
    				</div></center>
    			</div>
    			<div class="modal-footer">
    			</div>
    		</div>
    	</div>
    </div>


  <div class="container1" x-data="{ rightSide: false, leftSide: false }">
	<div class="left-side" :class="{'active' : leftSide}">
	  <div class="left-side-button" onclick="drawer()" @click="leftSide = !leftSide">
		<svg class="drawer-logo" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
		<svg class="drawer-logo" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
		  <path d="M19 12H5M12 19l-7-7 7-7"/>
		</svg>
	  </div>
	  <div class="logo">YEARBOOK</div>
	  <div class="side-wrapper">
		<div class="side-title">MENU</div>
		<div class="side-menu">
		  <a href="{{ url('/home') }}">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			  <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
			  <path d="M9 22V12h6v10" />
			</svg>
			Home
		  </a>
		  <a href="{{ url('/trending') }}">
			<i class="fas fa-fire"></i>&nbsp;&nbsp;&nbsp;&nbsp;
			Trending
		  </a>
		  <a href="{{ url('/bucket') }}">
			<i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;&nbsp;&nbsp;
			Fill Itch List
		  </a>
		  <a href="{{ url('/viewbucket') }}">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
			  <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
			</svg>
			View Itch List
		  </a>
		  <a class="test" href="{{ url('/testimonial') }}" data-toggle="modal" data-target="#modal_test">
			<i class="far fa-comments"></i>&nbsp;&nbsp;
			Testimonial
		  </a>
		</div>
	  </div>
	  <a href="https://www.facebook.com/iitkgp.alumnicell/" class="follow-me" target="_blank">
		<span class="follow-text">
		<i class="fab fa-facebook-f"></i>&nbsp;&nbsp;
		  Follow us on Facebook
	   </span>
		<span class="developer">
		  <img src="https://scontent.fdel29-1.fna.fbcdn.net/v/t1.6435-9/43544733_2403344159705803_7519063889212866560_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=ku-ciCiyDw0AX9ErU8R&_nc_ht=scontent.fdel29-1.fna&oh=00_AT90sxGPoRTL9Q0VAIVBR-_ic9tZrDZ8TWDebdFNsTvn0A&oe=621DFB37" />
		  Student's Alumni Cell
		</span>
	  </a>
	</div>
	<div class="main">
	  <div class="search-bar">
		<form class="search-nav" action="{{ url('/search') }}" method="POST">
			{{ csrf_field() }}
			<input type="text" placeholder=" Search Your Friend Here..." name = "search" id="search">
			<input type="submit" value="Search" class="kafe-btn kafe-btn-mint" style="display: none;">
		</form>
		<div class="account">
			<ul class="nav navbar-nav" style="font-family: 'DM Sans', sans-serif;">
		  		<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="notification" role="button"
						aria-haspopup="false" aria-expanded="false">
						@if(count($notifications) || count($comment_notification))
						<i class="fa fa-bell noti-icon"></i>
						<span class="badge badge-danger badge-pill noti-icon-badge">
							{{count($notifications) + count($comment_notification)}}
						</span>
						@else
						<i class="fa fa-bell noti-icon"></i>
						@endif
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg notificationModal" style="position:absolute;top:0px">

						<div class="dropdown-item noti-title">
							<h6 class="m-0">
								<span class="pull-right">
									<a href="{{ url('/readall') }}" class="text-dark" style="font-family: 'DM Sans', sans-serif;">
										<small>Clear All</small>
									</a> 
								</span>
								<span style="font-family: 'DM Sans', sans-serif; color: #000;">Notifications({{count($notifications) + count($comment_notification)}})</span> 
							</h6>
						</div>

						<div class="slimScrollDiv" style="z-index: 6;position: relative; overflow: hidden; width: auto; height: 416.983px;">
							<div class="slimscroll" style="max-height: 300px; overflow: hidden; width: auto; height: 416.983px;">
								<div id="Slim">
									@if(count($comment_notification))
									@foreach($comment_notification as $notification)
									@php
									$url = App\Image::where('id', $notification['pic_id'])->value('url');
									@endphp
									<button class="dropdown-item notify-item comment_notification" id="{{$notification['pic_id']}}" value="{{$url}}">
										@php
										$commentedBy = App\User::where('id', $notification['user_id'])->pluck('name');
										$pic = App\User::where('id', $notification['user_id'])->pluck('pro_pic');
										@endphp
										<div class="notify-icon">
											<img src="../{{$pic[0]}}" class="img-responsive img-circle" style="width: 35px; height: 35px">
										</div>
										<p class="notify-details" style="font-family: 'DM Sans', sans-serif;">
											<strong>{{$commentedBy[0]}}</strong> commented on your post: <br>
											<span>&nbsp"{{$notification['comments']}}"</span>
											<small class="text-muted">{{$notification['created_at']->diffForHumans()}}</small>
										</p>
									</button><!--/ dropdown-item-->
									@endforeach
									@endif
									@if(count($notifications))
									@foreach($notifications as $notification)
									<a href="{{ url('/read/'.$notification['id']) }}" class="dropdown-item notify-item">
										@php
										@endphp
										<div class="notify-icon">
											<img src="{{ asset('index.png') }}" class="img-responsive img-circle" style="width: 35px; height: 35px">
										</div>
										<p class="notify-details" style="font-family: 'DM Sans', sans-serif;">
											<strong>{{$notification['user']}}</strong> wrote :<br>
											<span>&nbsp"{{$notification['views']}}"</span>
											<small class="text-muted">{{$notification['created_at']->diffForHumans()}}</small>
										</p>
									</a><!--/ dropdown-item-->
									@endforeach
									@endif

									@if(count($notifications) + count($comment_notification) == 0)
									<div class="notify-details" align="center">No New Notifications!</div>
									@endif

								</div><!--/ .Slim-->
								<div class="slimScrollBar" style="background: rgb(158, 165, 171); none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 8px; height: 100%; position: relative; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
							</div><!--/ .slimscroll-->
						</div><!--/ .slimScrollDiv-->
						<div class="dropdown-item text-center" style="height: 30px; background-color: #f4f4f4;">

						</div><!-- All-->
					</div><!--/ dropdown-menu-->
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="dropdown notification-list">
					<a class="account-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <span class="hiddenName"> {{Auth::user()->name}} </span> 
						@if(!empty(Auth::user()->pro_pic))
						<img src="{{Auth::user()->thumbnail}}" alt="" class="account-profile" alt="">
						@else
						<img src="{{ asset('index.png') }}" alt="" class="account-profile" alt="">
						@endif
						
						<span>▼</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg" style=" position:absolute; top:0px;width: 100px;  left:0px;">     
						<div style="height: 35px;">
							<a class="dropdown-item " href="{{ url('/profile_index') }}"><p style="font-family: 'DM Sans', sans-serif;">Profile</p> </a>
						</div>
						<div style="height: 35px;">
							<a class="dropdown-item " href="{{ url('/details') }}"><p style="font-family: 'DM Sans', sans-serif;">Edit Details</p></a>
						</div >
						<div style="height: 35px;">
							<a class="dropdown-item " href="{{ url('/logout') }}"><p style="font-family: 'DM Sans', sans-serif;">Logout</p> </a>
						</div>
						

					</div><!--/ dropdown-menu-->
				</li> 
			</ul>
		</div>
	  </div>
	  @yield('main-content')
	</div>
  </div>
</div>
  @include('footer')
  

<script>

	var state = 0;
	function drawer(){
		if(state==0){
			document.getElementsByClassName("side-wrapper")[0].style.opacity = 1;
			document.getElementsByClassName("follow-me")[0].style.opacity = 1;
			document.getElementsByClassName("left-side")[0].style.width = "260px";
			document.getElementsByClassName("logo")[0].style.writingMode = "horizontal-tb";
			document.getElementsByClassName("logo")[0].style.display = "block";
			document.getElementsByClassName("logo")[0].style.transform = "rotate(0deg)";
			document.getElementsByClassName("logo")[0].style.marginTop = "0px";
			document.getElementsByClassName("drawer-logo")[0].style.opacity = 0;
			document.getElementsByClassName("drawer-logo")[1].style.opacity = 1;
			state = 1;
		}
		else{
			document.getElementsByClassName("side-wrapper")[0].style.opacity = 0;
			document.getElementsByClassName("follow-me")[0].style.opacity = 0;
			document.getElementsByClassName("left-side")[0].style.width = "56px";
			document.getElementsByClassName("logo")[0].style.writingMode = "vertical-lr";
			document.getElementsByClassName("logo")[0].style.display = "flex";
			document.getElementsByClassName("logo")[0].style.transform = "rotate(180deg)";
			document.getElementsByClassName("logo")[0].style.marginTop = "-10px";
			document.getElementsByClassName("drawer-logo")[0].style.opacity = 1;
			document.getElementsByClassName("drawer-logo")[1].style.opacity = 0;
			state = 0;
		}
		
	}


	window.addEventListener('resize', function(){
		if(screen.width >= 930){
			document.getElementsByClassName("side-wrapper")[0].style.opacity = 1;
			document.getElementsByClassName("follow-me")[0].style.opacity = 1;
			document.getElementsByClassName("left-side")[0].style.width = "260px";
			document.getElementsByClassName("logo")[0].style.writingMode = "horizontal-tb";
			document.getElementsByClassName("logo")[0].style.display = "block";
			document.getElementsByClassName("logo")[0].style.transform = "rotate(0deg)";
			document.getElementsByClassName("logo")[0].style.marginTop = "0px";
			document.getElementsByClassName("drawer-logo")[0].style.opacity = 0;
			document.getElementsByClassName("drawer-logo")[1].style.opacity = 1;
		}
		
	});

	$('.comment_notification').on('click', function() {
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
        document.getElementById('profile').href = "{{ url('/profile_index/') }}" + '/' + image["rollno"];
        document.getElementById('image').src = image["pic"];
        document.getElementById('posted_by').innerHTML = image["name"];
        document.getElementById('created_at').innerHTML = image["created_at"];
      },
      error: function(data)
      {

      }
    });
  });

	var user = <?php echo $user;?>;
      // console.log(user[0].name);
      var names = [];
      for (var i = 0; i < user.length; i++) {
      	names[i] = user[i].name + ' | ' + user[i].rollno;
      }
      // console.log('names',names);

      $(document).ready(function() {
      	$('#search').autocomplete({
      		source: [names]
      	}); 
      	$('#search1').autocomplete({
      		source: [names]
      	});  
      });
      $(function () {
      	$('[data-toggle="tooltip"]').tooltip()
      });
    </script>