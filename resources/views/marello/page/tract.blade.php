@extends('marello.app',['page'=>'Track & Traces'])
@section('content')
<div class="dark-wrapper">
    <div class="container inner">
      <div class="section-title text-center">
        <h2>Track and Trace your shipment here</h2>
        <br>
        <div class="clearfix"></div>
        <div class="form-field col-md-6 col-md-offset-3">
          <form class="searchform" action="/{{URI['landing']}}/track" method="POST">
            @csrf
            <input type="text" name="track" placeholder="Track your shipment" required="required" onfocus="this.value=''" onblur="this.value='Search something'">
            <button type="submit" class="btn btn-default">Find</button>
          </form>
          
        </div>
      </div>
    </div>
    <!-- /.container --> 
  </div>
  @if ($dataTrack)
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="col-md-6 col-md-offset-3">
        <table class="table">
          <thead>
             <tr>
                <th>#</th>
                <th>Column heading</th>
                <th>Column heading</th>
                <th>Column heading</th>
             </tr>
          </thead>
          <tbody>
             <tr class="success">
                <th scope="row">3</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
             </tr>
             <tr>
                <th scope="row">4</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
             </tr>
             
          </tbody>
       </table> 
      </div>
    </div>
</div>
  @endif
  
@endsection
