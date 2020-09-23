$(document).ready(function(){    
    var id=$("#id").val();
    if(App.Funciones.entero(id)){
        if(App.Funciones.mayor(id) && App.Funciones.entero(id) && App.Funciones.esEntero(id) ){
             $.get("datos.php",{id:id},function(data){
                 var datos=JSON.parse(data);
                 if(datos.opcion && datos.cantidad==10){
                    datos.datos.forEach(element => {
                        $("#lista").append('<li><h4>Ingresé al array y tengo el ID: '+element+'</h4></li>')
                    });
                 }
                 if(!datos.opcion){
                     $(".error").css('display','block');
                 }                
             });
        }else
        $(".error").css('display','block');
    }else
    $(".error").css('display','block');

});
