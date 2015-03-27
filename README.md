Para configurar tu proyecto debes hacer algunos cambios, el promero es cambiar la URL Base, en archivo de configuracion "aplication/config/config.php"
$config['base_url']	= 'http://localhost/todo/';

Los datos de conexion para la base de datos.
$db['default']['hostname'] = 'localhost'; //Servidor
$db['default']['username'] = 'root'; //Usuario
$db['default']['password'] = 'password'; //Contraseña.
$db['default']['database'] = 'codelogin'; //Nombre de la base de datos.
