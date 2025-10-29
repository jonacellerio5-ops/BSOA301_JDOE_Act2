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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_act2' );

/** Database username */
define( 'DB_USER', 'BSOA' );

/** Database password */
define( 'DB_PASSWORD', 'aMDry3Mu0c7cWU4h' );

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
define( 'AUTH_KEY',         'W5q!]>n+2.%%6T-{VM[Lai)aA[ATy|v cTdl(Bd;(H=&Jvg~1Lk:V[emf^$*EjYk' );
define( 'SECURE_AUTH_KEY',  '}jW=;pl!Suffj<aD%.I$l_Zz{DO(;U-V5,C_c1l+ch4!HKo)~WZ)si~1SDCcE7]a' );
define( 'LOGGED_IN_KEY',    '^:JU9a3]o7?4hRN%#JIx,o+RrV/Ggz+&+1lRW77=bfa9Oh|~n){eO:[C6O-%(`2#' );
define( 'NONCE_KEY',        'vEb2mE9Z8}=AlY]*ddL&5n1zi20HI2,df[,wJSgDw_+RW:/d*:D:OG2u=43fZKdR' );
define( 'AUTH_SALT',        'KCUerxJ}st[3JL!lI%#6d_o?}yiAK%rl#``68r)O}OL5w@8kWN*S7tK?Lo(00Lxi' );
define( 'SECURE_AUTH_SALT', 'jGh(O`j9[zQc2a30hs+V}JzDQon#:Z&:e;;d;@X^DumiYc^E .R+#@u-lbXqhAWS' );
define( 'LOGGED_IN_SALT',   'Z#`)}NuY5xr,>%1ZJn_tGFIjqn=2.M7<xE.p9*R/HY[&g{QOmkq^K%25C.!W_]VR' );
define( 'NONCE_SALT',       '-3LA_@!aD1]Bb)_Pt;E#)6`7~==-P}a53e=vN|lWuLU3L8{GM6iA$QOD`qc5]OB3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
