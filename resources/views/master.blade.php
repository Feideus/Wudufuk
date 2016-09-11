
<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}"/>
    <title>Wudufuk</title>
    @yield('head')
  </head>
  <body>
    <header>
      <div class="titles">
	<h2>WuDuFuk</h2>
      </div>
      <div>
	@yield('header')
      </div>
    </header>
    <div class="content">
      <p id="FirstP">
	@yield('content')
      </p>
    </div>
    <div class="chatbox">@yield('chatbox')</div>
    <div id="SecondDiv">
      <p id="SecondP"></p>
    </div>
    <footer><div><p>This site was imagined, designed and developped by Léo 'Superleo19' Barouh and Erwan 'Feideus' Ulrich</p></div><div class="footer">@yield('footer')<div></footer>
  </body>
</html>
