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
        <div class="container">
          <div class="top-bar-logo">
            <img src="{{asset('img/01-logo.png')}}" class="img-resp" alt="Molisana">
          </div>
          <nav class="top-bar-menu">
            <div class="top-bar-menu-hamb">
              <a href="#" class="fa fa-bars" aria-hidden="true"></a>
            </div>
            <ul class="top-bar-menu-list">
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
        </div>
      </header>
      <!-- / INTESTAZIONE -->

      <!-- MAIN CONTENT -->
      @yield('main')
      <!-- / MAIN CONTENT -->

      <!-- FOOTER -->
      <footer class="footer">
        <div class="container">
          <!-- Credits -->
          <div class="footer-credits">
            <div class="logo">
              <img src="{{asset('img/01-logo.png')}}" class="img-resp" alt="Molisana">
            </div>
            La Molisana S.P.A. <br />
            Contrada Colle delle Api, 100/A <br />
            86100 - Campobasso (CB) <br />
            Tel. +39 0874 4981 <br />
            Fax +39 0874 629584 <br />
            commerciale@lamolisana.it <br />
            export@lamolisana.it <br />
            P.IVA 01510070707 <br />
            SDI A4707H7 <br />
          </div>
          <!-- / Credits -->
          <!-- Bottom menu -->
          <nav class="footer-menu">
            <ul>
              <li class="title">
                Pastificio
              </li>
              <li>
                <a href="#">Il Pastificio</a>
              </li>
              <li>
                <a href="#">Grano decorticato a pietra</a>
              </li>
              <li>
                <a href="#">Il Molise c’è</a>
              </li>
              <li>
                <a href="#">Filiera Integrata</a>
              </li>
              <li>
                <a href="#">00 anni di pasta</a>
              </li>
              <li>
                <a href="#">Sartoria della pasta</a>
              </li>
              <li>
                <a href="#">Spaghetto Quadrato</a>
              </li>
              <li>
                <a href="#">Le Persone</a>
              </li>
            </ul>

            <ul>
              <li class="title">
                Collezione da Chef
              </li>
              <li>
                <a href="#">Collezione da Chef</a>
              </li>
              <li>
                <a href="#">Grandi Cucine</a>
              </li>
              <li>
                <a href="#">Biologiche</a>
              </li>
              <li>
                <a href="#">Quadrate</a>
              </li>
            </ul>

            <ul>
              <li class="title">
                I prodotti
              </li>
              <li>
                <a href="#">Le Classiche</a>
              </li>
              <li>
                <a href="#">Le Integrali</a>
              </li>
              <li>
                <a href="#">Le Speciali</a>
              </li>
              <li>
                <a href="#">Le Biologiche</a>
              </li>
              <li>
                <a href="#">Le Gluten-Free</a>
              </li>
              <li>
                <a href="#">Le Semole</a>
              </li>
              <li>
                <a href="#">Le Extra di Lusso</a>
              </li>
            </ul>
          </nav>
          <!-- / Bottom menu -->
        </div>
      </footer>
      <!-- / FOOTER -->

    </div>

  </body>
</html>
