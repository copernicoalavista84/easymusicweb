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
define( 'DB_NAME', 'jlmangasinformativo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0qNx&I3#yobjo88gQ8q=9Na|N{5j.$NWk8$Yjnj^RE[=4*/Ao3osxZ8-T0/^I}zq' );
define( 'SECURE_AUTH_KEY',  '>&1b}$u}=|!~%>:>40lz5:+J^ 3@k2&T*OvG$9;7+E?<vt?4+tUklE1U>cIih7k$' );
define( 'LOGGED_IN_KEY',    '^5O@$oGz,v.iAd@3Fr5fNi%D#!rN2rYO2moz 26u%NS^,b>@,W==n]4a[Abs^|qF' );
define( 'NONCE_KEY',        'DI^X<MA),rLTTmIl.d#R}Ht]6(M/GypRAC7ntRW-X4B2%!_MUQXP8R6%Z66V*lnP' );
define( 'AUTH_SALT',        'v]`~bF{[/,{3d/d(b1j0%fPamKa~sFlm9>}b!R=-EnoQsD-e`m3!Ckjpol_6/!d>' );
define( 'SECURE_AUTH_SALT', 'E/-yeXMU>tU4]}-2Ivc2AD>u=D~fn`nVN-l|7!*;,h7;e0A+{r$!7Lo@!jE[}.63' );
define( 'LOGGED_IN_SALT',   'Mc~KELa0:7,W]!&RZ#1)W(:!fj=qb6e!$}T]uE0 gbh,Mp/3FMlb)@S._2$W!_wr' );
define( 'NONCE_SALT',       'lXgk=W;,J-ng@*n4@jP5|eN%{3cSq!Wz]@?MfO-|;X,Ng]+143Y:@Zpq~Qgbng?)' );

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

