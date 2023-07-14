<!DOCTYPE html>
<html>
<head>
  <title>Ejercicios de PHP</title>
  <style>
    body {
      background-color: rgb(160, 171, 201);
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .rectangle {
      width: 400px;
      height: 200px;
      background-color: black;
      border-radius: 20px;
      padding: 20px;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      color: whitesmoke;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="rectangle">

    <?php
$cadena1 = "A man a plan a canal Panama";
$cadena2 = "Hola mundo";

// Eliminar espacios en blanco y puntuación de la cadena 1
$cadena1 = preg_replace('/[^A-Za-z0-9]/', '', $cadena1);
$cadena1 = strtolower($cadena1);

// Eliminar espacios en blanco y puntuación de la cadena 2
$cadena2 = preg_replace('/[^A-Za-z0-9]/', '', $cadena2);
$cadena2 = strtolower($cadena2);

// Obtener la longitud de la cadena 1
$longitud1 = strlen($cadena1);

// Recorrer la mitad de la cadena 1 y comparar los caracteres
for ($i = 0; $i < $longitud1 / 2; $i++) {
  if ($cadena1[$i] != $cadena1[$longitud1 - $i - 1]) {
    $palindromo1 = false;
    break;
  }
}
// Obtener la longitud de la cadena 2
$longitud2 = strlen($cadena2);

// Recorrer la mitad de la cadena 2 y comparar los caracteres
for ($i = 0; $i < $longitud2 / 2; $i++) {
  if ($cadena2[$i] != $cadena2[$longitud2 - $i - 1]) {
    $palindromo2 = false;
    break;
  }
}
// Verificar si las cadenas son palíndromos
if (isset($palindromo1) && $palindromo1) {
  echo "$cadena1 es un palíndromo";
} else {
  echo "$cadena1 no es un palíndromo";
}

if (isset($palindromo2) && $palindromo2) {
  echo "$cadena2 es un palíndromo";
} else {
  echo "$cadena2 no es un palíndromo";
}
    ?>

    </div>
  </div>
</body>
</html>
