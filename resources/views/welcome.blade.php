@extends('marello.app',['page'=>'Home'])
@section('content')
@include('marello.component.slider')
<style>
  .clients img:hover {
    -webkit-filter: grayscale(80%); /* Safari 6.0 - 9.0 */
    filter: grayscale(80%);
  }
</style>
<div class="dark-wrapper">
  <div class="container inner2">
    <div class="carousel-wrapper">
      <div class="carousel clients">
        <div class="item"> <img src="style/images/art/z1.png" alt="" /> </div>
        <div class="item"> <img src="style/images/art/z2.png" alt="" /> </div>
        <div class="item"> <img src="style/images/art/z3.png" alt="" /> </div>
        <div class="item"> <img src="style/images/art/z4.png" alt="" /> </div>
        <div class="item"> <img src="style/images/art/z5.png" alt="" /> </div>
        <div class="item"> <img src="style/images/art/z6.png" alt="" /> </div>
      </div>
      <!--/.carousel --> 
    </div>
    <!--/.carousel-wrapper --> 
    
  </div>
  <!--/.container --> 
</div>
<!--/.dark-wrapper -->
  @include('marello.component.light')
  
  
  
  <div class="parallax xs-center" data-parallax-img="style/images/art/parallax2.jpg" data-parallax-img-width="1920" data-parallax-img-height="1123">
    <div class="container inner">
      <div class="row">
        <div class="col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-6 col-xs-12">
          <h1>Please ask a question for more</h1>
          <p class="lead">we will serve you further</p>
          <a href="#" class="btn btn-large btn-border dark"><i class="ion-android-mail"></i>Ask a Question</a> </div>
        <!-- /column --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.parallax -->

  <!-- /.light-wrapper --> 
@endsection