var Mailgun = require('mailgun');
Mailgun.initialize('postmaster@sandbox38203ca7ef3744aaad134fd800935a08.mailgun.org', 'key-f457c64702712e3709b7fe8b330a0f48');

Parse.Cloud.beforeSave("CommentObject", function(request, response) {

    var text = "Contacto Sitio\n" + 
        "From: "+'Examen'+"\n"+
        "Email: "+request.object.get("email") + "\n"+
        "Comentario:\n" + request.object.get("comentario");
    
    Mailgun.sendEmail({
            to: "harumy08@gmail.com",
            from: request.object.get("email"),
            subject: "Contacto Sitio - " + "Examen",
            text: text
        }, {
        success: function(httpResponse) {
            response.success();
        },
        error: function(httpResponse) {
            console.error(httpResponse);
            response.error("Algo salio mal.");
        }
    });

});


