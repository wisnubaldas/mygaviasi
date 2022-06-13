@extends('marello.app',['page'=>'Track & Traces'])
@section('content')
<div class="dark-wrapper">
    <div class="container inner">
      <div class="section-title text-center">
        <h2>Track and Trace your shipment here</h2>
        <br>
        <div class="clearfix"></div>
        <div class="form-field">
          <form>
            <label>
              <input type="text" name="track" placeholder="Track your shipment" required="required">
            <button type="submit" class="btn btn-navy">Search</button>
            </label>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container --> 
  </div>
@endsection
