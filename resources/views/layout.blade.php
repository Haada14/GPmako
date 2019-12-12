
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GPmako</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom styles for this template  SLACK-->
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <!-- Slack -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />

  
 

</head>
<body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/home">GP<span>mako</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{asset('index.html')}}" class="nav-link">Acceuil</a></li>
	          <li class="nav-item"><a href="{{asset('about.html')}}" class="nav-link">A props</a></li>
	          <li class="nav-item"><a href="{{asset('pricing.html')}}" class="nav-link">Rapport Qualite Prix</a></li>
	          <li class="nav-item"><a href="{{route('Carriers.index')}}" class="nav-link">Nos tranporteur</a></li>
	          <li class="nav-item"><a href="{{asset('blog.html')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{asset('contact.html')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
  <!-- Header -->
  <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">GPmako <span>Vous facilite vos</span> <span>expedition de colis</span></h1>
	            <p style="font-size: 18px;">Tout devient facile et attratif avec GPmako. GPkoko gaw gaw</p>
	            <a href="{{asset('https://vimeo.com/45830194')}}" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div>
	            </a>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="#" class="request-form ftco-animate">
          		<h2>Make your trip</h2>
	    				<div class="form-group">
	    					<label for="" class="label">Lieu de depart</label>
	    					<input type="text" class="form-control" placeholder="City, Airport, Station, etc">
	    				</div>
	    				<div class="form-group">
	    					<label for="" class="label">Lieu d'arrivee</label>
	    					<input type="text" class="form-control" placeholder="City, Airport, Station, etc">
	    				</div>
	    				<div class="d-flex">
	    					<div class="form-group mr-2">
	                <label for="" class="label">Jour de depart</label>
	                <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
	              </div>
	              <div class="form-group ml-2">
	                <label for="" class="label">Jour d'arrivee</label>
	                <input type="text" class="form-control" id="book_off_date" placeholder="Date">
	              </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Pick-up time</label>
                <input type="text" class="form-control" id="time_pick" placeholder="Time">
              </div>
	            <div class="form-group">
	              <input type="submit" value="Search Vehicle" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
          </div>
        </div>
      </div>
    </div>
    @yield('contenue_page')
  <!-- Footer -->
  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Autoroad</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
 
			 
  <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
