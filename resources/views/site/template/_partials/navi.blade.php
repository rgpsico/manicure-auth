<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Classified Plus</title>
<link rel="stylesheet" href="{{url("assets/site/css/font-awesome.min.css")}}" />
<link href="{{url("assets/site/css/style.css")}}" rel="stylesheet">
<link rel="stylesheet" href="{{url("assets/site/css/owlcarousel/owl.carousel.min.css")}}" />
<link rel="stylesheet" href="{{url("assets/site/css/owlcarousel/owl.theme.default.min.css")}}" />
</head>
<body>
<div class="topbar"> 
  <!-- Header  -->
  <div class="header">
    <div class="container po-relative">
      <nav class="navbar navbar-expand-lg hover-dropdown header-nav-bar"> 
          <a href="/" class="navbar-brand">
              <img src="{{url("assets/site/images/logo.png")}}" alt="Classified Plus"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="h5-info">
          <ul class="navbar-nav">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false"> Home </a>
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
         
              </ul>
        
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
              </ul>
            </li>

              </ul>
            </li>
          </ul>
          <div class="header_r d-flex">
            <div class="loin"> 
                <a class="nav-link" href="/register"  >
                  @if(!auth()->user())
                <i class="fa fa-user m-r-5"></i>Registrar</a>  </div>
                 @else
                <i class="fa fa-user m-r-5"></i>Admin</a>  </div>
                @endif
            <ul class="ml-auto post_ad">

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>