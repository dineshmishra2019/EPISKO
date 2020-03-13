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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tt1epik_wp' );

/** MySQL database username */
define( 'DB_USER', 'tt1epik_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MDLffNdv72JO' );

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
define( 'AUTH_KEY',          'dxk5EJL%s3]}~cO%]$qf9%oFN/]edD{zi#o`7qa.(77BXGf2b*=PVa B0R)ew|$=' );
define( 'SECURE_AUTH_KEY',   '%LX)]!_Fo;E]&%?nr4c;*L3G2*d:L[&$NAe-*]|h} )$/-yk;DvEv+EO<[*;&?iX' );
define( 'LOGGED_IN_KEY',     'G(%c2=HMv9IhsO.C&-W+#.|+T.}Fze$:*KZ7Y%AYYYn<K|Z8fT84ktZ!n}|/Ch=D' );
define( 'NONCE_KEY',         '_zw3Axnd LN|ZT#4jZ#lz~Zd3WA9*8b%&wXH3brG2(TcXxi`rYn/0/;-N(+i2jVh' );
define( 'AUTH_SALT',         '*sNYue-R#7(wEl79`,Ai@4H%S=E-{L)$F,l PY;2DAY/;A|JaUY:r%4).1]Jlt}>' );
define( 'SECURE_AUTH_SALT',  '}T.dc3]~52I6pMLBWZX]TE0yJ9%j$)Ed{CqiQ{_!SuN$k,Z6n^5Z^[3exhx-Ty%7' );
define( 'LOGGED_IN_SALT',    'kdI_$YG; mu `zl^sC:s1{Eq`R9=T<+tT*7Tm|+&GO&)S^76I[! _1l3/<>;M-~_' );
define( 'NONCE_SALT',        '=m.[;7(-Tn>tUrz7.8#N-cvUJ]mg<3<(&|HL8=A2,*H`pC3[O}M&cjZPVG|2<.Y3' );
define( 'WP_CACHE_KEY_SALT', 'I49<SmOyf2<+@;Nv_ =0FVzDWnGA{Fyn/0V,2s*}lW.d3.A=nsU8KxhQe1(qzn-0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
