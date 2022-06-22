@extends('marello.app',['page'=>'Track & Traces'])
@section('content')

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title">
            <h2>Track Result</h2>
        </div>
        <div class="col-md-12">
            @if ($track)
                <div class="jumbotron">
                    <h2>{{$track->shipper}}</h2>
                    <table class="table table-hover">
                        <thead>
                          <tr class="success">
                            <th>AWB</th>
                            <th>FLIGHT</th>
                            <th>DATE</th>
                            <th>REMARK</th>
                            <th>KOLLY</th>
                            <th>WEIGHT</th>
                            <th>BTB</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$track->awb}}</td>
                            <td>{{$track->flight}}</td>
                            <td>{{date('d-m-Y',strtotime($track->track_date))}}</td>
                            <td>{{$track->remarks}}</td>
                            <td>{{$track->kolly}}</td>
                            <td>{{$track->weight}}</td>
                            <td>{{$track->btb}}</td>
                          </tr>
                        </tbody>
                      </table>
                        <a class="btn btn-lg btn-primary" href="/{{URI['landing']}}/track" role="button">Back to Track »</a>
                </div>
            @else
                <div class="alert alert-danger"> 
                    <strong>Sorry...</strong> Tracking data not found... go <a href="/{{URI['landing']}}/track">back to track</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! NoCaptcha::renderJs() !!}
@endsection