<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Inicio de sesión';
$lang['login_subheading']      = 'Porfavor ingrese su nombre de usuario o e-mail para continuar.';
$lang['login_identity_label']  = 'Email/Usuario:';
$lang['login_password_label']  = 'Contraseña:';
$lang['login_remember_label']  = 'Recuerdamelo:';
$lang['login_submit_btn']      = 'Ingresar';
$lang['login_forgot_password'] = '¿Has olvidado tu contraseña?';

// Index
$lang['index_heading']           = 'Usuarios';
$lang['index_subheading']        = 'Lista de ususarios.';
$lang['index_fname_th']          = 'Nombre';
$lang['index_lname_th']          = 'Apellido';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Grupos';
$lang['index_status_th']         = 'Estado';
$lang['index_action_th']         = 'Acción';
$lang['index_active_link']       = 'Activo';
$lang['index_inactive_link']     = 'Inactivo';
$lang['index_create_user_link']  = 'Crear nuevo usuario';
$lang['index_create_group_link'] = 'Crear nuevo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Desactivar Usuario';
$lang['deactivate_subheading']               = '¿Estas seguro de eliminar \'%s\' ?';
$lang['deactivate_confirm_y_label']          = 'Si:';
$lang['deactivate_confirm_n_label']          = 'No:';
$lang['deactivate_submit_btn']               = 'Proceder';
$lang['deactivate_validation_confirm_label'] = 'confirmación';
$lang['deactivate_validation_user_id_label'] = 'ID de usuario';

// Create User
$lang['create_user_heading']                           = 'Crear usuario';
$lang['create_user_subheading']                        = 'Porfavor ingrese la información del usuario \'s.';
$lang['create_user_fname_label']                       = 'Nombre:';
$lang['create_user_lname_label']                       = 'Apellido:';
$lang['create_user_company_label']                     = 'Compañia:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Teléfono:';
$lang['create_user_password_label']                    = 'Contraseña:';
$lang['create_user_password_confirm_label']            = 'Reescribir contraseña:';
$lang['create_user_submit_btn']                        = 'Crear usuario';
$lang['create_user_validation_fname_label']            = 'Nombre';
$lang['create_user_validation_lname_label']            = 'Apellido';
$lang['create_user_validation_email_label']            = 'Email';
$lang['create_user_validation_phone1_label']           = 'Teléfono 1';
$lang['create_user_validation_phone2_label']           = 'Teléfono 2';
$lang['create_user_validation_phone3_label']           = 'Teléfono 3';
$lang['create_user_validation_company_label']          = 'Compañia';
$lang['create_user_validation_password_label']         = 'Contraseña';
$lang['create_user_validation_password_confirm_label'] = 'Reescribir contraseña';

// Edit User
$lang['edit_user_heading']                           = 'Editar Usuario';
$lang['edit_user_subheading']                        = 'Porfavor ingrese la información del usuario \'s.';
$lang['edit_user_fname_label']                       = 'Nombre:';
$lang['edit_user_lname_label']                       = 'Apellido:';
$lang['edit_user_company_label']                     = 'Compañia:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Teléfono:';
$lang['edit_user_password_label']                    = 'Contraseña: (si deseas cambiarla)';
$lang['edit_user_password_confirm_label']            = 'Cambiar contraseña: (si deseas cambiarla)';
$lang['edit_user_groups_heading']                    = 'Mienbro del grupo';
$lang['edit_user_submit_btn']                        = 'Guardar usuario';
$lang['edit_user_validation_fname_label']            = 'Nombre';
$lang['edit_user_validation_lname_label']            = 'Apellidi';
$lang['edit_user_validation_email_label']            = 'Email';
$lang['edit_user_validation_phone1_label']           = 'Teléfono 1';
$lang['edit_user_validation_phone2_label']           = 'Teléfono 2';
$lang['edit_user_validation_phone3_label']           = 'Teléfono 3';
$lang['edit_user_validation_company_label']          = 'Compañia';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Contraseña';
$lang['edit_user_validation_password_confirm_label'] = 'Reescribir contraseña';

// Create Group
$lang['create_group_title']                  = 'Crear Grupo';
$lang['create_group_heading']                = 'Crear grupo';
$lang['create_group_subheading']             = 'Porfavor ingrese la información del grupo.';
$lang['create_group_name_label']             = 'Nombre del grupo:';
$lang['create_group_desc_label']             = 'Descripción:';
$lang['create_group_submit_btn']             = 'Crear grupo';
$lang['create_group_validation_name_label']  = 'Nombre del grupo';
$lang['create_group_validation_desc_label']  = 'Descripción';

// Edit Group
$lang['edit_group_title']                  = 'Editar Grupo';
$lang['edit_group_saved']                  = 'Grupo guardado';
$lang['edit_group_heading']                = 'Editar Grupo';
$lang['edit_group_subheading']             = 'Porfavor ingrese la información del grupo.';
$lang['edit_group_name_label']             = 'Nombre del grupo:';
$lang['edit_group_desc_label']             = 'Descripción:';
$lang['edit_group_submit_btn']             = 'Guardar grupo';
$lang['edit_group_validation_name_label']  = 'Nombre del grupo';
$lang['edit_group_validation_desc_label']  = 'Descripción';

// Change Password
$lang['change_password_heading']                               = 'Cambiar Contraseña';
$lang['change_password_old_password_label']                    = 'Contraseña anterior:';
$lang['change_password_new_password_label']                    = 'Nueva contraseña (al menos %s caracteres):';
$lang['change_password_new_password_confirm_label']            = 'Confirme la nueva contraseña:';
$lang['change_password_submit_btn']                            = 'Cambiar';
$lang['change_password_validation_old_password_label']         = 'Contraseña anterior:';
$lang['change_password_validation_new_password_label']         = 'Nueva contraseña';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirme la nueva contraseña:';

// Forgot Password
$lang['forgot_password_heading']                 = 'Reestablecer Contraseña';
$lang['forgot_password_subheading']              = 'Porfavor ingresa tu %s te enviaremos un correo para reestablecer tu contraseña.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Enviar';
$lang['forgot_password_validation_email_label']  = 'Email';
$lang['forgot_password_username_identity_label'] = 'Nombre de usuario';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'No existe el correo en nuestros registros.';

// Reset Password
$lang['reset_password_heading']                               = 'Cambiar contraseña';
$lang['reset_password_new_password_label']                    = 'Nueva contraseña (al menos %s caracteres):';
$lang['reset_password_new_password_confirm_label']            = 'Confirma la nueva contraseña:';
$lang['reset_password_submit_btn']                            = 'Cambiar';
$lang['reset_password_validation_new_password_label']         = 'Nueva contraseña';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirma la nueva contraseña';
