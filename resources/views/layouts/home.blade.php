<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Talugtug Water District</title>

    @include('partials.style')

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">TWD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">News</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Frontline Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/payment">Payment of Water Bills</a></li>
            <li><a href="/sca">Service Connection Application</a></li>
            <li><a href="/rtsd">Request for Temporary Service Disconnection</a></li>
            <li><a href="/rsr">Request for  Service Reconnection</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/other">Other Services</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/inquiry">Inquiries</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">About us</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/mission">Mission</a></li>
            <li><a href="/vision">Vision</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="/performance">Performance Pledge</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  
  <!-- banner -->
  <div class="header-bottom section" id="section-1">
      <div class='spacer3 visible-xs'></div>
      <div class="wrap">
          <div class="img-banner">

              <div class="img-banner-pic">
                  <img src="images/clear.png" alt="" />
              </div>
                  
              <div class="img-banner-info">
                <h1 class='this-to-left'>Talugtug Water District</h1>                
              </div>

              <div class="clear"> </div>
          </div>
      </div>
  </div>   
  <!-- end of banner -->


@yield('content')    


@include('partials.script')

@include('partials.footer')


</body>
</html>