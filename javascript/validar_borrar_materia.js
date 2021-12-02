function borrar_empleado(id_empleado)
{
if(confirm("¿Estás seguro de eliminar al empleado No: " + id_empleado + "?") == true)
	{
		return true;
	} else {
		return false;
	}
}