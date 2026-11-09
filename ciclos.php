<?php
$numero = 2;

echo "<h3>Tabla de multiplicar del $numero</h3>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    // Usamos <br> para que salte de línea en el navegador
    echo "$numero x $i = $resultado <br>"; 
}

// ciclo while
$numero = 2;
$i = 1;

echo "<br>";
echo "<h3>Tabla de multiplicar del $numero</h3>";


// Mientras $i sea menor o igual a 10
while ($i <= 10) {
    $resultado = $numero * $i;
    
    // Imprime el resultado y hace un salto de línea vertical
    echo "$numero x $i = $resultado <br>";
    
    // Incrementa el contador para evitar un bucle infinito
    $i++; 
    }
    
    
    //Ciclo do.while
    
    $numero = 2;
    $i = 1;
    
    echo "<br>";
    echo "<h3>Tabla de multiplicar del $numero</h3>";
    
    // Ejecuta el bloque primero...
    do {
        $resultado = $numero * $i;
    
    // Imprime el resultado y hace un salto de línea vertical
    echo "$numero x $i = $resultado <br>";
    
    // Incrementa el contador
    $i++; 
    
    // ...y evalúa la condición al final
    } while ($i <= 10);
?>
?>