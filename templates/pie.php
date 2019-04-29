</section>
<!--FINAL DEL CONTENEDOR PRINCIPAL-->

	<footer>
		<h3>Videos ProPixel</h3>
    <div class="mapita">
      
    </div>
		<div class="footer_videos">
			<iframe src="https://www.youtube.com/embed/P30HF1qIYkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe src="https://www.youtube.com/embed/JA58opsld9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe src="https://www.youtube.com/embed/o9W7m_X2g0M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="footer_contenido">
			<div class="footer_col">
				<h3>Encuentranos aqui!!</h3>
        <div id="map" class="mapita2">
          
        </div>

    <script>
      var customLabel = {
        restaurant: {
          label: "R"
        },
        bar: {
          label: "B"
        }
      };

      function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
          center: new google.maps.LatLng(-16.40115, -71.529824),
          zoom: 18
        });
        var ubi = { lat: -16.40115, lng: -71.529824 };
        var latLongPazPeru = { lat: -16.457736, lng: -71.53044 };
        var latDos = { lat: -16.456736, lng: -71.53014 };
        var latTres = { lat: -16.453736, lng: -71.53064 };
        var latCuatro = { lat: -16.451736, lng: -71.53094 };
        var latCinco = { lat: -16.459736, lng: -71.53034 };
        var Marker=new google.maps.Marker({

        });
        var pazPeru = new google.maps.Marker({
          position: ubi,
          map: map,
          label: "l",
          icon: "img/marcador.png",
          draggable: true,
          animation: google.maps.Animation.DROP,
          title: "Aqui estamos!!!"
        });
        new google.maps.Marker({
          position: latDos,
          map: map,
          label: "l",
          icon: "img/carrin.png"
        });
        new google.maps.Marker({
          position: latTres,
          map: map,
          label: "l",
          icon: "img/carrin.png"
        });
        new google.maps.Marker({
          position: latCuatro,
          map: map,
          label: "l",
          icon: "img/carrin.png"
        });
        new google.maps.Marker({
          position: latCinco,
          map: map,
          label: "l",
          icon: "img/carrin.png"
        });

        var infoWindow = new google.maps.InfoWindow();
      }
    </script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1OTUCWFO21snB64uTCKgsDmi3UlP5FCo&callback=initMap"
      async
      defer
    ></script>
			</div>
			<div class="footer_col">
				<ul>
					<li>Números de contactos</li>
					<li>Calle Muñoz Najar 205</li>
					<li>Central</li>
					<li>(054) 425-1191</li>
				</ul>
			</div>
			<div class="footer_col">
				<ul>
					<li>ventasweb@techhouse.com</li>
					<li>ventas@techhouse.com</li>
					<li>online@techhouse.com</li>
					<li>974 587 447</li>
					<li>988 587 144</li>
					<li>936 587 447</li>
					<li>936 858 778</li>
				</ul>
			</div>
		</div>
		<div class="footer_abajo">
			<small>2018 Tech House Perú E.I.R.L. - Todos los derechos reservados</small>
		</div>
	</footer>
</body>
</html>