function ValidaFormulario1()
	  {
		 var id_materia = document.getElementById("txt_id_materia").value;
		 var materia = document.getElementById("txt_materia").value;
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_materia == null || id_materia.length == 0 || /^\s+$/.test(id_materia)) 
		 {
			 alert("Debes escribir la CLAVE del materia usando solo 1 letra y 1 número");
			 document.getElementById("txt_id_materia").value = "";
			 document.getElementById("txt_id_materia").style.background = 'lightgreen';
			 document.getElementById("txt_id_materia").focus();
             return false;
		 } else if (materia == null || materia.length == 0 || /^\s+$/.test(materia)){
			 alert("Debes escribir el nombre de la materia");
			 document.getElementById("txt_materia").style.background = 'lightgreen';
			 document.getElementById("txt_materia").focus();
             return false;	 
	     } 
			 return true; 
		 }