<link rel="stylesheet" href="functions.css">
<link rel="shortcut icon" href="img/php.ico" type="image/x-icon">
<?php
$palavra = $_POST["f_palavra"];
$frase = $_POST["f_frase"];

$vogais = ["a", "á", "à", "ã", "â", "ä", "e", "é", "è", "ê", "ë", "i", "í", "ì", "î", "ï", "o", "ó", "ò", "õ", "ô", "ö", "u", "ú", "ù", "û", "ü", "A", "Á", "À", "Ã", "Â", "Ä", "E", "É", "È", "Ê", "Ë", "I", "Í", "Ì", "Î", "Ï", "O", "Ó", "Ò", "Õ", "Ô", "Ö", "U", "Ú", "Ù", "Û", "Ü"];

$consoantes = ["q", "w", "r", "t", "y","ý","ÿ", "p", "s", "d", "f","g", "h", "j", "k", "l", "ç", "z", "x", "c", "v", "b", "n","ñ", "m", "Q", "W", "R", "T", "Y","Ý", "P", "S", "D", "F", "G", "H", "J", "K", "L", "Ç", "Z", "X", "C", "V", "B", "N","Ñ", "M"];

$palavra_sem_vogais = str_replace($vogais, "_", $palavra);
$palavra_sem_consoantes = str_replace($consoantes, "_", $palavra);

$frase_sem_vogais = str_replace($vogais, "_", $frase);
$frase_sem_consoantes = str_replace($consoantes, "_", $frase);

print '<h1>Resultado obtido dos dados</h1>';
print '<p>A palavra é "' . $palavra . '"<br>A frase é "' . $frase . '"</p>';
echo '<hr>';
print '<h1>Resultados com a Palavra:</h1>';
print '<h2>Caracteres: ' . strlen($palavra) . '</h2>';
print '<h2>Maiúscula: ' . strtoupper($palavra) . '</h2>';
print '<h2>Minúscula: ' . strtolower($palavra) . '</h2>';
print '<h2>Sem vogais: ' . $palavra_sem_vogais . '</h2>';
print '<h2>Sem consoantes: ' . $palavra_sem_consoantes . '</h2>';
echo '<hr>';
print '<h1>Resultados com a Frase:</h1>';
print '<h2>Caracteres: ' . strlen($frase) . '</h2>';
print '<h2>Maiúscula: ' . strtoupper($frase) . '</h2>';
print '<h2>Minúscula: ' . strtolower($frase) . '</h2>';
print '<h2>Sem vogais: ' . $frase_sem_vogais . '</h2>';
print '<h2>Sem consoantes: ' . $frase_sem_consoantes . '</h2>';
print '<a href="index.html"><button>Voltar</button></a>';
?>
