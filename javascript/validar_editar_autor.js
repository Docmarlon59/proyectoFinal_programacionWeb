function ValidaFormulario1()
	{
		 var id_autor = document.getElementById("txt_id_autor").value;
		 var nombre = document.getElementById("txt_nombre").value;
         var paterno = document.getElementById("txt_paterno").value;
         var materno = document.getElementById("txt_editorial").value;
         var direccion = document.getElementById("txt_ciudad").value;
         var pais = document.getElementById("txt_editorial").value;
         var nickname = document.getElementById("txt_ciudad").value;
		 //VALIDACIONES *****************************************************************
		 //Caja de Texto ****************************************************************
         if(id_autor == null || id_autor.length == 0 || /^\s+$/.test(id_autor)) 
		 {
			 alert("Debes escribir la CLAVE del autor usando solo números");
			 document.getElementById("txt_id_editorial").value = "";
			 document.getElementById("txt_id_editorial").style.background = 'lightgreen';
			 document.getElementById("txt_id_editorial").focus();
             return false;
		 } else if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
			 alert("Debes escribir el nombre de la autor");
			 document.getElementById("txt_nombre").style.background = 'lightgreen';
			 document.getElementById("txt_nombre").focus();
             return false;	 
	     } else if (paterno == null || paterno.length == 0 || /^\s+$/.test(paterno)){
            alert("Debes escribir el apellido paterno de el autor");
            document.getElementById("txt_paterno").style.background = 'lightgreen';
            document.getElementById("txt_paterno").focus();
            return false;	 
        } 
        else if (materno == null || materno.length == 0 || /^\s+$/.test(materno)){
            alert("Debes escribir el apellido materno de el autor");
            document.getElementById("txt_materno").style.background = 'lightgreen';
            document.getElementById("txt_materno").focus();
            return false;	 
        }
        else if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)){
            alert("Debes escribir la direccion del autor");
            document.getElementById("txt_direccion").style.background = 'lightgreen';
            document.getElementById("txt_direccion").focus();
            return false;	 
        }
        else if (pais == null || pais.length == 0 || /^\s+$/.test(pais)){
            alert("Debes escribir el pais del autor");
            document.getElementById("txt_pais").style.background = 'lightgreen';
            document.getElementById("txt_pais").focus();
            return false;	 
        }
        else if (nickname == null || nickname.length == 0 || /^\s+$/.test(nickname)){
            alert("Debes escribir nickname de el autor");
            document.getElementById("txt_nickname").style.background = 'lightgreen';
            document.getElementById("txt_nickname").focus();
            return false;	 
        }
			 return true; 
	}