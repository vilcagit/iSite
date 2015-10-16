<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'db_intranet');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'vilcaweb2015+');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'xpfw!cRN3=VuL8pQGDl|KGM-XT$cP,QUkqP* ai3>mDA#*{{e)|(/xZ?u|h;hoKE');
define('SECURE_AUTH_KEY', '_-]9V;G@}x:I=q}hyQU`U%Xqux/SJ<hund9y3B+CbhT5v.Nm0!5+9y^=>Dem+fWF');
define('LOGGED_IN_KEY', 'd4dfY1]Rvt,p4h[=|C_j>#U+toGq;V<4RDv6PJ|=:ak5q5I@6LGx)B7A1jeT;Sjq');
define('NONCE_KEY', 'IdaM?y,F7hS67k,:4^XkN|9;/DA5nWWp>o7-[pBuwQz*y>+cT`BF%i b9/iA/|O+');
define('AUTH_SALT', 'x,v-I` H~L^N;Ac*T_g`nu41U4|He|t3+-UJF6._jLaG`/#{3@Y3G,TMB4CE#`R^');
define('SECURE_AUTH_SALT', ']&W;jE^v fpBBz9kqpiO0uE,$S,@dsBqd@8d%%(5/1NEMUBK/z9 /X6|K:](J,E_');
define('LOGGED_IN_SALT', ' Mzs0u[_(sgZumjPt0.4?<@daxR=-/3|awEpa>87ft/|dF>6R_Jd997#ZV)H#sJO');
define('NONCE_SALT', '^jQEsyJ>cv>I}_1:Up62 2aj|}D2(`H!{&x7->bNR2,}-`=NY|sXMnldj2Wi]Q3V');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'net_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

