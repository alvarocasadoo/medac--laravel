<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Iniciar Sesión</title>

   <style>
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

     form button[type="submit"]{
        background-color: #ff5555;
        border: 1px solid #ff5555;

     }


	 .lis{
		display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
	color: white
     }

#botonhora{
  margin-top: 5rem;
    background-color: #ff5555;
        border: 1px solid #ff5555;

}

footer{
  background-color: #17181C;
  color: white;
  text-align: center;
  padding: 1rem;
}

.copy{
  text-align: center;
  color: rgb(117, 117, 117);
  padding: 1rem;
  background-color: rgb(51, 51, 51); 
  border-radius: 1.5rem;
}
    </style>
    <script src="https://kit.fontawesome.com/875ee67fb5.js" crossorigin="anonymous"></script>

</head>



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
   @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Dirección de correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>

<footer class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Información de Contacto.</h2>
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
					<li class="fa-brands fa-twitter" data-wow-delay="0.6s"> Twitter</li><br>
					<li class="fa-brands fa-instagram" data-wow-delay="0.9s"> Instagram</li><br>
					<li class="fa fa-github wow bounceIn" data-wow-delay="0.9s"> GitHub</li>
				</ul>
			</div>
		</div>
	</div><br><br>

	<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row"><br>
			<div class="col-md-12 col-sm-12"><br><br>
				<h5 class="copy">Copyright © Restaurante El Toro 2023. All rights reserved<h5></div>
		</div>
	</div>
</section>
</footer>

@endsection


