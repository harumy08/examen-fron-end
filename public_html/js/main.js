$(document).ready(function() {
    
    var parseAPPID = "1xW2AmMzvU7pukTxmXycGC6zVIsC9llnLesiGvXZ";
    var parseJSID = "k8dOFpCbQcdyaGCDk9jytrlaGezfnGMIKsuy8veX";
    
    Parse.initialize(parseAPPID, parseJSID);
    var CommentObject = Parse.Object.extend("CommentObject");
    
    $("#enviaprueba").on("submit", function(e) {
        e.preventDefault();

        console.log("Handling the submit");
        //add error handling here
        //gather the form data

        var data = {};
         data.email = $("#correo").val();
        data.comentario = $("#mensaje").val();
        
        var comment = new CommentObject();
        comment.save(data, {
            success:function() {
                console.log("Success");
                //Alerts are lame - but quick and easy
                alert("Gracias por contactarnos!");
            },
            error:function(e) {
                console.dir(e);
            }
        });
        
    });
    
});

