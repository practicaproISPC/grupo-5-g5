function mostrarContrasena(idPassword){
      var tipo = document.getElementById(idPassword);
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }