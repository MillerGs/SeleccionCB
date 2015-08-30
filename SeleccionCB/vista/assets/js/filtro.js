function funcionFiltro(){
    var valorFiltro = document.getElementById('FiltroDato').value;
    if(valorFiltro == ""){   
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 1){
        $("#ejercicio1").show();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 2){
        $("#ejercicio1").hide();
        $("#ejercicio2").show();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 3){
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').show();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 4){
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').show();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 5){
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').show();
        $('#ejercicio6').hide();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 6){
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').show();
        $('#ejercicio7').hide();
    }
    if(valorFiltro == 7){
        $("#ejercicio1").hide();
        $("#ejercicio2").hide();
        $('#ejercicio3').hide();
        $('#ejercicio4').hide();
        $('#ejercicio5').hide();
        $('#ejercicio6').hide();
        $('#ejercicio7').show();
    }
}