@extends('front.index')

@section('content')

<div class="content-header">
  <h2> <strong>Contacto</strong> </h2>
</div>

<div class="">
  <i class="fas fa-phone"></i>
  +54 15 5 472 7114
  +54 15 2 454 0757
</div>

<div class="">
  <i class="fas fa-map-marker-alt"></i>
  CUCHA CUCHA 1661
  BUBBLE STUDIO
  BUENOS AIRES
</div>

<div class="">
  <i class="far fa-envelope"></i>
  <p>KIMINABYJINOFICIAL@HOTMAIL.COM</p>
</div>

<div class="">
  <i class="far fa-clock"></i>
  12:00 - 00:00
</div>

<h6> ESCRIBINOS A NUESTRO MAIL </h6>

<form class="" action="{{ route('contact') }}" method="post">
  <input type="text" name="" value="" placeholder="Nombre">
  <input type="text" name="" value="" placeholder="Email">
  <input type="text" name="" value="" placeholder="Teléfono">
  <textarea name="name" rows="8" cols="80" placeholder="Mensaje"></textarea>
  <input type="submit" name="" value="ENVIAR MENSAJE">
</form>

@endsection
