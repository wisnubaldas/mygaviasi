<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="/favicon_io/favicon.ico">
<title>Gaviasi | {{$page ?? ''}}</title>
<link rel="stylesheet" type="text/css" href="/style/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/style/css/plugins.css">
<link rel="stylesheet" type="text/css" href="/style/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="/style/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="/style/revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="/style/css/color/navy.css">
<link rel="stylesheet" type="text/css" href="/style/type/icons.css">
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900,300,200,100' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="box-layout">

<div class="content-wrapper">
  @include('marello.navbar')
  @yield('content')
</div>
<!-- /.content-wrapper -->

@include('marello.footer')
<script type="text/javascript" src="/style/js/jquery.min.js"></script> 
<script type="text/javascript" src="/style/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script> 
<script type="text/javascript" src="/style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script> 
<script type="text/javascript" src="/style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="/style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="/style/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="/style/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="/style/revolution/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript" src="/style/js/plugins.js"></script> 
<script type="text/javascript" src="/style/js/scripts.js"></script>
</body>
</html>