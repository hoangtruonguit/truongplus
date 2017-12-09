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
define('DB_NAME', 'my-blog');

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
define('AUTH_KEY',         'EeW%1ApI!![fN*eR401QXmsu85Max#}_y2GTw:0mD%ceT>l9K}U+fC}y|:k8avLi');
define('SECURE_AUTH_KEY',  'Kot6<$v6!o.4SXad`6._p:G!e3G&_wd/H;U:Yrv_Y4wNmJ]/gPYlKW[87R@ksg.3');
define('LOGGED_IN_KEY',    '|_yvr[|wuBC>5)_4Z}Clt($}WZ.Vo<9vcF$#Y*dX{P|*.s+2|y/sO@OV3k6ZG)n+');
define('NONCE_KEY',        ' d0VLW?<W<y;sQmLwJZXrKQ4W[5HW;y[=]0f6S{cqWJrlz{#f.wGp,R.$.x?SM3t');
define('AUTH_SALT',        ',1Ng.zQI8KdddJisP+zvc`FMk?>^L!DscGoxfqF]B,C!sA_!ie.>b|SZMOu%z:y/');
define('SECURE_AUTH_SALT', '^TF1,+ZL4:v_$h00d>|Z)[&~i2.prNg*/aHv>3`Q!/p$3o8UrIS]<fgBt+X2@5@e');
define('LOGGED_IN_SALT',   '`:Fdi%f*{pAf^,f<1%)C[a)C)k}l7Vv<(tU2Ye@U=mM,NIjQO`,mh!nn%Rc=XgD&');
define('NONCE_SALT',       'tP_MjGnX!gR/z)B1vTPC@x0;}zSnJu MhsF3tz^KIi4S,,VsoPq6,+L}]gody-Ts');

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
