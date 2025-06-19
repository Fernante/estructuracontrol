<?php 
$encabezado = "<html><head></head><body>";
$pie = "</body></html>";
echo $encabezado;
$num = 0;
// bucle While
echo "<h4> Mientras \$num &lt;= 5</h4>";
while ($num <=5){
  echo "<p>El número es: $num</p>";
  $num++;
}
  // Bucle Do While
echo "<h4>Haciendo un do while</h4>";
do {
  echo "<h3>El número es: $num</h3>";
  $num++;

}while ($num < 5);

//Bucle for
echo "<h4>Haciendo un For</h4>";
for ($num; $num <= 7; $num++){
  echo "<p>El número es: $num</p>";
}
// Array de ejemplo
$colores = array("rojo","verde","azul","amarillo","naranja");
// Bucle Foreach
echo "<h4>Haciendo un foreach</h4>";
foreach($colores as $color){
  echo "<p>El color es: $color</h4>";
}
echo $pie;
?>