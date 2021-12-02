function ValidaFormulario()
	  {
		 //Recuperamos lo elegido en el combo de los departamento
		 var id_editorial = document.getElementById("txtid_editorial").value;
		 //Recuperamos lo escrito en la caja del nombre del empleado:
		 var editorial = document.getElementById("txteditorial").value;
         var ciudad = document.getElementById("txtciudad").value;	
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_editorial == null || id_editorial.length == 0 || !/^([0-9])*$/.test(id_editorial)) 
		 {
			 alert("Debes escribir el ID de editorial usando solo números enteros");
			 document.getElementById("txtid_editorial").value = "";
			 document.getElementById("txtid_editorial").focus();
             return false;
		 } else if (editorial == null || editorial.length == 0 || /^\s+$/.test(editorial)){
			 alert("Debes escribir el nombre de la materia");
			 document.getElementById("txteditorial").focus();
             return false;	 
	     }
         else if (ciudad == null || ciudad.length == 0 || /^\s+$/.test(ciudad)){
            alert("Debes escribir la ciudad de la editorial");
            document.getElementById("txtciudad").focus();
            return false;	 
        } //Cuando ya están contestadas todas las cajas de texto y seleccionados los combobox enviamos el form
			 return true; 
		 }