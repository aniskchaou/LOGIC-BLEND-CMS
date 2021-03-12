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
define( 'DB_NAME', 'logic-blend' );

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
define( 'AUTH_KEY',         'V]1Z;&>fzxxyN6xtz$x@lK/Y?~CEF14=]OCK-L~Kj6e~ad[sE+u0o|4$upe?u3t|' );
define( 'SECURE_AUTH_KEY',  'H4k=VBL<o@;4mMW!6Lv?XJ!SlQ3=87{?~s`g_$^t4)Hl;[Gjk}31G@a]uwo0#|)&' );
define( 'LOGGED_IN_KEY',    '{IB7S2m>u.B_UszN[m0<f{*4XXPC`Nvikd;knYe.Dfhys8LOtVM]VznWe12&;S3p' );
define( 'NONCE_KEY',        'v,<65Wkjo@s1|wDW%dik_L$bD,cY@=R(m-H}c;}`vD}A $|PZ8it^1X*)@0A9>jM' );
define( 'AUTH_SALT',        '| U-.U[h!9a2,>I0(Q>LB!hf->UOgc*}f%O;)57^S#q;N8~mlWw]D.6g=Q}ZE#.o' );
define( 'SECURE_AUTH_SALT', 'NX9lfK][d8OZp4[Q=h)hw1:W|$S3NV*Asr]Y=2pkTHA(VX^Q FyqMPv8+p(u)gFJ' );
define( 'LOGGED_IN_SALT',   '3IsDs8r~+2 ~amzRR5(C! `!vie:QqmJ`*nG_D_[i/2@Z-e`/f0`]u)^N%/s6pU2' );
define( 'NONCE_SALT',       'ky]T*Wsp[#:M85/IsYjkmkv`c+t;DmO_7u41-77UOBgGA9,1n;MuiD}Dm[NO(pMW' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
