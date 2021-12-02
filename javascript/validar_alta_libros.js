function ValidaAltaLibros()
	{
		 var id_libro = document.getElementById("txtid_libro").value;
		 var titulo = document.getElementById("txttitulo").value;
		 var npaginas = document.getElementById("txtnpaginas").value;
		 var aniopublicacion = document.getElementById("txtaniopublicacion").value;
		 var precio = document.getElementById("txtprecio").value;
         var stock = document.getElementById("txtstock").value;
		 //Recuperamos lo elegido en el combo de los sexos
		 var materia = document.getElementById("combo_materia").selectedIndex;
         var editorial = document.getElementById("combo_editorial").selectedIndex;	
         var autor = document.getElementById("combo_autor").selectedIndex;		
		 

         if(id_libro == null || id_libro.length == 0 || !/^([0-9])*$/.test(id_libro)){
			 alert("Debes escribir el codigo usando solo números enteros");
			 document.getElementById("txtid_libro").value = "";
			 document.getElementById("txtid_libro").focus();
             return false;
		 } else if (titulo == null || titulo.length == 0 || /^\s+$/.test(titulo)){
			 alert("Debes escribir el titulo del libro");
			 document.getElementById("txttitulo").focus();
             return false;	 
	     } else if (npaginas == null || npaginas.length == 0 || !/^([0-9])*$/.test(npaginas)){
			 alert("Debes escribir el numero de paginas solamente con números");
			 document.getElementById("txtnpaginas").value = "";
			 document.getElementById("txtnpaginas").focus();
             return false;
		 }else if (aniopublicacion == null || aniopublicacion.length == 0 || /^\s+$/.test(aniopublicacion)){
            alert("Debes escribir el año de publicacion del libro con numeros y letras");
            document.getElementById("txtaniopublicacion").value = "";
            document.getElementById("txtaniopublicacion").focus();
            return false;
        }else if (precio == null || precio.length == 0 || !/^([0-9])*$/.test(precio)){
			 alert("Debes escribir el precio del libro con numeros");
			 document.getElementById("txtprecio").focus();
             return false;	 
		 //Cajas de Selección (Combo Box) ****************************************************************
         }else if (stock == null || stock.length == 0 || !/^([0-9])*$/.test(stock)){
            alert("Debes escribir la cantidad de libros en stock");
            document.getElementById("txtstock").focus();
            return false;	 
        //Cajas de Selección (Combo Box) ****************************************************************
        } else if (materia == null || materia == 0){
			 alert("Debes elegir una materia");
			 document.getElementById("combo_materia").focus();
             return false;
		 }else if (editorial == null || editorial == 0){
            alert("Debes elegir una editorial");
            document.getElementById("combo_editorial").focus();
            return false;
        }else if (autor == null || autor == 0){
            alert("Debes elegir un autor");
            document.getElementById("combo_autor").focus();
            return false;
        }  //Cuando ya están contestadas todas las cajas de texto y seleccionados los combobox enviamos el form
			 return true; 
	}