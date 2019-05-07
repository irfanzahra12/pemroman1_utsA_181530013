function hitung_kekurangan1(){
    var sdhdibayar1 = $("#sdhdibayar1").val();
    var kekurangan1 = 20000 - parseInt(sdhdibayar1);
    $("#kekurangan1").val(kekurangan1);
}

function hitung_kekurangan2(){
    var sdhdibayar2 = $("#sdhdibayar2").val();
    var kekurangan2 = 20000 - parseInt(sdhdibayar2);
    $("#kekurangan2").val(kekurangan2);
}

function hitung_kekurangan3(){
    var sdhdibayar3 = $("#sdhdibayar3").val();
    var kekurangan3 = 20000 - parseInt(sdhdibayar3);
    $("#kekurangan3").val(kekurangan3);
}
$(document).ready(function () {
   
    $("#sdhdibayar1").keyup(function () {
        hitung_kekurangan1();
    });

$(document).ready(function () {

    $("#sdhdibayar2").keyup(function () {
        hitung_kekurangan2();
    });
$(document).ready(function () {

    $("#sdhdibayar3").keyup(function () {
        hitung_kekurangan3();
    });

});
});
});