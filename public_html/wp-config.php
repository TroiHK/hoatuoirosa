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

umask( 0022 );

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_hoatuoirosa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'At_&>Q5Li.@+O8^%m`[f=&1Fu`i<qbogg -rKm..>8%h!u HiVnB*+Jr=&kFyn$K' );
define( 'SECURE_AUTH_KEY',  'RS^%#x]GbuLfgl}oNr5fu(UkK(_9-+_S).]~^t<|emMHm/a{bQUy,rLXk$6W?vB1' );
define( 'LOGGED_IN_KEY',    'YWAx0_p@E[`SIB.w+nl.Flb%b+Ug??)[;HgA^JDjosZPdY4NJ=y3gf L$5`K|wY8' );
define( 'NONCE_KEY',        '/iG.CUICA8:UJZ-vRh5iDCz%Z432Jydj]cy0wNox@6lj5+LSX&3 oclXtJPXA5&j' );
define( 'AUTH_SALT',        '_9+twFrQ4f(,9hU(d!&l?Y|}7OpdvroJ8JxqMMW5i}EkI=T,Y@YW{&Fn7[0wl|j,' );
define( 'SECURE_AUTH_SALT', '($SwEZjeTkZx4G9<HNf[|C(2u`c!wh{}h*p3{7V=6E|]L,zWT!2NnrsS)CeWWtCp' );
define( 'LOGGED_IN_SALT',   '>,^2X}~h8XXHBc*JPqcOpD}2S(uknvK{%m0KTPF(I%eQ=4YQg!a44f;qz`/dN:)k' );
define( 'NONCE_SALT',       '1&HeMa`L`bd^(,Dq!+SrW<+>dx)frpk*K5_^=2-xt1Q$]YpFQ^!^Wj*Y1}~pwM`v' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprosa_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
