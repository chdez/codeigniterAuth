<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Tu cuenta ha sido creada con éxito';
$lang['account_creation_unsuccessful'] 	 	 = 'No fue posible crear tu cuenta';
$lang['account_creation_duplicate_email'] 	 = 'El email ya está en uso o es inválido';
$lang['account_creation_duplicate_username'] = 'El nombre de usuario ya está en uso o es inválido';
$lang['account_creation_missing_default_group'] = 'No existe un grupo predeterminado';
$lang['account_creation_invalid_default_group'] = 'Nombre de grupo predeterminado inválido';


// Password
$lang['password_change_successful'] 	 	 = 'Contraseña cambiada exitosamente';
$lang['password_change_unsuccessful'] 	  	 = 'Imposible cambiar tu contraseña';
$lang['forgot_password_unsuccessful'] 	 	 = 'Inposible reestablecer tu contraseña';

// Activation
$lang['activate_successful'] 		  	     = 'Cuenta activada';
$lang['activate_unsuccessful'] 		 	     = 'Imposible activar tu cuenta';
$lang['deactivate_successful'] 		  	     = 'Cuenta desactivada';
$lang['deactivate_unsuccessful'] 	  	     = 'Imposible desactivar tu cuenta';
$lang['activation_email_successful'] 	  	 = 'Email de activación enviado';
$lang['activation_email_unsuccessful']   	 = 'No fue posible enviar el correo de activación';

// Login / Logout
$lang['login_successful'] 		  	         = 'Ha cerrado sesión';
$lang['login_unsuccessful'] 		  	     = 'Acceso incorrecto';
$lang['login_unsuccessful_not_active'] 		 = 'La cuenta no está activa';
$lang['login_timeout']                       = 'Temporalmente bloqueado.  Intentelo mas tarde.';
$lang['logout_successful'] 		 	         = 'Cierre de sesión exitoso';

// Account Changes
$lang['update_successful'] 		 	         = 'Información de la cuenta actualizado con éxito';
$lang['update_unsuccessful'] 		 	     = 'No fue posible actualizar la cuenta';
$lang['delete_successful']               = 'Usuario eliminado';
$lang['delete_unsuccessful']           = 'No se puede eliminar el usuario';

// Groups
$lang['group_creation_successful']  = 'Grupo creado con éxito';
$lang['group_already_exists']       = 'Nombre del grupo ya existe';
$lang['group_update_successful']    = 'Detalles del grupo actualizados';
$lang['group_delete_successful']    = 'Grupo eliminado';
$lang['group_delete_unsuccessful'] 	= 'No se puede eliminar el grupo';
$lang['group_delete_notallowed']    = 'No se puede eliminar el gurpo de administración';
$lang['group_name_required'] 		= 'Nombre de grupo es requerido';
$lang['group_name_admin_not_alter'] = 'Grupo admin no se puede actualizar';

// Activation Email
$lang['email_activation_subject']            = 'Activación de cuenta';
$lang['email_activate_heading']    = 'Activación de cuenta para %s';
$lang['email_activate_subheading'] = 'Porfavor siga el siguiente enlace %s.';
$lang['email_activate_link']       = 'Activa tu cuenta';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificación para reestablecer contraseña';
$lang['email_forgot_password_heading']    = 'Reestablecer conraseña para %s';
$lang['email_forgot_password_subheading'] = 'Porfavor siga el siguiente enlace %s.';
$lang['email_forgot_password_link']       = 'Reestablecer contraseña';

// New Password Email
$lang['email_new_password_subject']          = 'Nueva Contraseña';
$lang['email_new_password_heading']    = 'Nueva contraseña para %s';
$lang['email_new_password_subheading'] = 'Tu contraseña será enviada a: %s';
