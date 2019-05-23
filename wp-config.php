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
define( 'DB_NAME', $_SERVER['WORDPRESS_DB_NAME'] );

/** MySQL database username */
define( 'DB_USER', $_SERVER['WORDPRESS_DB_USER'] );

/** MySQL database password */
define( 'DB_PASSWORD', $_SERVER['WORDPRESS_DB_PASSWORD'] );

/** MySQL hostname */
define( 'DB_HOST', $_SERVER['WORDPRESS_DB_HOST'] );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%<%v=^KKg,~^{PJ|+V_~$7F5<-1%wja7$!b,pt)tGm!k#Tgok#mf?37|p,A*[w!n');
define('SECURE_AUTH_KEY',  'RZhIxh?eyxH$|0{|[+N?F=H^EVh?77I(fx3jQ 6c(W1EtTDlq1,YUXlq i%<=)AM');
define('LOGGED_IN_KEY',    'PPLtkj[>F0NA~.X;+EGxn|8_J$eB^Lq0L>BB4.#OfITU%dj$?kQ;e.RZka1&b2l{');
define('NONCE_KEY',        '~lOs/3K* W=  vUDN=/Xn*OXcvThZJyCPMON4;!/)4;WZlg)KDM^z4$E8agPBXq9');
define('AUTH_SALT',        'r|=VhJ6Dk?dq__9_#0UG<q5<SJ3)t~wgA.939C1xfMJ+_b8Ki_LW@n7<uU,Q(#Em');
define('SECURE_AUTH_SALT', 'A.(A7RQh0On9@tGx>Ne |cll^|sk m661gf|d)||:-XV }@`Xt~HVS@a{:uG,(WS');
define('LOGGED_IN_SALT',   'Ren~.M+G%;Y43QUk9Z[*{F>{aE8OQAS+ ?P!14h]bIW]r>j-8+Z=+yZP;|0Vt3eG');
define('NONCE_SALT',       '/C8M+#@EN=hx+#I3|DrpsCmte^SKn)Nh(!Bc>U|mCD[+vJO6s![`B.zjWqV=-1e`');

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
define( 'WP_DEBUG', $_SERVER['WORDPRESS_DEBUG'] );

/* That's all, stop editing! Happy publishing. */

define( 'WP_CONTENT_DIR', preg_replace('/wordpress/', 'web', ABSPATH) . 'wp-content' );
define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
