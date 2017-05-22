<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'proyecto_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '4spr0mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h.)Mphr3YyyXzzaA(.~]QBc1xp2R79@c;=O&?8rEd++d!gvJAY2XSGD&``QFw.TN');
define('SECURE_AUTH_KEY',  'E3$`Wg$a@133?w! f{9]^&T~@bHz~?ocs<[w(SRzg]=ytc[)_03w#,9YvYV,n);@');
define('LOGGED_IN_KEY',    '8C=ify3U)B92zv*qXarJ<j78zVsAng^~a2YMtUA_**9X4#X&O%~@jLW0._BD+DQ_');
define('NONCE_KEY',        '<ti[2~G; 2!;OU8!yT>_i)&qC:JJt8n Zsp{YD)jAy=G}Of(a?h,JlOa#Oj^l~_u');
define('AUTH_SALT',        '8eGZJ$<;sSnFudV`z_3jwk!tB;v1C48[ovexTjBLzfHN6^jA&&Jsal0k<Uy^tc{&');
define('SECURE_AUTH_SALT', 'ST,sOSeC$0Z+]S6tA2U_=gM+ZuewquYVdR!!:;xT-X2m3]7~AgHcH7ef=*$p`=dy');
define('LOGGED_IN_SALT',   'p;_EHmc}fFZ,41gDG]Tq89nR2-+Y7;[I.J~k# #]>?yZ=VaRJ :9h?G/Ri[|U]oi');
define('NONCE_SALT',       '_Wfad~XTrQWzP*l+Obn(&]>jk3Tz51MJi1sXIg.UBx+!*Od`Vj1,]HcGgZ!M^_3C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'p1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
