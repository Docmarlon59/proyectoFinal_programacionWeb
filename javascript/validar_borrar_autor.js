function borrar_autor(id_autor)
{
if(confirm("¿Estás seguro de eliminar al autor No: " + id_autor + "?") == true)//gg
	{
		return true;
	} else {
		return false;
	}
}