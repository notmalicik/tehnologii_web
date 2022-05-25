$(document).ready(function() {
    $("#reg").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            parola: {
                required: true,
                minlength: 6,
            },
            parola_confirm: {
                minlength: 6,
                equalTo: "#parola"
            }
        },
        messages: {
            parola: {
                required: "Introduceti parola",
                minlength: "Parola trebuie sa contina mai mult de 6 litere"
            },
            parola_confirm: {
                required: "Introduceți parola încă odată",
                minlength: "Parola trebuie sa contina mai mult de 6 litere",
                equalTo: "Introduceti aceiasi parola"
            },
            email: "Introduceți un E-mail valid"
        },
    });
});
$("#submit").click(() => {
    $("#reg").valid();
    email = $("#email").val();
    parola = $("#parola").val();
    parola_confirm = $("#parola_confirm").val();
    req("/PhP/actionReg.php?email=" + email + "&parola=" + parola + "&parola_confirm" + parola_confirm, "response");
    $("#reg").trigger("reset");
});