<?php
$directorio_actual = getcwd();
$archivo_actual = basename($_SERVER['PHP_SELF']);
$ruta= "img/logo.jpg";
$close = "";
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-size: 2.5rem;"><img class="rounded-image me-2" src="<?php echo($ruta)?>" alt="" width="10%">C-Trix Electronics</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <p class="text-light">¡Bienvenido <?php if(isset($_SESSION['usr_log'])){ $usuario = explode("|", $_SESSION['usr_log']); $idregistro = $usuario[1]; echo $idregistro;} ?> !</p>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
  <a class="btn text-light me-2" href="../index.php">Inicio</a>
</li>
<li class="nav-item">
  <a class="btn text-light me-2" href="">Buscar fuga</a>
</li>
<li class="nav-item">
  <a class="btn text-light me-2" href="">Reportar fuga</a>
</li>
<li class="nav-item">
  <a class="btn text-light me-2" href="pages/iniciosesion.php">Iniciar Sesion</a>
</li>
<li class="nav-item">
  <a class="btn text-light me-2" href="pages/registro.php">Registrarse</a>
</li>
<li class="nav-item">
  <a class="btn text-light"><i class="fa-solid fa-cart-shopping"></i></a>
</li>
<li class="nav-item">
  <a aria-label="Texto descriptivo del enlace" class="btn text-light" href="<?php echo($close) ?>"><i class="fa-solid fa-right-from-bracket"></i></a>
</li>

        </ul>
      </div>
    </div>
  </nav>