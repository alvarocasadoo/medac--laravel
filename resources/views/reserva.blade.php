<html>
<head>
    <title>Reserva</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        form{
            width: 50%;
            margin: 0 auto;
        }

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

     button[type="submit"]{
        background-color: #ff5555;
        border: 1px solid #ff5555;
        border-radius: 1rem;

     }

     button[type="submit"]:hover{
      border-radius: 5rem;
        background-color: #17181C;
        border: 1px solid #17181C;

     }


	 .lis{
		display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
	color: white
}

.misReservas{
    padding: 1rem;
    margin-left: 1rem;
}

#cerrar{
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

td, th{
  padding-top: 1rem;
  padding-right: 5rem;
}

#btnreservar{
  border-radius: 0.5rem;
  padding: 0.5rem;
  margin: 0.5rem;
  width: 20rem;
  background-color: #ff5050;
  color: white;

     }

     .bodyF{
        padding: 1rem;
     }


    </style>

      
<script src="https://kit.fontawesome.com/875ee67fb5.js" crossorigin="anonymous"></script>

</head>
    <body>
        <center>
            <main>
             
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
   <div class="bodyF">
                   
                 <div class="container" style="width: 70rem;">
                   <div class="abs-center">
                       
                       <form class="border p-5" id="form-confirmar-R" action="/reservar" method="POST">
                           @csrf
                           
                           <p class="h4 mb-4 text-center"><i class="fa-solid fa-calendar-days">&nbsp;</i>{{$fecha}}</p>
                           <p class="h4 mb-4 text-center"><i class="fa-sharp fa-regular fa-clock">&nbsp;</i>{{$hora}}</p>
                           <input class="h4 mb-4 text-center" type="hidden" name="horario" value='{{$id}}' />
                           <div class="form-group">
                               <label for="nombre">Nombre</label>
                               <input type="name" name="nombre" id="nombre" class="form-control"
                                   value="">
                                   @error('name')
                                   <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                           </div>
                           <div class="form-group">
                               <label for="email">Correo electrónico</label>
                               <input type="email" name="email" id="email" class="form-control"
                                   value="">
                           </div>
                           <div class="form-group">
                               <label for="tlf">Teléfono</label>
                               <input type="tel" name="telefono" id="tlf" class="form-control"
                                   value="">
                           </div><br><br>
                           <div class="form-group">
                               <label for="menu"> Menus</label>
                                <select name="menu">
                               @foreach($menus as $menu)
                               <option value="{{$menu->id}}" >{{$menu->nombre}}</option>
                               @endforeach
                               <p class="h4 mb-4 text-center"></p>
                               </select> 
                           </div><br>
                           <div class="form-group">
                               <label for="comensales"> Número de comensales</label>
                               <select name="comensales" id="comensales">
           
                                   <option value="1"> 1 </option>
                                   <option value="2"> 2 </option>
                                   <option value="3"> 3 </option>
                                   <option value="4"> 4 </option>
                                   <option value="4"> 5 </option>

           
                               </select>
                           </div><br>
           
           
                           <div class="select-editable">
                               <label for="comensales"> Número de tarjeta</label>
                               
           
                               <input class="card mt-2" type="text" name="tarjeta" placeholder="Inserte su tarjeta" />
           
                             
                           </div><br>
           
                           <input type="hidden" id="hora" name="hora" value="{{$hora}}">
                           <input type="hidden" id="fecha" name="fecha" value="{{$fecha}}">
           
                           <div class="form-btn">
                               <button class="submit-btn" id="btnreservar">Reservar</button>
                           </div>
                       </form>
           
                       <div class="container" style="width: 70rem;">
                           <div class="abs-center">
                               
                               <form class="border p-5" id="form-confirmar-R" action="/reservaIN" method="POST">
                                   @csrf
                                   <p class="h4 mb-4 text-center">{{$fecha}}</p>
                                   <p class="h4 mb-4 text-center">{{$hora}}</p>
                                   <input class="h4 mb-4 text-center"  type="hidden" name="horario" value='{{$id}}' />
                                   <div class="form-group">
                                       <label for="nombre">Nombre</label>
                                       <input type="name" name="name" id="name" class="form-control"
                                           value="">
                                   </div>
                                   <div class="form-group">
                                       <label for="nombre">Apellidos</label>
                                       <input type="name" name="apellidos" id="apellidos" class="form-control"
                                           value="">
                                   </div>
                                   <div class="form-group">
                                       <label for="email">Correo electrónico</label>
                                       <input type="email" name="email" id="email" class="form-control"
                                           value="">
                                   </div>
                                   <div class="form-group">
                                       <label for="tlf">Teléfono</label>
                                       <input type="tel" name="phone" id="phone" class="form-control"
                                           value="">
                                   </div>
                                   <div class="form-group">
                                       <label for="menu"> Menus</label>
                                        <select name="menu">
                                       @foreach($menus as $menu)
                                       <option value="{{$menu->id}}" >{{$menu->nombre}}</option>
                                       @endforeach
                                       <p class="h4 mb-4 text-center"></p>
                                       </select> 
                                   </div>
                                   <div class="form-group">
                                       <label for="comensales"> Número de comensales</label>
                                       <select name="comensales">
                   
                                           <option value="1"> 1 </option>
                                           <option value="2"> 2 </option>
                                           <option value="3"> 3 </option>
                                           <option value="4"> 4 </option>
                                           <option value="4"> 5 </option>
                                           <option value="4"> 6 </option>
                                           <option value="4"> 7 </option>
                                           <option value="4"> 8 </option>


                   
                                       </select>
                                   </div>
                   
                   
                                   <div class="select-editable">
                                       <label for="comensales"> Número de tarjeta</label>
                                       
                   
                                       <input class="card mt-1" type="text" name="tarjeta" placeholder="Inserte su tarjeta" />
                   
                                   
                                   </div><br>
                   
                                   <input type="hidden" id="hora" name="hora" value="{{$hora}}">
                                   <input type="hidden" id="fecha" name="fecha" value="{{$fecha}}">
                   
                                   <div class="form-btn">
                                       <button class="submit-btn">Reservar</button>
                                   </div>
                               </form>
           
                   </div>
               </div>
           </div>
               </main>
               <br><br>
            </div>
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