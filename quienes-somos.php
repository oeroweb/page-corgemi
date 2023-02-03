<?php include ('layout/header.php') ?> 

<body class="">
  <div class="loader" id="loader">
    <div class="preloader"></div>
  </div>
  <header class="header hidden" id="header">
    <div class="navbar-top">
      <div class="center">
        <div class="container-wrap space-between">
            <div class="logo ">              
              <img src="assets/img/logo.png" class="img-logo" alt="Logo CORGEMISAC">
              <p class="text-logo">Corporación de Gestión Empresarial,<br>Ingeniería y Servicios</p>              
            </div>
            <div class="btn-menu hidden" id="btn-menu">
              <i class="icono fas fa-bars"></i>
            </div> 
            <nav class="navbar" id="navbar">
            <a class="nav-link" href="index.php#bloq1">Inicio</a>
              <a class="nav-link" href="index.php#bloq2">¿Quiénes somos?</a>
              <a class="nav-link" href="index.php#bloq3">¿Qué hacemos?</a>              
              <a class="nav-link" href="index.php#bloq4">Contacto</a>             
            </nav>        
        </div>
      </div>
    </div>
  </header>

  <section class="quienes-content">      
    <div class="center">
      <h2 class="title">¿Quiénes Somos?</h2>
      <div class="inner-content">
        <div class="item-present">          
          <p class="text">Somos una organización que brinda servicios especializado en Ingeniería y Consultorías, comprometida con el desarrollo social de las organizaciones, aplicando las mejores herramientas del mercado competitivo, fomentando el “aprender-haciendo”, aplicando herramientas tecnológicas que nos permita organizar un trabajo oportuno y adecuado.</p>          
          <div class="aniview" data-av-animation="fadeInUp">
            <p class="text">Creamos soluciones a través de servicios de Ingeniería y Consultorías, Asistencias Técnicas y Servicios Generales especializados y personalizados en función a los procedimientos internos de la organización, aportando mejoras para ser competitivos y obtener mejores resultados y rentabilidad, como por ejemplo desarrollar proyectos que superen las expectativas de nuestros clientes. Nuestros servicios se organizan en el marco del trabajo en equipo, la comunicación y la confianza con nuestros clientes.</p>
          </div>                      
        </div>
        <div class="item-present">
          <div class="box-img-hover">
            <div class="aniview" data-av-animation="fadeInUp">
              <img src="assets/img/images/services.jpg" alt="imagen">
            </div>
          </div>
        </div>      
        <div class="item-present">
          <h2 class="title aniview" data-av-animation="fadeInUp">Visión</h2>
          <div class="aniview" data-av-animation="fadeInUp">
            <p class="text">Ser una organización reconocida y de prestigio a nivel nacional e internacional que cuente con los mejores profesionales para brindar servicios de Ingeniería, Consultorías técnicas de calidad que sirvan de aporte a las organizaciones para su rentabilidad, desarrollado con herramientas de vanguardia y tecnología de punta para el sector público y privado de gobiernos nacionales e internacionales al 2026.</p>
          </div>
        </div>        
        <div class="item-present">
          <h2 class="title aniview" data-av-animation="fadeInUp">Misión</h2>
          <div class="aniview" data-av-animation="fadeInUp">
            <p class="text">Elaborar productos y servicios de calidad que sirva para el crecimiento y desarrollo de una organización y/o un gobierno, con profesionales calificados y de servicio que vean a nuestros clientes como parte de su familia.</p>
          </div>
        </div>
      </div>
    </div>    
  </section>

  <?php   
    include ('repeat/section-contact.php');
    include ('layout/footer.php');
  ?> 
</body>
</html>

<script>
  $('.number').keypress(function(tecla) {
    if(tecla.charCode < 46 || tecla.charCode > 57) return false;
  });

  $('.texto').keypress(function(tecla) {
    if((tecla.charCode < 97 || tecla.charCode > 122) && (tecla.charCode < 65 || tecla.charCode > 90) && (tecla.charCode != 32) ) return false;
  });

  $('#ruc').keyup(validateMaxLength);
  $('#telefono').keyup(validateMaxLength);

  function validateMaxLength(){
    var text = $(this).val();
    var maxlength = $(this).data('maxlength');
    if(maxlength > 0) {
      $(this).val(text.substr(0, maxlength)); 
    }
  }
  
</script>
	