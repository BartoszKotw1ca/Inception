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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_database' );
define( 'DB_USER', 'my_user' );
define( 'DB_PASSWORD', 'my_password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all s to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fS?#9TPFlO8kCQ<$(|/xJ=:b)X[Sw-tV--f=4VSD:hm{4~B|{-0BIBWCDK4xv+Os');
define('SECURE_AUTH_KEY',  '8L-d=NDj{|%+t$B6NlJXC%UUSzQ^+@LLA1P0Zm$n(*fu*cYG7EeHUWU{_VOzrHNZ');
define('LOGGED_IN_KEY',    'qp4%;LtZpOIV|@=9``52]qLH<GO!Za+?P v%h3 by4&zSGxX3ErSvAA3?$t}Xr2a');
define('NONCE_KEY',        'lC9<y%iI}_f|b$UJk+!c)|m7[O?zO(WBiC-_v+xCiyUx/->0{_(Yt,7k53R<T]w^');
define('AUTH_SALT',        'xNmM/|Ml.e}pCPG$n~gVKQ!!J<f:xwPrc|! 1Ac/|DRTpuL|Y<*|V+7taC^U 9wR');
define('SECURE_AUTH_SALT', '5aqQ<ANx!l>O6s_4-jt6$<.4R.{g>$P]7S7:&Sz*w!E=U|Wd-7KK~5-e1]q43-rD');
define('LOGGED_IN_SALT',   'x[lE_pN2Thb>*TzVky1x4FE>5S4mV1DPd-`@)[EtOj=h+VlB/!xx&]RiYBG^O>V$');
define('NONCE_SALT',       '%Ch[92C2mme3|/! H_W&aP6LRcfJ)!KxEUA.qt@{c{0HvK}]@,9GTj%!Ek?i2|jS');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
