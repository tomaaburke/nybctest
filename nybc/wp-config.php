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
define('DB_NAME', 'nybctest');

/** MySQL database username */
define('DB_USER', 'nybctest');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         'uR>a~5)j#0=R=SQz3d8U|5yvdlz1OBg]KJmjKzSkWR){:d3W:~<_rB]UpJbTc!71');
define('SECURE_AUTH_KEY',  '[>7jF31| w3|9,V^jd~VKV5v2;Qsj?}e3e%Fu8)x9!|)`i#JPgzZ]Huz9X$!*Sf;');
define('LOGGED_IN_KEY',    '<.4dRn!`(Y1/HVCa_{tOoy6:>e%kvu8wsZ,+V}_]M79HT;QZgTLgC w3Eq<La@oR');
define('NONCE_KEY',        '/FZ3b6mrQU0#O=l*I/Y.-T+cJZlCMsIAi$!IT`m6|mLs_b5il.Fc<Y)m2QE;zvPO');
define('AUTH_SALT',        'YZu`l~<JtnMLrr#W/L-muymDmz;Q5XV&}4^&CTTBfRc4k|+-v+#M[=Fy/_XxcFTK');
define('SECURE_AUTH_SALT', '`3>w,|U7oQci%(+;k<LN9ydAY,-auhSbw+BbHaq<p+!:`cnQPX gG,_Zv%G*?t-:');
define('LOGGED_IN_SALT',   'EcD-{:+KJS4_xaD$O1Qh,c.z|oBI7gO~dvB:_fVcB(]77;)U]OsN(t(~j4r0 }ln');
define('NONCE_SALT',       'NUbqE;v9k4B{^^WD>QcGd@bjhxqG2;$mAwdNLgyhlY{oe8O14*6Q-=X2+nW|HMPE');

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

