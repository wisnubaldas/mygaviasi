<div class="navbar navbar-default default extended centered" role="navigation">
    <div class="container">
      <div class="navbar-header" style="padding-top:10px; padding-bottom:10px;">
        <div class="social-wrapper text-left">
          <ul class="social">
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
            <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
          </ul>
          <!--/.social --> 
        </div>
        <!--/.social-wrapper -->
        <div class="navbar-brand text-center" style="padding: 0px;">
            <a href="/">
                <img src="#" srcset="/style/images/logo.png 1x, /style/images/logo.png 1x" alt="" />
            </a>
        </div>
        <ul class="info text-right">
          <li><i class="ion-android-mail"></i><a href="mailto:hello@email.com" class="email-link">zamzam.r@mygaviasi.com</a></li>
          <li><i class="ion-headphone"></i>+6281380756370</li>
        </ul>
        <!-- /.info -->
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner --> 
        </div>
        <!-- /.nav-bars-wrapper --> 
      </div>
      <!-- /.nav-header --> 
    </div>
    <!--/.container -->
    <div class="navbar-collapse collapse">
      <div class="container">
        <ul class="nav navbar-nav">
            @foreach ($landingMenu as $item)
                @if($item['children'])
                    <li><a href="#!">{{$item['name']}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach ($item['children'] as $i)
                                <li><a href="{{$i['link']}}">{{$i['name']}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                @endif
            @endforeach
        </ul>
      </div>
      <!--/.container --> 
    </div>
    <!--/.nav-collapse --> 
    
  </div>
  <!--/.navbar -->