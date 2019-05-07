function aksi_login1() {
    var email = $("#email").val();
    var password = $("#password").val();

    if(email =="") {
        alert("email belum diisi");
    }else if(password ==""){
        alert("password belum diisi");
    }else if(email =="181530015@gmail.com" && password =="UTSB"){
        alert("Anda berhasil login");
        window.location = "index.php";
    }else{
        alert("Email dan password yang anda masukkan salah");
    }                  
}

function aksi_login2() {
    var email = $("#email").val();
    var password = $("#password").val();

    if(email =="") {
        $("registrasi-link").show();
        $("#validasi").html("Email belum diisi").show();
    }else if(password ==""){
        $("registrasi-link").show();
        $("#validasi").html("Password belum diisi").show();
    }else if (email =="181530015@gmail.com" && password =="UTSB"){
        window.location = "index.php";
    }else{
        $("registrasi-link").show();
        $("#validasi").html("Email dan password yang anda masukkan salah").show();
    }                  
}

$(document).ready(function () {

    $(".register-Link").hide();

    $("#btnlogin").click(function () {
        aksi_login2();
    });

});