@extends('marello.app',['page'=>'Flow Domestic'])
@section('content')
 
<div class="dark-wrapper">
    <div class="container inner bp0">
        <div class="section-title text-center">
            <h2>Flow Chart Kedatangan Cargo Domestic</h2>
        </div>
        <div class="text-center">
            @include('marello.component.kedatangan-domestik')
        </div>
    </div>
    <!-- /.container --> 
</div>
<div class="dark-wrapper">
    <div class="container inner bp0">
        <div class="section-title text-center">
            <h2>Flow Chart Keberangkatan Cargo Domestic</h2>
        </div>
        <div class="text-center">
            @include('marello.component.keberangkatan-domestik')
        </div>
    </div>
    <!-- /.container --> 
</div>
@endsection
