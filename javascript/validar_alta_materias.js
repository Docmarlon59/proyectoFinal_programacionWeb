function ValidaFormulario()
	  {
		 //Recuperamos lo elegido en el combo de los departamento
		 var id_materia = document.getElementById("txtid_materia").value;
		 //Recuperamos lo escrito en la caja del nombre del empleado:
		 var materia = document.getElementById("txtmateria").value;	
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_materia == null || id_materia.length == 0 || !/^([0-9])*$/.test(id_materia)) 
		 {
			 alert("Debes escribir el número de materia usando solo números enteros");
			 document.getElementById("txtid_materia").value = "";
			 document.getElementById("txtid_materia").focus();
             return false;
		 } else if (materia == null || materia.length == 0 || /^\s+$/.test(materia)){
			 alert("Debes escribir el nombre de la materia");
			 document.getElementById("txtmateria").focus();
             return false;	 
	     } //Cuando ya están contestadas todas las cajas de texto y seleccionados los combobox enviamos el form
			 return true; 
		 }