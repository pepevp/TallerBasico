<?php
$usuario = "admin";
?>

<?php if ($usuario == "admin"): ?>
<!-- Código si la condición es verdadera -->
 <p>Bienvenido administrador</p>
<?php else: ?>
<!-- Código si la condición es falsa -->
  <p>Bienvenido chaval</p>
<?php endif; ?>