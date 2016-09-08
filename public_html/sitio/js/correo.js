/* global $,document,console */
$(document).ready(function() {
        
    $("#enviaprueba").on("submit", function(e) {
        e.preventDefault();
        var data = {};
        data.email = $("#correo").val();
        data.comentario = $("#mensaje").val();

    });
    
});


