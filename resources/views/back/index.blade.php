<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Admin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link rel="stylesheet" href="/css/back/kimina.css">
    <link rel="shortcut icon" href="{{ asset('favicon.jpg') }}">
  </head>
  <body>

    <header>
      <div><p id="logo">KIMINA BY JIN</p></div>
      <div>
        <a href="#">SALIR <i class="fas fa-sign-out-alt"></i></a>
      </div>
    </header>

    <div class="left-panel">

      <div class="menu-header">
        <p>Menú</p>
        <div class="minifyme" onclick="minifyme()">
            <i class="fas fa-angle-left"></i>
        </div>
      </div>

      <nav class="menu-body">
        <ul>
          <li data-nav="escritorio">
            <a href="#"><i class="fas fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Escritorio</span></a>
          </li>
          <li data-nav="paginas">
            <a href="{{ route('admin.pages') }}"><i class="fas fa-lg fa-fw fa-file-code"></i> <span class="menu-item-parent"> Paginas</span></a>
          </li>
          <li data-nav="tienda">
            <a href="#"><i class="fas fa-lg fa-fw fa-tag"></i> <span class="menu-item-parent">E-Shop</span></a>
          </li>
        </ul>
      </nav>

    </div>

    @yield('content')

    <script>

        function minifyme(){
          var menu = document.querySelector('.minifyme');
          var menuIcon = menu.firstElementChild;
          var noicons = document.querySelectorAll('.menu-item-parent');
          var menuHeader = document.querySelector('.menu-header p');
          var leftPanel = document.querySelector('.left-panel');
          var panelContent = document.querySelector('.panel-content');

          if(menuIcon.getAttribute("class")=="svg-inline--fa fa-angle-left fa-w-8"){
            menuIcon.setAttribute("class","svg-inline--fa fa-angle-right fa-w-8");
            noicons.forEach(function(item){
                item.style.display = 'none'
            })
            menuHeader.style.display = 'none'
            leftPanel.style.transition = "all 0.6s"
            leftPanel.style.width = '50px'
            panelContent.style.transition = "all 0.6s"
            panelContent.style.left = '50px'
          } else {
            menuIcon.setAttribute("class","svg-inline--fa fa-angle-left fa-w-8");
            noicons.forEach(function(item){
                item.style.display = 'inherit'
            })
            menuHeader.style.display = 'inherit'
            leftPanel.style.transition = "all 0.6s"
            leftPanel.style.width = '200px'
            panelContent.style.transition = "all 0.6s"
            panelContent.style.left = '200px'
          }

         }






    </script>
  </body>
</html>
