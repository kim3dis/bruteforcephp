
<script src="cronometro.js"></script>
<link href="custom_cronometro.css" rel="stylesheet">
<script>
  iniciar();
</script>

<div class='quadro' style='width:1000px; height600px;'>
  <div class='quadro' style='border: solid 0px #000; width:450px; height: 100px; float: right;'>
    <center>
      <p id='counter'>00:00:00</p><br>
    </center>
  </div>

  <div style='overflow:scroll; width:500px; height:600px; float:left;'>



<?php #sistema
$senha = $_POST["pass"];


if ($senha == "") {
  header("Location:index.php");
}

if (isset($_POST['letras_on']) || isset($_POST['LETRAS_on']) || isset($_POST['number_on']) || isset($_POST['caracter_on'])) {




if (isset($_POST['letras_on'])) {
  $qntd = 26;
  $primeiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z");
  $segundo = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z");
  $terceiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z");
  $quarto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z");
  $quinto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z");
}
if (isset($_POST['LETRAS_on'])) {
  $qntd = 26;
  $primeiro = array("A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $segundo = array("A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $terceiro = array("A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $quarto = array("A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $quinto = array("A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
}

if (isset($_POST['number_on'])) {
  $qntd = 10;
  $primeiro = array(0, 1, 2, 3, 4,
5, 6, 7, 8, 9);
  $segundo = array(0, 1, 2, 3, 4,
5, 6, 7, 8, 9);
  $terceiro = array(0, 1, 2, 3, 4,
5, 6, 7, 8, 9);
  $quarto = array(0, 1, 2, 3, 4,
5, 6, 7, 8, 9);
  $quinto = array(0, 1, 2, 3, 4,
5, 6, 7, 8, 9);
}

if (isset($_POST['caracter_on'])) {
  $qntd = 26;
  $primeiro = array("!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $segundo = array("!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $terceiro = array("!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $quarto = array("!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $quinto = array("!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
}

//VARIAÇOES COM MINUSCULAS
if (isset($_POST['letras_on']) && isset($_POST['LETRAS_on'])) {
  $qntd = 52;
  $primeiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $segundo = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $terceiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $quarto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
  $quinto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "A", "B", "C", "D", "E",
"F", "G", "H", "I", "J", "K", "L", "M", "N",
"O", "P", "Q", "R", "S", "T", "U", "V", "W",
"X", "Y", "Z");
}

if (isset($_POST['letras_on']) && isset($_POST['number_on'])) {
  $qntd = 36;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $segundo = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $terceiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $quarto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "0, 1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $quinto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
}




if (isset($_POST['letras_on']) && isset($_POST['caracter_on'])) {
  $qntd = 52;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $segundo = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $terceiro = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $quarto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
  $quinto = array("a", "b", "c", "d", "e",
"f", "g", "h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u", "v", "w",
"x", "y", "z", "!", "@", "#", "$", "%",
"¨", "&", "*", "(", ")", "-", "+", ".", ",",
"/", "|", ";", ":", "<", ">", "=", "}", "{",
"[", "]", "~");
}

if (isset($_POST['letras_on']) && isset($_POST['caracter_on']) && isset($_POST['LETRAS_on'])) {
  $qntd = 78;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $segundo = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $terceiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quarto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quinto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");

}

if (isset($_POST['letras_on']) && isset($_POST['caracter_on']) && isset($_POST['LETRAS_on']) && isset($_POST['number_on'])) {
  $qntd = 88;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $segundo = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $terceiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quarto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quinto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
}

if (isset($_POST['LETRAS_on']) && isset($_POST['number_on'])) {
  $primeiro = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $segundo = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $terceiro = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $quarto = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $quinto = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
}

if (isset($_POST['caracter_on']) && isset($_POST['number_on'])) {
  $primeiro = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $segundo = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $terceiro = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $quarto = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");
  $quinto = array("A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9");

}

if (isset($_POST['LETRAS_on']) && isset($_POST['caracter_on']) && isset($_POST['number_on'])) {
  $qntd = 62;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $segundo = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $terceiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quarto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
  $quinto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
}

if (isset($_POST['caracter_on']) && isset($_POST['number_on']) && isset($_POST['letras_on'])) {
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "0", "1", "2", "3", "4",
  "5", "6", "7", "8", "9", "!", "@", "#", "$", "%",
  "¨", "&", "*", "(", ")", "-", "+", ".", ",",
  "/", "|", ";", ":", "<", ">", "=", "}", "{",
  "[", "]", "~");
}
// VARIAÇÕES COM MAIUSCULAS

if (isset($_POST['letras_on']) && isset($_POST['number_on']) && isset($_POST['LETRAS_on'])) {
  $qntd = 62;
  $primeiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $segundo = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $terceiro = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $quarto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
  $quinto = array("a", "b", "c", "d", "e",
  "f", "g", "h", "i", "j", "k", "l", "m", "n",
  "o", "p", "q", "r", "s", "t", "u", "v", "w",
  "x", "y", "z", "A", "B", "C", "D", "E",
  "F", "G", "H", "I", "J", "K", "L", "M", "N",
  "O", "P", "Q", "R", "S", "T", "U", "V", "W",
  "X", "Y", "Z", "0", "1", "2", "3", "4",
"5", "6", "7", "8", "9");
}






$_1 = 0;
$_2 = 0;
$_3 = 0;
$_4 = 0;
$_5 = 0;

$tentativas_feitas = 0;



if(isset($_POST['modo_turbo'])) {
  $turbo = strlen($senha);

  switch ($turbo) {
    case 1:
      while ($senha != $bruteforce) {
        $bruteforce = (string) "$primeiro[$_1]";
        echo "$bruteforce";
        echo "<br />";
        $tentativas_feitas++;
        $_1++;
        if ($_1 == $qntd) {
          $_1 = 0;
          break;
        }
      }
    break; // parar o case 1;

    case 2:
      while ($senha != $bruteforce) {
        $bruteforce = "$segundo[$_2]$primeiro[$_1]";
        echo "$bruteforce";
        echo "<br />";
        $_1++;
        $tentativas_feitas++;
        if ($_1 == $qntd) {
          $_1 = 0;
          $_2++;
        }
        if ($_2 == $qntd) {
          $_1 = 0;
          $_2 = 0;
          break;
        }
      }
    break; // break case 2


    case 3:
    while ($senha != $bruteforce) {
      $bruteforce = (string) "$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
      echo "$bruteforce";
      echo "<br />";
      $_1++;
      $tentativas_feitas++;
      if ($_1 == $qntd) {
        $_1 = 0;
        $_2++;
      }
      if ($_2 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3++;
      }
      if ($_3 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3 = 0;
        break;
      }
    }
    break; // fim do case 3


    case 4:
    while ($senha != $bruteforce) {
      $bruteforce = (string) "$quarto[$_4]$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
      echo "$bruteforce";
      echo "<br />";
      $tentativas_feitas++;
      $_1++;
      if ($_1 == $qntd) {
        $_1 = 0;
        $_2++;
      }
      if ($_2 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3++;
      }
      if ($_3 == $qntd) {
        $_1= 0;
        $_2 = 0;
        $_3= 0;
        $_4++;
      }
      if ($_4 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3 = 0;
        $_4 = 0;
        break;
      }
    }
    break;  // break case 4

    case 5:
    while ($senha != $bruteforce) {
      $bruteforce = (string) "$quinto[$_5]$quarto[$_4]$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
      echo "$bruteforce";
      echo "<br />";
      $_1++;
      $tentativas_feitas++;
      if ($_1 == $qntd) {
        $_1 = 0;
        $_2++;
      }
      if ($_2 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3++;
      }
      if ($_3 == $qntd) {
        $_1= 0;
        $_2 = 0;
        $_3= 0;
        $_4++;
      }
        if ($_4 == $qntd) {
          $_1 = 0;
          $_2 = 0;
          $_3 = 0;
          $_4 = 0;
          $_5++;
        }
        if ($_5 == $qntd) {
          break;
        }
      }
      break; // break case 5
  } // fim do switch
} // fim do if modo_turbo
else {


  while ($senha != $bruteforce) {
    $bruteforce = (string) "$primeiro[$_1]";
    echo "$bruteforce";
    echo "<br />";
    $tentativas_feitas++;
    $_1++;
    if ($_1 == $qntd) {
      $_1 = 0;
      break;
    }
  }


  // dois caracteres/*
  while ($senha != $bruteforce) {
    $bruteforce = "$segundo[$_2]$primeiro[$_1]";
    echo "$bruteforce";
    echo "<br />";
    $_1++;
    $tentativas_feitas++;
    if ($_1 == $qntd) {
      $_1 = 0;
      $_2++;
    }
    if ($_2 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      break;
    }
  }


  //três caracteres
  while ($senha != $bruteforce) {
    $bruteforce = (string) "$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
    echo "$bruteforce";
    echo "<br />";
    $_1++;
    $tentativas_feitas++;
    if ($_1 == $qntd) {
      $_1 = 0;
      $_2++;
    }
    if ($_2 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      $_3++;
    }
    if ($_3 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      $_3 = 0;
      break;
    }
  }


  //quatro caracteres
  while ($senha != $bruteforce) {
    $bruteforce = (string) "$quarto[$_4]$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
    echo "$bruteforce";
    echo "<br />";
    $tentativas_feitas++;
    $_1++;
    if ($_1 == $qntd) {
      $_1 = 0;
      $_2++;
    }
    if ($_2 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      $_3++;
    }
    if ($_3 == $qntd) {
      $_1= 0;
      $_2 = 0;
      $_3= 0;
      $_4++;
    }
    if ($_4 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      $_3 = 0;
      $_4 = 0;
      break;
    }
  }



  //cinco caracteres
  while ($senha != $bruteforce) {
    $bruteforce = (string) "$quinto[$_5]$quarto[$_4]$terceiro[$_3]$segundo[$_2]$primeiro[$_1]";
    echo "$bruteforce";
    echo "<br />";
    $_1++;
    $tentativas_feitas++;
    if ($_1 == $qntd) {
      $_1 = 0;
      $_2++;
    }
    if ($_2 == $qntd) {
      $_1 = 0;
      $_2 = 0;
      $_3++;
    }
    if ($_3 == $qntd) {
      $_1= 0;
      $_2 = 0;
      $_3= 0;
      $_4++;
    }
      if ($_4 == $qntd) {
        $_1 = 0;
        $_2 = 0;
        $_3 = 0;
        $_4 = 0;
        $_5++;
      }
      if ($_5 == $qntd) {
        break;
      }
    }
} // fim do else

} else { //TESTAR SE TEM ALGUMA CHECKBOX OFF
  header("Location:index.php");
}






?>

  </div>

  <script>
    pausar();
  </script>

<div class='quadro2' style='width:450px; height: 300px; float: right; margin-top: -20px;'>
<?php

if ($senha == $bruteforce) {
  echo "<br><br><center>Gotcha! Senha encontrada.</center>";
} else {
  echo "<br><br><center>Algo deu errado. Desculpe-me o incoveniente.</center>";
}
  echo "<br>Você inseriu: <b> " .$senha; echo "</b>";
  echo "<br>Sua senha é: <b>"; if ($senha == $bruteforce) { echo "$bruteforce </b>"; } else { echo "???</b>"; }
  //.$bruteforce; echo "</b>";
  echo "<br /> Foram efetuados <b> " .$tentativas_feitas; echo " </b>tentativas.";


  unset($senha, $bruteforce, $tentativas_feitas, $_1);

?>


</div>
</div>
