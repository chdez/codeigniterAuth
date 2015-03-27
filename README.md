<p>Para configurar tu proyecto debes hacer algunos cambios, el promero es cambiar la URL Base, en archivo de configuracion <i>"aplication/config/config.php"</i></p>
<pre>$config['base_url']	= 'http://localhost/todo/';</pre>

<p>Los datos de conexion para la base de datos <i>"aplication/config/config.php"</i> </p>
<pre>
$db['default']['hostname'] = 'localhost'; //Servidor<br>
$db['default']['username'] = 'root'; //Usuario<br>
$db['default']['password'] = 'password'; //Contraseña.<br>
$db['default']['database'] = 'codelogin'; //Nombre de la base de datos.<br>
</pre>

<p>La documentación para la libreria que se está utilizando la pueden encontrar en el blog de <a href="http://benedmunds.com/ion_auth/">Ben Edmunds</a></p>
