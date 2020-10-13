<!DOCTYPE html>
<html lang="en">

<head>
    <title>.::. LunaMedi .::. </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Iconos -->
    <link rel="stylesheet" href="{{ asset('fontawesome-5.10.2/css/all.css') }}">
</head>

<body>
    <div class="container-xl" >

    <img src="img/baner3.png" class="img-fluid" alt="Responsive image">
    </div>

   <!-- style="background-color:#e6e6e6;"-->
 
    <div class="container-xl">

    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#18273a;"> 
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/lop7.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-center " style=" background: rgba(0, 0, 255, 0.3)">
        <h5 >Predicción</h5>
        <p>Lunares benignos y malignos a través del uso de Redes Neuronales Profundas.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/lop5.png" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block" style=" background: rgba(0, 0, 255, 0.3)">
        <h5>Lunares</h5>
        <p>Se producen cuando las células productoras de pigmento de la piel, llamadas melanocitos, crecen en grupos</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/lop11.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style=" background: rgba(0, 0, 255, 0.3)">
        <h5>Melanoma</h5>
        <p>Una de las formas de cáncer más comunes, representa un riesgo grave para la salud  en todo el mundo.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

          
    <div class="container-xl" style="background-color:#eff4ff;">
    <br>

    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card text-center  " id="NP" >
  <div class="card-header text-center  " style=" background:#4169E1">
  <strong>¿Te gustaria obtener una predicción?</strong>
  </div>
  <div class="card-body">
    <h5 class="card-title text-justify  "> Envianos tu fotografia y con ella podremos identificar, clasificar y predecir  si tu lunar 
  es benigno o maligno mediante el uso de redes neuronales con el objetivo de proporcionar 
    una herramienta de soporte para la detección de alguna patologia maligna en tu piel.

</h5> <br>
<strong>¡Envianos la fotografia de tu lunar!</strong>
<br>
<br>
<div class="container">

<div class="row justify-content-center ">
    <div class="col-md-8">
<div class="card text-center border-success   " id="Lunares"   >
  <div class="card-header text-center " style=" background: #32CD32">
  <strong>Registro</strong>
  </div>
  <div class="card-body text-justify">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo@gmail.com">
    <small id="emailHelp" class="form-text text-muted">Ingresa tu email para enviarte los resultados de tu predicción</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carga tu fotografia</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
 
  <button type="submit" class="btn  btn-block btn-primary">Enviar</button>
</form>
   </div>
   </div>
   
  </div>
</div>
</div>

  
  </div>
<br>

</div>
</div>

</div>
    
    </div>

<!--Pie de pagina-->

 

 
</body>

</html>
