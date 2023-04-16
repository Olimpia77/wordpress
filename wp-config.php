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
define( 'DB_NAME', 'CMS' );

/** Database username */
define( 'DB_USER', 'Olimpia' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         '-Ru8;2<>.S9-V^w`yJ]%Ff]G4mL`Xqt[YumG9-t_w&x)Yh{n$*.[Ci`H*iZ2dxRW' );
define( 'SECURE_AUTH_KEY',  '5YBokCq&w()2#FZA?+OGJj.t1ha3pX! [CAibXW0YO<nf*8<CSijGVyjer,!C`r0' );
define( 'LOGGED_IN_KEY',    'U*g6s~Ij-u;[2B>+{YMpRvjY8Lv[|MSx[~@@<*~NW6+K- yN/U`ji>5&LFNae`V;' );
define( 'NONCE_KEY',        '[nuz^XMzyEqrqJOk{qsw3x,xFI(A6YBhaGL-<WPFl]L6gh5T3J8~5TyY5CflEJ@H' );
define( 'AUTH_SALT',        'v*U-x<pQ$&B?6PA?EnIDIqO8cs39p|B*E.{&4H5N *`e_yya>{+7Rr8aC.ec6-lY' );
define( 'SECURE_AUTH_SALT', 'y0C4kj&O0MgUm/ck1jzo>j>`2,FbJ3`^E |Q$,4jhB*v:Aht<+rSJG5)UQ8?$Qu!' );
define( 'LOGGED_IN_SALT',   '?#O[FUt&-?A9x[p]nszfT(L1L?{XSY=vmcf3UT{yHrZoHI7~)K68=EyBHq<C]&yx' );
define( 'NONCE_SALT',       '&azJE,.I,tf>ioksU#S!>Cg42ckax XDPDd@<>ZRC*E;X^A=3@+{9;uoGOhy9&oj' );

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
