$(document).ready(function() {
    $("#contact").validate({
        rules: {
            nume: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            comment: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            nume: {
                required: "Introduceți numele",
                minlength: "Numele trebuie să conțină mai mult de 3 litere"
            },
            comment: {
                required: "Introduceți mesajul",
                minlength: "Mesajul dvs. trebuie sa conțină mai mult de 5 litere"
            },
            email: "Introduceți un E-mail valid"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});