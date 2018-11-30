<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>.:Welcome Admin:.</title>

        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('admin.admin-header')
            @yield('admin-dashboard')
            @yield('admin-bus-list')
            @yield('admin-add-bus')
        @include('admin.admin-footer')
         <footer class="ftco-footer ftco-bg-dark ftco-section" id="mo">
      <div class="container">
        <div class="row mb-5" id="k">
          <div class="col-md" id="du">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Booking Bus's Ticket Service</p></h2>
              <p><a href="#" class="py-2 d-block">By this Website you can book a ticket easily by clicking some buttons</a></p>
            </div>
          </div>
          <div class="col-md" id="du">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Services</p></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Book now</a></li>
                <li><a href="#" class="py-2 d-block">Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md"id="du">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><p id='w'>Contact Information</p></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Egypt, Aswan, Aswan Island(Aswanarty)</a></li>
                <li><a href="#" class="py-2 d-block">+ 201121087637</a></li>
                <li><a href="#" class="py-2 d-block">mohamedjaber662@gmail.com</a></li>
              </ul>
            </div>
          </div> 
        </div>
        <div id='social'> <a href="https://www.facebook.com/mohamed.jaber.50999" class="fa fa-facebook"></a>
            <a href="https://twitter.com/mjaber143" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UC_aBHB5dezdhVRNojoPM4nA?view_as=subscriber" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/mohamed_jaber_97/" class="fa fa-instagram"></a>
          </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to Mohamed Jaber <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Mo</a> </p>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>