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
define('DB_NAME', 'semana12_exp2');

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
define('AUTH_KEY',         'CTI~})6tHz9d{Ak1nGNFSR=.m<<~}=5`fsO2#qyZ 7+hyCTN;xTnPKmYTCbzZ5Yr');
define('SECURE_AUTH_KEY',  ':,JX6.WO1;%{Vl4(s~{k<LrFZzm8ed|H9WT;F_%U:]+S74BrZ<5UT-V:r;WlhsDV');
define('LOGGED_IN_KEY',    'Y<SK4+mr@3GbUd528g2w)-l0:fQp;e)LMfC:C4`s]Golned}NMQ[+.A:R^C15uj^');
define('NONCE_KEY',        '|xWce Y{stw?ZBQSG4e?:HZ5+{7pX>qTKfgYQ-O}&5Tub@U[DttyQw5nKb_$A^<0');
define('AUTH_SALT',        'Hu6_b;(0dM+FL(4JF_RVV D~~[f.6<jML#Q0(Sy14JTjq:ugD7N}k6g=H% V]^8]');
define('SECURE_AUTH_SALT', 'Au+LJ-)y>m:A~33!UmrE^I!w3zq.klOU.-Hmx0FsXx#IoW9G,Q;[S$PPVTGNk&JH');
define('LOGGED_IN_SALT',   '5Y?^UJ}uI>?u=2|2Dd#yd.4~1Et8>Cl%Xo.;:F.=U1^DCHei0,^8#P4=tNk7+RIB');
define('NONCE_SALT',       '$Y,Oz]UN|4kR<xmzdGb$J]Vyd1Y^+Tm--XNAY4_~f0@tsz7bc=W|FM$hp0bC14!E');

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
