<!DOCTYPE html>
<html lang="es-AR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/estilos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Tienda Online - Indumentaria</title>

  <!-- CSS slick -->
  <link rel="stylesheet" href="assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
</head>
<body>

	<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: -1px 7px 5px 0px rgba(0,0,0,0.75);">
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" width="60" height="60" alt="">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-black" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Hombre
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">chombas rayadas</a>
          <a class="dropdown-item" href="#">chombas lisas</a>
          <a class="dropdown-item" href="#">Bermudas</a>
          <a class="dropdown-item" href="#">Camperas</a>
          <a class="dropdown-item" href="#">pantalones</a>

        </div>
      </li>
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Mujer
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">remeras y chombas dama</a>
          <a class="dropdown-item" href="#">jeans dama</a>
          <a class="dropdown-item" href="#">buzos y camperas dama</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="ofertas.php">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="como_comprar.php">¿Cómo comprar?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="compra_mayorista.php">Compra Mayorista</a>
      </li>
    </ul>
  

    <div class="justify-content-end">
      <div class="row">

        <div class="col-lg-6">
          <img class="mx-4 responsive-navbar-icons" src="assets/icons/my_account_icon.png" width="32px" style="color:white;">
          <p class="text-center text-black responsive-icon-navbar-text">Mi cuenta</p>
        </div>

        <div class="col-lg-6">
          <img class="mx-4 responsive-navbar-icons" src="assets/icons/my_cart_icon.png" width="32px" style="color:white;">
          <p class="text-center text-black responsive-icon-navbar-text">Mi Carrito</p>
        </div>

      </div>
    </div>
  </div>
</nav>
<!--Navbar-->


<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/carousel.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carousel2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carousel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!--End carousel -->
<!-- test -->
  <div class="container p-3">
    <div class="row">

      <div class="col-lg-4 three-advantage-items">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 p-3">
              <img src="assets/icons/truck_icon.png" width="64px" height="64px" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Envíos Gratis</h5>
                <p class="card-text">A partir de $ARS60.000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 three-advantage-items">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 p-3">
              <img src="assets/icons/card-icon.png" width="64px" height="64px" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">3 cuotas sin interés</h5>
                <p class="card-text">En todos los productos</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 three-advantage-items">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 p-3">
             <img src="assets/icons/cambio-icon.png" width="64px" height="64px" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">¿Querés cambiarlo?</h5>
                <p class="card-text">Cambio gratis, 30 días.</p>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- test -->
<!-- PRODUCTOS DESTACADOS -->
<div class="container">
  <div class="row" style="#fefefe">
    <div class="col-lg-12">
      <h2 class="text-center">Productos destacados</h2>
    </div>
  </div>

  <div class="row autoplay column"><!--  -->
    <div class="col-lg-4 mt-3">
      <img src="assets/img/bermudas.png" width="90%" height="279px" alt="">
      <h5 class="text-center text-uppercase p-1">Bermuda</h5>
      <p class="text-center">$ARS 60.000</p>
    </div>

    <div class="col-lg-4 mt-3">
      <img src="assets/img/pantalones_hombre.png" width="90%" height="279px" alt="">
      <h5 class="text-center text-uppercase p-1">Pantalón</h5>
      <p class="text-center">$ARS 40.000</p>
    </div>

    <div class="col-lg-4 mt-3">
      <img src="assets/img/chomba_lisa.png" width="90%" height="279px" alt=""> 
      <h5 class="text-center text-uppercase p-1">Chomba Lisa</h5>
      <p class="text-center">$ARS 25.000</p>
    </div>

    <div class="col-lg-4 mt-3">
      <img src="assets/img/remera_dama.png" width="300px" height="279px" alt="">
      <h5 class="text-center text-uppercase p-1">Remera Dama</h5>
      <p class="text-center">$ARS 15.000</p>
    </div>
  </div>
</div>
<!-- PRODUCTOS DESTACADOS -->

<!--bootstrap's cards -->
<div class="container">
	<div class="row p-3">

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/chomba_rayada.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h2 class="card-title">Chombas Rayadas</h2>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/chomba_lisa.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h2 class="card-title">Chombas lisas</h2>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/remera_lisa.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h2 class="card-title">Remeras Lisas</h2>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>
	</div> <!-- finished first row -->

	<div class="row" style="margin-top: 2%;">

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/bermudas.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h2 class="card-title">Bermudas</h2>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/remera_dama.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h2 class="card-title">Remeras dama</h2>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  			<img src="assets/img/pantalones_hombre.png" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h3 class="card-title">Pantalones Hombre</h3>
    				<p class="card-text">Conocé toda la línea.</p>
    				<button type="button" class="btn btn-primary">Ver productos</button>
  				</div>
			</div>
		</div>
	</div> <!--finished second row -->
</div>
<!-- End bootstrap's cards -->

<!-- Newsletter -->
<!-- Newsletter -->

<!-- envios gratis section -->
<br />
<br />
<div class="container-fluid" style="background-color:#f0eded;">
	<div class="row" >
		<div class="col-lg-12">
			<h2 class="text-center p-3">Envíos gratis</h2>
			<p class="text-center">Nuestros envíos por compras MINORISTAS son gratis a partir de los $ 300.000. si la compra no supera ese monto el costo de envio se suma automáticamente al final de la compra.</p>
			<p class="text-center">Para compras MAYORISTAS los envíos también son GRATIS y a domicilio.</p>
		</div>
	</div>
  <br />
  <!-- <br /> -->
</div>


<!-- footer -->
<div class="container-fluid bg-dark" style="box-shadow: 0px -2px 5px 0px rgba(0,0,0,0.75);">
  <div class="row">

    <div class="col-lg-4 text-center mt-3">
        <!-- LOGO -->
        <img class="rounded-circle mt-3" src="assets/img/logo.png" alt="LOGO" width="64px" height="64px">
        <br />
        <br />
        <!-- DESCRIPTION -->
        <p class="text-white justify-content-center">Con un enfoque en la moda al alcance de todos, nuestras tiendas están divididas en diferentes secciones: moda femenina, moda masculina, moda infantil y moda para el hogar, así como accesorios y calzado.</p> 
    </div>

    <div class="col-lg-4 mt-5 text-center p-2">
    
      <img src="assets/icons/facebook.png" width="10%" alt="">
      <img src="assets/icons/instagram.png" width="10%" alt="">
      <img class="rounded-circle" src="assets/icons/link.png" width="10%" alt="">

      <p class="text-center text-white mt-5">© <?= date("Y");?> Copyright: <a href="https://patricioagustindev.com" style="text-decoration:none;list-style-type:none;color:white;font-weight:600;">www.patricioagustindev.com</a></p> 
    </div>

    <div class="col-lg-4 text-center text-white mt-5">
      <h5 class="text-center text-bold">Contacto</h5>
      <p class="text-center">Av. Avellaneda 3500</p>
      <p class="text-center">(+54) 11-5026-1026</p>
      <p class="text-center">Patricioagustindev.com</p>
      
    </div>
  </div>
</div>
<!-- footer -->




<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- JS slick -->
<script src="assets/slick/slick.min.js"></script>


<script>
$('.autoplay').slick({
  dots: true,  
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
</script>
<script>
    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

</body>
</html>