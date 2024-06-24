<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y*(Vs@0R&fcP2%0g #=>f}beuCtxs(iq@^:mV5@23E)[,EU=1tC;Y<p++E2`l9%Y' );
define( 'SECURE_AUTH_KEY',  '1)e?;_~rP&m_w.yFBRS`,LL=x[N~: #+kNSH(EKAY3Y6 fltK~YNb55+=[8x*#AD' );
define( 'LOGGED_IN_KEY',    'IWTxCd5rW4nW,hnT4yDb)oyq~y/z=@kw9gK6B}EJ:PWVq^:T1fE?&hQBUQOZ|?tB' );
define( 'NONCE_KEY',        '6Y#9 rBY!{P[>x8:ghQ)49JeyOA^G6x++A+vXVzCV=!nAW!PmJDHc+,(`L>eD%=E' );
define( 'AUTH_SALT',        'K85Z_4oP(yTForWJOZH~s10VK^n)w}}ChV#}2P|H5+$&pk53x&_[/FbaX(s^?l{q' );
define( 'SECURE_AUTH_SALT', 'fQJ:/]:^$c;`BhG!]tZ$Id^`+4VJdAB91M <@7;eO$ }|E4igb9bugyMqFMGC/Z*' );
define( 'LOGGED_IN_SALT',   ':i?^*R:|-.F^lj#J;B?l{ ^>Hl-.dn4U4c!Hf4lD*c9P%w 1XVZ8E58|5k/u;AFD' );
define( 'NONCE_SALT',       '(t4Y9//#<)4U^e7yxEY+Oq<MKf`&pbnG]%As9zl8iJvb>pM=kd^}:)3t`aNMsRKo' );

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
