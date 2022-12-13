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
define( 'DB_NAME', 'speed_test_E12' );

/** MySQL database username */
define( 'DB_USER', 'webtech' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pa$$worD' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^#|7R4.H<Gu9lki|+0fANXl;:o<p~_N,9aNATNNn qtbw<sb?4u=7<BP&@A}V;8T' );
define( 'SECURE_AUTH_KEY',  'V.8ZZdYL%])^<#WdTiD HlJRAvLDD|^UF*`NRh*5`+(R.:iwDUAQJ?{q?<xk6YIv' );
define( 'LOGGED_IN_KEY',    's<8%6lfhCH>vESrb-8lWZM&@^-@RYyKcFfmbSyu:OZq8bc6~$z>EkM)_w{x1OiA7' );
define( 'NONCE_KEY',        'ShTWG#IVO})qNv)mB`l6-@eepkyVk!$8LWJ+oL-bPchjuf3SkGe;7WKaN6|CX/d3' );
define( 'AUTH_SALT',        'Q<-Co|jIV5-BT8Q}{U?L72nB6Q6r=2(l%0g88y+wnji1fVWrN b^b}Z`~seI?q#B' );
define( 'SECURE_AUTH_SALT', '+&z!s)P5.uiT5SPrH.AbJZAE# jD]a]MLr#yHb^vE8@bX]vH2*R|JN[9#[$aEmV;' );
define( 'LOGGED_IN_SALT',   ' TmKiQ]2Ii.fP-DSY`6#(foF(z/ 2%NFbz33D$$5NvS,$;GcmvYLppv OFDH:Snp' );
define( 'NONCE_SALT',       '/o6rlrbVMhtrt}>l}iNIeR3|ACeMh*B*AZ*ggnm[jG2`!rB}e/rCv`aww4BPZ(I?' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
