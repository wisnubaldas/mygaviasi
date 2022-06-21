@extends('marello.app',['page'=>'Track & Traces'])
@section('content')
<div class="light-wrapper" style="min-height: 700px;">
    <div class="container inner">
      <div class="section-title text-center">
        <h2>Track and Trace your shipment here</h2>
        <br>
        <div class="clearfix"></div>
          <div class="form-field col-md-6 col-md-offset-3">
            <form class="searchform" action="/{{URI['admin']}}/getTrack" method="POST">
              @csrf
              <input type="text" name="track" placeholder="Track your shipment" required="required" autocomplete="off">
              <button type="submit" class="btn btn-default">Find</button>
              <br /><br />
              {!! NoCaptcha::display() !!}
            </form>
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          </div>
          <br/><br/><br/><br/>
          <div style="padding-top: 50px;"></div>
          @if ($track = Session::get('dataTrack'))
            <div class="col-md-6 col-md-offset-3 text-left well well-small">
                <h3>Shipper <em>{{$track->shipper}}</em></h3>
                <h3>
                  <ul>
                    <li>AWB <em>{{$track->awb}}</em></li>
                    <li>Flight <em>{{explode('/',$track->flight_date)[0]}}</em></li>
                    <li>Date <em>{{explode('/',$track->flight_date)[1]}}</em></li>
                    <li>Kolly <em>{{$track->kolly}}</em></li>
                    <li>Weight <em>{{$track->weight}}</em></li>
                    <li>BTB <em>{{$track->btb}}</em></li>
                    <li>Remark <em>{{$track->remarks}}</em></li>
                  </ul>
                </h3>
            </div>
          @endif
      </div>
    </div>
</div>

  
@endsection
@section('scripts')
{!! NoCaptcha::renderJs() !!}
@endsection