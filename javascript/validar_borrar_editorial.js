function borrar_editorial(id_editorial)
{
if(confirm("¿Estás seguro de eliminar al editorial No: " + id_editorial + "?") == true)//gg
	{
		return true;
	} else {
		return false;
	}
}