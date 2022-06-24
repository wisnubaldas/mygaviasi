<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
    <!-- preloader css -->
    <link rel="stylesheet" href="{{asset('/assets/css/preloader.min.css')}}" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" /> 
</head>
<body>
    <div class="card">
        <div class="btn-toolbar p-3" role="toolbar">
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary
                    waves-light waves-effect"><i class="fa
                        fa-inbox"></i></button>
                <button type="button" class="btn btn-primary
                    waves-light waves-effect"><i class="fa
                        fa-exclamation-circle"></i></button>
                <button type="button" class="btn btn-primary
                    waves-light waves-effect"><i class="far
                        fa-trash-alt"></i></button>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary
                    waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-folder"></i> <i class="mdi
                        mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team
                        Manage</a>
                </div>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary
                    waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-tag"></i> <i class="mdi
                        mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team
                        Manage</a>
                </div>
            </div>

            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary
                    waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    More <i class="mdi mdi-dots-vertical ms-2"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mark as
                        Unread</a>
                    <a class="dropdown-item" href="#">Mark as
                        Important</a>
                    <a class="dropdown-item" href="#">Add to
                        Tasks</a>
                    <a class="dropdown-item" href="#">Add Star</a>
                    <a class="dropdown-item" href="#">Mute</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="d-flex align-items-center mb-4">
                <div class="flex-shrink-0 me-3">
                    <img class="rounded-circle avatar-sm" src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image">
                </div>
                <div class="flex-grow-1">
                    <h5 class="font-size-14 mb-0">Humberto D.
                        Champion</h5>
                    <small class="text-muted">support@domain.com</small>
                </div>
            </div>

            <h4 class="font-size-16">This Week's Top Stories</h4>
            <p><strong>Subject: FSU....NSNSNSNSSN</strong></p>
            <p>Haloooo.....</p>
            @foreach ($data as $item)
                <p>{{$item}}</p>
            @endforeach
            <hr>

                <div class="row">
                    <div class="col-xl-2 col-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg" alt="Card image cap">
                            <div class="py-2 text-center">
                                <a href="javascript: void(0);" class="fw-medium">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                            <div class="py-2 text-center">
                                <a href="javascript: void(0);" class="fw-medium">Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="javascript: void(0);" class="btn
                    btn-secondary waves-effect mt-4"><i class="mdi mdi-reply me-1"></i> Reply</a>
            </div>

        </div>
</body>
</html>