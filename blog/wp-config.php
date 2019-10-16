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
define('DB_NAME', 'wp_install_1');

/** MySQL database username */
define('DB_USER', 'michellesolchung');

/** MySQL database password */
define('DB_PASSWORD', 'Greatghosts1292.');

/** MySQL hostname */
define('DB_HOST', 'michellesolchungcom.ipagemysql.com');

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
define('AUTH_KEY',         '*i5gW9tV(Mvb1/qu#,#L/tLwf;f_dOAfi,R5>^tq_rD2Os~:Kr~w3dg/}Vb%~,bg');
define('SECURE_AUTH_KEY',  '/k0 <|IcqSC}vt[Fb}41L,W|]ooh(UnLL2MBI:g/O}9CraWe-(Y n-fy%t-$;aOl');
define('LOGGED_IN_KEY',    ',Qe56}E^<dQD,&83_1G7Y0Y!,ZZ)nnCEh3)=wKV`5Fgc]l,oduX4X_43Hr#yL-<>');
define('NONCE_KEY',        'VMgjF,RO4)/%,GYexoYfxln^Gji n1L-^[h,OQMiOJYqPV+-rM{ZWYmZu#i]B|&7');
define('AUTH_SALT',        '78dOtiYiTx[*Jm*45{#W6u$dPAgtDt?dorA~,ITuc}6jPcj[Hn_vF<1S1w)R}>z7');
define('SECURE_AUTH_SALT', '/ORtV?5:7x:,Pny)eC[Og|x1^ !>X@TdR|I?@OQ<nh<8yZ`QqwAPq?/P=S:]lKe7');
define('LOGGED_IN_SALT',   'o(/1sH/w4+UR(w3:CJAXjdO=vn[G1tbJ[kUqC{h#;k#UO9?Q~XJ2i9uZs`W!w27I');
define('NONCE_SALT',       'nG=C{|5[NCo|)a7iw>i@VS[^@2fu58-3YqRm/LKRm9MN2U=~bNcHjVQvHu@x-/+R');

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
