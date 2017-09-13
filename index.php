<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bruteforce</title>
    <link rel="shortcut icon" href="img/favicon.ico" /> <!-- favicon -->

    <link href="folhadeestilo.css" rel="stylesheet" /> <!-- stylesheet -->
    <link rel="stylesheet" href="animatecss/animate.css">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script> <!-- adicionar lib jquery -->



    <script src="script.js"></script> <!-- script -->
    <!--  -->

  </head>

<?php
include "config.php";
?>

  <body>
    <div id="cloud-container"></div>
    <div>
      <a href="#" class="showhide_more">
        <img src="img/more.png" height="20px" />
        
      </a>
    </div>



    <div class="container">


			<div class="col-xs-x">
        <div class="span1">

          <center> <!-- center da preguiça xd -->
          <div class="caixall">
            <div class="titulo">
              <h2 class="title animated tada">bruteforce</h2>
            </div>
            <div class="pass_send">
              <form method="post" action="sys.php">

                <div id="textos_entrar_limpar">

                  <input id="text_entrar" name="action" type="radio" class="text_entrar" value="entrar">
                  <label for="text_entrar"></label>

                  <input id="text_limpar" name="action" type="reset" class="text_limpar" value="reset">
                  <label for="text_limpar">LIMPAR</label>
                </div>


                <input type="password" name="pass" class="pass" id="pass" /> <!-- caixa da senha -->
                <br>
                <input value="enviar" type="submit" class="send_submit">


                <!-- botão submit -->

            </div>
          <br>
          </div>


              <div id="checkboxs_turbo">
                <div id="radio_set">
                  <input type="checkbox" name="letras_on" id="letras_on" checked="checked">
                  <label for="letras_on" class="letras_on">Minúsculas</label>

                  <input type="checkbox" name="LETRAS_on" id="LETRAS_on">
                  <label for="LETRAS_on" class="LETRAS_on">Maiúsculas</label>

                  <input type="checkbox" name="number_on" id="number_on">
                  <label for="number_on" class="number_on">Números</label>

                  <input type="checkbox" name="caracter_on" id="caracter_on">
                  <label for="caracter_on" class="caracter_on">Caracteres</label>
                </div>
                <br>
                <br>
                <div id="turbo">
                  <input type="checkbox" name="modo_turbo" id="modo_turbo">
                  <label for="modo_turbo" id="lbl_modo_turbo">Modo rápido</label>
                </div>
              </div>


                <script src="jquery-ui/jquery-ui.js"></script>
                <script>
                  $("#turbo").buttonset();
                  $("#radio_set").buttonset();
                </script>

              </form>
            </div>
          </div>
        </center>

        </div>
      </div>
    </div>
  </body>
</html>
