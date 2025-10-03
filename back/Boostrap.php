<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Navbar con Dropdown Izquierda</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    .hero {
      background-color: #f8f9fa;
      padding: 60px 0;
      text-align: center;
    }
    .footer {
      background-color: #212529;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">MiLogo</a>

      <!-- Botón para mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú colapsable -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <!-- Menú desplegable (dropdown) -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menú
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Opción 1</a></li>
              <li><a class="dropdown-item" href="#">Opción 2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Opción 3</a></li>
            </ul>
          </li>

          <!-- Otros enlaces simples -->
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="display-4">Bienvenido a Mi Sitio Web</h1>
      <p class="lead">Ejemplo con menú desplegable arriba a la izquierda usando Bootstrap 5.</p>
      <a href="#" class="btn btn-primary btn-lg mt-3">Empezar</a>
    </div>
    
  </section>

  
  <!-- Contenido principal con cards -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="images.png" class="card-img-top" alt="Imagen 1" />
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Descripción breve de la tarjeta 1.</p>
              <a href="#" class="btn btn-outline-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="images.png" class="card-img-top" alt="Imagen 2" />
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Descripción breve de la tarjeta 2.</p>
              <a href="#" class="btn btn-outline-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="images.png" class="card-img-top" alt="Imagen 3" />
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Descripción breve de la tarjeta 3.</p>
              <a href="#" class="btn btn-outline-primary">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p class="mb-0">&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
