<!DOCTYPE html>
<html>
<head>
    <title>Reserva</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

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
	color: white;

    
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

</head>
<script src="https://kit.fontawesome.com/875ee67fb5.js" crossorigin="anonymous"></script>

<script>
  function scrollear(idelem){
    var element = document.getElementById(idelem);
    element.scrollIntoView();}
</script>
<body>
  

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

<div class="container">
    <br />
    <h1 class="text-center text-primary" id="tituloR">Reservar</h1>
    <br />

    <form id="Horario" action="/reserva" method="POST">
        @csrf
        <input type="hidden" id="hora" name="hora">
        <input type="hidden" id="fecha" name="fecha">
        <input type="hidden" id="horario" name="horario">
    </form>
    <div id="calendar"></div><br>
    <center><h1 id="seleccionhoras"></h1>
    <div id="horas"></div></center>

</div>  
   
<script>

    
document.addEventListener('DOMContentLoaded', function() {

   $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar:{
            left:'prev,next today',
            center:'title',
            right:'prev,next'
        },
        locales: 'es',
        initialView: 'dayGridMonth',
         selectable:true,        
        editable:false,
        events: '/fullcalender',
        eventClick:function(event){
            let fecha = moment(event.event.start).format('YYYY-MM-DD');
            $.ajax({
                type: 'GET',
                url: 'fullcalenderajax',

                data: {
                 fecha:fecha,
                },
                success: function(response){
                scrollear('horas');
                    
                var horas=document.getElementById('horas');
                horas.innerHTML="";
                response.forEach(function(response){
                    seleccionhoras.innerText = 'Seleccione una de las horas disponibles';


                    var boton=document.createElement('button');
                    boton.className="btn  btn-primary text-4xl mt-";
                    boton.setAttribute('id',"botonhora");
                    boton.innerHTML=response.hora;
                    horas.appendChild(boton);
                    boton.addEventListener("click", function() {
                    document.getElementById('horario').value=response.id;
                    document.getElementById('hora').value=response.hora;
                    document.getElementById('fecha').value=fecha;
                    document.getElementById('Horario').submit();    
                    
                });
              



                });


                
                }
            });
        },
    });
    calendar.render();
});  
</script>
<br><br>
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
					<li class="fa-brands fa-twitter" data-wow-delay="0.6s"> </li><br>
					<li class="fa-brands fa-instagram" data-wow-delay="0.9s"> </li><br>
					<li class="fa fa-github wow bounceIn" data-wow-delay="0.9s"> </li>
				</ul>
			</div>
		</div>
	</div>

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

</body>
</html>
