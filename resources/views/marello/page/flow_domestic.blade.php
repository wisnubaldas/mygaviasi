@extends('marello.app',['page'=>'Flow Domestic'])
@section('content')
 
<div class="dark-wrapper">
    <div class="container inner bp0">
        <h3 class="text-center">Flow Chart Kedatangan Cargo Domestic</h3>
        <div class="text-center">
            @include('marello.component.kedatangan-domestik')
        </div>
    </div>
    <!-- /.container --> 
</div>
<div class="dark-wrapper">
    <div class="container inner bp0">
        <h3 class="text-center">Flow Chart Keberangkatan Cargo Domestic</h3>
        <div class="text-center">
            @include('marello.component.keberangkatan-domestik')
        </div>
    </div>
    <!-- /.container --> 
</div>
@endsection
