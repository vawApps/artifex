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
define( 'DB_NAME', 'artifex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')bc^ e61O !@XQ3kWJw]pduW3f;_$VYOK_gB<}cVV_93y@5sw*d^Be?#AcyuhW8?' );
define( 'SECURE_AUTH_KEY',  '>[R;{YOY-x9O9,S>vh$lNr;CEU5OZ<McK728MS+19AU.N9D!kmPRkD! /NnKs)4e' );
define( 'LOGGED_IN_KEY',    '9D4&v0^4bjZzzVuQ0?BCb5*M;&*r:S2w@6rg9#%)W^UOrX)qI11pCs/(H:O^1s%!' );
define( 'NONCE_KEY',        '_Xpe.C9y6(sill, =6?g{cp5-vDh(nQF>:GcHG~XdOGJBmbm.+|kUd$-A;I&{as_' );
define( 'AUTH_SALT',        '%:Vf<jw#C6@,y}MC-VMz>3uH=ON>o_vTI :?+3S yH~mE~dYo}7HFoU!0YVC^{K$' );
define( 'SECURE_AUTH_SALT', 'ctP-6.A/Q{W<Ja@<_o}?yL>.6tX<JX(ETacSJ3*7(!<7ohwm1.@O^O/8Fxa0~ }p' );
define( 'LOGGED_IN_SALT',   '/N<_CCZ|3+dr,UW<]D;&???J*$6:Wjz]C#=WB}h<tkaQEzbI H>r ?+|(s]*&~&P' );
define( 'NONCE_SALT',       'j7GG~%!a.MK&T)3K?9YB1X<:?y)[=d>7!aiV,oPJu|B)7;vU>5ycX-SqB?06.ydF' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
