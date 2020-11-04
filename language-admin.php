<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([]) or <>
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================

	// incHeader.php
	$Translation['membership management'] = "Gestión de membresía";
	$Translation['password mismatch'] = "La contraseña no coincide.";
	$Translation['error'] = "Error";
	$Translation['invalid email'] = "Dirección de correo electrónico no válida";
	$Translation['sending mails'] = "El envío de correos puede llevar algún tiempo. No cierre esta página hasta que vea el mensaje listo.";
	$Translation['complete step 4'] = "Complete el paso 4 seleccionando el miembro al que desea transferir los registros.";
	$Translation['info'] = "Info";
	$Translation['sure move member'] = '¿Estás seguro de que quieres mover miembro? \'<MEMBER>\' y sus datos del grupo \'<OLDGROUP>\' al grupo \'<NEWGROUP>\'?';
	$Translation['sure move data of member'] = '¿Está seguro de que desea mover los datos del miembro? \'<OLDMEMBER>\' del grupo \'<OLDGROUP>\' al miembro \'<NEWMEMBER>\' del grupo \'<NEWGROUP>\'?';
	$Translation['sure move all members'] = '¿Está seguro de que desea mover todos los miembros y datos del grupo? \'<OLDGROUP>\' al grupo \'<NEWGROUP>\'?';
	$Translation['sure move data of all members'] = '¿Está seguro de que desea mover los datos de todos los miembros del grupo? \'<OLDGROUP>\' al miembro \'<MEMBER>\' from group \'<NEWGROUP>\'?';
	$Translation['toggle navigation'] = "Navegación de palanca";
	$Translation['admin area'] = "Area Admin";
	$Translation['groups'] = "Grupos";
	$Translation['view groups'] = "Ver Grupos";
	$Translation['add group'] = "Agregar Grupos";
	$Translation['edit anonymous permissions'] = "Editar permisos anónimos";
	$Translation['members'] = "Miembros";
	$Translation['view members'] = "Ver Miembros";
	$Translation['add member'] = "Agregar Miembro";
	$Translation["view members' records"] = "Ver registros de miembros";  
	$Translation["utilities"] = "Utilidades"; 
	$Translation["admin settings"] = "Configuraciones de Admin"; 
	$Translation["rebuild thumbnails"] = "Reconstruir miniaturas"; 
	$Translation['rebuild fields'] = "Reconstruir campos";
	$Translation['import CSV'] = "Importar datos CSV";
	$Translation['batch transfer'] = "Asistente de transferencia por lotes";
	$Translation['mail all users'] = "Enviar correo a todos los usuarios";
	$Translation['AppGini forum'] = "Foro de la comunidad de AppGini";
	$Translation["user's area"] = 'Área de Usuario';
	$Translation["sign out"] = "Cerrar Sesión";
	$Translation["attention"] = "Atención!";
	$Translation['security risk admin'] = 'Está utilizando el nombre de usuario y la contraseña de administrador predeterminados. Este es un gran riesgo de seguridad. Cambie al menos la contraseña de administrador de las <a href="pageSettings.php">Configuraciones de la página de Configuración Admin</a> <em>inmediatamente</em>.';
	$Translation['security risk'] = 'Está utilizando la contraseña de administrador predeterminada. Este es un gran riesgo de seguridad. Cambie la contraseña de administrador de la <a href="pageSettings.php"> de Configuraciones de Admin </a><em>inmediatamente</em>.' ;
	$Translation['plugins'] = 'Plugins';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "<NUMBER> Asignado de registros de tabla '<TABLE>' al grupo '<GROUP>'";
	$Translation["assigned table records to group and member"] = "<NUMBER> Asignado de registros de tabla '<TABLE>' al grupo '<GROUP>' , miembro '<MEMBERID>'";
	$Translation['data ownership assign'] = "Asignar propiedad a datos que no tienen propietarios";
	$Translation['records ownership done'] = "Todos los registros de todas las tablas ahora tienen propietarios. <br>Volver a la <a href='pageHome.php'>Página de Inicio Administrativa</a>.";
	$Translation['select group'] = "Selecciona Grupo";
	$Translation['data ownership'] = "A veces, es posible que tenga tablas con datos que se ingresaron antes de implementar este sistema de administración de membresía de AppGini, o que se ingresaron utilizando otras aplicaciones que desconocen el sistema de propiedad de AppGini. Actualmente, estos datos no tienen propietarios. Esta página le permite asignar grupos de propietarios y miembros de propietarios a estos datos.";
	$Translation["table"] = "Tabla";
	$Translation["records with no owners"] = "Registros sin propietarios";
	$Translation["new owner group"] = "Nuevo grupo de propietarios";
	$Translation["new owner member"] = "Nuevo miembro propietario*";	
	$Translation["cancel"] = "Cancelar";
	$Translation["assign new owners"] = "Asignar nuevos propietarios";
	$Translation["please wait"] = "por favor espera ...";	
	$Translation["if no owner member assigned"] = '* Si no asigna ningún miembro propietario aquí, aún puede usar el <a href="pageTransferOwnership.php">Asistente de transferencia por lotes</a> más tarde para hacerlo.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'No se puede eliminar este grupo. Primero elimine miembros.';
	$Translation["can not delete group transfer records"] = 'No se puede eliminar este grupo. Primero transfiera sus registros de datos a otro grupo.';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Error: el nombre del grupo ya existe. Debes elegir un nombre de grupo único.";
	$Translation["group not found error"] = "Error: ¡Grupo no encontrado!";								 	
	$Translation["edit group"] = "Editar grupo '<GROUPNAME>'";
	$Translation["add new group"] = "Agregar nuevo grupo";
	$Translation["anonymous group attention"] = "¡Atención! Este es el grupo anónimo.";
	$Translation["show tool tips"] = "Mostrar información sobre herramientas a medida que el mouse se mueve sobre las opciones";
	$Translation["group name"] = "Nombre del grupo";
	$Translation["readonly group name"] = "El nombre del grupo anónimo es de solo lectura aquí.";
	$Translation["anonymous group name"] = "Si nombra el grupo '<ANONYMOUSGROUP>', será considerado el grupo anónimo<br>que define los permisos de los visitantes invitados que no inician sesión en el sistema.";
	$Translation["description"] = "Descripción";
	$Translation["allow visitors sign up"] = '¿Permitir a los visitantes registrarse?';
	$Translation["admin add users"] = "No. Solo el administrador puede agregar usuarios.";
	$Translation["admin approve users"] = "Sí, y el administrador debe aprobarlos.";
	$Translation["automatically approve users"] = "Sí, y aprobarlos automáticamente.";
	$Translation["group table permissions"] = "Permisos de tabla para este grupo";
	$Translation["no"] = "No";
	$Translation["owner"] = "Dueño";
	$Translation["group"] = "Grupo";
	$Translation["all"] = "Todo";
	$Translation["insert"] = "Insertar";
	$Translation["view"] = "Ver";
	$Translation["edit"] = "Editar";
	$Translation["delete"] = "Eliminar";
	$Translation["save changes"] = "Guardar Cambios";
	
	//pageEditMember.php
	$Translation["username error"] = "Error: el nombre de usuario ya existe o no es válido. Asegúrese de proporcionar un nombre de usuario que contenga de 4 a 20 caracteres válidos.";
	$Translation["member not found"] = "Error: Miembro no encontrado!";
	$Translation["user has special permissions"] = "Este usuario tiene permisos especiales que anulan los permisos de su grupo.";
	$Translation["user has group permissions"] = 'Este usuario hereda los <a href="pageEditGroup.php?groupID=<GROUPID>">permisos de su grupo</a>.';
	$Translation["set user special permissions"] = 'Establecer permisos especiales para este usuario';
	$Translation["sure continue"] = "Si realizó cambios en este miembro y aún no los guardó, se perderán si continúa. Estás seguro de que quieres continuar?";
	$Translation["edit member"] = "Editar Miembro <MEMBERID>" ;
	$Translation["add new member"] = "Agregar Nuevo Miembro";
	$Translation["anonymous guest member"] = "¡Atención! Este es el miembro anónimo (invitado).";
	$Translation["admin member"] = '¡Atención! Este es el miembro administrador. No puede cambiar el nombre de usuario, contraseña o correo electrónico de este miembro aquí, pero puede hacerlo en la página de <a href="pageSettings.php">configuraciones de admin</a>';
	$Translation["member username"] = "Usuario miembro";
	$Translation["check availability"] = "Consultar disponibilidad";
	$Translation["read only username"] = "El nombre de usuario del miembro invitado es de solo lectura.";
	$Translation["password"] = "Contraseña";
	$Translation["change password"] = "Escriba una contraseña solo si desea cambiar este miembro.<br> De lo contrario, deje este campo vacío.";
	$Translation["confirm password"] = "Confirmar contraseña";
	$Translation["email"] = "Correo";
	$Translation["approved"] = "¿Aprobado?";
	$Translation["banned"] = "¿Bloqueado?";
	$Translation["comments"] = "Commentarios";
	$Translation["back to members"] = "Volver a miembros";
	$Translation["member added"] = "Miembro <USERNAME> agregado exitósamente";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Los permisos de los miembros se han guardado correctamente.";
	$Translation["member permissions reset"] = "Los permisos de los miembros se han restablecido a los mismos que los de su grupo.";
	$Translation["user table permissions"] = "Permisos de tabla para el usuario <a href='pageEditMember.php?memberID=<MEMBER>' title='Ver detalles de miembro'><MEMBERID></a> of group <a href='pageEditGroup.php?groupID=<GROUPID>'  title='Ver detalles y permisos del grupo'><GROUP></a>";
	$Translation["no member permissions"] = 'Este miembro no tiene actualmente ningún permiso especial. Esta lista muestra los permisos de su grupo.';
	$Translation["reset member permissions"] = "Restablecer los permisos de los miembros";
	$Translation["remove special permissions"] = 'Esto eliminaría todos los permisos especiales de este usuario y tendrá los mismos permisos que su grupo. ¿Seguro que quieres hacer eso?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Tabla inválido";
	$Translation["invalid primary key"] = "Valor de clave principal no válido";
	$Translation["record not found"] = "Registro no encontrado ... si fue importado externamente, intente asignar un propietario desde el área de administración.";
	$Translation["invalid username"] = "Usuario inválido";
	$Translation["record not found error"] = "Error: ¡Registro no encontrado!";
	$Translation["edit Record Ownership"] = "Editar propiedad de registros";
	$Translation["owner group"] = "Grupo propietario";
	$Translation["view all records by group"] = "Ver todos los registros de este grupo";
	$Translation["owner member"] = "Owner member";
	$Translation["view all records by member"] = "Ver todos los registros de este miembro";
	$Translation["switch record ownership"] = "Si desea cambiar la propiedad de este registro a un miembro de otro grupo, primero debe cambiar el grupo propietario y guardar los cambios.";
	$Translation["record created on"] = "Registro creado el";
	$Translation["record modified on"] = "Registro modificado el";
	$Translation["view all records of table"] = "Ver todos los registros de esta tabla";
	$Translation["record data"] = "Registrar datos";
	$Translation["print"] = "Imprimir";
	$Translation["could not retrieve field list"] = "No se pudo recuperar la lista de campos de '<TABLENAME>'";
	$Translation["field name"] = "Nombre de Campo";
	$Translation["value"] = "Valor";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank">Registro de visitantes</a> Registro de visitantes';
	$Translation["table data without owner"] = 'Tiene datos en una o más tablas que no tienen propietario. Para asignar un grupo de propietarios para estos datos, <a href="pageAssignOwners.php">Tiene datos en una o más tablas que no tienen propietario. Para asignar un grupo de propietarios para estos datos,/a>.';
	$Translation["membership management homepage"] = "Página de inicio de gestión de membresía";
	$Translation["newest updates"] = "Actualizaciones más recientes";
	$Translation["view record details"] = "Ver detalles de Registro";
	$Translation["newest entries"] = "Entradas más recientes";
	$Translation["available add-ons"] = "Complementos disponibles";
	$Translation["more info"] = "Más información";
	$Translation["close"] = "Cerrar";
	$Translation["view add-ons"] = "Ver todos los complementos";
	$Translation["top members"] = "Miembros principales";
	$Translation["edit member details"] = "Editar detalles de miembros";
	$Translation["view member records"] = "Ver registros de datos de miembros";
	$Translation["records"] = "Registros";
	$Translation["members stats"] = "Estadísticas de miembros";
	$Translation["total groups"] = "Grupos totales";
	$Translation["active members"] = "Miembros activos";
	$Translation["view active members"] = "Ver miembros activos";
	$Translation["members awaiting approval"] = "Miembros en espera de aprobación";
	$Translation["view members awaiting approval"] = "Ver miembros en espera de aprobación";
	$Translation["banned members"] = "Miembros prohibidos";
	$Translation["view banned members"] = "Ver miembros prohibidos";
	$Translation["total members"] = "Miembros Totales";
	$Translation["view all members"] = "Ver todos los miembros";
	$Translation["BigProf tweets"]  = "Tweets de ConfiguroWeb";
	$Translation["follow BigProf"] = "Seguir @configuroweb";
	$Translation["loading bigprof feed"] = "Cargando @configuroweb feed ...";
	$Translation["remove feed"] = "Eliminar este feed";
	
	//pageMail.php
	$Translation["can not send mail"] = "Actualmente no puede enviar correos electrónicos. La dirección de correo electrónico del remitente configurada no es válida. Por favor <a href='pageSettings.php'>corregirlo primero</a> vuelva a intentarlo.";
	$Translation["all groups"] = "Todos los grupos";
	$Translation["no recipient"] = "No se pudo encontrar el destinatario. Asegúrese de proporcionar un destinatario válido.";
	$Translation["invalid subject line"] = "Línea de asunto no válida.";
	$Translation["no recipient found"] = "No se pudo encontrar ningún destinatario. Asegúrese de proporcionar un destinatario válido.";
	$Translation["mail queue not saved"] = "No se pudo guardar la cola de correo. Asegúrese de que el directorio '<CURRDIR>' es editable(chmod 755 or chmod 777).";
	$Translation["send mail"]  = "Enviar mensaje de correo electrónico a un miembro / grupo";
	$Translation["send mail to all members"] = "Está enviando un correo electrónico a todos los miembros. Esto podría llevar mucho tiempo y afectar el rendimiento de su servidor. Si tiene una gran cantidad de miembros, no recomendamos enviarles un correo electrónico a todos a la vez.";
	$Translation["from"] = "De";
	$Translation["change setting"] = "Cambiar esta configuración";
	$Translation["to"] = "A";
	$Translation["subject"] = "Asunto";
	$Translation["message"] = "Mensaje";
	$Translation["send message"] = "Enviar Mensaje";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Gestión de membresía: detalles del registro";
	$Translation['table name'] = "Tabla: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "Un intento de <ACTION> el campo <i><FIELD></i> en <i><TABLE></i> La tabla se hizo ejecutando esta consulta: <pre><QUERY></pre> Los resultados se muestran a continuación.";

	$Translation['view or rebuild fields'] = "Ver / reconstruir campos";
	$Translation['show deviations only'] = "Mostrar solo desviaciones";
	$Translation['show all fields'] = "Mostrar todos los campos";
	$Translation['compare tables page'] = "Esta página compara la estructura / esquema de tablas y campos como se diseñó en AppGini con la estructura real de la base de datos y le permite corregir cualquier desviación.";
	$Translation['field'] = "Campo";
	$Translation['AppGini definition'] = "definición de AppGini";
	$Translation['database definition'] = "Definición actual en la base de datos";
	$Translation['table name title'] = "<TABLENAME> tabla";
	$Translation['does not exist'] = "¡No existe!";
	$Translation['create field'] = "Cree el campo ejecutando un ADD COLUMN query.";
	$Translation['create it'] = "Crearlo";
	$Translation['fix field'] = "Arregle el campo ejecutando un ALTER COLUMN query de modo que su definición sea la misma que en AppGini.";
	$Translation['fix it'] = "Arreglalo";
	$Translation['field update warning'] = "¡¡PELIGRO!! En algunos casos, esto puede provocar la pérdida, el truncamiento o la corrupción de datos. A veces, podría ser una mejor idea actualizar el campo en AppGini para que coincida con el de la base de datos. ¿Todavía te gustaría continuar?";
	$Translation['no deviations found'] = "No se encontraron desviaciones. ¡Todos los campos están bien!";
	$Translation['error fields'] = "Encontrado <CREATENUM> campos inexistentes que deben crearse.<br>Encontrado <UPDATENUM> campos desviados que podrían necesitar ser actualizados.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Reconstruir miniaturas";
	$Translation['thumbnails utility'] = "Utilice esta utilidad si tiene uno o más campos de imagen en una tabla que no tienen miniaturas o tienen miniaturas con dimensiones incorrectas.";
	$Translation['rebuild thumbnails of table'] = "Reconstruir miniaturas de la tabla";
	$Translation['rebuild'] = "Reconstruir";
	$Translation['rebuild thumbnails of table_name'] = "Reconstruyendo miniaturas de '<i><TABLENAME></i>' tabla ...";
	$Translation['do not close page message'] = "No cierre esta página hasta que vea un mensaje de confirmación de que se han creado todas las miniaturas.";	
	$Translation['rebuild thumbnails status'] = "Estado: aún reconstruyendo miniaturas, espere ...";
	$Translation['building field thumbnails'] =  "Creación de miniaturas para '<i><FIELD></i>' campo...";
	$Translation['done'] = "Hecho.";
	$Translation['finished status'] = "Estado: Finalizado. Puedes cerrar esta página ahora.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "Cola de correo no válida.";
	$Translation['sending message failed'] = " -- Envío de mensaje a '<EMAIL>': Fallido.";
	$Translation['sending message ok'] = " -- Envío de mensaje a '<EMAIL>': Ok.";
	$Translation['done!'] = "Hecho!";
	$Translation['close page'] = "Puede cerrar esta página ahora o navegar a otra página.";
	$Translation['mail log'] = "Registro correo:";
	
	//pageSettings.php
	$Translation['invalid security token'] = '¡Token de seguridad no válido! Por favor <a href="pageSettings.php">recargar la página</a> e intenta de nuevo.';
	$Translation['unique admin username error'] = "Otro miembro ya ha tomado el nuevo nombre de usuario de administrador. Asegúrese de que el nuevo nombre de usuario de administrador sea único.";	
	$Translation['unique anonymous username error'] = 'Otro miembro ya ha tomado el nuevo nombre de usuario anónimo. Asegúrese de que el nombre de usuario proporcionado sea único.';
	$Translation['unique anonymous group name error'] = 'Otro grupo ya está utilizando el nuevo nombre de grupo anónimo. Asegúrese de que el nombre del grupo proporcionado sea único.';
	$Translation['admin password mismatch'] = '"Contraseña Admin" and "Confirma contraseña" no coincide.';
	$Translation['invalid sender email'] = 'Invalido "envío de coreo".';
	$Translation['errors occurred'] = "Los siguientes errores ocurrieron:";
	$Translation['go back'] = 'Por favor <a href="pageSettings.php" onclick="history.go(-1); return false;">go back</a> para corregir los errores anteriores y vuelva a intentarlo.';
	$Translation['record updated automatically'] = "Registro actualizado automáticamente en <DATE>";
	$Translation['admin settings saved'] = "La configuración de administrador se guardó correctamente.<br>Volver a <a href=\"pageSettings.php\">Configuración Admin</a>.";
	$Translation['admin settings not saved'] = "La configuración de administrador NO se guardó correctamente. Razón de la falla: <ERROR><br>Volver a <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\">Configuración Admin</a>.";
	$Translation['show tool tips'] = 'Mostrar información sobre herramientas a medida que el mouse se mueve sobre las opciones';
	$Translation['admin username'] = "Usuario Admin";
	$Translation['admin password'] = "Contraseña Admin";
	$Translation['change admin password'] = "Escriba una contraseña solo si desea cambiar la contraseña de administrador.";
	$Translation['sender email'] = "Envío correo";
	$Translation['sender name and email'] = "El nombre del remitente y el correo electrónico se utilizan en el campo 'Para' al enviar";
	$Translation['email messages'] = "mensajes de correo electrónico a grupos o miembros.";
	$Translation['admin notifications'] = "Notificaciones Admin";
	$Translation['no email notifications'] = "No hay notificaciones por correo electrónico al administrador.";
	$Translation['member waiting approval'] = "Notifique al administrador solo cuando un nuevo miembro esté esperando aprobación.";
	$Translation['new sign-ups'] = "Notifique al administrador de todos los nuevos registros.";
	$Translation['sender name'] = "Envío nombre";
	$Translation['members custom field 1'] = "Members custom field 1";
	$Translation['members custom field 2'] = "Members custom field 2";
	$Translation['members custom field 3'] = "Members custom field 3";
	$Translation['members custom field 4'] = "Members custom field 4";
	$Translation['member approval email subject'] = "Aprobar miembro<br>asunto correo";
	$Translation['member approval email subject control'] = "Cuando el administrador aprueba a un miembro, el miembro recibe una notificación por correo electrónico de que ha sido aprobado. Puede controlar el asunto del correo electrónico de aprobación <br> en este cuadro y el contenido en el siguiente.";
	$Translation['member approval email message'] = "Aprobación miembro<br>mensaje correo";
	$Translation['MySQL date'] = "Fecha MySQL<br>formato de cadena";
	$Translation['MySQL reference'] = 'Por favor accede a <a href="http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html#function_date-format" target="_blank">la referencia MySQL</a> para posibles formatos.';
	$Translation['PHP short date'] = "PHP fecha corta<br>formato cadena";
	$Translation['PHP manual'] = 'Por favor accede a <a href="http://www.php.net/manual/en/function.date.php" target="_blank">el manual PHP</a> for possible formats.'; 
	$Translation['PHP long date'] = "PHP fecha larga<br>formato cadena";
	$Translation['groups per page'] = "Grupos por página";
	$Translation['members per page'] = "Miembros por página";
	$Translation['records per page'] = "Registros por página";
	$Translation['default sign-up mode'] = "Modo de registro predeterminado<br>para nuevos grupos.";
	$Translation['no sign-up allowed'] = "No se permite registrarse. Solo el administrador puede agregar miembros.";
	$Translation['admin approve members'] = "Se permite el registro, pero el administrador debe aprobar a los miembros.";
	$Translation['automatically approve members'] = "Registrarse permitido, y aprobar automáticamente los miembros.";
	$Translation['anonymous group'] = "Nombre del grupo<br>anónimo";
	$Translation['anonymous user name'] = "Nombre del usuario<br>anónimo";
	$Translation['hide twitter feed'] = "¿Ocultar el feed de Twitter en la página de inicio del administrador?";
	$Translation['twitter feed'] = "Nuestro feed de Twitter lo ayuda a mantenerse informado de nuestras últimas noticias, recursos útiles, nuevos lanzamientos y muchos otros consejos útiles.";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Se seleccionó un miembro de origen no válido.";
	$Translation['invalid destination member'] = "Miembro de destino no válido seleccionado.";
	$Translation['moving member'] = "Moviendo miembro '<MEMBERID>' y sus datos del grupo '<SOURCEGROUP>' al grupo '<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "El miembro '<MEMBERID>' ahora pertenece al grupo '<NEWGROUP>'. Datos de registros transferidos: <DATARECORDS>.";
	$Translation['moving data'] = "Moviendo datos de miembro '<SOURCEMEMBER>' del grupo '<SOURCEGROUP>' al miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Miembro '<SOURCEMEMBER>' de grupo '<SOURCEGROUP>' tenía <DATABEFORE> datos de registro. <TRANSFERSTATUS> al miembro '<DESTINATIONMEMBER>' de grupo '<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "Mover todos los miembros y datos del grupo '<SOURCEGROUP>' al grupo '<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "Operación fallida. No se transfirió ningún miembro del grupo '<SOURCEGROUP>' al '<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "Todos los miembros del grupo '<SOURCEGROUP>' ahora pertenece '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "Sin embargo, los registros de datos no se pudieron transferir.";
	$Translation['data records were transferred'] = "<DATABEFORE> Se transfirieron registros de datos.";
	$Translation['moving group data to member'] = "Moviendo datos de todos los miembros al grupo '<SOURCEGROUP>' al miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> record(s) fueron transferidos del grupo '<SOURCEGROUP>' al miembro '<DESTINATIONMEMBER>' del grupo '<DESTINATIONGROUP>'";
	$Translation['status'] = "Estado:";
	$Translation['batch transfer link'] = 'Para repetir la misma transferencia por lotes más tarde, puede <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>">marcar o copiar este enlace</a>.';
	$Translation['ownership batch transfer'] = "Transferencia de propiedad por lotes";
	$Translation['step 1'] = "Paso 1:";
	$Translation['batch transfer wizard'] = "El asistente de transferencia por lotes le permite transferir registros de datos de uno o todos los miembros de un grupo (the <i>grupo fuente</i>) a un miembro de otro grupo (el <i>miembro destino</i> de el <i>grupo de destino</i>)";
	$Translation['source group'] = "Grupo de origen";
	$Translation['update'] = "Actualizar";
	$Translation['next step'] = "Próximo paso";
	$Translation['group statistics'] = "Este grupo tenía <MEMBERS> miembros, y <RECORDS> registros de datos.";
	$Translation['step 2'] = "Paso 2:";
	$Translation['source member message'] = "El miembro de origen puede ser un miembro o todos los miembros del grupo de origen.";
	$Translation['source member'] = "Miembro fuente";
	$Translation['all group members'] = "Todos los miembros de '<GROUPNAME>'";
	$Translation['member statistics'] = "Este miembro tiene <RECORDS> datos de registro.";
	$Translation['step 3'] = "Paso 3:";
	$Translation['destination group message'] = "El grupo de destino puede ser el mismo o diferente del grupo de origen. Solo los grupos que tienen miembros se enumeran a continuación.";
	$Translation['destination group'] = "Grupo de destino";
	$Translation['step 4'] = "Paso 4:";
	$Translation['destination member message'] = "El miembro de destino será el nuevo propietario de los registros de datos del miembro de origen.";
	$Translation['destination member'] = "Miembro de destino";
	$Translation['begin transfer'] = "Iniciar transferencia";	
	$Translation['move records'] = "Puede mover registros de los miembros de origen a un miembro del grupo de destino, o mover los miembros de origen, junto con sus registros de datos al grupo de destino.";
	$Translation['move data records to member'] = "Mover registros de datos a este miembro:";
	$Translation['move source member to group'] = "Mueva los miembros de origen y todos sus registros de datos al '<GROUPNAME>' grupo.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Error: Archivo '<FILENAME>' no encontrado.";
	$Translation['preview and confirm CSV data'] = "Obtenga una vista previa de los datos CSV y luego confirme para importarlos ...";
	$Translation['display csv file rows'] = "Visualización de las primeras 10 filas del archivo CSV ...";
	$Translation['change CSV settings'] = 'Cambiar la configuración de CSV';
	$Translation['import CSV data'] = 'Confirmar e importar datos CSV &gt;';
	$Translation['apply CSV settings'] = 'Aplicar configuración CSV';
	$Translation['importing CSV data'] = 'Importación de datos CSV ...';
	$Translation['start at estimated record'] = "Comenzando en el registro <RECORDNUMBER> de <RECORDS> total de registros estimados ...";
	$Translation['table backed up'] = "Tabla '<TABLE>' respaldado como '<TABLENAME>'.";
	$Translation['table backup not done'] = "Tabla '<TABLE>' está vacío, por lo que no se realizó ninguna copia de seguridad.";
	$Translation['importing batch'] = 'Importando lote <BATCH> de <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> registros insertados / actualizados en <SECONDS> segundos.";
	$Translation['mission accomplished'] = "¡Misión cumplida!";
	$Translation['assign a records owner'] = "Asignar un propietario a los registros importados &gt;";
	$Translation['please wait and do not close'] = "Espere y no cierre esta página ...";
	$Translation['hide advanced options'] = "Ocultar opciones avanzadas";
	$Translation['show advanced options'] = "Mostrar opciones avanzadas";
	$Translation['import CSV to database'] = "Importar un archivo CSV a la base de datos";
	$Translation['import CSV to database page'] = "Esta página le permite cargar un archivo CSV (por ejemplo, uno generado desde MS Excel) e importarlo a una de las tablas de la base de datos. Esto hace que sea muy fácil completar la base de datos de forma masiva con datos de otras fuentes en lugar de ingresar manualmente cada registro.";
	$Translation['populate table from CSV'] = "Esta es la tabla que desea completar con datos del archivo CSV.";
	$Translation['CSV file'] = "archivo CSV";
	$Translation['preview CSV data'] = "Vista previa de datos CSV &gt;";
	$Translation['no table name provided'] = "No se proporcionó ningún nombre de tabla.";
	$Translation['can not open CSV'] = "No se puede abrir el archivo csv '<FILENAME>'.";
	$Translation['empty CSV file'] = "El archivo csv '<FILENAME>' está vacío.";		
	$Translation['no CSV file data'] = "El archivo csv '<FILENAME>' no tiene datos para leer." ;
	$Translation['field separator'] = "Campo separador";
	$Translation['default comma'] = "El valor predeterminado es coma (,)";
	$Translation['field delimiter'] = "Delimitador de campo";
	$Translation['default double-quote'] = 'El valor predeterminado es comillas dobles (")';
	$Translation['maximum characters per line'] = "Caracteres máximos por línea";
	$Translation['trouble importing CSV'] = "Si tiene problemas para importar el archivo CSV, intente aumentar este valor.";
	$Translation['ignore lines number'] = "Número de líneas para ignorar";
	$Translation['skip lines number'] = "Cambie este valor si desea omitir un número específico de líneas en el archivo CSV.";
	$Translation['first line field names'] = "La primera línea del archivo contiene nombres de campo";
	$Translation['field names must match'] = "Los nombres de campo deben <b>exactamente</b> coincidir con los de la base de datos.";
	$Translation['update table records'] = "Actualice los registros de la tabla si sus valores de clave principal coinciden con los del archivo CSV.";
	$Translation['ignore CSV table records'] = "Si no se marca, los registros del archivo CSV tienen los mismos valores de clave principal que los de la tabla <b>será ignorado</b>";
	$Translation['back up the table'] = "Realice una copia de seguridad de la tabla antes de importar datos CSV en ella.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "No se encontraron resultados coincidentes.";
	$Translation['search groups'] = "Buscar grupos";
	$Translation['find'] = "Encontrar";
	$Translation['reset'] = "Resetear";
	$Translation['members count'] = "Cuenta de Miembros";
	$Translation['Edit group'] = "Editar grupo";
	$Translation['confirm delete group'] = "¿Estás seguro de que deseas eliminar este grupo por completo?";
	$Translation['delete group'] = "Eliminar grupo";
	$Translation['view group records'] = "Ver registros de grupo";
	$Translation['view group members'] = "Ver miembros de grupo";
	$Translation['send message to group'] = "Enviar mensaje al grupo";
	$Translation['previous'] = "Previo";
	$Translation['displaying groups'] = "Mostrando grupos <GROUPNUM1> a <GROUPNUM2> de <GROUPS>";
	$Translation['next'] = "Próximo";
	$Translation['key'] = "Clave:";	
	$Translation['edit group details'] = "Edite los detalles y los permisos del grupo.";
	$Translation['add member to group'] = "Agregar un nuevo miembro al grupo.";
	$Translation['view data records'] = "Ver todos los registros de datos ingresados por los miembros del grupo.";
	$Translation['list group members'] = "Lista de todos los miembros de un grupo.";
	$Translation['send email to all members'] = "Envíe un mensaje de correo electrónico a todos los miembros de un grupo.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Busca miembros <SEARCH> en <HTMLSELECT>";
	$Translation['all fields'] = "Todos los campos";
	$Translation['any'] = "Alguno";
	$Translation['waiting approval'] = "Esperando aprobación";
	$Translation['active'] = "Activo";
	$Translation['Banned'] = "Bloqueado";
	$Translation['username'] = "Usuario";
	$Translation['sign up date'] = "Fecha de registro";
	$Translation['Status'] = "Estado";
	$Translation['Edit member'] = "Editar miembro";	
	$Translation['sure delete user'] = "¿Estás seguro de que quieres eliminar al usuario? \'<USERNAME>\'?";
	$Translation['delete member'] = "Eliminar miembro";
	$Translation["approve this member"] = "Aprobar este miembro";
	$Translation["unban this member"] = "Desbancar a este miembro";
	$Translation["ban this member"] = "Bloquear este miembro";
	$Translation["View member records"] = "Ver registros de miembros";
	$Translation["send message to member"] = "Enviar mensaje al miembro";
	$Translation['displaying members'] = "Mostrando miembros <MEMBERNUM1> a <MEMBERNUM2> de <MEMBERS>";
	$Translation['activate member'] = "Activar miembro nuevo / prohibido.";
	$Translation['ban member'] = "Prohibir (suspender) miembro.";
	$Translation['view entered member records'] = "Ver todos los registros de datos ingresados ​​por el miembro.";
	$Translation['send email to member'] = "Enviar un mensaje de correo electrónico al miembro.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Datos de registro";
	$Translation['show records'] = "Mostrar registros de";
	$Translation['all tables'] = "Todas las tablas";
	$Translation['sort records'] = "Ordenar registros por";
	$Translation['date created'] = "Fecha de creación";
	$Translation['date modified'] = "Fecha de modificación";
	$Translation['newer first'] = "Los más nuevos primeros";
	$Translation['older first'] = "Los más viejos primeros";
	$Translation['created'] = "Creado";
	$Translation['modified'] = "Modificado";
	$Translation['data'] = "Datos";
	$Translation['change record ownership'] = "Cambiar la propiedad de este registro";
	$Translation['sure delete record'] = "¿Está seguro de que desea eliminar este registro?";
	$Translation['delete record'] = "Eliminar este registro";
	$Translation['displaying records'] = "Visualización de registros <RECORDNUM1> a <RECORDNUM2> de <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = '¡El modo de mantenimiento está habilitado! Puede desactivarlo desde la página de inicio del administrador.';
	$Translation['maintenance mode message'] = 'Mensaje de modo de mantenimiento';
	$Translation['maintenance mode'] = 'Modo de mantenimiento';
	$Translation['OFF'] = 'OFF';
	$Translation['ON'] = 'ON';
	$Translation['enable maintenance mode?'] = '¿Está seguro de que desea habilitar el modo de mantenimiento? ¡Solo los usuarios administradores pueden acceder al sitio en este modo!';
	$Translation['disable maintenance mode?'] = '¿Está seguro de que desea desactivar el modo de mantenimiento? ¡Todos los usuarios podrán acceder al sitio!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'Se produjo un error al procesar el archivo CSV solicitado.';
	$Translation['back and retry'] = 'Vuelve atrás y vuelve a intentarlo';
	$Translation['upload or choose csv file'] = 'Cargue un archivo CSV o abra uno existente';
	$Translation['choose csv upload'] = 'Elija un archivo CSV para cargar';
	$Translation['no file chosen yet'] = 'Aún no se ha elegido ningún archivo';
	$Translation['start upload'] = 'Iniciar la subida';
	$Translation['select a table'] = 'Seleccionar una mesa';
	$Translation['error reading csv data'] = 'Se produjo un error al leer los datos CSV. Intente restablecer / ajustar la configuración de CSV.';
	$Translation['belongs to'] = 'Pertenece a';
	$Translation['skip column'] = 'Omitir esta columna';
	$Translation['connection failed retrying'] = 'La conexión falló. Reintentando en <SECONDS> segundos ...';
	$Translation['connection failed timeout'] = 'Tiempo de conexión agotado. Vuelva a intentarlo más tarde.';
	$Translation['sure delete csv'] = '¿Está seguro de que desea eliminar el archivo CSV [CSVFILE] del servidor?';
	$Translation['invalid csv file selected'] = 'Se eligió un archivo no válido. Debe ser un archivo CSV.';
	$Translation['couldnt delete csv file'] = 'No se pudo borrar este archivo CSV.';
	$Translation['error backing up table'] = 'Error: No se pudo realizar una copia de seguridad de la tabla <TABLE>.';
	$Translation['no columns selected'] = 'Seleccione al menos una columna para importar y asegúrese de que cada columna seleccionada pertenezca a un campo ÚNICO.';
	$Translation['csrf token expired or invalid'] = '¡Ups! Algo salió mal con esta página. Vuelve atrás y vuelve a intentarlo.';
	$Translation['back to groups'] = 'Volver a grupos';
	$Translation['member updated'] = "Miembro <USERNAME> actualizado exitósamente";
	$Translation['fix errors before submitting'] = '¡Corrija los errores resaltados antes de enviar la página!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'Método de envío de correos electrónicos';
	$Translation['smtp_server'] = 'Servidor SMTP';
	$Translation['smtp_encryption'] = 'Encripción SMTP';
	$Translation['smtp_port'] = 'Puerto SMTP';
	$Translation['smtp_port_hint'] = 'Los valores típicos son 25 (para SMTP no cifrado), 465 (utilizado en muchos casos con cifrado SSL) o 587 (típico con cifrado TLS)';
	$Translation['smtp_user'] = 'Usuario SMTP';
	$Translation['smtp_pass'] = 'Contraseña SMTP';
	$Translation['configure mail settings'] = 'Configuración de Correo';
	$Translation['display debugging info'] = 'Mostrar información de depuración';
	$Translation['debugging info hint'] = 'La información de depuración es útil si tiene problemas para enviar correos electrónicos a través del servidor SMTP configurado';

	/* Added in AppGini 5.70 */
	$Translation['create backup file'] = 'Crear archivo de respaldo';
	$Translation['database backups'] = 'Backups de base de datos';
	$Translation['no backups found'] = 'No se encontraron copias de seguridad. Puede crear una nueva copia de seguridad haciendo clic en el botón "Crear archivo de copia de seguridad".';
	$Translation['available backups'] = 'Backups disponibles';
	$Translation['restore backup'] = 'Restaurar';
	$Translation['delete backup'] = 'Eliminar';
	$Translation['backup restored'] = 'Backup restaurado exitósamente.';
	$Translation['backup deleted'] = 'Backup eliminado exitósamente.';
	$Translation['restore error'] = 'Ocurrió un error al restaurar la copia de seguridad.';
	$Translation['backup delete error'] = 'Se produjo un error al eliminar la copia de seguridad.';
	$Translation['confirm delete backup'] = '¿Está seguro de que desea eliminar este archivo de respaldo?';
	$Translation['confirm restore'] = 'Restaurar su base de datos desde un archivo de respaldo SOBRESCRIBIRÍA todos los datos Y usuarios / contraseñas existentes, revirtiendo todos al estado en el que se realizó el respaldo. \ N \ nDurante el proceso de restauración, se habilitará el modo de mantenimiento para evitar que los usuarios modifiquen la base de datos, y se desactivará una vez que finalice la restauración. \ n \ n¿Está seguro de que desea continuar?';
	$Translation['confirm backup'] = 'Durante el proceso de copia de seguridad, se habilitará el modo de mantenimiento para evitar que los usuarios modifiquen la base de datos y se deshabilitará una vez que finalice la copia de seguridad. \ N \ n¿Está seguro de que desea continuar?';
	$Translation['cant create backup folder'] = 'Error: no se puede crear ni escribir en la carpeta admin / backups. Verifique los permisos y la propiedad de su carpeta o comuníquese con el administrador del servidor para obtener ayuda.';
	$Translation['fix all'] = 'FIJAR TODOS LOS CAMPOS';
	$Translation['backup before fix'] = 'Es muy recomendable que primero cree una copia de seguridad de la base de datos antes de intentar hacer cualquier corrección aquí.';
