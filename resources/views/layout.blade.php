<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP/LARAVEL - BLADE [Molisana]</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <div class="wrapper">

      <!-- INTESTAZIONE -->
      <header class="top-bar">
        <div class="tob-bar-logo">
          <img src="{{asset('img/01-logo.png')}}" alt="Molisana">
        </div>
        <nav class="top-bar-menu">
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Prodotti</a>
            </li>
            <li>
              <a href="#">News</a>
            </li>
          </ul>
        </nav>
      </header>
      <!-- / INTESTAZIONE -->

      <!-- MAIN CONTENT -->
      <main class="main">
        @yield('content')
      </main>
      <!-- / MAIN CONTENT -->

    </div>

  </body>
</html>
