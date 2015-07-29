<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{{ $title }}</title>

    @include('partials.style')

</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ URL::route('home') }}"><span class='glyphicon glyphicon-book'></span> FLASH XP</a>
        </div>
      </div>
    </div>
    <br /><br /><br />
  @if(Session::has('global'))   
    <div class="container">
      <p>
        <h5 class='this-to-center'>{{ Session::get('global') }}</h5>
      </p>
    </div>
  @endif


@yield('content')    



@include('partials.script')




</body>
</html>