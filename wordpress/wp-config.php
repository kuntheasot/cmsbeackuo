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
define('DB_NAME', 'cms_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=Tp6^[tG7]mi1XsI(R3:$X}(oVULIU;PFMnNS~~Hg9wQB_/!e3B~1MF72QhZHUpR');
define('SECURE_AUTH_KEY',  'iNNa[.N[2oj :X?=09j^jN6tZJ6pz($^Kt~R0p?d(P<5{ZoxF35_*]t5r(32n;Z~');
define('LOGGED_IN_KEY',    'l|xGhmFB+]Ziag08.(Xl][[}V6ack#?KC><7=QokHYK$7(Kew@72tZxK0*({E7a ');
define('NONCE_KEY',        '004 RnVey|+<E51.W_%xrsG**H+W->E7fr{887}slYquH4Gvcbq# 3|uj4o_AXMd');
define('AUTH_SALT',        'i}WS1gf,TyW.X=M ?3J9y)!2 isQaakyl2-EP{.%F&k{l0~hMxZIvWk}*UA-urih');
define('SECURE_AUTH_SALT', 'CpH :xnak<H>`7LmEepV$:U--GW`NpnKD@xV70$@c%Unq7Ez3ZiffR]<b};^+1RQ');
define('LOGGED_IN_SALT',   '41Ix~WxfC[n;(yXw6,i=fXI$x)`L*SVBMONq0}5qraU4ZfAtv3T@hh?`$y!5x2@ ');
define('NONCE_SALT',       '.jn<$T*sR~>6:=*KJvnah=g[PkBR6Jc,//vj]J(-Kf+]7!ky2%>pU,c]v^qmn9RR');

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
