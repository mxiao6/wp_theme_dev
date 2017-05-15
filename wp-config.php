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
define('AUTH_KEY',         '=Tuzdc$*AD$Fg<Ds7X-s{j!B(>rX>zc]H4M?|nZI(mU)|F/|{/oM`K{.lc?N`7r;');
define('SECURE_AUTH_KEY',  '{~cy{rx&C/(%7 WeF!7WzH=]Duza`WS:u34nHvqK_?(#;-&bNf#{f y@W.(_w`20');
define('LOGGED_IN_KEY',    '6tV>E{^~,,;k#uviGv]_Zvrt3[KnaQTHYg9k|CJ,xYj5J$-S&~sdcB]Y/Kc#Ji}^');
define('NONCE_KEY',        'W/Lm]L/e-Vp]/zcK9E ;lu`Ydg.fPZcG(|HZ^he.[=mnIThEd/?#*@m!Pe?QW3<B');
define('AUTH_SALT',        'v-lpx:{!-=#qA4n7nFE@Vw=PdE0+.w<zCNWd7b8$GwikTu:.p|6Hk=YW{M3i_=zk');
define('SECURE_AUTH_SALT', 'L$vBbDZ53[5rfG-V.UAq1[@DFzevWV}-T;{S;Ev6 UdMvV`l1g~e]tzF_!TUFEZ2');
define('LOGGED_IN_SALT',   'SLIkVj*0_m]rJV WNYv}htj);&=EgI%O1-<.5RZ4|CQ(Kmm2vsuFmY#^yWn~l-S#');
define('NONCE_SALT',       'K{s/X:wJ9.*y$g&H5z*g<uEz^M@7hvnCxJo1YbFWe<mD;3@ewHk!fLmX([j;2T.6');

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
