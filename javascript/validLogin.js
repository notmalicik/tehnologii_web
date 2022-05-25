$(document).ready(function() {
    $("#login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            parola: {
                required: true,
                minlength: 6,
            }
        },
        messages: {
            parola: {
                required: "Introduceti parola",
                minlength: "Parola trebuie sa contina mai mult de 6 litere"
            },
            email: "Introduceți un E-mail valid"
        },

    });
});
$("#submit").click(() => {
    $("#login").valid();
    email = $("#email").val();
    parola = $("#parola").val();
    req("/PhP/actionLogin.php?email=" + email + "&parola=" + parola, "response");
    $("#login").trigger("reset");
});