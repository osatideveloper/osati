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
define('DB_NAME', 'osati_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Safety1st');

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
define('AUTH_KEY',         '2P,rXN~`d||es3Vgq9@<KPN.eb< Ie3D|~CTF!<Qd6xW6-+B$N:!bkU~`&7=3t8t');
define('SECURE_AUTH_KEY',  'r01N]<lifEvw_~;}|e11|c#Tnc&L|61`C^GM,G*EK_*8MDMn};j}$<*7Aj:%M4-?');
define('LOGGED_IN_KEY',    'Y0~@-| q|l9:%l/#HWbfk&ej>hLJpf2DM4m86n7zDdnRQi-n7}Dt;:8bG LY>0LL');
define('NONCE_KEY',        '9Y2#b#6g0k0ISLK.B8:$x9sN!JN7/E`-XgP/Bb#!}|k]6NS&> -)AZI@5F|+`&J-');
define('AUTH_SALT',        '!/MVO&#{U@Aye3]VLf1C85sS#:2-BKSU16:Qc}r^R)S!xdB|_ok?Q&A|W5twB5Yj');
define('SECURE_AUTH_SALT', 'Tv`Y0h;Dpw>x9khZAPX_Rxw)wNnQ!K/%V9%Y#>C>:YTDU+JOrw-44D/*$Y8+6D+~');
define('LOGGED_IN_SALT',   'fxZv|9Pm5*tB/;97noN{osxf#56ZPD@R_&~H<_(mh7Pu~l$)j[i_wa2=*16)hFu5');
define('NONCE_SALT',       '6j;J-;]+_>|q/%^+ekrW>JlRl}gI:CGNe}_X)Qk!km7z(e YLtd-K3|CVglzI`-l');

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
