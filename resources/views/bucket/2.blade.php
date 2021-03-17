<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 4)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
    <h1>BONFIRE</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>When the nights turn</h2><br> 
      <h2> golden.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/4')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
    <h1>BONFIRE</h1>
      <h2>When the nights turn</h2><br> 
      <h2> golden.</h2> 
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/4')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 5)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
    <h1>HALL DAYS</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>when we spend the days </h2><br> 
      <h2>counting for the hall day.</h2> 
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/5')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
    <h1>HALL DAYS</h1>
      <h2>when we spend the days </h2><br> 
      <h2>counting for the hall day.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/5')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 6)->get()->toArray() ;
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>HOLI</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>colours make u look</h2><br> 
      <h2>beautiful.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/6')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>HOLI</h1>
      <h2>colours make u look</h2><br> 
      <h2>beautiful.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/6')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>