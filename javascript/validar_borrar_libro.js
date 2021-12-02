function borrar_libros()
{
if(confirm("Quieres eliminar el libro?") == true)
	{
		return true;
	} else {
		return false;
	}
}