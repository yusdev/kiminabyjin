<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title> Kimina by Jin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="/css/kimina.css">
  </head>

  <body>
    <!-- HEADER START -->
    <header>
      <div class="logo-container">
        <img class="logo" src="https://steemitimages.com/DQmWEVPD6Vq6mE495iEJLdGLonBeMT5ghBQSmMn5VjkbV3F/Laravel_logo_wordmark_logotype.png" alt="KIMINA BY JIN">
      </div>

      <div class="gradient-line"></div>
      <div class="nav-container">
        <a class="toggle-menu" href="#"><i class="fas fa-bars"></i></a>
        <nav>
          <ul class="menu-nav">
              <li> <a href="{{ route('home') }}">HOME</a></li>
              <li> <a href="{{ route('faqs') }}">FAQs</a></li>
              <li> <a href="#">E-SHOP</a></li>
              <li> <a href="#">CONTACTO</a></li>
          </ul>
        </nav>
        <ul class="social-menu">
          <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
          <li> <a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
      </div>
      <div class="gradient-line"></div>

    </header>
    <!-- HEADER END -->

    @yield('content')

    <footer>
      <div class="social-footer">
        <ul>
          <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="footer">
        <p class="copyright">© 2018 KIMINA BY JIN</p>
        <p>by <a href="#">DIGNITE</a></p>
      </div>
    </footer>

    <script>
        var toggleMenu = document.querySelector(".toggle-menu");
        toggleMenu.onclick = function() {
          var menu = document.querySelector(".menu-nav");
          if (menu.classList.contains('selected')) {
            menu.classList.remove("selected");
          } else {
            menu.classList.add("selected");
          }
        }
    </script>
  </body>
</html>
