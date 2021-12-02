function ValidaAltaAutores()
	{
		 //Recuperamos lo elegido en el combo de los departamento
		 var id_autor = document.getElementById("txtid_autor").value;
		 var nombre = document.getElementById("txtnombre").value;
         var paterno = document.getElementById("txtpaterno").value;	
         var materno = document.getElementById("txtmaterno").value;
         var direccion = document.getElementById("txtdireccion").value;
         var pais = document.getElementById("txtpais").value;
         var nickname = document.getElementById("txtnickname").value;
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_autor == null || id_autor.length == 0 || !/^([0-9])*$/.test(id_autor)) 
		 {
			 alert("Debes escribir el ID de autor usando solo números enteros");
			 document.getElementById("txtid_autor").value = "";
			 document.getElementById("txtid_autor").focus();
             return false;
		 } else if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
			 alert("Debes escribir el nombre de el autor");
			 document.getElementById("txtnombre").focus();
             return false;	 
	     }
         else if (paterno == null || paterno.length == 0 || /^\s+$/.test(paterno)){
            alert("Debes escribir el apellido paterno del autor");
            document.getElementById("txtpaterno").focus();
            return false;	 
        }
        else if (materno == null || materno.length == 0 || /^\s+$/.test(materno)){
            alert("Debes escribir el apellido materno de el autor");
            document.getElementById("txtmaterno").focus();
            return false;	 
        }
        else if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)){
            alert("Debes escribir la direccion de el autor");
            document.getElementById("txtdireccion").focus();
            return false;	 
        }
        else if (pais == null || pais.length == 0 || /^\s+$/.test(pais)){
            alert("Debes escribir el pais del autor");
            document.getElementById("txtpais").focus();
            return false;	 
        }
        else if (nickname == null || nickname.length == 0 || /^\s+$/.test(nickname)){
            alert("Debes escribir el nickname del autor");
            document.getElementById("txtnickname").focus();
            return false;	 
        }
			 return true; 
	}