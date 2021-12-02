function ValidaFormulario()
	  {
		 //Recuperamos lo escrito en la caja del usuario:
		 var valorUsuario = document.getElementById("txtusuario").value;
		 
		 //Recuperamos lo escrito en la caja del password:
		 var valorClave = document.getElementById("txtpassword").value;

		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(valorUsuario == null || valorUsuario.length == 0 || /^\s+$/.test(valorUsuario)) 
		 {
			 alert("Debes escribir el usuario");
			 document.getElementById("txtusuario").style.background = 'pink';
			 document.getElementById("txtusuario").focus();
             return false;
		 } else if (valorClave == null || valorClave.length == 0 || ! /^([0-9])*$/.test(valorClave)){
			 alert("Debes escribir la contraseña con solo NUMEROS");
			 document.getElementById("txtpassword").value = "";
			 document.getElementById("txtpassword").style.background = 'pink';
			 document.getElementById("txtpassword").focus();
             return false;  
         } //Cuando ya están co2ntestadas todas las cajas de texto y seleccionados los combobox enviamos el form
			 return true; 
		 }