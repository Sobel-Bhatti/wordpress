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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'W[Tc<^hk4%c!%+xd#%H,l}bcE6-dds3(K6IOo)B}Ue+1@]u8-^.&6Nw5N,|5pH>)' );
define( 'SECURE_AUTH_KEY',  'JMVn}QszRi~hHBgt]p@#U=*~g;/_(b|BYl*0_B]f4]~6g-{/,l,_3L,`QI#Gfrfw' );
define( 'LOGGED_IN_KEY',    'IjO?}RnnZa**>;oX]6u9JoMO;A3^ acLa+U&Se9D#mZ`|n3y;dGx^QU md?HJX{a' );
define( 'NONCE_KEY',        'j@sTOb|POOU`=K]a,MiGBr9T*nV*5=eGqRq}R-m/fVU|:ac4X,se&j1{+*FnA<!p' );
define( 'AUTH_SALT',        '&cNMY6~Ge0cdWY3=]la>~$bJmAgw,Y|JKezL6lHoW!EC*-dD/pnqT:qsneJ}vuo9' );
define( 'SECURE_AUTH_SALT', '1EaH^<k3Btc8Q%SZ-STmiT[.&5:,K bZf]0%MYgMF;]R)k>n#we(eZ/W};bNu_!#' );
define( 'LOGGED_IN_SALT',   'H0#pb|xxSNgq,2^n7^Ik AJc|MG alp[SsBP=q{C9h]=Hm`DE9&R%UgZT3v/2:|?' );
define( 'NONCE_SALT',       ':DyVsrL-KHX>PO;qk5fq^EV}+w-yiQ6yVlCxUwx^2@C<u-s&VNKQK8HLi&wAe9pj' );

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
