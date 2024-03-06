$(document).ready(function () {

        var tour = new Tour();
        tour.addStep({
            element: "#aki", /* html element next to which the step popover should be shown */
            
            title: "Información", /* title of the popover */
            content: "Con este opción puede cambiar tu contraseña. <a href=actualizar.php><b>Click Aki.</b></a>" /* content of the popover */
        });
        

        tour.restart();
    
});

