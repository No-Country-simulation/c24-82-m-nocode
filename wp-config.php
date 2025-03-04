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
define( 'DB_NAME', 'WaiterClick' );

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
define( 'AUTH_KEY',         'c@B}>OOO$@OR|bg!0X/D!?@$HatAo.G[2*qCB+qdx3MBuX3Sc*#Vcp0ieEJW4<hI' );
define( 'SECURE_AUTH_KEY',  'o=cho8!.j2{KfoARVmRB|%,;?SEHY%uHTnR#=zxM>[={]2rE2AnZ/%{=6CC!$WEl' );
define( 'LOGGED_IN_KEY',    '8~kg*>1M0NFc}>/[y-p8vM-7B}dkSF8d[sbsg:s]Q4kbA5_4lKqwKha^=S-I*q<b' );
define( 'NONCE_KEY',        '_Dpe1<*JgPUf%x9 SaS>[b)3aq*5=amHWhA@v&tKMJ)q($RXmbmDsM 3-1JOq_=~' );
define( 'AUTH_SALT',        'j#$p*,}WpGo}qfI{^0}3D-u. YU(&8E8omS1FX^{W~vX/CvG$[cetK{0;&`q4BMU' );
define( 'SECURE_AUTH_SALT', '[y#%.8& X]jC{]g_Sm4rV0g5cKh2oQ&ipa40W?wpB>xdq4Jgc_HTJ~|*$pJ#GKd@' );
define( 'LOGGED_IN_SALT',   '*+*7us{-C-vuz|8CjkHI~:Qp)95mOq&VVdEvybT 7ody{6lOM-x7%Jx{|IIA?C.!' );
define( 'NONCE_SALT',       'twN$(&m|Z~@Yj=)su(m+|tuoLX]+`/NC |[)Etj]f.p+*=P^;*{Upn^Ky>Z*+NqR' );

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
