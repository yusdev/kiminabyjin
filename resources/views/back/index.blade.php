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
        <div class="minifyButton" onclick="minifyMenu()">
            <i class="fas fa-angle-left"></i>
        </div>
      </div>

      <nav>
        <ul class="menu-body">
          <li>
            <a href="#"><i class="fas fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Escritorio</span></a>
          </li>
          <li>
            <a href="{{ route('admin.pages') }}"><i class="fas fa-lg fa-fw fa-file-code"></i> <span class="menu-item-parent"> Paginas</span></a>
          </li>
          <li>
            <a href="#" onclick="showSub()"><i class="fas fa-lg fa-fw fa-tag"></i> <span class="menu-item-parent">E-Shop</span></a>
            <ul class="sub">
              <li> <a href="#">Categorías</a> </li>
              <li> <a href="#">Color</a> </li>
              <li> <a href="{{ route('admin.sizes') }}">Talle</a> </li>
              <li> <a href="#">Productos</a> </li>
              <li> <a href="#">Ventas</a> </li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>

    @yield('content')

    <script>

        function showSub(){
          var sub = document.querySelector('.sub');
          if(sub.style.display == 'none'){
            sub.style.display = 'block';
          }else{
            sub.style.display = 'none'
          }

        }

        function minifyMenu(){
          var menu = document.querySelector('.minifyButton');
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
