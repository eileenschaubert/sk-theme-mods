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
define('DB_NAME', 'crushit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',6u1dFvL)uCXDdGRN6Ua{lCN!C-ulIh>x<?c53s!>YsY?:9,`@aMz:Bs=a Yl[Nr');
define('SECURE_AUTH_KEY',  ' /,BfeE$5PR-DmL_vPN8Bo+v#4!~=bTV& c7[|*Kt_R+t>;/fc-/5,).[Ys6g~U@');
define('LOGGED_IN_KEY',    'sINN`Zl+_+](}<{dE?Pla>o?m9JJ/DunL&{[S,<ls?<}(E|u1JT-6rW0jw,TiZ=n');
define('NONCE_KEY',        '/iV^;$@WLY%>3yoNas4&SSEU@4@b>/SG)w@7NT2>eB`F1GqrkV5g;2zzsthI9k0|');
define('AUTH_SALT',        '|/d.i7y,)oy%~a5,%KO )?VcFOHwE|YGX}1:LKEyZtGXowkV?Hnd#cz_Vh9#P,qk');
define('SECURE_AUTH_SALT', '$hZRi7-96/]SMWK`/71{q$FzWXJtp09<Gx6_.z)YsA|+Xlg<c5IAZCeWEi%RtFyU');
define('LOGGED_IN_SALT',   'eO[o_@P%2.zb.NKcPdpJRVC1P>yPG[oe1<x7[42cT6pW=s^NZ&M~vw*sPnXY6nGM');
define('NONCE_SALT',       '^^dWOohR4gZjsS82AC2L))XNw`v#}]_3K+b2G::$8W_D}-Gefj@Cb6iDv)54nfQE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
