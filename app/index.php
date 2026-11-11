<?php
echo "<h1>Mesa de Ayuda - UNIVERSIDAD COOPERATIVA DE COLOMBIA</h1>";
$conn = @new mysqli("db", "root", "root123", "mesa_ayuda");
if ($conn->connect_error) {
  echo "Esperando BD...";
} else {
  echo "Conexion BD OK";
}
?>
<h2>Crear Ticket</h2>
<form method="POST">
  Titulo: <input name="titulo"><br><br>
  Descripcion: <textarea name="desc"></textarea><br><br>
  <button>Enviar</button>
</form>