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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '*uWjw9~`k&=]3-SI}qOfA.r5MpDA2fy43}:Q1pokN#}.RB!/ZrzkR*KH<Tkee,g?');
define('SECURE_AUTH_KEY',  'R[sMI*~Yd(3X)VL!JS:MLLot.(JUX>*ZQ>.`]DmbM>4>PJ#Z-+d34}ASn T+V5l[');
define('LOGGED_IN_KEY',    '3yVyAn[aRQW;T4BkjyOw-n&>.Wufz$VRy ,TSuUv3kMR;/}n1eQJPLSZ`z[HGx*=');
define('NONCE_KEY',        'r8jB>z1GMt!u?%+PNgoJ e+{DC*d}OmJMeH-nXWEiq!*TImhq^n$JjDY.:p28,sr');
define('AUTH_SALT',        'wjk BOe)/GzP[.vg>JI$](Evot-oa,pAFx}m?D.L#eB}An8&bGu:_OntQk~^6ddz');
define('SECURE_AUTH_SALT', '@x!&6x?/1Xm8k?aSL}TqjQ;Zp{ r1.g`f>bud`FO<wI?N?oRiZ%zOf4?/y>I Aq{');
define('LOGGED_IN_SALT',   '4nIsxY.qL0o%2$1ONJS%kjOyw*}>h6AiSF.c4.``RW;f#YYA`f?KK$1N(MZQ*s#E');
define('NONCE_SALT',       '#<b]1}uQn?9(!`k/jr_6M0e_l9Uc>`sESv26P1OUPn0_pq; nU?xq]1FQsdxu:Fp');

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
