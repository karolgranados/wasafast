<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/wasacaka/views/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Carousel Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

  

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


<link href="/wasacaka/views/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }


     
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }




      

      body {
  padding-top: 3rem;
  padding-bottom: 3rem;
}


.carousel {
  margin-bottom: 4rem;
}

.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}


.carousel-item {
  height: 32rem;
}


.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}

.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


.featurette-divider {
  margin: 5rem 0; 
   
}


.featurette-heading {
  letter-spacing: -.05rem;
}



@media (min-width: 40em) {
  
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}


.featurette {
  margin-bottom: 4rem;
}

.featurette-heading {
  font-size: 2.5rem;
  margin-bottom: 1rem;

}

.text-body-secondary {
  color: #6c757d;
}

.align-items-center {
  align-items: center;
}

.text-center {
  text-align: center;
}

.text-md-start {
  text-align: start; 
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.carousel-caption .btn {
  background-color: #ffbd59;
  border-color: #ffbd59;
}

.carousel-caption .btn:hover {
  background-color: #8d5e17;
  border-color: #8d5e17;
}

body {
    background-color: #f5f5dc; /* Beige clarito */
  }

  /* Encabezados principales */
  h1, h2 {
    color: #d35400; /* Un color naranja para los encabezados */
  }

  /* Color del texto secundario */
  .text-body-secondary {
    color: #8d5e17 !important; /* Un color marrón */
  }

  /* Fondo del carrusel */
  .carousel-item {
    background-color: #fff4e6; /* Un tono claro de naranja */
  }

  /* Botones en el carrusel */
  .carousel-caption .btn-primary {
    background-color: #ffbd59;
    border-color: #ffbd59;
  }

  .carousel-caption .btn-primary:hover {
    background-color: #8d5e17;
    border-color: #8d5e17;
  }

  /* Color de fondo para las secciones featurette */
  .featurette {
    background-color: #f5f5dc; /* Beige clarito */
    padding: 2rem;
    border-radius: 10px;
  }

  /* Borde inferior en las secciones featurette */
  .featurette-divider {
    border-color: #ffbd59;
  }

  /* Color de los textos en las featurettes */
  .lead {
    color: #6c757d; /* Color gris oscuro */
  }

  /* Color de fondo para las imágenes */
  .featurette-image {
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: opacity 0.3s ease; /* Transición suave */
  }

  /* transparentar cuando pase el cursor */
  .featurette-image:hover {
    opacity: 0.8;
  }

  /* Enlaces */
  a {
    color: #d35400;
  }

  a:hover {
    color: #8d5e17;
  }


    </style>

    
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    

    <?php include __DIR__ . "/views/layout/header.php"; ?>

    <br>

    <div class="container">
      <div class="row">
          
<main>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
  <image href="//localhost/wasacaka/views/img/corusel3.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"/>
</svg>
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>¡Bienvenido a WasaFast!</h1>
          <p class="opacity-75"> La nueva plataforma de domicilios de Wasacaka Donde Yoe! <br> Regístrate ahora y lleva el auténtico sabor Colombo-venezolano directo a tu puerta.</p>
          <p><a class="btn btn-lg btn-primary"  href="http://localhost/wasacaka/views/pages/register.php">Regístrate</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
  <image href="//localhost/wasacaka/views/img/corusel1.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"/>
</svg>
      <div class="container">
        <div class="carousel-caption">
          <h1>¡Tenemos una Sede!</h1>
          <p>¿Qué esperas para visitarnos? <br> ¡Ven ya a nuestros punto físico! </p>
          <p><a class="btn btn-lg btn-primary" href="http://localhost/wasacaka/views/pages/nosotros.php">Encuéntranos</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <image href="//localhost/wasacaka/views/img/corusel2.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" style="opacity: 0.9;"/>
    </svg>
    <div class="container">
        <div class="carousel-caption text-end">
          <h1>Prueba nuestras delicias</h1>
          <p>Deléitate con nuestras mejores preparaciones</p>
          <p><a class="btn btn-lg btn-primary" href="http://localhost/wasacaka/views/pages/menu.php">Menú</a></p>
        </div>
      </div>
</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container marketing">



  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Guasacaca<br><span class="text-body-secondary">La Salsa de la Casa</span></h2>
      <p class="lead">En Wasacaka, nuestra salsa de la casa, no solo realza los sabores de cada plato, sino que también inspira nuestro nombre. Esta mezcla fresca de aguacate, cilantro y especias es el corazón de nuestra cocina, llevando un pedacito de la tradición venezolana a tu mesa, en forma de Guasacaca.
      </p>
    </div>
    <div class="col-md-5">
    <img src="//localhost/wasacaka/views/img/sala_guasacaca.jpg" alt="Descripción de la imagen" class="featurette-image img-fluid mx-auto" width="500" height="500">
</div>

  </div>

  <hr class="featurette-divider">

  <div class="row featurette align-items-center">
    <div class="col-md-7 order-md-2 text-center text-md-start">
      <h2 class="featurette-heading fw-normal lh-2">Almuerzos Caseros<span class="text-body-secondary"><br>Llevamos a donde nos pidas el sabor a hogar</span></h2>
      <p class="lead">Además de nuestra comida rápida, en Wasacaka Donde Yoe ofrecemos almuerzos caseros que varían cada día. Disfruta de platos frescos y deliciosos, como guisos y ensaladas, preparados con ingredientes de alta calidad. Cada día te ofrecemos una nueva opción casera para un almuerzo rico y reconfortante, que te hará sentir como en casa.</p>
    </div>
    <div class="col-md-5 text-center">
      <img src="//localhost/wasacaka/views/img/menu.jpg" alt="Descripción de la imagen" class="featurette-image img-fluid mx-auto" width="500" height="500">
    </div>
</div>


  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">Apoyamos la Economía Colombiana </h2>
      <p class="lead">"En Wasacaka Donde Yoe, nos enorgullece apoyar a los emprendimientos nacionales y locales. Colaboramos con proveedores de todo el país para ofrecerte ingredientes frescos y de alta calidad, al mismo tiempo que impulsamos la economía local. Cada bocado que disfrutas con nosotros no solo refleja nuestro compromiso con la calidad, sino también con el crecimiento y desarrollo de nuestra comunidad y del país. ¡Gracias por ser parte de este esfuerzo!</p>
    </div>
    <div class="col-md-5 text-center">
      <img src="//localhost/wasacaka/views/img/emprendimiento.jpg" alt="Descripción de la imagen" class="featurette-image img-fluid mx-auto" width="500" height="500">
    </div>
  </div>

  <hr class="featurette-divider">

  

</div>

<script src="/wasacaka/views/assets/js/bootstrap.bundle.min.js"></script>

      </div>
    </div>

    <?php include __DIR__ . "/views/layout/footer.php"; ?>

 </body>
</html>