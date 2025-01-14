@extends('home.layout')
@section('title', 'Asesmen')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/Tokoh\ budaya\ polowijen.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Contact us</h1>
       </div>
     </div>
   </div>
  </section>

  <section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
         <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
           <span class="fa fa-map-marker"></span>
         </div>
         <h3 class="mb-2">Alamat</h3>
         <p>Jl. Cakalang, RT.3/RW.2, Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur </p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-phone"></span>
       </div>
       <h3 class="mb-2">Nomor Telepon</h3>
       <p><a href="tel://1234567920">+62 815-5181-303</a></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-paper-plane"></span>
     </div>
     <h3 class="mb-2">Alamat Email</h3>
     <p><a href="mailto:info@yoursite.com">kampungbudayapolowijen <br> @gmail.com</a></p>
   </div>
  </div>
  <div class="col-md-3 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-globe"></span>
   </div>
   <h3 class="mb-2">Website</h3>
   <p><a href="#">authenticpolowijen.com</a></p>
  </div>
  </div>
  </div>
  </div>
  </section>

  <section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="No. Telp">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
         <div id="map" class="bg-white"></div>
       </div>
     </div>
   </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pt">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12 text-center">
      <div class="img"  style="background-image: url(images/Ask.jpg);">
       <div class="overlay"></div>
       <h2>KAMPUNG BUDAYA POLOWIJEN</h2>
       <p>Warisi Tradisi Lestarikan Budaya</p>
       <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3"  href="contact.html">Ask For A Quote</a></p>
     </div>
   </div>
  </div>
  </div>
  </section>
@endsection
