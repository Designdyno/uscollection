<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uscollection' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zg`6_5p5H6> B(.2W|<F9g!G8<$r*tIP#h79Jd7q3ClhI&QrzsC-+{: bhh2C!3>' );
define( 'SECURE_AUTH_KEY',  '?7CSaEltdtZWffx,86?C $cnP+K_F%=u4kF|}yCjJ8plJ`a4b=V@xRdQ7zU%+Ek;' );
define( 'LOGGED_IN_KEY',    'o_JFV=*(zT{Ksy@$,e%W~1z^gr:9cnFs$-f6-mm!Q[T(~^+ys*CvM@?;hXz, $YW' );
define( 'NONCE_KEY',        'AhV<vf1L#b*5%!|N)?A!R=s^!nU##K:8JM=:.BA}U=..rrR}~E[fRo8UhCf,bYV1' );
define( 'AUTH_SALT',        '&b#Z*8XGW]p}gt8 JH,;Bn)x>t(^e($x^#[RbeN/8t@skgY4_(0$|+m?T1v.{/$2' );
define( 'SECURE_AUTH_SALT', 'O3pkAE#<?fwcIp}a2RT/Q{wA&@:B<lq1G@REEt)),N1/`Q1Bk4UY!cI#zC2,^SlI' );
define( 'LOGGED_IN_SALT',   'v S-T8r,|b^%E.sgSYgu5hDb1Z6R0L(^uj=pUtb|6>]vZsTNExCrGCzl&Cw56(^>' );
define( 'NONCE_SALT',       'eMU:}IDBA9TYc}J_1p(9r`)@QzVVC3k5|$8:8M`>QF/bU2m0)O`)0yx{x}A*?`#=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
