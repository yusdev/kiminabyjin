<?php
  $categories = ['Blusas', 'Pantalones', 'Polleras', 'Abrigos', 'Vestidos'];
  $products = [0,1,2,3,4,5,6];

?>
@extends('front.index')

@section('content')

<div class="content-header">
  <h2> <strong>Shop</strong> </h2>
</div>

<div class="eshop-content">
  <div class="categories">
    <h3>Categorías</h3>
    <ul>
      <li> <a href="#">Todos los productos</a> </li>
      @foreach ($categories as $key => $category)
        <li> <a href="#">{{$category}}</a> </li>
      @endforeach
    </ul>
  </div>

  <div class="products">
    @foreach($products as $key => $product)
      <div class="product">
        <a href="#">
          <img src="https://cdn.cliqueinc.com/posts/183107/insider-tips-for-finding-the-best-stuff-at-forever-21-1641840-1454353660.640x0c.jpg" alt="">
          <p>Lorem ipsum title</p>
          <p>$123</p>
        </a>
      </div>
    @endforeach
  </div>
</div>


@endsection
