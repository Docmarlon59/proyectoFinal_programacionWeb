function ValidaFormulario2()
	  {
		 var id_editorial = document.getElementById("txt_id_editorial").value;
		 var editorial = document.getElementById("txt_editorial").value;
         var ciudad = document.getElementById("txt_ciudad").value;
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_editorial == null || id_editorial.length == 0 || /^\s+$/.test(id_editorial)) 
		 {
			 alert("Debes escribir la CLAVE del editorial usando solo números");
			 document.getElementById("txt_id_editorial").value = "";
			 document.getElementById("txt_id_editorial").style.background = 'lightgreen';
			 document.getElementById("txt_id_editorial").focus();
             return false;
		 } else if (editorial == null || editorial.length == 0 || /^\s+$/.test(editorial)){
			 alert("Debes escribir el nombre de la editorial");
			 document.getElementById("txt_editorial").style.background = 'lightgreen';
			 document.getElementById("txt_editorial").focus();
             return false;	 
	     } else if (ciudad == null || ciudad.length == 0 || /^\s+$/.test(ciudad)){
            alert("Debes escribir el nombre de la ciudad");
            document.getElementById("txt_ciudad").style.background = 'lightgreen';
            document.getElementById("txt_ciudad").focus();
            return false;	 
        } 
			 return true; 
		 }