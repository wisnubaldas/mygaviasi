@extends('marello.app',['page'=>'Home'])
@section('content')
  @include('marello.component.slider')
  @include('marello.component.light')
  
  <div class="dark-wrapper">
    <div class="container inner">
      <p class="lead text-center bm25">Let's make something <em>great</em> together.</p>
      <div class="text-center"> <a href="#" class="btn btn-large fixed-width">View Our Works</a> <a href="#" class="btn btn-large btn-red fixed-width">Get in Touch</a> </div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
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