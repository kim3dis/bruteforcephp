<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <title>bruteforce</title>
    <link href="folhadeestilo.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <!-- <script src="bootstrap/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
  </head>

<?php
include "config.php";
?>

  <body>
    <div class="container">
			<div class="col-xs-x">
        <div class="span1">

          <center> <!-- center da preguiça xd -->
          <div class="caixall">
            <div class="titulo">
              <h2>bruteforce</h2>
            </div>
            <div class="pass_send">
              <form method="post" action="sys.php">
                <input type="password" name="senha" class="pass" />
                <input type="submit" class="send_submit" value="enviar"/>


                <input type="checkbox" name="letras_on" id="letras_on">
                <label for="letras_on">letras</label>


                <input type="checkbox" name="LETRAS_on" id="LETRAS_on">
                <label for="LETRAS_on">LETRAS</label>

                <input type="checkbox" name="number_on" id="number_on">
                <label for="number_on">Números</label>

                <input type="checkbox" name="caracter_on" id="caracter_on">
                <label for="caracter_on">Caracteres</label>
              </form>
            </div>
          </div>
        </center>

        </div>
      </div>
    </div>
  </body>
</html>
