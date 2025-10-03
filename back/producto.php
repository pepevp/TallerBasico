<?php
// Definir dos productos en arrays asociativos
$productos = [
    [
        "nombre" => "Zapatos deportivos",
        "precio" => 59.99,
        "categoria" => "Calzado",
        "descripcion" => "Zapatos cómodos para correr y entrenar.",
        "imagen" => "https://via.placeholder.com/400x200?text=Zapatos+Deportivos"
    ],
    [
        "nombre" => "Camiseta deportiva",
        "precio" => 29.50,
        "categoria" => "Ropa",
        "descripcion" => "Camiseta ligera y transpirable para deporte.",
        "imagen" => "https://via.placeholder.com/400x200?text=Camiseta+Deportiva"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista de Productos</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      padding: 40px 20px;
      background-color: #f8f9fa;
    }
    .product-card {
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      background-color: white;
      padding: 20px;
      margin-bottom: 30px;
    }
    .product-img {
      max-height: 200px;
      object-fit: contain;
      border-radius: 10px;
      width: 100%;
      margin-bottom: 15px;
    }
    .category-badge {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="mb-4 text-center">Productos disponibles</h1>

    <div class="row">
      <?php foreach ($productos as $producto): ?>
        <div class="col-md-6">
          <div class="product-card">
            <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" class="product-img" />
            <h2 class="mb-2"><?php echo htmlspecialchars($producto['nombre']); ?></h2>
            <div class="mb-2">
              <span class="h5 text-success">$<?php echo number_format($producto['precio'], 2); ?></span>
            </div>
            <div class="mb-3">
              <span class="badge bg-primary category-badge"><?php echo htmlspecialchars($producto['categoria']); ?></span>
            </div>
            <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
