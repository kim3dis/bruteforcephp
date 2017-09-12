$(document).ready(function(){
  $("#letras_on").hide();
  $("#LETRAS_on").hide();
  $("#number_on").hide();
  $("#caracter_on").hide();
  $(".letras_on").hide();
  $(".LETRAS_on").hide();
  $(".number_on").hide();
  $(".caracter_on").hide();
  $("#spinnerLimite").hide();
  $("#lbl_spinnerLimite").hide();
  $("#lbl_spinnerLimite2").hide();
  $("#modo_turbo").hide();

  $("#lbl_modo_turbo").hide();

    $(".showhide_more").click(function(){
        $("#letras_on").toggle();
        $("#LETRAS_on").toggle();
        $("#number_on").toggle();
        $("#caracter_on").toggle();
        $(".letras_on").toggle();
        $(".LETRAS_on").toggle();
        $(".number_on").toggle();
        $(".caracter_on").toggle();
        $("#spinnerLimite").toggle();
        $("#lbl_spinnerLimite").toggle();
        $("#lbl_spinnerLimite2").toggle();
        $("#modo_turbo").toggle();
        $("#lbl_modo_turbo").toggle();

    });
});
