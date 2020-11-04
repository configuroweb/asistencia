<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "Búsqueda Rápida";
	$Translation['records x to y of z'] = "Regitro <FirstRecord> a <LastRecord> de <RecordCount>";
	$Translation['filters'] = "Filtros";
	$Translation['filter'] = "Filtro";
	$Translation['filtered field'] = "Campos filtrados";
	$Translation['comparison operator'] = "Operador de Comparación";
	$Translation['comparison value'] = "Valor de Comparación";
	$Translation['and'] = "Y";
	$Translation['or'] = "O";
	$Translation['equal to'] = "Igual a";
	$Translation['not equal to'] = "No igual a";
	$Translation['greater than'] = "Mayor que";
	$Translation['greater than or equal to'] = "Mayor qué o igual a";
	$Translation['less than'] = "Menor que";
	$Translation['less than or equal to'] = "Menos que o igual a";
	$Translation['like'] = "Me gusta";
	$Translation['not like'] = "No me gusta";
	$Translation['is empty'] = "Está vacío";
	$Translation['is not empty'] = "No está vacío";
	$Translation['apply filters'] = "Aplicar filtro";
	$Translation['save filters'] = "Guardar y aplicar filtros";
	$Translation['saved filters title'] = "Código HTML para los filtros aplicados";
	$Translation['saved filters instructions'] = "Copie el código a continuación y péguelo en un archivo HTML para guardar el filtro que acaba de definir para que pueda volver a él en cualquier momento en el futuro sin tener que redefinirlo. Puede guardar este código HTML en su computadora o en cualquier servidor y acceder a esta vista de tabla prefiltrada a través de él.";
	$Translation['hide code'] = "Ocultar este código";
	$Translation['printer friendly view'] = "Vista para imprimir";
	$Translation['save as csv'] = "Descargar como archivo csv (valores separados por comas)";
	$Translation['edit filters'] = "Editar Filtros";
	$Translation['clear filters'] = "Limpiar Filtros";
	$Translation['order by'] = 'Ordenar por';
	$Translation['go to page'] = 'Ir a la página:';
	$Translation['none'] = 'Ninguno';
	$Translation['Select all records'] = 'Seleccionar todos los registros';
	$Translation['With selected records'] = 'Con los registros seleccionados';
	$Translation['Print Preview Detail View'] = 'Vista de detalle de vista previa de impresión';
	$Translation['Print Preview Table View'] = 'Vista de tabla de vista previa de impresión';
	$Translation['Print'] = 'Imprimir';
	$Translation['Cancel Printing'] = 'Cancelar Impresión';
	$Translation['Cancel Selection'] = 'Cancelar Selección';
	$Translation['Maximum records allowed to enable this feature is'] = 'El máximo de registros permitidos para habilitar esta función es';
	$Translation['No matches found!'] = '¡No se encontraron coincidencias!';
	$Translation['Start typing to get suggestions'] = 'Empiece a escribir para recibir sugerencias.';

	// _dml.php
	$Translation['are you sure?'] = '¿Está seguro de que desea eliminar este registro?';
	$Translation['add new record'] = 'Agregar nuevo registro';
	$Translation['update record'] = 'Actualizar registro';
	$Translation['delete record'] = 'Eliminar registro';
	$Translation['deselect record'] = 'Deseleccionar registro';
	$Translation["couldn't delete"] = 'No se pudo eliminar el registro debido a la presencia de <RelatedRecords> registros relacionados) en la tabla [<TableName>]';
	$Translation['confirm delete'] = 'Este registro tiene <RelatedRecords> registros relacionados en la tabla [<TableName>]. ¿Aún quieres eliminarlo? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Si';
	$Translation['no'] = 'No';
	$Translation['pkfield empty'] = ' el campo es un campo de clave principal y no puede estar vacío.';
	$Translation['upload image'] = 'Subir nuevo archivo ';
	$Translation['select image'] = 'Seleccionar una imagen ';
	$Translation['remove image'] = 'Eliminar archivo';
	$Translation['month names'] = 'Enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre';
	$Translation['field not null'] = 'No puede dejar este campo vacío.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hoy';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Mantenga presionada la tecla CTRL para seleccionar varios elementos de la lista anterior.';
	$Translation['Save New'] = 'Guardar Nuevo';
	$Translation['Save As Copy'] = 'Guardar como copia';
	$Translation['Deselect'] = 'Cancelar';
	$Translation['Add New'] = 'Agregar nuevo';
	$Translation['Delete'] = 'Eliminar';
	$Translation['Cancel'] = 'Cancelar';
	$Translation['Print Preview'] = 'Vista previa de impresión';
	$Translation['Save Changes'] = 'Guardar cambios';
	$Translation['CSV'] = 'Guardar CSV';
	$Translation['Reset Filters'] = 'Mostrar todo';
	$Translation['Find It'] = 'Encontrado';
	$Translation['Previous'] = 'Previo';
	$Translation['Next'] = 'Siguiente';
	$Translation['Back'] = 'Volver';

	// lib.php
	$Translation['select a table'] = "Ir a ...";
	$Translation['homepage'] = "Página de Inicio";
	$Translation['error:'] = "Error:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Búsqueda:";
	$Translation['< back'] = "Volver";
	$Translation["if you haven't set up"] = "Si aún no ha configurado la base de datos, puede hacerlo haciendo clic <a href='setup.php'> aquí </a>.";
	$Translation['file too large']="Error: el archivo que cargó excede el tamaño máximo permitido de <MaxSize> KB";
	$Translation['invalid file type']="Error: este tipo de archivo no está permitido. Solo se pueden cargar archivos <FileTypes>";

	// setup.php
	$Translation['goto start page'] = "Volver a la página de inicio";
	$Translation['no db connection'] = "No se pudo establecer una conexión a la base de datos.";
	$Translation['no db name'] = "No se pudo acceder a la base de datos llamada '<DBName>' en este servidor.";
	$Translation['provide connection data'] = "Proporcione los siguientes datos para conectarse a la base de datos:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL Username";
	$Translation['mysql password'] = "MySQL password";
	$Translation['mysql db'] = "Database name";
	$Translation['connect'] = "Connect";
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br />Please make sure that the folder:<br />'".dirname(__FILE__)."'<br />is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "Table <b><TableName></b> exists, containing <NumRecords> records.";
	$Translation['failed'] = "Failed";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "Table is up-to-date.";
	$Translation['couldnt count'] = "Couldn't count records of table <b><TableName></b>";
	$Translation['creating table'] = "Creating table <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Por favor espera";

	// _view.php
	$Translation['tableAccessDenied']="¡Lo siento! No tienes permiso para acceder a esta tabla. Comuníquese con el administrador.";

	// incCommon.php
	$Translation['not signed in']="No has iniciado sesión";
	$Translation['sign in']="Ingresar";
	$Translation['signed as']="Has ingresado como";
	$Translation['sign out']="Cerrar Sesión";
	$Translation['admin setup needed']="No se realizó la configuración del administrador. Inicie sesión en el <a href=admin/>panel administrativo </a> para realizar la configuración.";
	$Translation['db setup needed']="La configuración del programa aún no se ha realizado. Inicie sesión en el <a href=setup.php>página de configuración </a> primero.";
	$Translation['new record saved']="El nuevo registro se ha guardado correctamente.";
	$Translation['record updated']="Los cambios se han guardado correctamente.";

	// index.php
	$Translation['admin area']="Area Admin";
	$Translation['login failed']="Tu intento de inicio de sesión anterior falló. Inténtalo de nuevo.";
	$Translation['sign in here']="Ingrese aquí";
	$Translation['remember me']="Recuerdame";
	$Translation['username']="Usuario";
	$Translation['password']="Contraseña";
	$Translation['go to signup']="¿No tienes un nombre de usuario? <br />&nbsp; <a href=membership_signup.php>Registrate aquí</a>";
	$Translation['forgot password']="¿Olvidaste tu contraseña? <a href=membership_passwordReset.php>Clic aquí</a>";
	$Translation['browse as guest']="<a href=index.php>Continúa navegando como invitado</a>";
	$Translation['no table access']="No tienes suficientes permisos para acceder a ninguna página aquí. Inicia sesión primero.";
	$Translation['signup']="Registrarse";

	// checkMemberID.php
	$Translation['user already exists']="Usuario '<MemberID>' Actualmente existe. Intenta con otro nombre de usuario.";
	$Translation['user available']="Usuario '<MemberID>' está disponible y puedes tomarlo.";
	$Translation['empty user']="Primero escriba un nombre de usuario en el cuadro y luego haga clic en 'Verificar disponibilidad'.";

	// membership_thankyou.php
	$Translation['thanks']="Gracias por registrarte!";
	$Translation['sign in no approval']="Si ha elegido un grupo que no requiere la aprobación del administrador, puede iniciar sesión ahora mismo. <a href=index.php?signIn=1>aquí</a>.";
	$Translation['sign in wait approval']="Si ha elegido un grupo que requiere la aprobación del administrador, espere un correo electrónico confirmando su aprobación.";

	// membership_signup.php
	$Translation['username empty']="Debe proporcionar un nombre de usuario. Regrese y escriba un nombre de usuario";
	$Translation['password invalid']="Debe proporcionar una contraseña de 4 caracteres o más, sin espacios. Regrese y escriba una contraseña válida";
	$Translation['password no match']="La contraseña no coincide. Regrese y corrija la contraseña";
	$Translation['username exists']="Nombre de usuario ya existe. Regrese y elija un nombre de usuario diferente.";
	$Translation['email invalid']="Dirección de correo electrónico inválida. Regrese y corrija su dirección de correo electrónico.";
	$Translation['group invalid']="Grupo inválido. Regrese y corrija la selección de grupo.";
	$Translation['sign up here']="¡Registrate aquí!";
	$Translation['registered? sign in']="¿Ya estás registrado? <a href=index.php?signIn=1>Ingrese aquí</a>.";
	$Translation['sign up disabled']="¡Lo siento! El administrador deshabilitó temporalmente el registro. Inténtelo de nuevo más tarde.";
	$Translation['check availability']="Compruebe si este nombre de usuario está disponible";
	$Translation['confirm password']="Confirme Contraseña";
	$Translation['email']="Dirección de Correo";
	$Translation['group']="Grupo";
	$Translation['groups *']="Si elige inscribirse en un grupo marcado con un asterisco (*), no podrá iniciar sesión hasta que el administrador lo apruebe. Recibirá un correo electrónico cuando sea aprobado.";
	$Translation['sign up']="Registrarse";

	// membership_passwordReset.php
	$Translation['password reset']="Página de Reseteo de Contraseña";
	$Translation['password reset details']="Ingrese su nombre de usuario o dirección de correo electrónico a continuación. Luego le enviaremos un enlace especial a su correo electrónico. Después de hacer clic en ese enlace, se le pedirá que ingrese una nueva contraseña.";
	$Translation['password reset subject']="Instrucciones para restablecer la contraseña";
	$Translation['password reset message']="Estimado miembro: \n Si ha solicitado restablecer / cambiar su contraseña, haga clic en este enlace: \n <ResetLink> \n \n Si no solicitó un restablecimiento / cambio de contraseña, ignore este mensaje. \n \n Saludos.";
	$Translation['password reset ready']="Se ha enviado un correo electrónico con instrucciones para restablecer la contraseña a su dirección de correo electrónico registrada. Siga las instrucciones en ese mensaje de correo electrónico.<br /><br />Si no recibe este correo electrónico en 5 minutos, intente restablecer su contraseña nuevamente y asegúrese de ingresar un nombre de usuario o dirección de correo electrónico correctos.";
	$Translation['password reset invalid']="Usuario o contraseña inválidos <a href=membership_passwordReset.php>Intentelo de nuevo</a>, or go <a href=index.php>back to homepage</a>.";
	$Translation['password change']="Página de Cambio de Contraseña";
	$Translation['new password']="Nueva contraseña";
	$Translation['password reset done']="Tu contraseña fue cambiada exitosamente. Usted puede <a href=index.php?signOut=1>inicie sesión con la nueva contraseña aquí</a>.";

    $Translation['Loading ...']='Cargando ...';
    $Translation['No records found']='Sin registros encontrados';
    $Translation['You can add children records after saving the main record first']='Puede agregar registros secundarios después de guardar primero el registro principal';

    $Translation['ascending'] = 'Subiendo';
    $Translation['descending'] = 'Bajando';
    $Translation['then by'] = 'Entonces';

	// membership_profile
	$Translation['Legend'] = 'Leyenda';
	$Translation['Table'] = 'Tabla';
	$Translation['Edit'] = 'Editar';
	$Translation['View'] = 'Ver';
	$Translation['Only your own records'] = 'Solo tus propios registros';
	$Translation['All records owned by your group'] = 'Todos los registros propiedad de su grupo';
	$Translation['All records'] = 'Todos los registros';
	$Translation['Not allowed'] = 'No permitido';
	$Translation['Your info'] = 'Tu información';
	$Translation['Hello user'] = 'Hola %s!';
	$Translation['Your access permissions'] = 'Tus permisos de acceso';
	$Translation['Update profile'] = 'Actualizar perfil';
	$Translation['Update password'] = 'Actualizar contraseña';
	$Translation['Change your password'] = 'Cambia tu contraseña';
	$Translation['Old password'] = 'Contraseña anterior';
	$Translation['Password strength: weak'] = 'Fortaleza de la contraseña: Débil';
	$Translation['Password strength: good'] = 'Fortaleza de la contraseña: Buena';
	$Translation['Password strength: strong'] = 'Seguridad de la contraseña: Fuerte';
	$Translation['Wrong password'] = 'Contraseña equivocada';
	$Translation['Your profile was updated successfully'] = 'Tu perfil se actualizó con éxito';
	$Translation['Your password was changed successfully'] = 'Tu contraseña fue cambiada exitosamente';
	$Translation['Your IP address'] = 'Tu dirección IP';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Registros a mostrar';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Datos de configuración';
	$Translation['Database Information'] = 'Información de la base de datos';
	$Translation['Admin Information'] = 'Información de Administrador';
	$Translation['setup intro 1'] = 'No parece haber un archivo de configuración. Esto es necesario para que la aplicación funcione. <br> <br> Esta página de configuración le ayudará a crear ese archivo. Pero en algunas configuraciones de servidor, esto podría no funcionar. En ese caso, es posible que deba ajustar los permisos de la carpeta o crear el archivo de configuración manualmente.';
	$Translation['setup intro 2'] = '¡Bienvenido a su nueva aplicación AppGini! Antes de comenzar, necesitamos información sobre su base de datos. Deberá saber lo siguiente antes de continuar: <ol> <li> Servidor de la base de datos (host) </li> <li> Nombre de la base de datos </li> <li> Nombre de usuario de la base de datos </li> <li> Contraseña de la base de datos </ li> </ol> Los elementos anteriores probablemente se los proporcionó su proveedor de alojamiento web. Si no tiene esta información, deberá comunicarse con ellos o consultar su documentación de servicio antes de poder continuar aquí. Si estás listo, ¡comencemos!';
	$Translation['setup finished'] = '<b>Proceso Exitoso!</b><br><br>Se ha instalado su aplicación AppGini. Aquí hay algunas sugerencias para comenzar a usarlo:';
	$Translation['setup next 1'] = 'Comience a usar su aplicación para agregar datos o trabaje con datos existentes, si los hubiera.';
	$Translation['setup next 2'] = 'Importe datos existentes a su aplicación desde un archivo CSV.';
	$Translation['setup next 3'] = 'Vaya a la página de inicio del administrador, donde puede cambiar muchas otras configuraciones de la aplicación.';
	$Translation['db_name help'] = 'El nombre de la base de datos en la que desea ejecutar su aplicación AppGini.';
	$Translation['db_server help'] = '<i>localhost</i> funciona en la mayoría de los servidores. De lo contrario, debería poder obtener esta información de su proveedor de alojamiento web.';
	$Translation['db_username help'] = 'Tu usuario MySQL';
	$Translation['db_password help'] = 'Tu contraseña MySQL';
	$Translation['username help'] = 'Especifique el nombre de usuario de administrador que le gustaría usar para acceder al área de administración. Debe tener cuatro caracteres o más.';
	$Translation['password help'] = 'Especifique una contraseña segura para acceder al área de administración.';
	$Translation['email help'] = 'Ingrese la dirección de correo electrónico a la que desea que se envíen las notificaciones de administrador.';
	$Translation['Continue'] = 'Continuar ...';
	$Translation['Lets go'] = 'Vamos';
	$Translation['Submit'] = 'Enviar';
	$Translation['Hide'] = 'Ocultar ayuda';
	$Translation['Database info is correct'] = '&#10003; ¡La información de la base de datos es correcta!';
	$Translation['Database connection error'] = '&#10007; ¡Error de conexión a la base de datos!';
	$Translation['The following errors occured'] = 'Los siguientes errores ocurrieron';
	$Translation['failed to create config instructions'] = 'Lo más probable es que esto se deba a los permisos de carpeta que están configurados para evitar que su servidor web cree archivos. ¡No te preocupes! Aún puede crear el archivo de configuración manualmente. <br> <br> Simplemente pegue el siguiente código en un editor de texto y guarde el archivo como "config.php", luego cárguelo usando FTP o cualquier otro método a la carpeta% s en su servidor.';
	$Translation['Only show records having filterer'] = 'Mostrar solo registros donde %s es %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'No tienes suficientes permisos para borrar este registro';
	$Translation['Couldn\'t delete this record'] = 'No se pudo borrar este registro';
	$Translation['The record has been deleted successfully'] = 'El registro se ha eliminado correctamente';
	$Translation['Couldn\'t save changes to the record'] = 'No se pudieron guardar los cambios en el registro';
	$Translation['Couldn\'t save the new record'] = 'No se pudo guardar el nuevo registro';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'More';
	$Translation['Confirm deleting multiple records'] = 'Confirmar la eliminación de varios registros';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> Se eliminarán los registros. Seguro que quieres hacer esto?';
	$Translation['Yes, delete them!'] = '¡Sí, elimínelos!';
	$Translation['No, keep them.'] = 'No, quédese con ellos.';
	$Translation['Deleting record <i> of <n>'] = 'Eliminando registros <i> de <n>';
	$Translation['Delete progress'] = 'Eliminar progreso';
	$Translation['Show/hide details'] = 'Mostrar/Ocultar detalles';
	$Translation['Connection error'] = 'Error de conexión';
	$Translation['Add more actions'] = 'Agregar más acciones';
	$Translation['Update progress'] = 'Progreso de actualización';
	$Translation['Change owner'] = 'Cambio de propietario';
	$Translation['Updating record <i> of <n>'] = 'Actualizando registro <i> de <n>';
	$Translation['Change owner of <n> selected records to'] = 'Cambiar propietario de <n> registros seleccionados para';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Usuario <MemberID> ya existe o no es válido. Asegúrese de proporcionar un nombre de usuario que contenga de 4 a 20 caracteres válidos.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Proveedor inválido!';
	$Translation['invalid url'] = 'URL inválido!';
	$Translation['cant retrieve coordinates from url'] = '¡No se pueden recuperar las coordenadas de la URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = '¡El modo de mantenimiento está habilitado! Puede desactivarlo desde la página de inicio del administrador.';
	$Translation['unique field error'] = 'Este valor ya existe o no es válido. Asegúrese de especificar un valor válido único.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Mostrar todos los registros de este usuario desde "<tablename>" tabla';
	$Translation['show all group records from table'] = 'Mostrar todos los registros de este grupo desde "<tablename>" tabla';
	$Translation['email this user'] = 'Correo de este usuario';
	$Translation['email this group'] = 'Correo de este grupo';
	$Translation['owner'] = 'Dueño';
	$Translation['created'] = 'Creado';
	$Translation['last modified'] = 'Última modificación';
	$Translation['record has no owner'] = 'Este registro no tiene un propietario asignado. Puede asignar un propietario desde el área de administración.';
	$Translation['admin-only info'] = 'La información anterior se muestra porque actualmente ha ingresado como superadministrador. Otros usuarios no verán esto.';
	$Translation['discard changes confirm'] = '¿Descartar cambios en este registro?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Ocultar/Mostrar Columnas';
	$Translation['next column'] = 'Próxima Columna';
	$Translation['previous column'] = 'Previa Columna';