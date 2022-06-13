@extends('marello.app',['page'=>'Gallery'])
@section('content')
<div class="light-wrapper">
  <div class="container inner">
    <div class="divide25"></div>
    <div class="portfolio-grid col4">
      <div class="isotope-filter button-group">
        <ul>
          <li><a class="button is-checked" data-filter="*">All</a></li>
          <li><a class="button" data-filter=".export">Export</a></li>
          <li><a class="button" data-filter=".import">Import</a></li>
          <li><a class="button" data-filter=".ramp">Ramp</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="items-wrapper">
        <div class="isotope items light-gallery">
          @foreach ($galery as $item)
            <div class="item post {{$item['grp']}}">
              <figure>
                <a class="lgitem" href="/style/images/galery/{{$item['img_f']}}" data-sub-html="#caption{{$item['id']}}">
                <div class="overlay">
                  <div class="info"><span>{{$item['title']}}</span></div>
                </div>
                <!-- /.overlay -->
                <div id="caption{{$item['id']}}" class="hidden">
                  <h3>{{$item['head']}}</h3>
                  <p>{{$item['desc']}}</p>
                </div>
                <!-- /.hidden --> 
                <img src="/style/images/galery/{{$item['img']}}" alt="" /></a>
              </figure>
            </div>
          @endforeach
          <!-- /.post -->
        </div>
        <!--/.isotope --> 
      </div>
      <!--/.items-wrapper --> 
      
    </div>
    <!--/.portfolio-grid --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.light-wrapper -->
@endsection
