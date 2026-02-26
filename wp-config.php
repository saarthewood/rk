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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saar' );

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
define( 'AUTH_KEY',         'H!XggcC`4EdUlu,}.*e%1!(x_,hX@:*Qn!I2z]^nqb4k:(7*jAA`&+$,2p0f> |V' );
define( 'SECURE_AUTH_KEY',  '9Fq!|ZuuH?l?x2LQy$4e,e=aaiI~XI-@Qd7%&#GKFnv7pHB#|y{P!jOjQvgYZq,[' );
define( 'LOGGED_IN_KEY',    'n%$-_JS+@),+vEMc=Q3vxjT{o,9/FVP]n=f6ens,~:T?FAny6AHZq}M_x0+ ?*7E' );
define( 'NONCE_KEY',        't1SRsH~t+KMFf-b^[fJGGRN?^Y8i%F(>53E JPbHZTZxqRm_M<l8*Vv?abe/Z!HF' );
define( 'AUTH_SALT',        '&HT!d-O>b(,Ev7Q^XZ~xvEKw>L2BDA+NZG/wV 8!7r&M:_)ueEa~_VKH@[?w` |>' );
define( 'SECURE_AUTH_SALT', 'eQA=ks&pk>Sd/uOyle^w0)2puF&=2CaO=7em|-=$$CW4wl/<.cf)M>3 cW,:czbH' );
define( 'LOGGED_IN_SALT',   'y=L3m_Jkdt %8` 0V,0M=bXpVgww_&qC*|Z;7.R$Db%9V_vH/L6DUqXRF2:AZ XT' );
define( 'NONCE_SALT',       'Z0pRA?vVtGReYP*zq[Us%ux*rP9j8E{eS=o$[AB;hvMu0wu7wTA3AKcTnot+CWP|' );

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
