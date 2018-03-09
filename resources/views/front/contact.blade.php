@extends('front.index')

@section('content')

<div class="content-header">
  <h2> <strong>Contacto</strong> </h2>
</div>

<div class="contact-info">
  <div class="contact-item">
    <p class="icon"><i class="fas fa-phone"></i></p>
    <p>+54 15 5 472 7114</p>
    <p>+54 15 2 454 0757</p>
  </div>

  <div class="contact-item">
    <p class="icon"><i class="fas fa-map-marker-alt"></i></p>
    <p>CUCHA CUCHA 1661</p>
    <p>BUBBLE STUDIO</p>
    <p>BUENOS AIRES</p>
  </div>

  <div class="contact-item">
    <p class="icon"><i class="far fa-envelope"></i></p>
    <p>KIMINABYJINOFICIAL@HOTMAIL.COM</p>
  </div>

  <div class="contact-item">
    <p class="icon"><i class="far fa-clock"></i></p>
    <p>12:00 - 00:00</p>
  </div>
</div>

<div style="height: 3px; width: 45px; background-color: pink; margin: auto;"></div>

<div class="contact-form">
  <h6> ESCRIBINOS A <strong>NUESTRO MAIL</strong> </h6>

  <form class="" action="{{ route('contact') }}" method="post">
    <input type="text" name="" value="" placeholder="Nombre">
    <input type="text" name="" value="" placeholder="Email">
    <input type="text" name="" value="" placeholder="Teléfono">
    <textarea name="name" rows="8" cols="80" placeholder="Mensaje"></textarea>
    <input type="submit" name="" value="ENVIAR MENSAJE">
  </form>
</div>


@endsection
