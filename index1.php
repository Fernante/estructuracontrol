<?php 
echo "<html><head><title>Decisiones</title></head><body style= text-align:center; >";
$num = 5;
/* 
Operadores de comparación
>,<,>=,<=,
== igualdad
=== igualdad estricta (tipo y valor)
!= desigualdad
!== desigualdad estricta (tipo y valor)
*/
echo "<h1>Este es el número $num</h1>";
// Sentecia if
echo "<h3>Ejecutando la sentencia if:</h3>";
if ($num > 4) {
  echo "<p> El número es mayor que 4</p> ";
}
// Sentencia if-else
echo "<h3>Ejecutando la sentencia if-else:</h3>";
if ($num >= 0) {
  echo "<p>El número es positivo</p>";
}else {
  echo "<p>El número es negativo</p>";
}
// Sentencia if-elseif-else
echo "<h3>Ejecutando la sentencia if-elseif-else:</h3>";
if ($num > 0) { 
  echo "<p>El número es positivo</p>";
}elseif ($num == 0) {
  echo "<p>El número es negativo</p>";
}else {
  echo "<p>El número es cero</p>";
}
// Sentencia Switch
echo "<h3>Ejecutando la sentencia Switch:</h3>";
switch ($num) {
  case 0:
    echo "<p>El número es cero</p>";
    break;
  case 1:
    echo "<p>El número es uno</p>";
    break;
    case 2:
    echo "<p>El número es dos</p>";
    break;
    default:
      echo "<p>El número es cero, ni uno, ni dos</p>";
      break; 
    }
echo"</body></html>";
?>