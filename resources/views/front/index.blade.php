<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title> Kimina by Jin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="/css/front/kimina.css">
    <link rel="shortcut icon" href="{{ asset('favicon.jpg') }}">
  </head>

  <body>
    <!-- HEADER START -->
    <header>
      <div class="logo-container">
        <a href="{{ route('home') }}">
          <h1 class="logo">KIMINA BY JIN</h1>
        </a>
      </div>

      <div class="gradient-line"></div>
      <div class="nav-container">
        <a class="toggle-menu" href="#"><i class="fas fa-bars"></i></a>
        <nav>
          <ul class="menu-nav">
              <li> <a href="{{ route('home') }}">HOME</a></li>
              <li> <a href="{{ route('faqs') }}">FAQs</a></li>
              <li> <a href="{{ route('eshop') }}">E-SHOP</a></li>
              <li> <a href="{{ route('contact') }}">CONTACTO</a></li>
          </ul>
        </nav>
        <ul class="social-menu">
          <li> <a href="https://www.facebook.com/kiminabyjin" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="https://www.instagram.com/kiminabyjin/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li> <a href="{{ route('shopping-cart') }}"><i class="fas fa-shopping-cart" target="_blank"></i></a></li>
        </ul>
      </div>
      <div class="gradient-line"></div>

    </header>
    <!-- HEADER END -->

    <div class="content">
      @yield('content')
    </div>

    <footer>
      <div class="social-footer">
        <ul>
          <li> <a href="https://www.facebook.com/kiminabyjin" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="https://www.instagram.com/kiminabyjin/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="footer">
        <p class="copyright">© 2018 KIMINA BY JIN</p>
        <p>by <a href="#">DIGNITE</a></p>
      </div>
    </footer>

    <script>
        //Toggle Menu Header
        var toggleMenu = document.querySelector(".toggle-menu");
        toggleMenu.onclick = function() {
          var menu = document.querySelector(".menu-nav");
          if (menu.classList.contains('selected')) {
            menu.classList.remove("selected");
          } else {
            menu.classList.add("selected");
          }
        }

        // Faqs toggle
        var item = document.querySelectorAll(".faq-item");
        var q = document.querySelectorAll(".question");
        for (i = 0; i < q.length; i++) {
            q[i].addEventListener('click', toggleSelected, false);
        }
        function toggleSelected() {
          var itemSelected = this.parentNode.className;
          for (i = 0; i < item.length; i++) {
              item[i].className = 'faq-item faqclose';
          }
          if (itemSelected == 'faq-item faqclose') {
              this.parentNode.className = 'faq-item faqopen';
          }

        }

    </script>

  </body>
</html>
