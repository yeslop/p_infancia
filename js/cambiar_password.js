function ver_comentarios(){
 $("#reccom").load("sacar_usuario.php",function(){
	$(this).fadeIn("medium");
  });
}
function ingresar_usuario(){

  
      var form= $("#cambio_password").serialize();
    $.post('cambiar_password.php.php',form,
    function(data){
      alert(data);
     if(jQuery.trim(data)=='Usuario guardado exitosamente.'){
      // location.reload();
        
         
                     // $("#edit_cli").fadeOut("medium");    
     } 
    },{
    }
    );
}


$(document).ready(function(){
 	
});
 
//pendiente: eliminar y listo



