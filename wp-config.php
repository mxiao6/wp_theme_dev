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
define('DB_NAME', 'wp_gantry');

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
define('AUTH_KEY',         'eU|XpJ@y)F},lQ^@Iidj]o)pYh6/CLUt }-Uol67u5]Pc{eq)g9c>x$h}kg1{`,j');
define('SECURE_AUTH_KEY',  'vyy>`aWA6.5qTd6b 60Kdw2d1V<_!9gul6aEqWMMTDfz%+t;oQpi$*TRAKgUcR#6');
define('LOGGED_IN_KEY',    'S4XG-Y?(-wQ#*U|~~,8aIAf0xrmE9Cxm8 @iah|JoYSGVl{81>J=b  _!%cnN!9H');
define('NONCE_KEY',        '-*q-g.-=,m4Seq2|866*?Nr!f;A#QUGi{TB%EI=H)8rIN[kkM+#c+~XltTfK>bL#');
define('AUTH_SALT',        'Qdt}UTLog%69[zdOR6wI0y~}o#,E+7D/!i9q$3k`,1/!6^{%QFX~s^<`-F`xzp`K');
define('SECURE_AUTH_SALT', 'kinAOl|*)%;mJ6cqKo/{v4BKL5l^.nbsw-Io6CNG<SaYwe<2`D 5ifTJ6bzBuFsM');
define('LOGGED_IN_SALT',   '29U`D{:rsvhIi,M1HGJ@N_qZwd$Blv.l7ESb[Vgn+a(F<Y<JU2uReb-IKy1;<9x{');
define('NONCE_SALT',       'u$1jm?;GSoKk[CiPqblZte#o=YqM]N$GYKnLOA-c#kC[=3itt|JzUI3G2e.eLY&H');

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
