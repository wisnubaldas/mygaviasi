<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- preloader css -->
    <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" /> 
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center mb-4">
                
                <div class="flex-grow-1">
                    <h5 class="font-size-14 mb-0">MyGaviasi</h5>
                    <small class="text-muted">zamzam.r@mygaviasi.com</small>
                </div>
            </div>

            <h4 class="font-size-16">This Week's Top Stories</h4>
            <p><strong>Subject: FSU...</strong></p>
            @foreach ($data as $item)
                {{$item}}<br>
            @endforeach
            <hr>
            </div>
        </div>
</body>
</html>