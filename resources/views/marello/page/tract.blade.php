@extends('marello.app',['page'=>'Track & Traces'])
@section('content')
<div class="light-wrapper">
    <div class="container inner">
      <div class="section-title text-center">
        <h2>Track and Trace your shipment here</h2>
        <br>
        <div class="clearfix"></div>
          <div class="col-sm-6 col-md-offset-3">
            <ul id="tab1" class="nav nav-tabs hidden-sm hidden-xs">
               <li class="active"><a href="#tab1-1" data-toggle="tab" aria-expanded="false">EXPORT</a></li>
               <li class=""><a href="#tab1-2" data-toggle="tab" aria-expanded="true">IMPORT</a></li>
            </ul>
            <div class="panel-group visible-sm visible-xs" id="tab1-accordion"></div>
            <div id="myTabContent" class="tab-content hidden-sm hidden-xs">
               <div class="tab-pane fade active in" id="tab1-1">
                  <form class="searchform" action="/{{URI['admin']}}/getTrackExport" method="POST">
                    @csrf
                    <input type="text" name="track" placeholder="Track your shipment" required="required" autocomplete="off">
                    <button type="submit" class="btn btn-default">Find Export Shipment</button>
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
               <div class="tab-pane fade " id="tab1-2">
                  <form class="searchform" action="/{{URI['admin']}}/getTrackImport" method="POST">
                    @csrf
                    <input type="text" name="track" placeholder="Track your shipment" required="required" autocomplete="off">
                    <button type="submit" class="btn btn-default">Find Import Shipment</button>
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
            </div>
         </div> 
      </div>
    </div>
</div>

  
@endsection
@section('scripts')
{!! NoCaptcha::renderJs() !!}
@endsection