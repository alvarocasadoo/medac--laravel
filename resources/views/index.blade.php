<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Restaurante El Toro</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<script src="https://kit.fontawesome.com/875ee67fb5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <link rel="stylesheet" href=<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">"
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>	
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<style>
	.entireBody{
		margin-left: 1rem;
	}


	.socialicon{
		list-style: none;
		text-decoration: none;
		color: white;
	}
	@keyframes neonspark  { 
0% { text-shadow: none; }
30% { text-shadow: 0 0 30px rgba(255,0,84,0.6); }
60% {
  text-shadow: 0 0 30px rgba(255,0,84,0.6),
      0 0 60px rgba(255,0,84,0.4); 
  }
80% { text-shadow: none; }
100% { 
    text-shadow: 0 0 30px rgba(255,0,84,0.6),
      0 0 60px rgba(255,0,84,0.4),
      0 0 100px rgba(255,0,84,0.2),
      0 0 90px rgba(255,0,84,0.1);
  }
}

@font-face{
  font-family:'Neon80sRegular';
src: url('//thenewcode.com/assets/fonts/neon-webfont.woff') format('woff'), 
  url('/assets/fonts/neon-webfont.ttf') format('truetype');
  font-weight:normal;
  font-style:normal;
}
body { margin: 0; }
h1#neon-tubing {
  padding: 6rem;
  text-align: center;
  color: rgba(255,200,200,0.8);
  font-family: Neon80s, sans-serif;
  font-size: 11rem; letter-spacing: 2rem;
  background: url(brick-wall-texture-faded.jpg);
  background-size: cover;
}

h1#neon-tubing { 
  margin: 0;
  font-weight: 100;
  background-image: radial-gradient(ellipse farthest-corner,rgba(0,0,0,0),rgba(0,0,0,0)),
    url(//thenewcode.com/assets/images/brick-wall-texture-faded.jpg);
  text-align: center;
  font-family: Neon80sRegular, sans-serif;
  color: #fee;
  padding: 4rem;
  text-transform: uppercase;
  font-size: 6rem; 
  letter-spacing: 2rem;
  animation: neonspark 1s 3s forwards;
  text-shadow: 
    0 0 20px rgba(255,0,84,0.6),
    0 0 40px rgba(255,0,84,0.4),
    0 0 60px rgba(255,0,84,0.2),
    0 0 80px rgba(255,0,84,0.1); 
}
h1#neon-tubing span { animation: neonspark 4s 3s infinite;  }

     nav{
       height: 5.2rem;
       background-color:#17181C;
       text-align: center;
     }

     nav ul{
        list-style: none;
        display: inline-block;
        padding:1.8rem;
     }

     nav ul li{
         float: left;
     }

     nav ul li a {
         color: white;
         font-weight: bold;
         text-decoration: none;
         font-size: 1rem;
         padding: 2rem;
     }

     nav ul li a:hover{
       background-color: #ff5555;
	   color:white;
	   border-radius: 0.5rem;
     }

	 .lis{
		display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
	color: white
}

footer{
  background-color: #17181C;
  color: white;
  text-align: center;
  padding: 1rem;
}

form{
  border-radius: 1rem;
  padding: 1rem;
  color: white;
  text-align: center;
  padding: 1rem;

}

/*when i click on the input box it should be white and when i click outside it should be black*/



form input[type="text"]{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 30rem;
  background-color: #17181C;
  color:white;
}

form input[type="text"]:focus{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 30rem;
  background-color: #17181C;
  color:white;

}



form input[type="email"]{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 30rem;
  background-color: #17181C;
  color: white;
}

form input[type="email"]:focus{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 30rem;
  background-color: #17181C;
  color: white;

}

#message{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 100%;
  background-color: #17181C;
  color:white;

}



form input[type="submit"]{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 20rem;
  background-color: #ff5050;
  color: white;
}

.copy{
  text-align: center;
  color: rgb(117, 117, 117);
  padding: 1rem;
  background-color: rgb(51, 51, 51); 
  border-radius: 1.5rem;
}

img{
	border-radius: 1rem;
	width: 100%;
	height: 30rem;
}

img:hover {
        /*Animate to appear*/
        -webkit-animation: fadein 2s;
        -moz-animation: fadein 2s; 
        -ms-animation: fadein 2s; 
        -o-animation: fadein 2s; 
        animation: fadein 2s;
      }
      @keyframes fadein {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }

		transform: scale(1.5);
      }

	  #contenedorIMG{
		display: flex;
		margin-right: 1rem;

	  }


	  @keyframes slide {
	0% { transform: translateX(0); }
	10% { transform: translateX(0); }

	15% { transform: translateX(-100%); }
	30% { transform: translateX(-100%); }

	35% { transform: translateX(-200%); }
	50% { transform: translateX(-200%); }

	55% { transform: translateX(-300%); }
	70% { transform: translateX(-300%); }

	75% { transform: translateX(-400%); }
	90% { transform: translateX(-400%); }

	95% { transform: translateX(-500%); }
	100% { transform: translateX(-500%); }
}

* { box-sizing: border-box; 
    list-style: none;
}




.wrapper {
	max-width: 75rem;
	margin: 0 auto;
	
}

.slider {
	position: relative;
}

.slides {
	position: relative;
	display: flex;
	overflow: hidden;
}

.slide {
	width: 100vw;
	flex-shrink: 0;
	animation-name: slide;
	animation-duration: 10s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
}

.slides:hover .slide {
	animation-play-state: paused;
}

.slide img {
	width: 100%;
	vertical-align: top;
}

.slide a {
	width: 70rem;
	display: inline-block;
	position: relative;
}

.caption {
	color: white;
	text-shadow: 1px 1px black;
	font-size: 8vw;
	position: absolute;
	bottom: 8vw;
	right: 4vw;
}

.slide:target {
	animation-name: none;
	position: absolute;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	z-index: 50;
}

.slider-controler {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	text-align: center;
	padding: 5px;
	background-color: rgba(0,0,0,0.5);
	z-index: 100;
}

.slider-controler li {
	margin: 0 0.5rem;
	display: inline-block;
	vertical-align: top;
}

.slider-controler a {
	display: inline-block;
	vertical-align: top;
	text-decoration: none;
	color: white;
	font-size: 1.5rem;
}

@media only screen and (min-width: 1200px) {
	.slide {
		width: 1200px;
	}

	.caption {
		font-size: 96px;
		bottom: 96px;
		right: 50px;
	}
}

	  

	  

</style>

</head>
<body>
	<script>
		function scrollear(idelem){
			var element = document.getElementById(idelem);
			element.scrollIntoView();}
	</script>

  <header>
    <div class="sign-wrap">
		<div class="sign">
			<h1 id=neon-tubing>E<span>l</span><span> </span><span>T</span><span>o</span><span>r</span><span>o</span></h1>		</div>
		</div>
   
		@if(Auth::check())
		<nav>
		  <ul>
		   <div class="lis">
			   <li class="active"><a href="/">Home</a></li>
			   <li><a href="/calendario">Reservar</a></li>
			   <li><a href="/contacto">Contacto</a></li>
			   <li><a href="/misReservas">Panel de Control</a></li>
		   </div>
		   </ul>
		</nav>
		@else 
    <nav>
		  <ul>
		   <div class="lis">
			   <li class="active"><a href="/">Home</a></li>
			   <li><a href="/calendario">Reservar</a></li>
			   <li><a href="/contacto">Contacto</a></li>
			   <li><a href="/login">Iniciar Sesion</a></li>
		   </div>
		   </ul>
		</nav>

			@endif

   </header>



{{-- 
    <nav>
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">El Toro</a>
          </div>
          <ul class="nav navbar-nav">
           
          </ul>
        </div>
      </nav> --}}
      

<div class="entireBody">
<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			
			<i class="fa-sharp fa-solid fa-location-dot"></i>
			<a href="#" class="navbar-brand">El Toro</a>
		</div>
		
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Restaurante El Toro</h1>
				<h2>DISEÑO LIMPIO &amp; MINIMALISTA</h2>
				<a href="/contacto" class="smoothScroll btn btn-default">Más información</a>
			</div>
		</div>
	</div>		
</section>

<div class="wrapper">
	<div class="slider" id="slider">
	  <ul class="slides">
		<li class="slide" id="slide1">
		  <a href="#">
			<img src={{URL::asset('/img/presa.jpg')}} alt="photo 1">
		  </a>
		</li>
		<li class="slide" id="slide2">
		  <a href="#">
			<img src={{URL::asset('/img/pollo.jpg')}} alt="photo 2">
		  </a>
		</li>
		<li class="slide" id="slide3">
		  <a href="#">
			<img src="{{URL::asset('/img/restaurante.jpg')}}" alt="photo 3">
		  </a>
		</li>
	  </ul>
	  <ul class="slider-controler">
		<li><a href="#slide1">&bullet;</a></li>
		<li><a href="#slide2">&bullet;</a></li>
		<li><a href="#slide3">&bullet;</a></li>
	
	  </ul>
	</div>
  </div>
  




{{-- <div class="encabezado">
	<div class="slider">
        <ul>
            <li><img src={{URL::asset('/img/presa.jpg')}} alt="presa"></li>
          <li><img src="{{URL::asset('/img/pollo.jpg')}}" alt="pollo"></li>
          <li><img src="{{URL::asset('/img/restaurante.jpg')}}" alt="restaurante"></li>
      </ul>
  </div>
    
</div> --}}



{{-- <!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 id="galeria" class="heading">Galería</h1>
				<hr>
				<br>
			</div>
		
			</div>
			
			<div class="col-md-4 col-sm-4 wow fadeInUp" id="contenedorIMG" data-wow-delay="0.9s">
				
				<div>
				<a href="{{URL::asset('/img/presa.jpg')}}" data-lightbox-gallery="zenda-gallery"><img src="{{URL::asset('/img/presa.jpg')}}" alt="gallery img"></a>
				<br><br>
				</div><br>
				<a href="{{URL::asset('/img/pollo.jpg')}}" data-lightbox-gallery="zenda-gallery"><img src="{{URL::asset('/img/pollo.jpg')}}" alt="gallery img"></a>
				<br><a href="{{URL::asset('/img/pollo.jpg')}}" data-lightbox-gallery="zenda-gallery"><img src="{{URL::asset('/img/pollo.jpg')}}" alt="gallery img"></a>
				<br><br>
				
				</div>
		</div>

		


	</div>
	
</section> --}}


<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<center><div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Platos Combinados</h1>
				<hr>
			</div></center>
			<div class="col-md-6 col-sm-6">
				<h4>San Jacobo con patatas ................ <span>14.99€</span></h4>
				<h5>Pollo / Patatas / Especias</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Presa Ibérica .............................................. <span>19.99€</span></h4>
				<h5>Presa / Patatas / Salsa Roquefort</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Carrillada para 2 .............................. <span>34.99</span></h4>
				<h5>Cerdo / Pollo / Ternera</h5>
			</div>
		
			<div class="col-md-6 col-sm-6">
				<h4>Plato combinado Cerdo .......................... <span>9.99€</span></h4>
				<h5>Panceta / Lomo / Patatas </h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Carrillada para 5 ............................... <span>99.99€</span></h4>
				<h5>Pollo / Presa / Salsas Especiales </h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Pollo Asado  ................................................ <span>14.99€</span></h4>
				<h5>Pollo / Patatas / Salsas Especiales</h5>
			</div>
		</div>
	</div>
</section>		



</center>
</div>
<br><br>
<footer class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Información de Contacto</h2>
				<div class="ph">
					<h5><i class="fa fa-phone"></i>Teléfono</h5>
					<p>957 11 81 59</p>
				</div>
				<div class="address">
						<h5><i class="fa fa-map-marker"></i>Localización</h5>
					<p>Av. Gran Capitán, Nº5, Córdoba</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Horario</h2>
					<p>Lunes - Viernes <span>9:00 AM - 8:00 PM</span></p>
					<p>Sábado <span>11:30 AM - 10:00 PM</span></p>
					<p>Domingo <span>10:30 AM - 10:00 PM</span></p>

			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Síguenos</h2>
				<ul class="socialicon">
					<li class="fa-brands fa-twitter" data-wow-delay="0.6s"> </li><br>
					<li class="fa-brands fa-instagram" data-wow-delay="0.9s"> </li><br>
					<li class="fa fa-github wow bounceIn" data-wow-delay="0.9s"> </li>
				</ul>
			</div>
		</div>
	</div>

<section id="copyright">
	<div class="container">
		<div class="row"><br>
			<div class="col-md-12 col-sm-12"><br><br>
				<h5 class="copy">Copyright © Restaurante El Toro 2023. All rights reserved<h5></div>
		</div>
	</div>
</section>
</footer>





</body>
</html>